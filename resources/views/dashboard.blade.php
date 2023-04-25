<x-app-layout>
  <html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Student Dashborad</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="{{asset("studentCss/assets/img/favicon.png")}}" rel="icon">
    <link href="{{asset("studentCss/assets/img/apple-touch-icon.png")}}" rel="apple-touch-icon">
  
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
    <link href="{{asset("studentCss/assets/css/main.css")}}" rel="stylesheet">
  </head>
  
  <body>
  
    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
          @foreach($users as $user)
        <a href="" class="logo d-flex align-items-center">
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
            </li>
            
            
            {{-- <li><a href="{{url('/about')}}">About</a></li>
             
             <li><a href="{{url('/projects')}}">Projects</a></li> --}}
            {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                  class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li><a href="#">Dropdown 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                      class="bi bi-chevron-down dropdown-indicator"></i></a>
                  <ul>
                    <li><a href="#">Deep Dropdown 1</a></li>
                    <li><a href="#">Deep Dropdown 2</a></li>
                    <li><a href="#">Deep Dropdown 3</a></li>
                    <li><a href="#">Deep Dropdown 4</a></li>
                    <li><a href="#">Deep Dropdown 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li>
              </ul>
            </li> --}}
            {{-- <li><a href="{{url('/contact')}}">Contact</a></li> --}}
          </ul>
        </nav><!-- .navbar -->
  
      </div>
    </header><!-- End Header -->
  
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
     
      <div class="info d-flex align-items-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
              <h2 data-aos="fade-down">Welcome <br><span> {{$user->name}} </span></h2>
              <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
            </div>
          </div>
        </div>
      </div>
       @endforeach 
      <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-item active" style="background-image: url({{asset("studentCss/assets/img/hero-carousel/4.png")}})"></div>
        <div class="carousel-item" style="background-image: url({{asset("studentCss/assets/img/hero-carousel/2.jpg")}})"></div>
        <div class="carousel-item" style="background-image: url({{asset("studentCss/assets/img/hero-carousel/3.jpg")}})"></div>
        <div class="carousel-item " style="background-image: url({{asset("studentCss/assets/img/hero-carousel/5.webp")}})"></div>
        
  
        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
  
        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
  
      </div>
  
    </section><!-- End Hero Section -->
  
    <main id="main">
  
      <!-- ======= Get Started Section ======= -->
      
      <!-- ======= Our Projects Section ======= -->
      <section id="projects" class="projects">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Companies</h2>
           {{--  <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto
              accusamus fugit aut qui distinctio</p> --}}
          </div>
           @foreach($companies as $company)
            <div class="portfolio-isotope"  data-portfolio-layout="masonry" data-portfolio-sort="original-order">
                <div class="col-lg-6 col-sm-6 portfolio-item filter-remodeling">
                  <div class="portfolio-content h-100">
                    <img src="{{asset('img/company/'.$company->image)}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>{{$company->name}}</h4>
                      <p>{{$company->description}}</p>
                      <a href="{{asset("studentCss/assets/img/projects/remodeling-1.jpg")}}" title="Remodeling 1"
                        data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                          class="bi bi-zoom-in"></i></a>
                          <a href="project-details.html title="More Details" class="details-link"><i
                            class="bi bi-link-45deg"></i></a>
                    </div>
                  </div>
                </div>
            </div>
            @endforeach
          </div><!-- End Projects Item -->
          
     
      </section><!-- End Our Projects Section -->
  
  
      <section id="projects" class="projects">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Our Projects</h2>
            <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto
              accusamus fugit aut qui distinctio</p>
          </div>
  
          <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
            data-portfolio-sort="original-order">
  
            <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-remodeling">Remodeling</li>
              <li data-filter=".filter-construction">Construction</li>
              <li data-filter=".filter-repairs">Repairs</li>
              <li data-filter=".filter-design">Design</li>
            </ul><!-- End Projects Filters -->
  
            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
  
              <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                <div class="portfolio-content h-100">
                  <img src="{{asset("studentCss/assets/img/projects/remodeling-1.jpg")}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Remodeling 1</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="{{asset("studentCss/assets/img/projects/remodeling-1.jpg")}}" title="Remodeling 1"
                      data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                        class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html title="More Details" class="details-link"><i
                        class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->
  
          
  
  
            </div><!-- End Projects Container -->
  
          </div>
  
        </div>
      </section><!-- End Our Projects Section -->
  
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
  </x-app-layout>
  
  