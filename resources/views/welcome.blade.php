@extends('layouts.master')

@section('title')
  Home | Welcome to Plateau State Bureau of Public procurement
@endsection

@section('home')
    uk-active
@endsection

@section('content')
  <div class="dContainer">
            <div class="img-hover active-1">
                <div class="img-1 uk-inline-clip uk-transition-toggle" tabIndex="0">
                    <img src="./assets/img/img-1.jpg" alt="" />
                    <div class="overlay uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
                        <p class="uk-h4 uk-margin-remove">The Director General (Bldr. Peter Y. Dogo)</p>
                        <span class="uk-text-small">Tuesday, Mar 26, 2019 </span>
                    </div>
                </div>
                <div class="img-2 uk-inline-clip uk-transition-toggle" tabIndex="0">
                    <img src="./assets/img/img-2.jpg" alt="" />
                    <div class="overlay uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
                        <p class="uk-h4 uk-margin-remove">L-Director Finance & Supply,R-Director Admin,CENTRE-Director
                            General</p>
                        <span class="uk-text-small">Tuesday, Mar 26, 2019 </span>
                    </div>
                </div>
                <div class="img-3 uk-inline-clip uk-transition-toggle" tabIndex="0">
                    <img src="./assets/img/img-3.jpg" alt="" />
                    <div class="overlay uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
                        <p class="uk-h4 uk-margin-remove">Procurement Officers at a Training Wokrshop Held September 2017 </p>
                        <span class="uk-text-small">Tuesday, Mar 26, 2019 </span>
                    </div>
                </div>
            </div>
            <div class="uk-position-relative uk-visible-toggle" tabindex="-1"
                 uk-slideshow="min-height: 60; max-height: 60; autoplay: true">
                <div class="news">Latest News</div>
                <ul class="uk-slideshow-items">
                    <li>
                        <a href="#" class="p">Training workshop for Procurement Officers</a>
                    </li>
                    <li>
                        <a href="#" class="p">Are We alright Folks</a>
                    </li>
                    <li>
                        <a href="#" class="p">Breaking news, A Javascript bug killed a browser because a developer told it to console the bug
                            infinitely.</a>
                    </li>
                </ul>
            
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
            
            </div>        <div class="docs mt:20px">
                <div class="uk-flex uk-flex-between">
                    <h3 class="uk-margin-remove small-lh">
                        STANDARD <br>
                        <span class="bold-green">BID DOCUMENTS</span>
                    </h3>
                    <a href="{{ route('documents') }}" class="theme-color">VIEW ALL</a>
                </div>
                <div class="link-docs">
                    <div class="card-with-image">
                        <div>
                            <h4 class="small-lh">
                                9 ESSENTIAL STEPS IN<br><span class="smaller">PROCUREMENT</span>
                            </h4>
                            <a href="./assets/docs/Nine-Essential-Steps-in-Public-Procurement.pdf" class="p">READ MORE</a>
                        </div>
                        <img src="./assets/img/law.png" alt="">
                    </div>
                    <div class="card-with-image">
                        <div>
                            <h4 class="small-lh">
                                STANDARD BIDDING<br><span class="smaller"> DOCUMENTS GOODS</span>
                            </h4>
                            <a href="./assets/docs/Plateau-BPP-1-Standard-Bidding-Document-Goods-July-2017.pdf" class="p">READ MORE</a>
                        </div>
                        <img src="./assets/img/library.png" alt="">
                    </div>
                    <div class="card-with-image">
                        <div>
                            <h4 class="small-lh">
                                STANDARD BIDDING<br><span class="smaller"> DOCUMENTS LARGE WORKS</span>
                            </h4>
                            <a href="./assets/docs/Plateau-BPP-2-Standard-Bidding-Document-Large-Works-July-2017.pdf" class="p">READ MORE</a>
                        </div>
                        <img src="./assets/img/library.png" alt="">
                    </div>
                </div>
            </div>
            <div class="about mt:20px">
                <div class="info">
                    <h3 class="title">ABOUT <span class="theme-color uk-text-bold">PLBPP</span></h3>
    
                    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                        <div class="uk-card-media-left media uk-cover-container">
                            <img src="./assets/img/lally.png" alt="" />
                        </div>
                        <div class="uk-flex uk-flex-middle">
                            <div class="uk-card-body">
                                <h3>History</h3>
                                <p>The wind of change in public procurement that guarantees transparency, accountability, competition and cost effectiveness was imbibed by the Plateau State Government.</p>
                                <p> A Law that seeks to bring a reverse in Public procurement process was considered by the Plateau State House of assembly.</p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                        <div class="uk-flex-last@s media uk-card-media-right uk-cover-container">
                            <img src="./assets/img/outing.png" alt="" />
                        </div>
                        <div class="uk-flex uk-flex-middle">
                            <div class="uk-card-body">
                                <p>On December 17, 2015 a law was passed by the State Assembly as Plateau State Bureau of Public Procurement Bill. It was signed into Law by the Plateau state Governor, Rt. Hon. Simon Bako Lalong on the 1st February, 2016. Plateau State keyed in to the International best practice in public procurement.</p>
    
                                <p>Bldr. Peter Y. Dogo, the pioneer Director General was appointed by the Executive Governor and confirmed by the House of assembly on 14th February, 2017. This appointment and subsequent inauguration kick-started the activities of the Bureau of Public Procurement in Plateau State.</p>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('about') }}" class="btn">READ MORE</a>
                </div>
            </div>
            <div class="news-n-events mt:40px uk-child-width-1-3@m">
                <h3 class="title">NEWS & <span class="theme-color uk-text-bold">EVENTS</span></h3>
                <div class="card">
                    <div class="uk-card uk-card-default">
                        <div class="media uk-card-media-top">
                            <img src="./assets/img/event-1.png" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title uk-text-bold">Training workshop for Procurement Officers</h3>
                            <p>The Plateau State Public Sector Governance Reforms and Development Project in conjunction with Plateau State Bureau of Public Procurement organized training workshop for Procurement Officers and Accounting Officers of Ministries, Departments and Agencies of Government in September 2017.</p>
                        </div>
                        <div class="uk-card-footer">
                            <span class="uk-text-danger"><span uk-icon="icon: user"></span>ADMIN</span>
                            <span class="uk-text-danger">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                  xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                  id="Capa_1" x="0px" y="0px" width="20px" height="20px"
                                  viewBox="0 0 36.447 36.447"  xml:space="preserve">
                                <g>
                                  <g>
                                    <path d="M30.224,3.948h-1.098V2.75c0-1.517-1.197-2.75-2.67-2.75c-1.474,0-2.67,1.233-2.67,2.75v1.197h-2.74V2.75    c0-1.517-1.197-2.75-2.67-2.75c-1.473,0-2.67,1.233-2.67,2.75v1.197h-2.74V2.75c0-1.517-1.197-2.75-2.67-2.75    c-1.473,0-2.67,1.233-2.67,2.75v1.197H6.224c-2.343,0-4.25,1.907-4.25,4.25v24c0,2.343,1.907,4.25,4.25,4.25h24    c2.344,0,4.25-1.907,4.25-4.25v-24C34.474,5.855,32.567,3.948,30.224,3.948z M25.286,2.75c0-0.689,0.525-1.25,1.17-1.25    c0.646,0,1.17,0.561,1.17,1.25v4.896c0,0.689-0.524,1.25-1.17,1.25c-0.645,0-1.17-0.561-1.17-1.25V2.75z M17.206,2.75    c0-0.689,0.525-1.25,1.17-1.25s1.17,0.561,1.17,1.25v4.896c0,0.689-0.525,1.25-1.17,1.25s-1.17-0.561-1.17-1.25V2.75z M9.125,2.75    c0-0.689,0.525-1.25,1.17-1.25s1.17,0.561,1.17,1.25v4.896c0,0.689-0.525,1.25-1.17,1.25s-1.17-0.561-1.17-1.25V2.75z     M31.974,32.198c0,0.965-0.785,1.75-1.75,1.75h-24c-0.965,0-1.75-0.785-1.75-1.75v-22h27.5V32.198z"/>
                                    <rect x="6.724" y="14.626" width="4.595" height="4.089"/>
                                    <rect x="12.857" y="14.626" width="4.596" height="4.089"/>
                                    <rect x="18.995" y="14.626" width="4.595" height="4.089"/>
                                    <rect x="25.128" y="14.626" width="4.596" height="4.089"/>
                                    <rect x="6.724" y="20.084" width="4.595" height="4.086"/>
                                    <rect x="12.857" y="20.084" width="4.596" height="4.086"/>
                                    <rect x="18.995" y="20.084" width="4.595" height="4.086"/>
                                    <rect x="25.128" y="20.084" width="4.596" height="4.086"/>
                                    <rect x="6.724" y="25.54" width="4.595" height="4.086"/>
                                    <rect x="12.857" y="25.54" width="4.596" height="4.086"/>
                                    <rect x="18.995" y="25.54" width="4.595" height="4.086"/>
                                    <rect x="25.128" y="25.54" width="4.596" height="4.086"/>
                                  </g>
                                </g>
                                </svg>02/03/2019</span>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="uk-card uk-card-default">
                        <div class="media uk-card-media-top">
                            <img src="{{ URL::asset('./assets/img/news/award-3.jpeg') }}" alt="" style="width: 500px; height: 195px;" />
                        </div>
                        <div class="uk-card-body">
                            <a href="{{ route('awards') }}"><h3 class="uk-card-title uk-text-bold">Plateau State Bereau of Public Procurement Receives award for outstanding performance</h3></a>
                            
                            <p>Director general Plateau  State bureau of public procurement, has been described as an incentive figure in the Nigerian economic and health project of Plateau state Nigeria.</p>
                        </div>
                        <div class="uk-card-footer">
                            <span class="uk-text-danger"><span uk-icon="icon: user"></span>ADMIN</span>
                            <span class="uk-text-danger">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                  xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                  id="Capa_1" x="0px" y="0px" width="20px" height="20px"
                                  viewBox="0 0 36.447 36.447"  xml:space="preserve">
                                <g>
                                  <g>
                                    <path d="M30.224,3.948h-1.098V2.75c0-1.517-1.197-2.75-2.67-2.75c-1.474,0-2.67,1.233-2.67,2.75v1.197h-2.74V2.75    c0-1.517-1.197-2.75-2.67-2.75c-1.473,0-2.67,1.233-2.67,2.75v1.197h-2.74V2.75c0-1.517-1.197-2.75-2.67-2.75    c-1.473,0-2.67,1.233-2.67,2.75v1.197H6.224c-2.343,0-4.25,1.907-4.25,4.25v24c0,2.343,1.907,4.25,4.25,4.25h24    c2.344,0,4.25-1.907,4.25-4.25v-24C34.474,5.855,32.567,3.948,30.224,3.948z M25.286,2.75c0-0.689,0.525-1.25,1.17-1.25    c0.646,0,1.17,0.561,1.17,1.25v4.896c0,0.689-0.524,1.25-1.17,1.25c-0.645,0-1.17-0.561-1.17-1.25V2.75z M17.206,2.75    c0-0.689,0.525-1.25,1.17-1.25s1.17,0.561,1.17,1.25v4.896c0,0.689-0.525,1.25-1.17,1.25s-1.17-0.561-1.17-1.25V2.75z M9.125,2.75    c0-0.689,0.525-1.25,1.17-1.25s1.17,0.561,1.17,1.25v4.896c0,0.689-0.525,1.25-1.17,1.25s-1.17-0.561-1.17-1.25V2.75z     M31.974,32.198c0,0.965-0.785,1.75-1.75,1.75h-24c-0.965,0-1.75-0.785-1.75-1.75v-22h27.5V32.198z"/>
                                    <rect x="6.724" y="14.626" width="4.595" height="4.089"/>
                                    <rect x="12.857" y="14.626" width="4.596" height="4.089"/>
                                    <rect x="18.995" y="14.626" width="4.595" height="4.089"/>
                                    <rect x="25.128" y="14.626" width="4.596" height="4.089"/>
                                    <rect x="6.724" y="20.084" width="4.595" height="4.086"/>
                                    <rect x="12.857" y="20.084" width="4.596" height="4.086"/>
                                    <rect x="18.995" y="20.084" width="4.595" height="4.086"/>
                                    <rect x="25.128" y="20.084" width="4.596" height="4.086"/>
                                    <rect x="6.724" y="25.54" width="4.595" height="4.086"/>
                                    <rect x="12.857" y="25.54" width="4.596" height="4.086"/>
                                    <rect x="18.995" y="25.54" width="4.595" height="4.086"/>
                                    <rect x="25.128" y="25.54" width="4.596" height="4.086"/>
                                  </g>
                                </g>
                                </svg>02/03/2019</span>
                        </div>
                    </div>
                </div>

                <div class="card">
                    
                </div>
                <div class="uk-width-1-1@s uk-flex  uk-flex-center mt:40px">
                    <a href="{{ route('news') }}" class="btn">LOAD MORE</a>
                </div>
            </div>
        </div>    
@endsection