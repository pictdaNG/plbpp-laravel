<!DOCTYPE html>
<html>
  <head>
    <title>Admin Dashboard</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('./assets/admin/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('./assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('./assets/admin/bower_components/dropzone/dist/dropzone.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('./assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('./assets/admin/bower_components/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('./assets/admin/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('./assets/admin/bower_components/slick-carousel/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('./assets/admin/css/main.css?version=4.4.0') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
  </head>
  <body class="menu-position-side menu-side-left full-screen with-content-panel">
    <div class="all-wrapper with-side-panel solid-bg-all">
      <div class="layout-w">
        <!--------------------
        START - Mobile Menu
        -------------------->
        <div class="menu-mobile menu-activated-on-click color-scheme-dark">
          <div class="mm-logo-buttons-w">
            <a class="mm-logo" href="#">
              <img src="{{ URL::asset('./assets/admin/img/logo.png') }}">
              <span>PLBPP Admin</span>
            </a>
            <div class="mm-buttons">
              <div class="content-panel-open">
                <div class="os-icon os-icon-grid-circles"></div>
              </div>
              <div class="mobile-menu-trigger">
                <div class="os-icon os-icon-hamburger-menu-1"></div>
              </div>
            </div>
          </div>
          <div class="menu-and-user">
            <div class="logged-user-w">
              <div class="avatar-w">
                <img src="{{ Gravatar::src('Sentinel::getUser()->email', 200) }}">
              </div>
              <div class="logged-user-info-w">
                <div class="logged-user-name">
                  {{ Sentinel::getUser()->first_name }} {{Sentinel::getUser()->last_name}}
                </div>
                <div class="logged-user-role">
                  Administrator
                </div>
              </div>
            </div>            
          </div>
        </div>
        <!--------------------
        END - Mobile Menu
        -------------------->
        <!--------------------
        START - Main Menu
        -------------------->
        <div class="menu-w color-scheme-light color-style-transparent menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link">
          <div class="logo-w">
            <a class="logo" href="">
              <!-- <div class="logo-element"></div> -->
              <div class="logo-label">
                PLBPP Admin
              </div>
            </a>
          </div>
          <div class="logged-user-w avatar-inline">
            <div class="logged-user-i">
              <div class="avatar-w">
                <img src="{{ Gravatar::src('Sentinel::getUser()->email', 200) }}">
              </div>
              <div class="logged-user-info-w">
                <div class="logged-user-name">
                  {{ Sentinel::getUser()->first_name }} {{Sentinel::getUser()->last_name}}
                </div>
                <div class="logged-user-role">
                  Administrator
                </div>
              </div>
              <div class="logged-user-toggler-arrow">
                <div class="os-icon os-icon-chevron-down"></div>
              </div>
              <div class="logged-user-menu color-style-bright">
                <div class="logged-user-avatar-info">
                  <div class="avatar-w">
                    <img src="{{ Gravatar::src('Sentinel::getUser()->email', 200) }}">
                  </div>
                  <div class="logged-user-info-w">
                    <div class="logged-user-name">
                      {{ Sentinel::getUser()->first_name }} {{Sentinel::getUser()->last_name}}
                    </div>
                    <div class="logged-user-role">
                      Administrator
                    </div>
                  </div>
                </div>
                <div class="bg-icon">
                  <i class="os-icon os-icon-wallet-loaded"></i>
                </div>
                <ul>
                  <li>
                    <a href="{{ route('logout') }}"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          
          <h1 class="menu-page-header">
            Page Header
          </h1>
          <ul class="main-menu">
            <li class="sub-header">
              <span>Management</span>
            </li>
            <li class="selected">
              <a href="{{ route('admin.index') }}">
                <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>Dashboard</span>
              </a>
            </li>
            <li class=" has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-file-text"></div>
                </div>
                <span>OCDS</span>
              </a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  OCDS
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-file-text"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li>
                      <a href="{{ route('ocds.index') }}">All OCDS</a>
                    </li>
                    <li>
                      <a href="{{ route('ocds.year.create') }}">OCDS Year/Month</a>
                    </li>
                    <li>
                      <a href="{{ route('ocds.create') }}">Create OCDS</a>
                    </li>                    
                  </ul>
                </div>
              </div>
            </li>
            <li class="sub-header">
              <span>Content Management System</span>
            </li>
            <li class=" has-sub-menu">
              <a href="">
                <div class="icon-w">
                  <div class="os-icon os-icon-package"></div>
                </div>
                <span>News &amp; Events</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  CMS
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-package"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li>
                      <a href="#">All News &amp; Events</a>
                    </li>
                    <li>
                      <a href="#">Create News &amp; Event</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            
           
          </ul>
          
        </div>
        <!--------------------
        END - Main Menu
        -------------------->
        <div class="content-w">
          <!--------------------
          START - Top Bar
          -------------------->
          <div class="top-bar color-scheme-transparent">
            <!--------------------
            START - Top Menu Controls
            -------------------->
            <div class="top-menu-controls">
              {{-- <div class="element-search autosuggest-search-activator">
                <input placeholder="Start typing to search..." type="text">
              </div> --}}
              <!--------------------
              START - User avatar and menu in secondary top menu
              -------------------->
              <div class="logged-user-w">
                <div class="logged-user-i">
                  <div class="avatar-w">
                    <img src="{{ Gravatar::src('Sentinel::getUser()->email', 200) }}">
                  </div>
                  <div class="logged-user-menu color-style-bright">
                    <div class="logged-user-avatar-info">
                      <div class="avatar-w">
                        <!-- <img alt="" src="{{ URL::asset('./assets/admin/img/avatar1.jpg') }}"> -->
                        <img src="{{ Gravatar::src('Sentinel::getUser()->email', 200) }}">
                      </div>
                      <div class="logged-user-info-w">
                        <div class="logged-user-name">
                          {{ Sentinel::getUser()->first_name }} {{Sentinel::getUser()->last_name}}
                        </div>
                        <div class="logged-user-role">
                          Administrator
                        </div>
                      </div>
                    </div>
                    <div class="bg-icon">
                      <i class="os-icon os-icon-wallet-loaded"></i>
                    </div>
                    <ul>
                      <li>
                        <!-- <a href="#"><i class="os-icon os-icon-mail-01"></i><span>Profile Settings</span></a> -->
                      </li>
                      <li>
                        <!-- <a href="#"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a> -->
                      </li>
                      <li>
                        <a href="{{ route('logout') }}"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!--------------------
              END - User avatar and menu in secondary top menu
              -------------------->
            </div>
            <!--------------------
            END - Top Menu Controls
            -------------------->
          </div>
          <!--------------------
          END - Top Bar
          --------------------><!--------------------
          START - Breadcrumbs
          -------------------->
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="">Admin</a>
            </li>
            <li class="breadcrumb-item">
              <span>Dashboard</span>
            </li>
          </ul>
          <!--------------------
          END - Breadcrumbs
          -------------------->
          <div class="content-panel-toggler">
            <i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
          </div>
          {{-- <div class="content-i"> --}}
            {{-- <div class="content-box" style="padding: 0 !important"> --}}
              {{-- <div class="row"> --}}
                {{-- <div class="col-sm-12"> --}}
                  @yield('content')
                {{-- </div> --}}
              {{-- </div> --}}
              
            {{-- </div> --}}
          {{-- </div> --}}
        </div>
      </div>
      {{-- <div class="display-type"></div> --}}
    </div>
    <script src="{{ URL::asset('./assets/admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('./assets/admin/bower_components/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ URL::asset('./assets/admin/bower_components/moment/moment.js') }}"></script>
    <script src="{{ URL::asset('./assets/admin/bower_components/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ URL::asset('./assets/admin/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ URL::asset('./assets/admin/bower_components/jquery-bar-rating/dist/jquery.barrating.min.js') }}"></script>
    <script src="{{ URL::asset('./assets/admin/bower_components/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ URL::asset('./assets/admin/bower_components/bootstrap-validator/dist/validator.min.js') }}"></script>
    <script src="{{ URL::asset('./assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ URL::asset('./assets/admin/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ URL::asset('./assets/admin/bower_components/dropzone/dist/dropzone.js') }}"></script>
    <script src="{{ URL::asset('./assets/admin/bower_components/editable-table/mindmup-editabletable.js') }}"></script>
    <script src="{{ URL::asset('./assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('./assets/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('./assets/admin/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
    <script src="{{ URL::asset('./assets/admin/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ URL::asset('./assets/admin/bower_components/tether/dist/js/tether.min.js') }}"></script>
    <script src="{{ URL::asset('./assets/admin/bower_components/slick-carousel/slick/slick.min.js') }}"></script>
    <script src="{{ URL::asset('./assets/admin/bower_components/bootstrap/js/dist/util.js') }}"></script>
    <script src="{{ URL::asset('./assets/admin/bower_components/bootstrap/js/dist/alert.js') }}"></script>
    <script src="{{ URL::asset('./assets/admin/bower_components/bootstrap/js/dist/button.js') }}"></script>
    <script src="{{ URL::asset('./assets/admin/bower_components/bootstrap/js/dist/carousel.js') }}"></script>
    <script src="{{ URL::asset('./assets/admin/bower_components/bootstrap/js/dist/collapse.js') }}"></script>
    <script src="{{ URL::asset('./assets/admin/bower_components/bootstrap/js/dist/dropdown.js') }}"></script>
    <script src="{{ URL::asset('./assets/admin/bower_components/bootstrap/js/dist/modal.js') }}"></script>
    <script src="{{ URL::asset('./assets/admin/bower_components/bootstrap/js/dist/tab.js') }}"></script>
    <script src="{{ URL::asset('./assets/admin/bower_components/bootstrap/js/dist/tooltip.js') }}"></script>
    <script src="{{ URL::asset('./assets/admin/bower_components/bootstrap/js/dist/popover.js') }}"></script>
    <script src=""></script>
    <script src="{{ URL::asset('./assets/admin/js/demo_customizer.js?version=4.4.0') }}"></script>
    <script src="{{ URL::asset('./assets/admin/js/main.js?version=4.4.0') }}"></script>
    @yield('scripts')

    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
      @if(Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch(type){
          case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

          case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
          case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
          case 'error':
            toastr.error("{{ Session::get('message')}}");
            break;
        }
      @endif
    </script>
    
  </body>
</html>