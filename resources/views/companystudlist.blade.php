<!doctype html>
<html lang="en">
  <head>
    <title>view post</title>
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
  <style>
    #bg{
      background-image: url("/img/p9.jpg");
    }
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
  <body id="bg"> 
   
<form method="GET" name="myform">
  
  @csrf
<!-- Toggleable / Dynamic Tabs -->
<div class="container-fluid">
  <div class="row form-group" style="background-color: rgba(68, 70, 70,0.6)">
  <ul class="nav nav-tabs" >
    <li>
          <img src="/webimg/logo a.gif" height="50px" width="50px" />
    </li>
    <li class="nav-item">
        <a href="{{url('/company/dashboard')}}" class="nav-link">Home</a>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Employee List</a>
        <div class="dropdown-menu">
            {{--  @foreach ($data as $val)
                <a class="dropdown-item" value="{{$val->id}}" href="">{{$val->empname}}</a>
            @endforeach   --}}
        </div>
    </li>
    <li class="nav-item">
        <a href="{{url('/addemployee')}}" class="nav-link"> Add Employee </a>
    </li>
    <li class="nav-item"> 
        <a href="{{url('/companystudlist')}}" class="nav-link">All Student</a>
    </li> 
</ul>
  </div>

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
                       <img class="rounded-circle" width="30" height="30" src="img/student/{{$user['user']['image']}}"> 
                      </td>
                      <td><strong>{{$user['username']}}</strong></td>
                      <td><strong>{{$user['email']}}</strong></td>
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
                    <h3 class="mt-4 mb-1">{{$user['username']}}</h3>
                    <p class="text-muted">{{$user['email']}}</p>
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
</body>
</html>
