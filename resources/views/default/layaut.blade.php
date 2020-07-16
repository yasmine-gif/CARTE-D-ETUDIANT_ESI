<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
      <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
    <link href="{{asset('css/photo.css')}}" rel="stylesheet">
    <script src="{{asset('Js/bootstrap.min.js')}}"></script>
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow bg-color">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="index"><img src="{{asset('logo/logo.jpg')}}" alt="logo" width="200px" height="60px"></a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
          <li class="nav-item text-nowrap">
            <a class="nav-link" href="#">Sign out</a>
          </li>
        </ul>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="sidebar-sticky pt-3 sidebar-sticky-color">
            <ul class="nav flex-column mb-2">
              <li class="nav-item border-bottom">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  <img src="{{asset('logo/.png')}}" alt="user">
                </a>
              </li>
              <li class="nav-item border-bottom">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Liste&nbspdes&nbspcartes
                </a>
              </li>
              <li class="nav-item border-bottom">
                <a class="nav-link" href="ajouter">
                  <span data-feather="file-text"></span>
                  Ajouter&nbspune&nbspcarte
                </a>
              </li>
              <li class="nav-item border-bottom">
                <a class="nav-link" href="mail">
                  <span data-feather="file-text"></span>
                  Envoyer&nbspun&nbspmail
                </a>
              </li>
              <li class="nav-item">
                <div class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted  footer-color">
                  <h4>©copyright-2020&nbspTout-Droit&nbspReserve </h4><br>
                </div>       
                <div class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted  footer-color">
                  <h5 style="color: #d02525">Make By ESI</h5>  
                </div>      
              </li>
            </ul>
          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 body-color">
          <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 ">
            <h2 class="h2 text_color">@yield('sous_title')</h2>
          </div>
        <div class="justify-content-center flex-wrap flex-md-nowrap align-items-center">
          @yield('contenue')
        </div>
    </div>
    <script src="{{asset('Js/jquery.min.js')}}"></script>
    <script src="{{asset('Js/dashboard.min.js')}}"></script>
    <script src="{{asset('Js/photo.min.js')}}"></script></body>
  </body>
</html>
