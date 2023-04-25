<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Service</title>
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
      @foreach($users as $user)
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>{{$user->name}}<span></span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{url('/dashboard')}}">Home</a></li>         
          <li><a href="{{url('/blog')}}">Company List</a></li>
          <li><a href="{{url('/appliedstudview')}}" class="active">Applied Job List</a></li>
          <li><a href="{{route('showcompareList')}}"> Comapre Company List</a></li>
          {{-- <li><a href="{{url('/studlogout')}}">Log Out</a></li> --}}
          <li class="dropdown"><a href="#"><img class="rounded-circle" height="45px" width="45px" src="{{asset('img/student/'.Auth::user()->image)}}" alt="{{ Auth::user()->image }}"></a>
            <ul>
              <li><x-dropdown-link :href="route('profile.edit')">
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
      @endforeach
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{asset("/img/student/header.jpeg")}});">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Applied Job List</h2>
        <ol>
          <li><a href="{{url('/dashbored')}}">Home</a></li>
          <li>Applied Job List</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    
    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container">
        <center>
        <div class="card" >
          <div class="crad-header">
            <h2 class="card-title"><b><center>Applied Job List </center></b></h2>
          </div>
           <div class="card-body">
              <div class="table-responsive">
                <table  class="display" style="min-width :845px" cellpadding="8"  border="1">
                    <hr>
                    <thead>
                      <tr>
                        <th style="padding-left: 5%">Photo</th>
                        <th><h5>Comapny Name</h5></th>
                        <th><h5>Post</h5></th>
                        <th><h5>Graduation</h5></th>
                        <th><h5>Experience</h5></th>
                        <th><h5>Status</h5></th>
                        <th><h5>Action</h5></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $datas)
                    <tr>
                      <td>
                        <img class="rounded-circle" height="100px" width="120px" src="img/company/{{$datas['company']['image']}}">
                      </td>
                      <td><strong>{{$datas['company']['name']}}</strong></td>
                      <td><strong>{{$datas['job']['name']}}</strong></td>
                      <td><strong>{{$datas['qulification']}}</strong></td>
                      <td><strong>{{$datas['experience']}}</strong></td>
                      <td><strong>
                        @if($datas['user']['status'] == "0"  )
                          <label>Pending</label>
                        @endif
    
                        @if($datas['user']['status'] == "1"  )
                          <label>Selected</label>
                        @endif
                      </strong>
                      </td>
                      <td><a href="{{url('/cancleapply',$datas['applied_id'])}}" class="btn btn-primary">Cancal</a></td>
                    </tr>
                    
                    @endforeach
                    </tbody>
                </table>
            </div>
          </div>
      </div>
    </div> 
  </center>
      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->
 <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>JashnPlacement</span></strong>. All Rights Reserved
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
