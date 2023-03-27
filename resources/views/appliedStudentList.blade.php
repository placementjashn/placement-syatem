<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        form{
            width:700px;
        }
    </style>
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <form method="POST" action="{{url('/appliedCompanyStudentList')}}" >
        @csrf
        <div class="container">
            <div></div>
                <div class="row form-group">
                <div class="col-sm-12">
                    <h2>Kindly fill-up all of the details below.</h2>
                </div>
            </div>
            <hr>
            <div class="row form-group">
                <div class="col-sm-12">
                    <h4>Position Applied for</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    @foreach ($jobs as $job)
                        {{-- <input type="text" name="job_id" value="{{$job->job_id}}"> --}}
                        <input type="hidden" name="company_id" value="{{$job->company_id}}">
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <select class="form-control" name="jobname" required>
                        <option selected disabled>Selected</option>
                        @foreach($jobs as $job)
                            <option>{{$job->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <b><hr></b>
            <p>_______________________________________________________________________</p>
            <div class="row form-group">
                <div class="col-sm-12">
                    <h4>Personal Details</h4>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="username" value="{{Auth::User()->name }}" required/>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="contact" value="{{Auth::User()->contact }}" required/>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="{{Auth::User()->email}}" required/>
                </div>
            </div>
            <hr>
            <p>_______________________________________________________________________</p>
            <div class="row form-group">
                <div class="col-sm-12">
                    <h4>Educational & Experience Details</h4>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-6">
                    <select class="form-control" name="qulification" required>
                        <option selected disabled>Highest Completed Qualification</option>
                        <option>Under Graduate</option>
                        <option>Graduate</option>
                        <option>Post Graduate</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <select class="form-control" name="experience" required>
                        <option selected disabled>Years of Experience</option>
                        <option>Freshers</option>
                        <option>0 - 3</option>
                        <option>3 - 5</option>
                        <option>5 - Above</option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-12">
                    id<input type="text" class="form-control" name="id" value="{{Auth::User()->id }}" required/>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <input type="submit" value="Submit" class="btn btn-primary">
                </div>
            </div>
        </div>
    </form>
  </body>
</html>
