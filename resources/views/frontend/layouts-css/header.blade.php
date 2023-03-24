<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CSS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset("frontend/assets/img/favicon.png")}}" rel="icon">
  <link href="{{asset("frontend/assets/img/apple-touch-icon.png")}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset("frontend/assets/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
  <link href="{{asset("frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css")}}" rel="stylesheet">
  <link href="{{asset("frontend/assets/vendor/boxicons/css/boxicons.min.css")}}" rel="stylesheet">
  <link href="{{asset("frontend/assets/vendor/glightbox/css/glightbox.min.css")}}" rel="stylesheet">
  <link href="{{asset("frontend/assets/vendor/remixicon/remixicon.css")}}" rel="stylesheet">
  <link href="{{asset("frontend/assets/vendor/swiper/swiper-bundle.min.css")}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset("frontend/assets/css/style.css")}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Valera
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/valera-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
 <!-- ======= Header ======= -->
 <header id="header" class="d-flex align-items-center ">
  <div class="container-fluid d-flex align-items-center justify-content-lg-between">

    {{-- <h1 class="logo me-auto me-lg-0"><a href="index.html">Valera</a></h1> --}}
    <!-- Uncomment below if you prefer to use an image logo -->
     <a href="        " class="logo me-auto me-lg-0"><img src="{{asset("frontend/assets/img/logo2.jpg")}}" alt="" class="img-fluid"></a>

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
        <li><a class="nav-link scrollto" href="#services">Company</a></li>
        <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
        <li><a class="nav-link scrollto" href="#team">Team</a></li>
        <li class="dropdown"><a href="#"><span>login</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li>
              @if(Route::has('login'))
                  <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                      @auth
                          <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"> Dashboard </a>
                      @else
                          <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"> Student </a>

                          {{-- @if (Route::has('register'))
                              <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                          @endif --}}
                      @endauth
                  </div>
              @endif
          </li>
            
          <li>
            @if(Route::has('company.login'))
              <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                @auth
                    <a href="{{ url('/company/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Company Dashboard</a>
                @else
                    <a href="{{ route('company.login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Company</a>

                    {{-- @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif --}}
                @endauth
              </div>
            @endif 
          </li>
          <li class="nav-item">
            <i class="fa fa-sign-in"></i><a href="{{url('/loginemp')}}" class="nav-link"> Employee Login </a>
          </li> 

            
           
          </ul>
        </li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    <div class="header-social-links d-flex align-items-center">
      {{-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a> --}}
    </div>

  </div>
</header><!-- End Header -->