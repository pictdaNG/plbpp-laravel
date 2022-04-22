<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="./assets/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="{{ URL::asset('/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('./assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">

    @yield('styles')
    <style type="text/css">
        @media (min-width: 1200px){
            .container, .wrapper {
                max-width: 86%;
            }
        }
    </style>
  </head>
<body>

  <div class="wrapper">
    <nav id="topbar">
      <div class="nav-container">
        <ul>
          <li><a href="https://web.facebook.com/Plateaubpp/"><img src="{{ URL::asset('./assets/img/facebook.png') }}" alt=""></a></li>
          <li><a href="https://twitter.com/plateaubpp"><img src="{{ URL::asset('./assets/img/twitter.png') }}" alt=""></a></li>
          <li><a href="https://instagram.com/Plateaubpp/"><img src="{{ URL::asset('./assets/img/instagram.png') }}" alt=""></a></li>
        </ul>
        <div class="currentDate">
          <span><img src="{{ URL::asset('./assets/img/calender.png') }}" alt=""></span>
          <span class="date"></span>
        </div>
      </div>
    </nav>
    <div uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
      <nav class="uk-navbar-container" uk-navbar style="position: relative; z-index: 980;">
        <div class="main-container">
        <div class="uk-navbar-left">
          <a class="uk-navbar-item uk-logo uk-flex uk-light uk-flex-middle" href="{{ route('home') }}">
            <img class="logo uk-margin-small-right" src="{{ URL::asset('./assets/img/logo.png') }}" alt="">
            <h4 class="uk-margin-remove">Plateau State Bureau of<br>Public Procurement</h4>
          </a>
        </div>
        <div class="uk-navbar-right">
          <ul class="uk-navbar-nav">
            <li class="@yield('home')"><a href="{{ route('home') }}" >Home</a></li>
            <li class="@yield('about')"><a href="{{ route('about') }}">About</a></li>
            <li class="@yield('mandate')"><a href="{{ route('mandate') }}">Mandate</a></li>
            <li class="@yield('procurement')"><a href="{{ route('procurement') }}">Open Contracting</a></li>
            <li class="@yield('procurements')">
                <a href="http://portal.plateaustatebpp.com/login">e-Procurement</a>
            </li>
            <li class="@yield('news')"><a href="{{ route('news') }}">News</a></li>
            <li class="@yield('documents')"><a href="{{ route('documents') }}">Documents</a></li>
            <li class="@yield('faq')"><a href="{{ route('faq') }}">FAQ</a></li>
            <li class="@yield('organogram')"><a href="{{ route('organogram') }}">Organogram</a></li>
            <li class="@yield('contact')"><a href="{{ route('open-contract-bids') }}" target="_blank">Advertisement</a></li>
          </ul>
        </div>
        </div>
      </nav>
    </div>
    <section class="body">
      @yield('content')
    </section>
    <footer>
        <div class="footer-nav">
            <img class="map" src="{{ URL::asset('./assets/img/PLBPP.png') }}" alt="">
        </div>
        <div class="footer-nav">
            <h5 class="footer-title">LINKS</h5>
            <ul class="uk-list uk-list-bullet">
                <li><a href="{{ route('documents') }}">Download</a></li>
                <li><a href="{{ route('mandate') }}">Functions And Powers</a></li>
                <!-- <li>PLPPA</li> -->
                <li><a href="{{ route('mandate') }}">Mandate</a></li>
                <li><a href="{{ route('news') }}">News and Event</a></li>
                <li><a href="{{ URL::asset('./assets/docs/Plateau-BPP-14-Procurement-Procedures-Manual.pdf') }}">Procurement Guidelines</a></li>
                <li><a href="{{ URL::asset('./assets/docs/Plateau-BPP-13-Procurement-Regulations.pdf') }}">Procurement Law</a></li>
                <li><a href="{{ route('documents') }}">Standard Bid Documents</a></li>
                {{-- <li class="@yield('contact')"><a href="http://15.188.63.156/login" target="_blank">Portal</a></li> --}}
            </ul>
        </div>
        <div class="footer-nav">
            <h5 class="footer-title uk-text-center">CONTACT US</h5>
            <div class="uk-child-width-1-2@m" uk-grid>
                <div class="uk-margin-remove">
                    SOCIAL MEDIA
                    <p class="uk-margin-small-top">
                        <a href="https://twitter.com/plateaubpp" style="color: #fff">
                            Twitter: @plateaubpp
                        </a>
                     </p>
                    <p class="uk-margin-small-top">
                        <a href="https://web.facebook.com/Plateaubpp/" style="color: #fff">
                            Facebook: @plateaubpp
                        </a>
                    </p>
                    <p class="uk-margin-small-top">
                        <a href="https://instagram.com/Plateaubpp/" style="color: #fff">
                            Instagram: @plateaustatebpp
                        </a>
                    </p>
                </div>
                <div class="uk-margin-remove">
                    ADDRESS:
                    <p class="uk-margin-small-top"> bereau of public procurement,  plateau state. No. 4 Miskom Buenyen st. Rayfield Jos</p>
                    PHONE:
                    <p class="uk-margin-small-top">
                        08033672724
                    </p>
                    <p class="uk-margin-small-top">
                        070377055115
                    </p>
                </div>
            </div>
        </div>
        <div class="subfooter">
            <span>Copyright &copy; All right reserved. | Developed by PLBPP IT Department </span>
        </div>
    </footer>
</div>
<div id="sidenav" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar uk-flex uk-flex-column">

        <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
            <li class="@yield('home')"><a href="{{ route('home') }}" >Home</a></li>
            <li class="@yield('about')"><a href="{{ route('about') }}">About</a></li>
            <li class="@yield('mandate')"><a href="{{ route('mandate') }}">Mandate</a></li>
            {{-- <li class="@yield('procurement')"><a href="http://portal.plateaustatebpp.com/login">E-Procurement</a></li> --}}
            <li class="@yield('procurement')"><a href="{{ route('procurement') }}">E-Procurement</a></li>
            <li class="@yield('news')"><a href="{{ route('news') }}">News</a></li>
            <li class="@yield('documents')"><a href="{{ route('documents') }}">Documents</a></li>
            <li class="@yield('faq')"><a href="{{ route('faq') }}">FAQ</a></li>
            <li class="@yield('organogram')"><a href="{{ route('organogram') }}">Organogram</a></li>
            <!-- <li class="@yield('contact')"><a href="{{ route('contact') }}">Contact</a></li> -->
        </ul>

    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#example').DataTable();
		});
	</script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.uikit.min.js"></script>
@yield('scripts')
</body>
</html>
