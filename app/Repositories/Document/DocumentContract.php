<?php
namespace App\Repositories\Document;
interface DocumentContract {
    public function create($request);
    public function getAll();
}
