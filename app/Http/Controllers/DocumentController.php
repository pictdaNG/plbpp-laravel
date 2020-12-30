<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Validator;
>>>>>>> b8724452b6a3c8b7a2d46606d0345395c5b028b6
use App\Repositories\Document\DocumentContract;
use Sentinel;

class DocumentController extends Controller
{
    protected $repo;
    public function __construct(DocumentContract $documentContract) {
        $this->repo = $documentContract;
    }
<<<<<<< HEAD
    
    public function index()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $documents = $this->repo->getAll();
        return view('document.index')->with('documents', $documents);
    }
    
    public function create()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        return view('document.create');
    }
    
    public function store(Request $request)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $this->validate($request, [
            'name' => 'required',
            'document_url' => 'required'
        ]);

        $document = $this->repo->create($request);
        if($document) {
            return redirect()->route('admin.document.index')->with('success', 'Document uploaded successfully');
        }else {
            return redirect()->back()->withInput()->with('error', 'Fail to upload Document... Please try again');
        }
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        //
    }
    
    public function update(Request $request, $id)
    {
        //
    }
    
    public function delete($id)
    {
        //
=======

    public function index(){
      if(!Sentinel::check()){
          return redirect()->route('auth.login.get');
      }

      $documents = $this->repo->getAll();
      return view('document.index')->with('documents', $documents);
    }

    public function create(){
      if(!Sentinel::check()){
        return redirect()->route('auth.login.get');
      }
      return view('document.create');
    }

    public function store(Request $request){
      if(!Sentinel::check()){
        return redirect()->route('auth.login.get');
      }

      $validator = Validator::make($request->all(), [
        'name' => 'required',
        'document_url' => 'required|mimes:pdf,txt,text|max:1024'
      ]);

      if($validator->fails()) {
        $res = $validator->errors()->first();
        toastr()->error("Attention, $res");
        return redirect()->back();
      }

      $document = $this->repo->create($request);
      if($document) {
        toastr()->success("Succes, Document uploaded successfully");
        return redirect()->route('admin.document.index');
      }else {
        toastr()->error("Error, Fail to upload Document... Please try again");
        return redirect()->back()->withInput();
      }
    }

    public function show($id){
        //
    }

    public function edit($id){
        //
    }

    public function update(Request $request, $id){
        //
    }

    public function delete($id){

>>>>>>> b8724452b6a3c8b7a2d46606d0345395c5b028b6
    }
}
