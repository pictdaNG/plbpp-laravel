<?php

namespace App\Http\Controllers;

use Sentinel;
use App\Contractor;
use Illuminate\Http\Request;
use App\Repositories\Contractor\ContractorContract;
class ContractorController extends Controller {

  protected $repo;
  public function __construct(ContractorContract $contractorContract) {
    $this->repo = $contractorContract;
  }


  public function index() {
    if(!Sentinel::check()){
      return redirect()->route('auth.login.get');
    } else{
      $contractors = $this->repo->findAll();
      return view('contractor.index')->with('contractors', $contractors);
    }
  }


  public function create() {
    if(!Sentinel::check()){
      return redirect()->route('auth.login.get');
    } else{
      return view('contractor.create');
    }
  }


  public function store(Request $request) {
    try {
      $contractor = $this->repo->create($request);
      if($contractor->id) {
        toastr()->success("Contractor created successfully.", 'Success' );
        return redirect()->back();
      } else {
        toastr()->error("Failed to create Contractor.", 'Error' );
        return back()->withInput();
      }
    } catch (QueryException $e) {
      if($errorCode == 1062){
        toastr()->error("Failed to create Contractor.", 'Error' );
        return redirect()->back();
      }
    }
  }

  public function edit($id) {
    if(!Sentinel::check()){
      return redirect()->route('auth.login.get');
    } else{
      $contractor = $this->repo->findById($id);
      return view('contractor.edit')->with('contractor', $contractor);
    }
  }

  public function update(Request $request, $id) {
    if(!Sentinel::check()){
      return redirect()->route('auth.login.get');
    } else {
      try {
        $contractor = $this->repo->update($request, $id);
        if($contractor->id) {
          toastr()->success("$contractor->name updated successfully.", 'Success' );
          return redirect()->route('admin.contractor.index');
        } else {
          toastr()->error("Failed to update $contractor->name", 'Error' );
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
  }

  public function delete($id){
    if(!Sentinel::check()){
      return redirect()->route('auth.login.get');
    } else{
      if ($this->repo->remove($id)) {
        toastr()->success("Contractor deleted successfully", 'Success' );
        return redirect()->back();
        } else {
          toastr()->error("Failed to delete Contractor.", 'Error' );
        return redirect()->route('admin.contractor.index');
      }
    }
  }

  public function import() {
    return view('ocds.import');
  }


  public function importStore(Request $request) {

    $ocds = Excel::import(new OcdsCSVImport, request()->file('file'));
    return back();
  }
}
