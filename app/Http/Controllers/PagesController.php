<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Ocds\OcdsContract;

class PagesController extends Controller {

  protected $ocdsRepo;

  public function __construct(OcdsContract $ocdsContract) {
    $this->ocdsRepo = $ocdsContract;
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
    return view('news');
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
