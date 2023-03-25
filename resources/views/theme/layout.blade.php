
<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title')</title>
    <link href="{{ asset('/css/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/responsive.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/icons/fontawesome/css/all.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/style.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/site.css') }}" rel="stylesheet" type="text/css" />
    @yield("css")
  </head>
  <body>
    <!-- -------------------------------------------------------------- -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- -------------------------------------------------------------- -->
    <div class="preloader">
      <svg class="tea lds-ripple" width="37" height="48" viewbox="0 0 37 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z" stroke="#2962FF" stroke-width="2"></path>
        <path d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34" stroke="#2962FF" stroke-width="2"></path>
        <path id="teabag" fill="#2962FF" fill-rule="evenodd" clip-rule="evenodd" d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z"></path>
        <path id="steamL" d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke="#2962FF"></path>
        <path id="steamR" d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13" stroke="#2962FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
      </svg>
    </div>

    <!-- -------------------------------------------------------------- -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- -------------------------------------------------------------- -->
    <div id="main-wrapper">
      <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header">
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
              <i class="ri-close-line fs-6 ri-menu-2-line"></i>
            </a>

            <a class="navbar-brand" href="index.html">
              <b class="logo-icon">
                <img src="{{ asset('/images/logo-icon.png') }}" alt="homepage" class="dark-logo" />
                <img src="{{ asset('/images/logo-light-icon.png') }}" alt="homepage" class="light-logo"/>
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text">
                <!-- dark Logo text -->
                <img src="{{ asset('/images/logo-text.png') }}" alt="homepage" class="dark-logo" />
                <!-- Light Logo text -->
                <img src="{{ asset('/images/logo-light-text.png') }}" class="light-logo" alt="homepage" />
              </span>
            </a>
          </div>
          <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
              <li class="nav-item d-none d-md-block">
                <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                    <i data-feather="menu" class="feather-sm"></i>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <aside class="left-sidebar">
        <div class="scroll-sidebar">
          <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="app-chats.html" aria-expanded="false">
                        <i class="feather-icon fa fa-house-medical"></i>
                        <span class="hide-menu">Covid19</span>
                    </a>
                  </li>
            </ul>
          </nav>
        </div>
      </aside>

      <div class="page-wrapper">

        @yield('content')

        <footer class="footer text-center"></footer>
      </div>
    </div>

    <!-- -------------------------------------------------------------- -->
    <!-- Required Js files -->
    <!-- -------------------------------------------------------------- -->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Theme Required Js -->
    <script src="{{ asset('/js/app.min.js') }}"></script>
    <script src="{{ asset('/js/app.init.js') }}"></script>
    <script src="{{ asset('/js/app-style-switcher.js') }}"></script>
    <!-- perfect scrollbar JavaScript -->
    <script src="{{ asset('/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('/js/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('/js/feather.min.js') }}"></script>
    <script src="{{ asset('/js/custom.min.js') }}"></script>
    <!--This page plugins -->
    <script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/js/dataTables.responsive.min.js') }}"></script>

    @yield('script')
  </body>
</html>

<!-- https://demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/html/ltr/table-datatable-basic.html -->
