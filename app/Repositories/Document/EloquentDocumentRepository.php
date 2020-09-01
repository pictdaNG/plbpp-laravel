<?php
namespace App\Repositories\Document;
use App\Repositories\Document\DocumentContract;
use App\Document;

class EloquentDocumentRepository implements DocumentContract {
    public function create($request) {
        $doc = new Document();
        $doc->name = $request->name;
        $doc->document_url = $request->document_url;
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
