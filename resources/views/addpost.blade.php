<!doctype html>
<html lang="en">
  <head>
    <title>addpost</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
    form{
      margin: 40px;
    }
  </style>
  <body>    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="container-fluid">
    <div class="row">
      <ul class="nav nav-tabs" id="navId">
        <li class="nav-item">
          <a href="{{url('/employeedashborad')}}" class="nav-link">Home</a>
        </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Post</a>
              <div class="dropdown-menu">
                  <a href="{{url('/addpost')}}" class="nav-link"> Add Post </a>
                  <a href="{{url('/view')}}" class="nav-link"> Manage Post </a>
              </div>
          </li>
          <li class="nav-item">
              <a href="#tab5Id" class="nav-link">Student list 
              </a>
          </li>
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profile</a>
            <div class="dropdown-menu">
              <a href="#" class="nav-link">Profile</a>
              <a href="{{url('/logout')}}" class="nav-link" >Logout</a>
            </div>
        </li>
      </ul>
    </div>
    
    <form action="{{$url}}" method="post" style="background-color: antiquewhite;padding:10px;">
      
      @csrf
       <div class="row form-group">
        <div class="col-sm-12">
          {{-- <center><h1>Add post</h1></center> --}}
          <center><h1>{{$title}}</h1></center>
        </div>
      </div>
      <div class="row form-group">
        
        <div class="col-sm-10">
          <input type="hidden" class="form-control" name="empemail" value="{{session('email')}}" READONLY>
        </div>
      </div>
      <div class="row form-group">
       
        <div class="col-sm-10">
          @foreach ($employees as $employee)
            <input type="hidden" class="form-control" name="company_id" value="{{$employee->company_id}}" READONLY>
          @endforeach
        </div>
      </div>
      <div class="row form-group">
        <div class="col-sm-2">
          Post Name :
        </div>
        <div class="col-sm-10">
          <input type="text" name="name" id="name" class="form-control" value="{{$job->name ?? ''}}">
        </div>
      </div>
      <div class="row form-group">
        <div class="col-sm-2">
          Description :
        </div>
        <div class="col-sm-10">
          <input type="type" name="description" id="description" class="form-control" value="{{$job->description ?? ''}}">
        </div>
      </div>
      <div class="row form-group">
        <div class="col-sm-2">
          Post Salary:
        </div>
        <div class="col-sm-10">
          <input type="text" name="salary" id="salary" class="form-control" value="{{$job->salary ?? ''}}">
        </div>
      </div>
      <div class="row form-group">
        <div class="col-sm-2">
          Expirence :
        </div>
        <div class="col-sm-10">
          <input type="text" name="expirence" id="expirence" class="form-control" value="{{$job->expirence ?? ''}}" >
        </div>
      </div>
      <div class="row form-group">
        <div class="col-sm-2">
            Vacancy :
        </div>
        <div class="col-sm-10">
            <input type="text"  name="vacancy" id="vancacy" class="form-control" value="{{$job->vacancy ?? ''}}"> 
        </div>
      </div>
      <div class="row form-group">
        <div class="col-sm-2">
          Time :
        </div>
        <div class="col-sm-10">
          <select name="time" id="time" class="form-control" value="{{$job->time ?? ''}}">
            <option>Part-Time</option>
            <option>Full-Time</option>
            <option>Remote</option>
          </select>
          {{-- <input type="text" name="time" id="time" class="form-control">  --}}
        </div>
      </div>
      <div>

      </div>
      <div class="row form-group">
        <div class="col-sm-6">
          <input type="submit" class="btn btn-success form-control">
        </div>
        <div class="col-sm-6">
          <input name="reset " class="btn btn-danger form-control" type="reset">
        </div>
      </div>
    </form>
  </div>
  </body>
</html>
