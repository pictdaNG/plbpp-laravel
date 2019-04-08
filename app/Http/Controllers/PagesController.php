<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
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
    return view('procurement');
  }
}
