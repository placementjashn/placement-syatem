<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Employee List</title>

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
                        <li><a href="{{url("/company/dashboard")}}">Home</a></li>
                        <li><a href="{{url('/employee')}}" class="active">Employee List</a></li>
                        <li><a href="{{url('/addemployee')}}">Add Employee</a></li>
                        <li><a href="{{url('/companystudlist')}}">Applied Student List</a></li>
                        <li><a href="{{url('/companystudlist')}}">View All Post</a></li>
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


  
  <div class="amazing-deals">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading text-center">
            <h2>Our Employees</h2>
            <p>People want to feel like they are contributing to the growth of the organization, while at the same time using their skills, knowledge, and talents to achieve personal fulfillment. Personal fulfillment is the number one aspect of employee satisfaction.</p>
          </div>
        </div>
        @foreach ($employees as $employee)
          <div class="col-lg-6 col-sm-6">
            <div class="item" style="background-color:rgb(229, 226, 226);">
              <div class="row">
                <div class="col-lg-6">
                  <div class="image">
                    <img style="height:242px;" src="{{asset('img/employee/'.$employee->empimg)}}" alt="">
                  </div>
                </div>
                  <div class="col-lg-6 align-self-center">
                    <div class="content">
                      
                      <h4>{{$employee->empname}}</h4>
                      <span style="font-size:20px;" class="info">{{$employee->designation}}</span>
                      <div class="row form-group">
                        <div class="col-12">
                          <i class="fa fa-envelope"></i>
                          <span class="list">{{$employee->email}}</span>
                        </div>
                      </div><br>
                      <div class="row form-group">
                        <div class="col-12">
                          <i class="fa fa-phone"></i>
                          <span class="list">{{$employee->phone}}</span>
                        </div>
                      </div>
                      {{-- <p>Lorem ipsum dolor sit amet dire consectetur adipiscing elit.</p>
                      <div class="main-button">
                        <a href="reservation.html">Make a Reservation</a>
                      </div> --}}
                    </div>
                  </div>
              </div>
            </div>
          </div>
        @endforeach
        
      </div>
    </div>
  </div>

  
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
  <script src="{{asset("companyCss/assets/js/wow.js")}}">̥</script>
  <script src="{{asset("companyCss/assets/js/tabs.js")}}"></script>
  <script src="{{asset("companyCss/assets/js/popup.js")}}"></script>
  <script src="{{asset("companyCss/assets/js/custom.js")}}"></script>

  <script>
    $(".option").click(function(){
      $(".option").removeClass("active");
      $(this).addClass("active"); 
    });
  </script>

  </body>

</html>
