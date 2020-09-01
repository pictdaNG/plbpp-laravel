@extends('layouts.master')

@section('title')
  News &amp; Events | Welcome to Plateau State Bureau of Public procurement
@endsection

@section('news')
    uk-active
@endsection

@section('content')
        <div class="dContainer">
    
            <div class="about">
                <div class="info">
                    <h3 class="title">NEWS & <span class="theme-color uk-text-bold">EVENTS</span></h3>
                    <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-small" style="margin-bottom:30px" uk-grid >
                        @foreach($posts as $post)
                            <a href="{{ route('news.details', $post->slug) }}">
                                <div class="uk-inline">
                                    <img src="{{ $post->image_url }}" alt="">
                                    <div class="uk-overlay uk-overlay-default uk-position-bottom">
                                        <p>{{ $post->title }}</p>
                                    </div>
                                </div>
                            </a>    
                        @endforeach                   
                        
                    </div>
                </div>
            </div>
    
        </div>
    @endsection