<!doctype html>
<html lang="en">
  <head>
    <title>Add Employee</title>
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
    body{
    width: 100%;
    height: 100vh;
    background: url("/img/p7.jpg") top center;
    background-size: cover;
    position: relative;
    margin-bottom: -70px;
}
    form{
        margin-top: 30px;
        width: 500px;
        padding: 15px 20px 15px 15px;
        background-color: rgba(252, 253, 253, 0.425);
    }
    a{
        color: white;
    }
   
  </style>


  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <center>
    <div class="container-fluid">
        <ul class="nav nav-tabs">
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
                <i class="fa fa-user-plus"></i><a href="{{url('/addemployee')}}" class="nav-link"> Add Employee </a>
            </li>
            <li class="nav-item">
                <a href="{{url('/companystudlist')}}" class="nav-link">All Student</a>
            </li>
        </ul>


        <form action="{{url('/addemployee')}}" method="post" enctype="multipart/form-data">
            @if(Session::has('success'))
            <div class="alert alert-success">{{session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{session::get('fail')}}</div>
            @endif    
            @csrf
            <div class="row">
               
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class=" text-center">Add Employee</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="hidden" name="companyemail" value="{{Auth::guard('company')->user()->email}}" class="form-control form-group" readonly/>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12">
                            <input type="hidden" class="form-control form-group" name="company_id" value="{{Auth::guard('company')->user()->company_id}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <span class="text-danger">@error('empname') {{$message}} @enderror</span>
                            <input type="text" name="empname" value="{{old('empname')}}" placeholder="Enter Name" class="form-control form-group" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <span class="text-danger">@error('email') {{$message}} @enderror</span>
                            <input type="email" name="email" value="{{old('email')}}" placeholder="Enter EmailId"  class="form-control form-group"/>
                        </div>
                    </div>
       
                    <div class="row">
                        <div class="col-sm-12">
                            <span cla0.ss="text-danger">@error('password') {{$message}} @enderror</span>
                            <input type="password" name="password" placeholder="Enter Password"  class="form-control form-group"/>
                        </div>
                    </div>
       
                    <div class="row">
                        <div class="col-sm-4">
                            <label><b>Gender</b></label>
                        </div>
                        <div class="col-sm-4">
                            <input type="radio" value="male" name="gender"/> Male
                        </div>
                        <div class="col-sm-4">
                            <input type="radio" value="female" name="gender"/> Female
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12">
                            <span class="text-danger">@error('empimg') {{$message}} @enderror</span>
                            <br><input type="file" name="empimg" class="form-group"/><br>
                        </div>
                    </div>
       
                    <div class="row">
                        <div class="col-sm-12">
                            <span class="text-danger">@error('phone') {{$message}} @enderror</span>
                            {{-- pattern="[6-9][0-9]{9}" title="Enter Valid Phone Number" --}} <input type="tel"  name="phone" value="{{old('phone')}}" placeholder="Enter Contact Number" class="form-control form-group"/>
                        </div>
                    </div>
       
                    <div class="row">
                        <div class="col-sm-12">
                            <span class="text-danger">@error('designation') {{$message}} @enderror</span>
                            <input type="text" name="designation" value="{{old('designation')}}" placeholder="Enter Designation" class="form-control form-group"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="hidden" name="companyemail" value="{{Auth::guard('company')->user()->email}}" class="form-control form-group" readonly/>
                        </div>
                    </div>
       
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="submit" value="Add Employee" class="form-control form-group btn btn-success"/>
                        </div>
                        <div class="col-sm-6">
                            <input type="reset" value="Reset All" class="form-control form-group btn btn-danger"/>
                        </div>
                    </div>
       
                </div>
            </div>
        </form>


    </div>
</center>
    </body>
</html>
