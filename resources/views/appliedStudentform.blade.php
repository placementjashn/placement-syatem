<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        form{
            width:700px;
        }
    </style>
        <script>
            function validateForm() {
            let x = document.forms["myForm"]["fname"].value;
            if (x == "") {
                alert("Name must be filled out");
                return false;
            }
            }
        </script>
{{--
         $(document).ready(function()
        {
           /*  alert('helooo');
           var jobname =$('#jobname').val();
           /* alert(jobname);
           var qulification =$('#qulification').val();
           var experience =$('#experience').val();


            $('#btnsubmit').click(function () {
                alert("okay");
                if(jobname == "")
                {
                    alert('submit first');
                    return false;
                }
            });
        });  --}}
  </head>
  <body>
     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <form method="POST" action="{{url('/appliedCompanyStudentList')}}" name="myForm">
        @csrf
        <div class="container">
            @foreach ($jobs as $job)
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
            <div class="row form-group">
                <div class="col-sm-12">
                Company Id
                        {{-- <input type="text" name="job_id" value="{{$job->job_id}}"> --}}
                    <input class="form-control" name="company_id" value="{{$job->company_id}}"/>    
                </div>
            </div>
            <div class="row form-group">
                Job Id
                <div class="col-sm-12">
                   <input class="form-control" name="job_id" value="{{$job->job_id}}" READONLY/>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-12">
                   <input class="form-control" name="job_name" value="{{$job->name}}" READONLY/>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                   <input class="form-control" name="jobDescription" value="{{$job->description}}" READONLY/>
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
                    Student Id
                    <input type="text" class="form-control" name="userid" value="{{Auth::User()->id }}" readonly/>
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
                    <select class="form-control" name="qulification" id="qulification" required>
                        <option selected disabled>Highest Completed Qualification</option>
                        <option>Under Graduate</option>
                        <option>Graduate</option>
                        <option>Post Graduate</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <select class="form-control" name="experience" id="experience" required>
                        <option selected disabled>Years of Experience</option>
                        <option>Freshers</option>
                        <option>1 to 3 year</option>
                        <option>3 or Above year</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <input type="submit" id="btnsubmit" class="btn btn-primary" value="Submit">
                </div>
            </div>
            @endforeach
        </div>
    </form>
  </body>
</html>
