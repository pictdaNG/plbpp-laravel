<?php

namespace App\Http\Controllers;

use Sentinel;
use App\Tender;
use Illuminate\Http\Request;
use App\Repositories\Tender\TenderContract;
use App\Repositories\MDA\MDAContract;
use App\Repositories\Contractor\ContractorContract;



class TenderController extends Controller{

  protected $repo;
  protected $mdaModel;
  protected $contractorModel;
  public function __construct(TenderContract $tenderContract,
          ContractorContract $contractorContract,
          MDAContract $mdaContract) {
          $this->repo = $tenderContract;
          $this->mdaModel = $mdaContract;
          $this->contractorModel = $contractorContract;
        }


  public function index() {
    if(!Sentinel::check()){
      return redirect()->route('auth.login.get');
    } else{
      $tenders = $this->repo->findAll();
      return view('tender.index')->with('tenders', $tenders);
    }
  }


  public function create() {
    if(!Sentinel::check()){
      return redirect()->route('auth.login.get');
    } else{
      $mdas = $this->mdaModel->findAll();
      $contractors = $this->contractorModel->findAll();
      return view('tender.create')
      ->with('contractors', $contractors)
      ->with('mdas', $mdas);
    }
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
    } else {
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
  }

  public function delete($id){
    if(!Sentinel::check()){
      return redirect()->route('auth.login.get');
    } else{
      if ($this->repo->remove($id)) {
        toastr()->success("Tender deleted successfully", 'Success' );
        return redirect()->back();
        } else {
          toastr()->error("Failed to delete tender.", 'Error' );
        return redirect()->route('admin.tender.index');
      }
    }
  }

  public function export() {
    return $this->repo->downloadJSONFile();
    //return redirect()->back();
  }
}
