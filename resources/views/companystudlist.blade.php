<!doctype html>
<html lang="en">
  <head>
    <title>view post</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
    a{
     color: black; 
    }
  </style>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <div class="row">
    <div class="col-lg-12">
      <ul class="nav nav-pills mb-3">
          <li class="nav-item"><a href="" data-toggle="tab" class="nav-link btn-primary mr-1 slow active">List View</a></li>
          <li class="nav-item"><a href="" data-toggle="tab" class="nav-link btn-primary ">Grid View</a></li>
      </ul>
    </div>
    <div class="col-lg-12">
      <div class="row tab-content">
          <div id="list-view" class="tab-pan fed active show col-lg-12 ">
            <div class="card">
                <div class="crad-haeder">
                  <h4 class="card-title">All Student List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                      <table id="example3" class="display" style="min-width :845px">
                          <thead>
                            <tr>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Contact No</th>
                              <th>Location</th>
                              <th>Resume</th>
                            </tr>
                          </thead>
                          <tbody> 
                          @foreach ($data as $user)
                          <tr>
                            <td>
                            <img class="rounded-circle" width="35" src="img/student/{{$user->image}}">
                            </td>
                            <td><strong>{{$user->name}}</strong></td>
                            <td><strong>{{$user->email}}</strong></td>
                            <td><strong>{{$user->contact}}</strong></td>
                            <td><strong>{{$user->location}}</strong></td>
                            <td><strong><a width="35" href="img/student/{{$user->resume}}" target="_resume"><i class="fa fa-file"></i> {{$user->name}}</a></strong></td>
                            <td><i class="fa fa-download"><a width="35" href="img/student/{{$user->resume}}" target="_resume"></a></td>
                          </tr>
                          @endforeach
                          </tbody>
                      </table>
                  </div>
                </div>
            </div>
          </div>
      </div> 
    </div>
     
  </div id="grid-view" class="tab-pane fade col-lg-12">
  <div class="row">
    @foreach($data as $user)
    <div class="col-lg-4 co-md-6 col-sm-6 col-12">
        <div class="card card-profile">
          <div class="crad-header justify-content-end pb-0">
              <div class="drop  down">
                  <button class="btn btn-link" type="button" data-toggle="dropdown">
                    <span class="dropdown-dots fs-1"></span>
                  </button>
                  <div class="dropdown-menu dropdown-meanu-rigth border py-0">
                      <div class="py-2">
                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                        <a class="dropdown-item terxt-danger" href="javascript:void(0);">Delete</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="card-body pt-2">
              <div class="text-center">
                  <div class="profile-photo">
                    <img class="rounded-circle" width="100" src="img/student/{{$user->image}}">
                  </div>
                  <h3 class="mt-4 mb-1">{{$user->name}}</h3>
                  <p class="text-muted">{{$user->email}}</p>
                  <ul class="list-group mb-3 list-group-flush">
                      <li class="list-group-item px-0 d-flex justify-content-between">
                        <span>Contact no.</span><strong>{{$user->contact}}</strong></li>
                      <li class="list-group-item px-0 d-flex justify-content-between">
                        <span>Loaction.</span><strong>{{$user->location}}</strong></li>
                  </ul>
                <a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="about-student.html">Read More</a>
              </div>
          </div>
        </div>
    </div>
    @endforeach
  </div>
  </div>

  </div>






    {{-- <div class="container">
      <div class="row">
        <table class="table">
         {{--  <pre>
            {{print_r($Addpost)}}
          </pre> 
          <tbody>
            @foreach ($data as $user)
            <div class="card-deck">  
            <div class="card-block">
              <div class="card">
                <img class="card-img-top" src="img/student/{{$user->image}}" width="300px" height="200px" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><b>{{$user->name}}</b></h5>
                  <p class="card-text">Email :{{$user->email}}<br>
                    Contact :{{$user->contact}}<br>
                    Location :{{$user->location}}<br>
                    Resume :{{$user->resume}}<br>
                  </p>
                </div>
              </div>
            </div>
            </div>
            @endforeach
          </tbody>
        </table>
      </div> 
     </div> --}}
  </body>
</html>
  </body>
</html>
