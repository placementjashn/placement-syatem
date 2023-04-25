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
      <style>
        .rounded-circle{
          width:50px;
          height: 50px;
        }
      </style>
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
                       
                          <div><h3>{{Auth::guard('company')->user()->name}}</h3></div>
                       
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{url("/company/dashboard")}}" class="active">Home</a></li>
                            {{-- <li><a href="{{url('/companyabout')}}">Employee List</a></li> --}}
                            <li><a href="{{url('/listemployee')}}">Employee List</a></li>
                                   {{-- @foreach ($data as $val)
                                      <a class="dropdown-item" value="{{$val->id}}" href="">{{$val->empname}}</a>
                                  @endforeach  --}}
                           
                            <li><a href="{{url('/addemployee')}}">Add Employee</a></li>
                            <li><a href="{{url('/companystudlist')}}">Applied Student List</a></li>
                            <li><a href="{{url('/companystudlist')}}">View All Post</a></li>
                            <li ><img class="rounded-circle" src="{{asset('img/company/'.Auth::guard('company')->user()->image)}}">
                              <ul>
                                <li>
                                <x-dropdown-link :href="route('profile.edit')">
                                  {{ __('Profile') }}
                              </x-dropdown-link>
                            </li>
                            <li>
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
                        </ul>
                           
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                       
                       
                    </nav>
                </div>
            </div>
        </div>
      </header>
   
       
   
      <div class="reservation-form">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <form id="reservation-form" name="gs" method="submit" role="search" action="#">
                <div class="row">
                  <div class="col-lg-12">
                    <h4><em>Add Employee</em></h4>
                  </div>
                  <div class="col-lg-6">
                      <fieldset>
                          <label for="empname" class="form-label">Your Name</label>
                          <span class="text-danger">@error('empname') {{$message}} @enderror</span>
                          <input type="text" name="empname" value="{{old('empname')}}" placeholder="Enter Name" class="form-control form-group" />
                      </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" name="email" value="{{old('email')}}" placeholder="Enter EmailId"  class="form-control form-group"/>
                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                        <label for="password" class="form-label">Your Password</label>
                        <input type="password" name="password" placeholder="Enter Password"  class="form-control form-group"/>
                        <span cla0.ss="text-danger">@error('password') {{$message}} @enderror</span>
                    </fieldset>
                </div>
                <div class="col-lg-6">
                  <fieldset>
                      <label for="Number" class="form-label">Gender</label>
                        <input type="radio" value="male" name="gender"/> Male
                        <input type="radio" value="female" name="gender"/> Female
                 
                  </fieldset>
                </div>
                <div class="col-lg-6">
                    <fieldset>
                        <label for="empimg" class="form-label">Your Image</label>
                        <input type="file" accept=".jpg, .jpeg, .png, .webp" name="empimg" class="form-group"/>
                        <span class="text-danger">@error('empimg') {{$message}} @enderror</span>
                    </fieldset>
                </div>
                <div class="col-lg-6">
                  <fieldset>
                      <label for="Number" class="form-label">Your Phone Number</label>
                      <span class="text-danger">@error('phone') {{$message}} @enderror</span>
                      {{-- pattern="[6-9][0-9]{9}" title="Enter Valid Phone Number" --}} <input type="tel"  name="phone" value="{{old('phone')}}" placeholder="Enter Phone Number" class="form-control form-group"/>
                      {{-- <input type="text" name="Number" class="Number" placeholder="Ex. +xxx xxx xxx" autocomplete="on" required> --}}
                  </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset>
                        <label for="designation" class="form-label">Designation</label>
                        <input type="text" name="designation" value="{{old('designation')}}" placeholder="Enter Designation" class="form-control form-group"/>
                        <span class="text-danger">@error('designation') {{$message}} @enderror</span>
                    </fieldset>
                  </div>
{{--                   <div class="col-lg-6">
                      <fieldset>
                          <label for="chooseGuests" class="form-label">Number Of Guests</label>
                          <select name="Guests" class="form-select" aria-label="Default select example" id="chooseGuests" onChange="this.form.click()">
                              <option selected>ex. 3 or 4 or 5</option>
                              <option type="checkbox" name="option1" value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4+">4+</option>
                          </select>
                      </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                        <label for="Number" class="form-label">Check In Date</label>
                        <input type="date" name="date" class="date" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                      <fieldset>
                          <label for="chooseDestination" class="form-label">Choose Your Destination</label>
                          <select name="Destination" class="form-select" aria-label="Default select example" id="chooseCategory" onChange="this.form.click()">
                              <option selected>ex. Switzerland, Lausanne</option>
                              <option value="Italy, Roma">Italy, Roma</option>
                              <option value="France, Paris">France, Paris</option>
                              <option value="Engaland, London">Engaland, London</option>
                              <option value="Switzerland, Lausanne">Switzerland, Lausanne</option>
                          </select>
                      </fieldset>
                  </div> --}}
                  <div class="col-lg-6">
                    <fieldset>
                        <input type="submit" value="Add Employee" class="form-control form-group "/>
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                      <fieldset>
                        <input type="reset" value="Reset All" class="form-control form-group "/>
                      </fieldset>
                 </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
   
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <p>Copyright © 2036 <a href="#">Jashn</a> Company. All rights reserved.
              <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">Jashn</a></p>
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
        $(".option").click(function(){
          $(".option").removeClass("active");
          $(this).addClass("active");
        });
      </script>
   
      </body>
   
    </html>
    </x-company-layout>
   
