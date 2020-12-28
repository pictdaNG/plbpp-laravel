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
            //dd($directory);
            $uploaded = Storage::disk('s3')->put( $directory,  file_get_contents($file) , 'public');
            dd($uploaded);
            if($uploaded) {
                $url = Storage::disk('s3')->url($filename);
                $user = User::where('id', Auth::user()->id)->first();
                $user->profile_pic = $url;
                $user->save();
            }

        // $doc->name = $request->name;
        // $doc->document_url = $request->document_url;
        // $doc->visibility = $request->visibility;
        // $name_slug = preg_replace('/\s+/', '-', $request->name);
        // $doc->slug = strtolower($name_slug. '-'.rand());
        // $doc->save();
        return $doc;
    }

    public function getAll() {
        return Document::latest()->paginate(20);
    }
}
