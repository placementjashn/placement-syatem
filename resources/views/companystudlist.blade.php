<x-company-layout>
  <!DOCTYPE html>
  <html lang="en">
  
    <head>
      <!-- Bootstrap JS ,then jQuery first, then Bootstrap JS ,awesome -->
    {{-- cdn link --}}<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>  --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    {{-- switchery --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
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
      <style>
        a{
        color: black; 
        }
        label.switch-toggle {
        background: url('switch.png') repeat-y;
        display: block !important;
        height: 12px;
        padding-left: 26px;
        cursor: pointer;
        display: none;
        }
        
        label.switch-toggle.on {
            background-position: 0 12px;
        }
        label.switch-toggle.off {
            background-position: 0 0;
        }
        label.switch-toggle.hidden {
            display: none;
        }
        .view{
          width:170px;
        }
        .rounded-circle{
          height:30px;
          width:30px;
        }
      </style>
      <script>
        $(document).ready( function(){
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
    
        $('.switch-toggle').click(function(){
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
  <!--
  
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
  
    <section>
      <form method="GET" name="myform">
  
        @csrf
      <!-- Toggleable / Dynamic Tabs -->
      <div class="container-fluid">
          <div class="row form-group">
            <div class="col-lg-12">
              <ul class="nav nav-pills mb-3">
              <nav class="nav nav-tabs nav-justified">
              <a class="nav-item nav-link btn-primary mr-1 view" data-toggle="tab" href="#list-view">List View</a>
              <a class="nav-item nav-link btn-primary view" data-toggle="tab" href="#grid-view">Grid View</a>
            </nav>
            </ul>
            </div>
            </div>
            <div class="tab-content">
              <div id="list-view"  class="tab-pane fade show active col-lg-12" role="tabpanel">
                <div class="card">
                    <div class="crad-haeder">
                      <h2 class="card-title"><b><center>Student List</center></b></h2>
                    </div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table id="example3" class="display" style="min-width :845px" cellpadding="7">
                              <thead>
                                <tr>
                                  <th><h4>Image<h4></th>
                                  <th><h4>Name</h4></th>
                                  <th><h4>Email<h4></th>
                                  <th><h4>Post Name</h4></th>
                                  <th><h4>Qulification</h4></th>
                                  <th><h4>Experience</h4></th>
                                  <th><h4>Location</h4></th>
                                  <th ><h4>Resume</h4></th>
                                  <th><h4>Status</h4></th>
                                </tr>
                              </thead>
                              <hr>
                              <tbody> 
                              @foreach ($data as $user)
                              <tr>
                                <td>
                                  <img class="rounded-circle" src="img/student/{{$user['user']['image']}}"> 
                                </td>
                                <td><strong>{{$user['user']['name']}}</strong></td>
                                <td><strong>{{$user['user']['email']}}</strong></td>
                                <td><strong>{{$user['job']['name']}}</strong></td>
                                <td><strong>{{$user['qulification']}}</strong></td>
                                <td><strong>{{$user['experience']}}</strong></td>
                                <td><strong>{{$user['user']['location']}}</strong></td>
                                <td><strong><a width="35" href="img/student/{{$user['user']['resume']}}" target="_resume"><i class="fa fa-file"></i> {{$user['user']['name']}}</a></strong></td>
                                <td>
                                  <input type="checkbox" data-id="{{$user['user']['id']}}" name="status" class="js-switch" {{$user['user']['status'] == 1 ? 'checked' : '' }}> 
                                </td>
                                {{-- <td>{{ $user->created_at->diffForHumans() }}</td> --}}
                                {{-- <td>
                                  <input data-id="{{$user['user']['id']}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $user->status ? 'checked' : '' }}>
                                </td> --}}
                                {{-- <td><div class="switch">
                                  <label for="mycheckbox" class="switch-toggle" data-on="On" data-off="Off"></label>
                                  <input type="checkbox" id="mycheckbox" />
                              </div></td> --}}
                              </tr>
                              @endforeach
                              </tbody>
                          </table>
                      </div>
                    </div>
                </div>
              </div> 
            <div id="grid-view" class="tab-pane fade">
              <div class="row">
                @foreach($data as $user)
                <div class="col-lg-4 co-md-6 col-sm-6 col-12">
                    <div class="card card-profile">
                      <div class="crad-header justify-content-end pb-0">
                          <div class="dropdown">
                              <button class="btn btn-link" type="button" data-toggle="dropdown">
                                <span class="dropdown-dots fs-1"></span>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right border py-0">
                                  <div class="py-2">
                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    <a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="card-body pt-2">
                          <div class="text-center">
                              <div class="profile-photo">
                                <img class="rounded-circle" width="200" height="200" src="img/student/{{$user['user']['image']}}">
                              </div>
                              <h3 class="mt-4 mb-1">{{$user['user']['name']}}</h3>
                              <p class="text-muted">{{$user['user']['email']}}</p>
                              <ul class="list-group mb-3 list-group-flush">
                                  <li class="list-group-item px-0 d-flex justify-content-between">
                                    <span>Qulification.</span><strong>{{$user['qulification']}}</strong></li>
                                  <li class="list-group-item px-0 d-flex justify-content-between">
                                    <span>Experience.</span><strong>{{$user['experience']}}</strong></li>
                                  <li class="list-group-item px-0 d-flex justify-content-between">
                                    <span>Contact no.</span><strong>{{$user['user']['contact']}} </strong></li>
                                  </li>
                              </ul>
                            <a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="img/student/{{$user['user']['resume']}}">View Resume</a>
                          </div>
                      </div>
                    </div>
                </div>
                @endforeach
              </div>
            </div>
            </div>
            </div>
            </form>
            <script>
              var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
              elems.forEach(function(html)
              {
                var switchery = new Switchery (html , {size :'small'});
              });
        
              $(document).ready(function(){
                  $('.js-switch').change(function () {
                      let status = $(this).prop('checked') === true ? 1 : 0;
                      let id = $(this).data('id');
                      /* alert(status); */
                      /* console.log(id) ; */
                      $.ajax({
                          type: "GET",
                          dataType: "json",
                          url: '{{route('users.update.status')}}',
                          data: {'status': status, 'id': id},
                          success: function (data) {
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
    </section>
  
  
  
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