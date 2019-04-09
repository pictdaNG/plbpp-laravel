@extends('layouts.master')

@section('title')
  Organogram | Welcome to Plateau State Bureau of Public procurement
@endsection

@section('organogram')
    uk-active
@endsection

@section('content')  
  <div class="dContainer">
    <div class="uk-flex uk-flex-center">
      <h3 class="uk-margin-large-top uk-text-center small-lh">
        ORGANIZATIONAL STRUCTURE <br>
        <span class="bold-green">BUREAU OF PUBLIC PROCUREMENT
        PLATEAU STATE</span>
      </h3>
    </div>
    <div class="uk-flex uk-flex-center">
      <img class="organogram" src="./assets/img/BPP-ORGANOGRAM-(CURRENT).png" alt="">
    </div>
  </div>
@endsection