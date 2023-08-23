<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">


  <title>Compare List</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


 
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link href="{{asset("studentCss/assets/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
  <link href="{{asset("studentCss/assets/vendor/bootstrap-icons/bootstrap-icons.css")}}" rel="stylesheet">
  <link href="{{asset("studentCss/assets/vendor/fontawesome-free/css/all.min.css")}}" rel="stylesheet">
  <link href="{{asset("studentCss/assets/vendor/aos/aos.css")}}" rel="stylesheet">
  <link href="{{asset("studentCss/assets/vendor/glightbox/css/glightbox.min.css")}}" rel="stylesheet">
  <link href="{{asset("studentCss/assets/vendor/swiper/swiper-bundle.min.css")}}" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="{{asset("studentCss/assets/css/main.css")}}" rel="stylesheet">


</head>


<body>


  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">


      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
      </a>


      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
            <li><a href="{{ url('/dashboard') }}" class="active">Home</a></li>
            <li><a href="{{ url('/blog') }}">Company List</a></li>
            <li><a href="{{ url('/appliedstudview') }}">Applied Job List</a></li>
            <li><a href="{{ route('showcompareList') }}"> Comapre Company List</a></li>
            {{-- <li><a href="{{url('/studlogout')}}">Log Out</a></li> --}}
            <li class="dropdown"><a href="#"><img class="rounded-circle" height="45px" width="45px"
                        src="{{ asset('img/student/' . Auth::user()->image) }}"
                        alt="{{ Auth::user()->image }}"></a>
                <ul>
                    <li>
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>


                    </li>
                </ul>
    </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->


  <main id="main">


     <!-- ======= Breadcrumbs ======= -->
     <div class="breadcrumbs d-flex align-items-center"
     style="background-image: url({{ asset('/img/student/header.jpeg') }});">
     <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">


         <h2>Company List</h2>
         <ol>
             <li><a href="{{ url('/stud') }}">Home</a></li>
             <li>company</li>
         </ol>


     </div>
 </div><!-- End Breadcrumbs -->


    <!-- ======= About Section ======= -->
    <section id="projects" class="projects">
        <div class="container" data-aos="fade-up">
          <form method="post" >
            <h1>Compare Compnay</h1><hr>
            <div class="row">
              <table border="1">
              @if(count($data) > 1)                    
                  @foreach($data as $key)
                      <div class="col-sm-6" style="border-right:1px solid black">
                            <b><h4>Company-Details</h4></b><hr>
                          {{--   Compare_id: {{$key['compare_id']}}<br> --}}
                            <b>Company Name: </b>{{$key['company']['name']}}<br><hr>
                            <b>Email Id :</b>{{$key['company']['email']}}<br><hr>
                            <b>Description :</b>{{$key['company']['description']}}
                            {{-- <b>student : <b>{{$key['job']['name']}}</b> --}}
                      </div>
                  @endforeach                        
            @endif
          </table>
            </div>
        </form>
        </div><!-- End Projects Item -->
    </section><!-- End Our Projects Section -->


    <!-- End About Section -->
  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
   
    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>UpConstruction</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a
            href="https://themewagon.com">ThemeWagon</a>
        </div>
      </div>
    </div>


  </footer>
  <!-- End Footer -->


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>


  <div id="preloader"></div>


  <!-- Vendor JS Files -->
  <script src="{{asset("studentCss/assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <script src="{{asset("studentCss/assets/vendor/aos/aos.js")}}"></script>
  <script src="{{asset("studentCss/assets/vendor/glightbox/js/glightbox.min.js")}}"></script>
  <script src="{{asset("studentCss/assets/vendor/isotope-layout/isotope.pkgd.min.js")}}"></script>
  <script src="{{asset("studentCss/assets/vendor/swiper/swiper-bundle.min.js")}}"></script>
  <script src="{{asset("studentCss/assets/vendor/purecounter/purecounter_vanilla.js")}}"></script>
  <script src="{{asset("studentCss/assets/vendor/php-email-form/validate.js")}}"></script>


  <!-- Template Main JS File -->
  <script src="{{asset("studentCss/assets/js/main.js")}}"></script>


</body>


</html>
