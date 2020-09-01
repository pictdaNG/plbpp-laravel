<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Ocds\OcdsContract;
use App\Repositories\Blog\BlogContract;

class PagesController extends Controller {

  protected $ocdsRepo;
  protected $blogRepo;

  public function __construct(OcdsContract $ocdsContract, BlogContract $blogContract) {
    $this->ocdsRepo = $ocdsContract;
    $this->blogRepo = $blogContract;
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
    return view('documents');
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
