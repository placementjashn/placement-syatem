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
      

      <!doctype html>
<html lang="en">


<head>
    <title>Title</title>
    <!-- Bootstrap JS ,then jQuery first, then Bootstrap JS ,awesome -->
    {{-- cdn link --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>  --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    {{-- switchery --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>
<style>


</style>
<script>
    $(document).ready(function() {
        $('.switch').each(function() {
            var checkbox = $(this).children('input[type=checkbox]');
            var toggle = $(this).children('label.switch-toggle');


            if (checkbox.length) {
                checkbox.addClass('hidden');
                toggle.removeClass('hidden');
                if (checkbox[0].checked) {
                    toggle.addClass('on');
                    toggle.removeClass('off');
                    toggle.text(toggle.attr('data-on'));
                } else {
                    toggle.addClass('off');
                    toggle.removeClass('on');
                    toggle.text(toggle.attr('data-off'));
                };
            }
        });


        $('.switch-toggle').click(function() {
            var checkbox = $(this).siblings('input[type=checkbox]')[0];
            var toggle = $(this);


            if (checkbox.checked) {
                toggle.addClass('off');
                toggle.removeClass('on');
                toggle.text(toggle.attr('data-off'));
            } else {
                toggle.addClass('on');
                toggle.removeClass('off');
                toggle.text(toggle.attr('data-on'));
            };
        });
    });
</script>
<style>
    .rounded-circle {
        height:50px;
        width:50px;
    }
    body{
        overflow-x: hidden;
    }
    </style>

<body>
     <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      @if(isset($users))
      @foreach($users as $user)
      <a href="#" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>{{$user->name}}<span></span></h1>
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
      @endforeach
      @endif
    </div>
  </header><!-- End Header -->
    <section class="content">
        <div class="row form-group">
            <div class="col-sm-12">
                <table>
                    <tr>
                        <td> <img height="250px" width="250px" 
                                src="/img/company/{{ Auth::guard('company')->user()->image }}"></td>
                        <td>
                            <table>
                                <tr>
                                    <td>
                                        <h2>{{ Auth::guard('company')->user()->name }}</h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ Auth::guard('company')->user()->email }}</td>
                                </tr>
                                <tr>
                                    <td>{{ Auth::guard('company')->user()->contact }}</td>
                                </tr>
                                <tr>
                                    <td>{{ Auth::guard('company')->user()->location }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                {{-- <table>
                    <tr>
                        <td colspan="2">
                            <h3>Students Rating & Review
                        </td>
                    </tr>
                    <tr>
                        <td colspan='2'>
                        </td>
                    </tr>
                </table> --}}
                <h5>Average Rating: {{ $stars }}</h5>
                <h3>Students Rating & Review</h3>
                <hr>
                <table>
                    @foreach ($ratings as $rating)
                        <br>
                        <tr>
                            <td><img class="rounded-circle"
                                    src="/img/student/{{ $rating['user']['image'] }}" /></td>
                            <td>{{ $rating['user']['name'] }}</td>
                        <tr>
                            {{-- <tr><td colspan="2">{{$rating['rating_id']}}</td><tr> --}}
                        <tr>
                            <td colspan="2">
                                <?php
                                    $count = $rating['rating'];
                                    for($i=1;$i<=$count;$i++){
                                ?>
                                <img style="width: 35px;" src="{{ asset('stars.jpg') }}" alt="">
                                <?php } ?>
                            </td>
                        <tr>
                        <tr>
                            <td colspan="2">{{ $rating['review'] }}</td>
                        <tr>
                            <td>
                                <input type="checkbox" data-rating_id="{{ $rating['rating_id'] }}" name="status"
                                    class="js-switch" {{ $rating['status'] == 1 ? 'checked' : '' }}>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <p id="para"></p>
    </section>
    
    <script>
        let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));


        elems.forEach(function(html) {
            let switchery = new Switchery(html, {
                size: 'small'
            });
        });


        $(document).ready(function() {
            $('.js-switch').change(function() {
                let status = $(this).prop('checked') === true ? 1 : 0;
                alert(status);
                let rating_id = $(this).data('rating_id');
                alert(rating_id);
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '{{ route('company.rating.status') }}',
                    data: {
                        'status': status,
                        'rating_id': rating_id
                    },
                    success: function(data) {
                        toastr.options.closeButton = true;
                        toastr.options.closeMethod = 'fadeOut';
                        toastr.options.closeDuration = 100;
                        toastr.success(data.message);
                        console.log(data);
                    }
                });
            });
        });
    </script>
</html>
  
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
      </body>
    </html>
    </x-company-layout>