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
    <div >
      <div>
        <div class="row">
          <div>
            <center>
            <form style="margin-top: 100px;width:500px;" action="{{url('/addemployee')}}" method="post" enctype="multipart/form-data">
              <!-- Nav tabs --> 
              @csrf
              <table cellpadding="5">
                <tr>
                    <td colspan="3">
                        <h1 class=" text-center">Add Employee</h1>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="hidden" name="companyemail" value="{{Auth::guard('company')->user()->email}}" class="form-control form-group" readonly/>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="hidden" class="form-control form-group" name="company_id" value="{{Auth::guard('company')->user()->company_id}}"> 
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <span class="text-danger">@error('empname') {{$message}} @enderror</span>
                        <input type="text" name="empname" value="{{old('empname')}}" placeholder="Enter Name" class="form-control form-group" />
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                        <input type="email" name="email" value="{{old('email')}}" placeholder="Enter EmailId"  class="form-control form-group"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                        <input type="password" name="password" placeholder="Enter Password"  class="form-control form-group"/>
                    </td>
                </tr>
                <tr>
                    <td><label><b>Gender</b></label></td>
                    <td><input type="radio" value="male" name="gender"/> Male</td>
                    <td> <input type="radio" value="female" name="gender"/> Female</td>
                </tr>
                <tr>
                    <td colspan="3">
                        <span class="text-danger">@error('empimg') {{$message}} @enderror</span>
                        <br><input type="file" name="empimg" class="form-group"/><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <span class="text-danger">@error('phone') {{$message}} @enderror</span>
                        {{-- pattern="[6-9][0-9]{9}" title="Enter Valid Phone Number" --}} <input type="tel"  name="phone" value="{{old('phone')}}" placeholder="Enter Contact Number" class="form-control form-group"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <span class="text-danger">@error('designation') {{$message}} @enderror</span>
                        <input type="text" name="designation" value="{{old('designation')}}" placeholder="Enter Designation" class="form-control form-group"/>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="Add Employee" class="form-control form-group btn btn-success"/></td>
                    <td><input type="reset" value="Reset All" class="form-control form-group btn btn-danger"/></td>
                </tr>
              </table>
             </form>
            </center>
          </div>
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