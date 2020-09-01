<?php
namespace App\Repositories\Blog;
interface BlogContract {
    public function create($request);
    public function findAll();
    public function findBySlug($slug);
}
