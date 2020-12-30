<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Ocds\OcdsContract;
use App\Repositories\Blog\BlogContract;
<<<<<<< HEAD
use App\Repositories\Document\DocumentContract;
=======
>>>>>>> b8724452b6a3c8b7a2d46606d0345395c5b028b6

class PagesController extends Controller {

  protected $ocdsRepo;
  protected $blogRepo;

<<<<<<< HEAD
  public function __construct(OcdsContract $ocdsContract, BlogContract $blogContract, DocumentContract $documentContract) {
    $this->ocdsRepo = $ocdsContract;
    $this->blogRepo = $blogContract;
    $this->documentRepo = $documentContract;
=======
  public function __construct(OcdsContract $ocdsContract, BlogContract $blogContract) {
    $this->ocdsRepo = $ocdsContract;
    $this->blogRepo = $blogContract;
>>>>>>> b8724452b6a3c8b7a2d46606d0345395c5b028b6
  }

  public function home() {
    return view('welcome');
  }

  public function about() {
    return view('about');
  }

  public function mandate() {
    return view('mandate');
  }

  public function news() {
    $posts = $this->blogRepo->findAll();
    return view('news')->with('posts', $posts);
  }
  
  public function newsDetail($slug) {
    $post = $this->blogRepo->findBySlug($slug);
    return view('news-details')->with('post', $post);
  }

  public function eProcurement() {
    $ocds = $this->ocdsRepo->findAll();
    // dd($ocds);
    return view('procurement');
  }

  public function documents() {
     $documents = $this->documentRepo->getAll();
    return view('documents')->with('documents', $documents);
  }

  public function faq() {
    return view('faq');
  }

  public function organogram() {
    return view('organogram');
  }

  public function award() {
    return view('newsEvents.award');
  }

  public function contact() {
    return view('contact');
  }

}
