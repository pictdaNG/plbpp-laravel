@extends('layouts.master')

@section('title')
<<<<<<< HEAD
  Mandate | Welcome to Plateau State Bureau of Public procurement
@endsection

@section('mandate')
    uk-active
@endsection

@section('content')
        <div class="dContainer">
    
            <div class="about">
                <div class="info">
                    <h3 class="title">News <span class="theme-color uk-text-bold"> Detail</span></h3>
                    <!-- <p>
                        According to the Law, the activities of the Plateau State Bureau of Public procurement include:
                    </p> -->
                    
                    <div style="margin-top:20px;">
                    <h3>{{ $post->title }}</h3>
                    <img src="{{ $post->image_url }}" alt="" width="600px">
                    {!! $post->content !!}
                    </div>
                </div>
            </div>
    
        </div>
=======
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
>>>>>>> b8724452b6a3c8b7a2d46606d0345395c5b028b6
@endsection