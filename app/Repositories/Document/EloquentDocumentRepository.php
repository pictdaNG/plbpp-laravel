<?php
namespace App\Repositories\Document;
use App\Repositories\Document\DocumentContract;
use App\Document;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Filesystem\Filesystem;

class EloquentDocumentRepository implements DocumentContract {
    public function create($request) {
        $doc = new Document();
        $url = null;
            $file = $request->document_url;
            $filenamewithoutext = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename = $filenamewithoutext.'_'.time().'.'.$extension;
            $directory = 'uploads/'.$filename;
            $uploaded = Storage::disk('s3')->put( $directory,  file_get_contents($file) , 'public');
            if($uploaded) {
                $url = Storage::disk('s3')->url($filename);
                $doc->document_url = $url;
            }

        $doc->name = $request->name;
        $doc->visibility = $request->visibility;
        $name_slug = preg_replace('/\s+/', '-', $request->name);
        $doc->slug = strtolower($name_slug. '-'.rand());
        $doc->save();
        return $doc;
    }

    public function getAll() {
        return Document::latest()->paginate(20);
    }
}
