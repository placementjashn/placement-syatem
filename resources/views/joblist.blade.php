<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">


  <title>UpConstruction Bootstrap Template - </title>
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


  <!-- =======================================================
  * Template Name: UpConstruction - v1.3.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    a{
      color:black;
      text-decoration:none;
    }
    .rate {
            float: left;
            height: 46px;
            padding: 0 10px;
            }
            .rate:not(:checked) > input {
            position:absolute;
            display: none;
            }
            .rate:not(:checked) > label {
            float:right;
            width:1em;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:30px;
            color:#ccc;
            }
            .rated:not(:checked) > label {
            float:right;
            width:1em;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:30px;
            color:#ccc;
            }
            .rate:not(:checked) > label:before {
            content: '★ ';
            }
            .rate > input:checked ~ label {
            color: #ffc700;
            }
            .rate:not(:checked) > label:hover,
            .rate:not(:checked) > label:hover ~ label {
            color: #deb217;
            }
            .rate > input:checked + label:hover,
            .rate > input:checked + label:hover ~ label,
            .rate > input:checked ~ label:hover,
            .rate > input:checked ~ label:hover ~ label,
            .rate > label:hover ~ input:checked ~ label {
            color: #c59b08;
            }
            .star-rating-complete{
               color: #c59b08;
            }
            .rating-container .form-control:hover, .rating-container .form-control:focus{
            background: #fff;
            border: 1px solid #ced4da;
            }
            .rating-container textarea:focus, .rating-container input:focus {
            color: #000;
            }
            .rated {
            float: left;
            height: 46px;
            padding: 0 10px;
            }
            .rated:not(:checked) > input {
            position:absolute;
            display: none;
            }
            .rated:not(:checked) > label {
            float:right;
            width:1em;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:30px;
            color:#ffc700;
            }
            .rated:not(:checked) > label:before {
            content: '★ ';
            }
            .rated > input:checked ~ label {
            color: #ffc700;
            }
            .rated:not(:checked) > label:hover,
            .rated:not(:checked) > label:hover ~ label {
            color: #deb217;
            }
            .rated > input:checked + label:hover,
            .rated > input:checked + label:hover ~ label,
            .rated > input:checked ~ label:hover,
            .rated > input:checked ~ label:hover ~ label,
            .rated > label:hover ~ input:checked ~ label {
            color: #c59b08;
            }
    </style>
 
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
          <li><a href="{{url('/stud')}}" class="active">Home</a></li>
         
          <li><a href="{{url('/blog')}}">Company List</a></li>
          <li><a href="{{url('/services')}}">Applied Job List</a></li>
          {{--<li><a href="{{url('/stud')}}">Home</a></li>
          <li><a href="{{url('/about')}}">About</a></li>
           <li><a href="{{url('/services')}}">Services</a></li>
           <li><a href="{{url('/projects')}}">Projects</a></li>
          <li><a href="{{url('/blog')}}"  class="active">Companylist</a></li>
           <li class="dropdown"><a href="#"><span>Dropdown</span> <i
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
          </li>
          <li><a href="{{url('/contact')}}">Contact</a></li>--}}
        </ul>
      </nav><!-- .navbar -->
      @endforeach
    </div>
  </header><!-- End Header -->


  <main id="main">


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{asset("studentCss/assets/img/breadcrumbs-bg.jpg")}});">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">


        <h2>Job of Company</h2>
        <ol>
          <li><a href="{{url('/stud')}}">Home</a></li>
          <li>Job</li>
        </ol>


      </div>
    </div><!-- End Breadcrumbs -->


    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <table cellpadding="" cellspacing="10">
          @foreach ($companies as $company)
            <tr class="company">
              <td><img height="250px" width="250px" src="/img/company/{{$company->image}}"></td>
              <td>
                <table>
                  <tr><td><a href="{{route('joblist',$company->company_id)}}"><input type="hidden"value="{{$company->company_id}}"></a></td></tr>
                  <tr><td><a href="{{route('joblist',$company->company_id)}}"><h2>{{$company->name}}</h2></a></td></tr>
                  <tr><td>{{$company->location}}</td></tr>
                  <tr><td>{{$company->email}}</td></tr>
                  <tr><td><h4>{{$company->contact}}</h4><br></td></tr>
                  <tr><td><h4>{{$company->location}}</h4> <br></td></tr>
                 
                </table>
              </td>
            </tr>
          </table>
        </div>
        <div class="row"><h2>Ratings & Reviews</h2></div>
        <div class="row">
          <div class="col mt-4">
             <form class="py-2 px-4"  style="box-shadow: 0 0 10px 0 #ddd;background-color:rgb(151, 242, 242);" method="POST" action="{{url('/ratingsuccess')}}" >
                @csrf
                <p class="font-weight-bold ">Review</p>
                <input type="text" name="id" value="{{Auth::User()->id}}" class="form-control"/><br>
                <input type="text" name="company_id" value="{{$company->company_id}}" class="form-control"/>
                <div class="form-group row">
                   <div class="col">
                      <div class="rate">
                         <input type="radio" id="star5" class="rate" name="rating" value="5"/>
                         <label for="star5" title="text">5 stars</label>
                         <input type="radio" id="star4" class="rate" name="rating" value="4"/>
                         <label for="star4" title="text">4 stars</label>
                         <input type="radio" id="star3" class="rate" name="rating" value="3"/>
                         <label for="star3" title="text">3 stars</label>
                         <input type="radio" id="star2" class="rate" name="rating" value="2">
                         <label for="star2" title="text">2 stars</label>
                         <input type="radio" checked  id="star1" class="rate" name="rating" value="1"/>
                         <label for="star1" title="text">1 star</label>
                      </div>
                   </div>
                </div>
                <div class="form-group row mt-4">
                   <div class="col">
                      <textarea class="form-control" name="review" rows="6 " placeholder="Add your reviews" maxlength="200"></textarea>
                   </div>
                </div>
                <div class="mt-3 text-right">
                  <input type="submit" value="Submit" class="btn btn-sm py-2 px-3 btn-info"/>
                </div>
             </form>
          </div>
       </div>
        <div class="row">
          <table>
            @foreach ($jobs as $job)
              <tr>
                <td>
                  <table>
                      <tr><td><h1>{{$job->name}}</h1></td></tr>
                      <tr><td>{{$job->salary}}</td></tr>
                      <tr><td>{{$job->vacancy}}</td></tr>
                      <tr><td><h4>{{$job->experience}}</h4><br></td></tr>
                      <tr><td><h4>{{$job->description}}</h4> <br></td></tr>
                      <th><a href="{{url('/appliedCompanyStudentList',$job->job_id)}}" class="btn btn-primary">Apply</a></th>
                      <hr>
                    </table>
                </td>
              </tr>
            @endforeach
          </table>
        </div>
        @endforeach
      </div>
    </section><!-- End Blog Details Section -->


  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">


    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">


          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>UpConstruction</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End footer info column-->


          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div><!-- End footer links column-->


          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="#">Web Design</a></li>
              <li><a href="#">Web Development</a></li>
              <li><a href="#">Product Management</a></li>
              <li><a href="#">Marketing</a></li>
              <li><a href="#">Graphic Design</a></li>
            </ul>
          </div><!-- End footer links column-->


          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Hic solutasetp</h4>
            <ul>
              <li><a href="#">Molestiae accusamus iure</a></li>
              <li><a href="#">Excepturi dignissimos</a></li>
              <li><a href="#">Suscipit distinctio</a></li>
              <li><a href="#">Dilecta</a></li>
              <li><a href="#">Sit quas consectetur</a></li>
            </ul>
          </div><!-- End footer links column-->


          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Nobis illum</h4>
            <ul>
              <li><a href="#">Ipsam</a></li>
              <li><a href="#">Laudantium dolorum</a></li>
              <li><a href="#">Dinera</a></li>
              <li><a href="#">Trodelas</a></li>
              <li><a href="#">Flexo</a></li>
            </ul>
          </div><!-- End footer links column-->


        </div>
      </div>
    </div>


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
