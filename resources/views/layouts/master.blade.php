<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="./assets/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/app.css">
  </head>
<body>

  <div class="wrapper">
    <nav id="topbar">
      <div class="nav-container">
        <ul>
          <li><a href="https://web.facebook.com/Plateaubpp/"><img src="./assets/img/facebook.png" alt=""></a></li>
          <li><a href="https://twitter.com/plateaubpp"><img src="./assets/img/twitter.png" alt=""></a></li>
          <li><a href="#"><img src="./assets/img/instagram.png" alt=""></a></li>
        </ul>
        <div class="currentDate">
          <span><img src="./assets/img/calender.png" alt=""></span>
          <span class="date"></span>
        </div>
      </div>
    </nav>    
    <div uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
      <nav class="uk-navbar-container" uk-navbar style="position: relative; z-index: 980;">
        <div class="main-container">
        <div class="uk-navbar-left">
          <a class="uk-navbar-item uk-logo uk-flex uk-light uk-flex-middle" href="{{ route('home') }}">
            <img class="logo uk-margin-small-right" src="./assets/img/logo.png" alt="">
            <h4 class="uk-margin-remove">Plateau State Bureau of<br> Public procurement</h4>
          </a>
          <ul class="uk-navbar-nav">
          </ul>
        </div>
        <div class="uk-navbar-right">
          <ul class="uk-navbar-nav">
            <li class="@yield('home')"><a href="{{ route('home') }}" >Home</a></li>
            <li class="@yield('about')"><a href="{{ route('about') }}">About</a></li>
            <li class="@yield('mandate')"><a href="{{ route('mandate') }}">Mandate</a></li>
            <li class="@yield('procurement')"><a href="{{ route('procurement') }}">E-Procurement</a></li>
            <li class="@yield('news')"><a href="{{ route('news') }}">News</a></li>
            <li class="@yield('documents')"><a href="{{ route('documents') }}">Documents</a></li>
            <li class="@yield('faq')"><a href="{{ route('faq') }}">FAQ</a></li>
            <li class="@yield('organogram')"><a href="{{ route('organogram') }}">Organogram</a></li>
            <!-- <li ><a href="#">More</a></li>-->
            <!-- <li ><a href="#">Contact</a></li>-->
          </ul>
          <a class="uk-navbar-toggle" uk-navbar-toggle-icon  uk-toggle="target: #sidenav" href="#"></a>
        </div>
        </div>
      </nav>
    </div>
    <section class="body">
      @yield('content')
    </section>
    <footer>
        <div class="footer-nav">
            <img class="map" src="./assets/img/PLPPA.png" alt="">
        </div>
        <div class="footer-nav">
            <h5 class="footer-title">CATEGORIES</h5>
            <ul class="uk-list uk-list-bullet">
                <li>Download</li>
                <li>Functions And Powers</li>
                <li>PLPPA</li>
                <li>Mandate</li>
                <li>News and Event</li>
                <li>Procurement Guidelines</li>
                <li>Procurement Law</li>
                <li>Standard Bid Documents</li>
                <li>Tender</li>
            </ul>
        </div>
        <div class="footer-nav">
            <h5 class="footer-title">LATEST NEWS</h5>
            <div class="uk-flex img-links">
                <a href="#" class="img-link">
                    <img src="./assets/img/img-1.jpg" alt="">
                </a>
                <a href="#" class="img-link">
                    <img src="./assets/img/img-3.jpg" alt="">
                </a>
                <a href="#" class="img-link">
                    <img src="./assets/img/event-2.png" alt="">
                </a>
                <a href="#" class="img-link">
                    <img src="./assets/img/event-1.png" alt="">
                </a>
            </div>
        </div>
        <div class="subfooter">
            <span>Copyright &copy; All right reserved. | Designed by PLPPA IT Department </span>
        </div>
    </footer>  </div>
<div id="sidenav" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar uk-flex uk-flex-column">

        <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
            <li class="uk-active"><a href="{{ route('home') }}" >Home</a></li>
            <li ><a href="{{ route('about') }}">About</a></li>
            <li ><a href="{{ route('mandate') }}">Mandate</a></li>
            <li ><a href="{{ route('procurement') }}">E-Procurement</a></li>
            <li ><a href="{{ route('news') }}">News</a></li>
        </ul>

    </div>
</div>
<script src="assets/js/app.js"></script>
</body>
</html>