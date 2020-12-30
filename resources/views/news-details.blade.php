@extends('layouts.master')

@section('title')
  Welcome to Plateau State Bureau of Public Procurement | {{ $post->title }}
@endsection

@section('news')
  uk-active
@endsection

@section('content')
  <div class="dContainer">
    <div class="about">
      <div class="info">
        <h3 class="title">News <span class="theme-color uk-text-bold"> Detail</span></h3>
        <div style="margin-top:20px;">
          <h3>{{ $post->title }}</h3>
          <img src="{{ $post->image_url }}" alt="" width="600px">
          {!! $post->content !!}
        </div>
      </div>
    </div>   
  </div>
@endsection