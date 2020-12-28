<?php

namespace App\Http\Controllers;

use Sentinel;
use App\Mda;
use Illuminate\Http\Request;
use App\Exports\StandardOcdsExport;
use App\Repositories\Mda\MdaContract;
use Illuminate\Support\Facades\Validator;


class MdaController extends Controller  {
  protected $repo;
  public function __construct(MdaContract $mdaContract) {
    $this->repo = $mdaContract;
  }


  public function index() {
    if(!Sentinel::check()){
      return redirect()->route('auth.login.get');
    } else{
      $mdas = $this->repo->findAll();
      return view('mda.index')->with('mdas', $mdas);
    }
  }


  public function create() {
    if(!Sentinel::check()){
      return redirect()->route('auth.login.get');
    } else{
      return view('mda.create');
    }
  }


  public function store(Request $request) {
    $validator = Validator::make($request->all(), [
      // Specify validation rules here
      //'email' => 'required|email|unique:users',
      'mda_code' => 'required|unique:mdas',
   ]);

  if($validator->fails()) {
      $res = $validator->errors()->first();
      toastr()->error("Attention, $res");
      return back();
  }
    try {
      $mda = $this->repo->create($request);
      if($mda->id) {
        toastr()->success("MDA created successfully.", 'Success' );
        return redirect()->back();
      } else {
        toastr()->error("Failed to create MDA.", 'Error' );
        return back()->withInput();
      }
    } catch (QueryException $e) {
      if($errorCode == 1062){
        toastr()->error("Failed to create MDA.", 'Error' );
        return redirect()->back();
      }
    }
  }

  public function edit($id) {
    if(!Sentinel::check()){
      return redirect()->route('auth.login.get');
    } else{
      $mda = $this->repo->findById($id);
      return view('mda.edit')->with('mda', $mda);
    }
  }

  public function update(Request $request, $id) {
    if(!Sentinel::check()){
      return redirect()->route('auth.login.get');
    } else {
      try {
        $mda = $this->repo->update($request, $id);
        $notification = array(
          'message' => "$mda->title MDA updated successfully",
          'alert-type' => 'success'
        );
        if($mda->id) {
          toastr()->success("$mda->title MDA updated successfully.", 'Success' );
          return redirect()->route('admin.contractor.index')->with($notification);
        } else {
          toastr()->error("Failed to update $mda->title MDA.", 'Error' );
          return back()->withInput();
        }
      } catch (QueryException $e) {
        toastr()->error("Something went wrong please try again", 'Error' );
        $errorCode = $e->errorInfo[1];
        if($errorCode == 1062){
          return redirect()->back()->withInput();
        }
      }
    }
  }

  public function delete($id){
    if(!Sentinel::check()){
      return redirect()->route('auth.login.get');
    } else{
      if ($this->repo->remove($id)) {
        toastr()->success("MDA deleted successfully", 'Success' );
        return redirect()->back();
        } else {
          toastr()->error("Failed to delete MDA.", 'Error' );
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
    //
}
