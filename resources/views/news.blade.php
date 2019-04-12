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
                    <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-small" data-uk-grid>
                        <div class="uk-tile uk-tile-secondary uk-width-1-1@m uk-padding-small">
                            <p class="uk-h4 uk-text-center">3 Day Training Workshop on the impact of public procurement Law/ Regulations in Plateau State(Creating Awareness) For the Board Members of the Bureau and Procurement Officers in the Minstries, Departments and Agencies (MDAs)</p>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-flex uk-flex-center uk-flex-middle">
                                <img src="assets/img/gallery/news1.JPG" alt="News 1"/>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-flex uk-flex-center uk-flex-middle">
                                <img src="./assets/img/gallery/news2.JPG" alt="Sample image one"/>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-flex uk-flex-center uk-flex-middle">
                                <img src="./assets/img/gallery/news3.JPG" alt="Sample image one"/>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-flex uk-flex-center uk-flex-middle">
                                <img src="./assets/img/gallery/news4.JPG" alt="Sample image one"/>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-flex uk-flex-center uk-flex-middle">
                                <img src="./assets/img/gallery/news5.JPG" alt="Sample image one"/>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-flex uk-flex-center uk-flex-middle">
                                <img src="./assets/img/gallery/news6.JPG" alt="Sample image one"/>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-flex uk-flex-center uk-flex-middle">
                                <img src="./assets/img/gallery/news7.JPG" alt="Sample image one"/>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-flex uk-flex-center uk-flex-middle">
                                <img src="./assets/img/gallery/news8.JPG" alt="Sample image one"/>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-flex uk-flex-center uk-flex-middle">
                                <img src="./assets/img/gallery/news9.JPG" alt="Sample image one"/>
                            </div>
                        </div>
                    </div>

                    <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-small" data-uk-grid style="margin-bottom: 40px;">
                        <div class="uk-tile uk-tile-secondary uk-width-1-1@m uk-padding-small">
                            <p class="uk-h4 uk-text-center">PLATEAU STATE BEREAU OF PUPLIC PROCUREMENT RECEIVES AWARD FOR OUTSTANDING PERFORMANCE</p>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-flex uk-flex-center uk-flex-middle">
                                <a href="{{ route('awards') }}">
                                <img src="{{ URL::asset('./assets/img/news/award-1.jpeg') }}" alt="" style="width: 500px; height: 180px;" />
                            </a>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-flex uk-flex-center uk-flex-middle">
                                <a href="{{ route('awards') }}">
                                <img src="{{ URL::asset('./assets/img/news/award-2.jpeg') }}" alt="" style="width: 500px; height: 180px;" />
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-flex uk-flex-center uk-flex-middle">
                                <a href="{{ route('awards') }}">
                                <img src="{{ URL::asset('./assets/img/news/award-3.jpeg') }}" alt="" style="width: 500px; height: 180px;" />
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-flex uk-flex-center uk-flex-middle">
                                <a href="{{ route('awards') }}">
                                    <img src="{{ URL::asset('./assets/img/news/award-4.jpeg') }}" alt=""  style="width: 500px; height: 180px;"/>
                                </a>
                                
                            </div>
                        </div>                       
                        
                    </div>
                </div>
            </div>
    
        </div>
    @endsection