<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewOcds;
use App\Imports\OcdsImport;
use Excel;
use App\Imports\NewOcdsImport;
use Sentinel;
use Illuminate\Support\Facades\Validator;
// use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Database\QueryException;

class NewOcdsController extends Controller
{
    public function getAll() {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        return NewOcds::paginate(50);
    }

    public function upload() {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        return view('ocds.upload');
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
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            if(Excel::import(new NewOcdsImport,request()->file('ocds_template'))) {
                $notification = array(
                    'message' => 'OCDS uploaded Successfully!',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
            }
        } catch (QueryException $e) {
            $notification = array(
                'message' => $e->getMessage(),
                'alert-type' => 'error'
            );
    
            return redirect()->back()->with($notification);
        }
    }

    public function destroy($ids)
    {
      return  NewOcds::destroy($ids->ids);
    }

}
