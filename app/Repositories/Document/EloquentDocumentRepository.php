<?php
namespace App\Repositories\Document;
use App\Repositories\Document\DocumentContract;
use App\Document;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Filesystem\Filesystem;
>>>>>>> b8724452b6a3c8b7a2d46606d0345395c5b028b6

class EloquentDocumentRepository implements DocumentContract {
    public function create($request) {
        $doc = new Document();
<<<<<<< HEAD
        $doc->name = $request->name;
        $doc->document_url = $request->document_url;
        $doc->visibility = 1;
=======
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
>>>>>>> b8724452b6a3c8b7a2d46606d0345395c5b028b6
        $name_slug = preg_replace('/\s+/', '-', $request->name);
        $doc->slug = strtolower($name_slug. '-'.rand());
        $doc->save();
        return $doc;
    }

    public function getAll() {
        return Document::latest()->paginate(20);
    }
}
