<?php

namespace App\Http\Controllers;

use Sentinel;
use App\Tender;
use Illuminate\Http\Request;
use App\Repositories\Tender\TenderContract;
use App\Repositories\Mda\MdaContract;
use App\Repositories\Contractor\ContractorContract;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use Excel;

class TenderController extends Controller{

	protected $repo;
	protected $mdaModel;
	protected $contractorModel;
	public function __construct(TenderContract $tenderContract,
		ContractorContract $contractorContract,
		MdaContract $mdaContract) {
		$this->repo = $tenderContract;
		$this->mdaModel = $mdaContract;
		$this->contractorModel = $contractorContract;
	}


	public function index() {
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
		} 
		$tenders = $this->repo->findAll();
		return view('tender.index')->with('tenders', $tenders);
	}


	public function create() {
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
		} 
		$mdas = $this->mdaModel->findAll();
		$contractors = $this->contractorModel->findAll();
		return view('tender.create')->with('contractors', $contractors)->with('mdas', $mdas);
	}


	public function store(Request $request) {
		try {
			$tender = $this->repo->create($request);
			if($tender->id) {
				toastr()->success("Tender created successfully.", 'Success' );
				return redirect()->back();
			} else {
				toastr()->error("Failed to create tender.", 'Error' );
				return back()->withInput();
			}
		} catch (QueryException $e) {
			if($errorCode == 1062){
				toastr()->error("Failed to create tender.", 'Error' );
				return redirect()->back();
			}
		}
	}

	public function bulkUpload(Request $request) {
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
		}

		// dd($request->all());

		$validator = Validator::make($request->all(), [
			'ocds_template' => 'required|max:50000|mimes:xlsx,doc,docx,ppt,pptx,ods,odt,odp'
		]);

		if ($validator->fails()) {
			toastr()->error("Error uploading OCDS", 'Error' );
			return redirect()->back()->withErrors($validator)->withInput();
		}

		try {
			if(Excel::import(new NewOcdsImport,request()->file('ocds_template'))) {
				$notification = array(
					'message' => 'OCDS uploaded Successfully!',
					'alert-type' => 'success'
				);
				toastr()->success("OCDS Uploaded successfully", 'Success' );
				return redirect()->back()->with($notification);
			}
		} catch (QueryException $e) {
			$notification = array(
				'message' => $e->getMessage(),
				'alert-type' => 'error'
			);
			toastr()->error("Something went wrong please try again", 'Error' );
			return redirect()->back()->with($notification);
		}
}

	public function edit($id) {
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
		} else{
			$tender = $this->repo->findById($id);
			$mdas = $this->mdaModel->findAll();
			$contractors = $this->contractorModel->findAll();
			return view('tender.edit')
			->with('tender', $tender)
			->with('contractors', $contractors)
			->with('mdas', $mdas);
		}
	}

	public function update(Request $request, $id) {
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
		}

		try {
			$tender = $this->repo->update($request, $id);
			if($tender->id) {
				toastr()->success("$tender->title updated successfully.", 'Success' );
				return redirect()->route('admin.tender.index');
			} else {
				toastr()->error("Failed to update $tender->title", 'Error' );
				return back()->withInput();
			}
		} catch (QueryException $e) {
			toastr()->error("Something went wrong please try again", 'Error' );
			$errorCode = $e->errorInfo[1];
			if($errorCode == 1062){
				return redirect()->back()->withInput()->with($error);
			}
		}
		
	}

	public function delete($id){
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
		} 
		if ($this->repo->remove($id)) {
			toastr()->success("Tender deleted successfully", 'Success' );
			return redirect()->back();
		} else {
			toastr()->error("Failed to delete tender.", 'Error' );
			return redirect()->route('admin.tender.index');
		}
		
	}

	public function export() {
		return $this->repo->downloadJSONFile();
		//return redirect()->back();
	}
}
