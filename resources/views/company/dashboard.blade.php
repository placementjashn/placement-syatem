<x-company-layout>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Company Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset("companyCss/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset("companyCss/assets/css/fontawesome.css")}}">
    <link rel="stylesheet" href="{{asset("companyCss/assets/css/templatemo-woox-travel.css")}}">
    <link rel="stylesheet" href="{{asset("companyCss/assets/css/owl.css")}}">
    <link rel="stylesheet" href="{{asset("companyCss/assets/css/animate.css")}}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 580 Woox Travel

https://templatemo.com/tm-580-woox-travel

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <img style="width:50px ;height: 50px;margin-top:10px;margin-right: 40px;margin-left:-40px; " class="rounded-circle" src="{{asset('img/company/'.Auth::guard('company')->user()->image)}}">
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{url("/company/dashboard")}}" class="active">Home</a></li>
                        <li><a href="{{url('/employee')}}">Employee List</a></li>
                        <li><a href="{{url('/addemployee')}}">Add Employee</a></li>
                        <li><a href="{{url('/companystudlist')}}">Applied Student List</a></li>
                        <li><a href="{{url('/allpost')}}">View All Post</a></li>
                        <li><a href="{{url('/rating') }}">Rating</a></li>
                        <li class="dropdown">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('company.logout') }}">
                                @csrf
    
                                <x-dropdown-link :href="route('company.logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>    
                        </li>
                    </ul>
                       
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section id="section-1">
    <div class="content-slider">
      <input type="radio" id="banner1" class="sec-1-input" name="banner" checked>
      <input type="radio" id="banner2" class="sec-1-input" name="banner">
      <input type="radio" id="banner3" class="sec-1-input" name="banner">
      <input type="radio" id="banner4" class="sec-1-input" name="banner">
      <div class="slider">
        <div id="top-banner-1" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <h1>{{Auth::guard('company')->user()->name}}</h1>
              <div style="font-size: 25px;padding-top:3px;"><br>{{Auth::guard('company')->user()->description}}</div>
            </div>
          </div>
        </div>
        <div id="top-banner-2" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <h1>{{Auth::guard('company')->user()->name}}</h1>
              <div style="font-size: 25px;padding-top:3px;"><br>{{Auth::guard('company')->user()->description}}</div>
            </div>
          </div>
        </div>
        <div id="top-banner-3" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <h1>{{Auth::guard('company')->user()->name}}</h1>
              <div style="font-size: 25px;padding-top:3px;"><br>{{Auth::guard('company')->user()->description}}</div>
            </div>
          </div>
        </div>
        <div id="top-banner-4" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <h1>{{Auth::guard('company')->user()->name}}</h1>
              <div style="font-size: 25px;padding-top:3px;"><br>{{Auth::guard('company')->user()->description}}</div>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="controls">
          <label for="banner1"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">1</span></label>
          <label for="banner2"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">2</span></label>
          <label for="banner3"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">3</span></label>
          <label for="banner4"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">4</span></label>
        </div>
      </nav>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->
  {{-- 
  <div class="visit-country">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading">
            <h2>Visit One Of Our Countries Now</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <div class="items">
            <div class="row">
              <div class="col-lg-12">
                <div class="item">
                  <div class="row">
                    <div class="col-lg-4 col-sm-5">
                      <div class="image">
                        <img src="{{asset("companyCss/assets/images/country-01.jpg")}}" alt="">
                      </div>
                    </div>
                    <div class="col-lg-8 col-sm-7">
                      <div class="right-content">
                        <h4>SWITZERLAND</h4>
                        <span>Europe</span>
                        <div class="main-button">
                          <a href="about.html">Explore More</a>
                        </div>
                        <p>Woox Travel is a professional Bootstrap 5 theme HTML CSS layout for your website. You can use this layout for your commercial work.</p>
                        <ul class="info">
                          <li><i class="fa fa-user"></i> 8.66 Mil People</li>
                          <li><i class="fa fa-globe"></i> 41.290 km2</li>
                          <li><i class="fa fa-home"></i> $1.100.200</li>
                        </ul>
                        <div class="text-button">
                          <a href="about.html">Need Directions ? <i class="fa fa-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="item">
                  <div class="row">
                    <div class="col-lg-4 col-sm-5">
                      <div class="image">
                        <img src="{{asset("companyCss/assets/images/country-02.jpg")}}" alt="">
                      </div>
                    </div>
                    <div class="col-lg-8 col-sm-7">
                      <div class="right-content">
                        <h4>CARIBBEAN</h4>
                        <span>North America</span>
                        <div class="main-button">
                          <a href="about.html">Explore More</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        <ul class="info">
                          <li><i class="fa fa-user"></i> 44.48 Mil People</li>
                          <li><i class="fa fa-globe"></i> 275.400 km2</li>
                          <li><i class="fa fa-home"></i> $946.000</li>
                        </ul>
                        <div class="text-button">
                          <a href="about.html">Need Directions ? <i class="fa fa-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="item last-item">
                  <div class="row">
                    <div class="col-lg-4 col-sm-5">
                      <div class="image">
                        <img src="{{asset("companyCss/assets/images/country-03.jpg")}}" alt="">
                      </div>
                    </div>
                    <div class="col-lg-8 col-sm-7">
                      <div class="right-content">
                        <h4>FRANCE</h4>
                        <span>Europe</span>
                        <div class="main-button">
                          <a href="about.html">Explore More</a>
                        </div>
                        <p>We hope this WoOx template is useful for you, please support us a <a href="https://paypal.me/templatemo" target="_blank">small amount of PayPal</a> to info [at] templatemo.com for our survival. We really appreciate your contribution.</p>
                        <ul class="info">
                          <li><i class="fa fa-user"></i> 67.41 Mil People</li>
                          <li><i class="fa fa-globe"></i> 551.500 km2</li>
                          <li><i class="fa fa-home"></i> $425.600</li>
                        </ul>
                        <div class="text-button">
                          <a href="about.html">Need Directions ? <i class="fa fa-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}



  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2036 <a href="#">Jashn</a> Company. All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset("companyCss/vendor/jquery/jquery.min.js")}}"></script>
  <script src="{{asset("companyCss/vendor/bootstrap/js/bootstrap.min.js")}}"></script>

  <script src="{{asset("companyCss/assets/js/isotope.min.js")}}"></script>
  <script src="{{asset("companyCss/assets/js/owl-carousel.js")}}"></script>
  <script src="{{asset("companyCss/assets/js/wow.js")}}"></script>
  <script src="{{asset("companyCss/assets/js/tabs.js")}}"></script>
  <script src="{{asset("companyCss/assets/js/popup.js")}}"></script>
  <script src="{{asset("companyCss/assets/js/custom.js")}}"></script>

  <script>
    function bannerSwitcher() {
      next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
      if (next.length) next.prop('checked', true);
      else $('.sec-1-input').first().prop('checked', true);
    }

    var bannerTimer = setInterval(bannerSwitcher, 5000);

    $('nav .controls label').click(function() {
      clearInterval(bannerTimer);
      bannerTimer = setInterval(bannerSwitcher, 5000)
    });
  </script>

  </body>

    </html>
</x-company-layout>