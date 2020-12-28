<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Document\DocumentContract;
use Sentinel;

class DocumentController extends Controller
{
    protected $repo;
    public function __construct(DocumentContract $documentContract) {
        $this->repo = $documentContract;
    }

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
            'document_url' => 'required|mimes:pdf,txt,text|max:1024'
        ]);

        $document = $this->repo->create($request);
        dd($document);
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
    }
}
