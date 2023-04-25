<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Compare List</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 <!-- Favicons -->
 <link href="{{asset("studentCss/assets/img/favicon.png")}}" rel="icon">
 <link href="{{asset("studentCss/assets/img/apple-touch-icon.png")}}" rel="apple-touch-icon">
 <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
 <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
 <!-- Google Fonts -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

 <!-- Vendor CSS Files -->
 <link href="{{asset("studentCss/assets/vendor/bootstrap/css/bootstrap.css")}}" rel="stylesheet">
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
          <li><a href="{{url('/dashboard')}}" class="active">Home</a></li>         
          <li><a href="{{url('/blog')}}">Company List</a></li>
          <li><a href="{{url('/appliedstudview')}}">Applied Job List</a></li>
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

        <h2>Company List</h2>
        <ol>
          <li><a href="{{url('/stud')}}">Home</a></li>
          <li>company</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      @foreach($companies as $company)
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 posts-list">

          <div class="col-xl-7 col-md-6">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="img/company/{{$company->image}}" class="img-fluid" alt="">
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">{{$company->name}}</h3>
                <p>
                  {{$company->description}}
                </p>
                <hr>
                @auth
                  <a href="{{route('compare',$company->company_id)}}"><input type="hidden" value="{{$company->company_id}}"> 
                @endauth
                  <a href="javaScript:void(0)"  class="btn btn-primary" onclick="saveToCompareList('{{$company->company_id}}','{{Auth::User()->id}}')">Add To Compare</a>
                @guest
                  <a href="javascript:void(0)"  class="btn btn-primary" onclick="saveToCompareList('{{$company->company_id}})','0')">Add To Compare</a>
                @endguest
                <br>
                <a href="{{route('joblist',$company->company_id)}}" class="btn btn-primary"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div> 
          </div><!-- End post list item -->
          @endforeach
        <!-- <div class="blog-pagination">
          <ul class="justify-content-center">
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
        </div> --><!-- End blog pagination -->

      </div>
    </section><!-- End Blog Section -->
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

  </main><!-- End #main -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

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

  <!-- compare company -->
  <script>
    function saveToCompareList(company_id,id){
    /*   alert("Hello"); */
      /* alert(company_id); */
      alert(id);
       if(id == 0){
        alert("Login is required To compare the company");
      }else{
        alert("User_ID"+ id); 
         $.ajax({
         /*  consol.log("janki"); */
          "url":'{{route('storecompareList')}}',
          "method":"POST",
          "data":{company_id:company_id,id:id,_token: '{{csrf_token()}}'},
          success:function(resp){
             /* alert(resp);  */
             console.log(resp);
          },
          error:function(error){
            alert(error);
          } 
         })  
    }
    }
  </script>
</body>

</html>
