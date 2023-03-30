<!doctype html>
<html lang="en">
  <head>
    <title>JobList</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style> 
    a{
      color:black;
      text-decoration:none;
    }
    .rate {
            float: left;
            height: 46px;
            padding: 0 10px;
            }
            .rate:not(:checked) > input {
            position:absolute;
            display: none;
            }
            .rate:not(:checked) > label {
            float:right;
            width:1em;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:30px;
            color:#ccc;
            }
            .rated:not(:checked) > label {
            float:right;
            width:1em;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:30px;
            color:#ccc;
            }
            .rate:not(:checked) > label:before {
            content: '★ ';
            }
            .rate > input:checked ~ label {
            color: #ffc700;
            }
            .rate:not(:checked) > label:hover,
            .rate:not(:checked) > label:hover ~ label {
            color: #deb217;
            }
            .rate > input:checked + label:hover,
            .rate > input:checked + label:hover ~ label,
            .rate > input:checked ~ label:hover,
            .rate > input:checked ~ label:hover ~ label,
            .rate > label:hover ~ input:checked ~ label {
            color: #c59b08;
            }
            .star-rating-complete{
               color: #c59b08;
            }
            .rating-container .form-control:hover, .rating-container .form-control:focus{
            background: #fff;
            border: 1px solid #ced4da;
            }
            .rating-container textarea:focus, .rating-container input:focus {
            color: #000;
            }
            .rated {
            float: left;
            height: 46px;
            padding: 0 10px;
            }
            .rated:not(:checked) > input {
            position:absolute;
            display: none;
            }
            .rated:not(:checked) > label {
            float:right;
            width:1em;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:30px;
            color:#ffc700;
            }
            .rated:not(:checked) > label:before {
            content: '★ ';
            }
            .rated > input:checked ~ label {
            color: #ffc700;
            }
            .rated:not(:checked) > label:hover,
            .rated:not(:checked) > label:hover ~ label {
            color: #deb217;
            }
            .rated > input:checked + label:hover,
            .rated > input:checked + label:hover ~ label,
            .rated > input:checked ~ label:hover,
            .rated > input:checked ~ label:hover ~ label,
            .rated > label:hover ~ input:checked ~ label {
            color: #c59b08;
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
        <table cellpadding="15" cellspacing="10">
        @foreach ($companies as $company)
          <tr class="company">
            <td><img height="250px" width="250px" src="/img/company/{{$company->image}}"></td>
            <td>
              <table>
                <tr><td><a href="{{route('joblist',$company->company_id)}}"><input type="hidden"value="{{$company->company_id}}"></a></td></tr>
                <tr><td><a href="{{route('joblist',$company->company_id)}}"><h2>{{$company->name}}</h2></a></td></tr>
                <tr><td>{{$company->location}}</td></tr>
                <tr><td>{{$company->email}}</td></tr>
                <tr><td><h4>{{$company->contact}}</h4><br></td></tr>
                <tr><td><h4>{{$company->location}}</h4> <br></td></tr>
                <th><a href="{{url('/appliedCompanyStudentList',$company->company_id)}}" class="btn btn-primary">Apply</a></th>
              </table>
            </td>
          </tr>
        </table>
      </div>
      <div class="row"><h2>Ratings & Reviews</h2></div>
      <div class="row">
        <div class="col mt-4">
           <form class="py-2 px-4"  style="box-shadow: 0 0 10px 0 #ddd;background-color:rgb(151, 242, 242);" method="POST" action="{{url('/ratingsuccess')}}" >
              @csrf
              <p class="font-weight-bold ">Review</p>
              <input type="text" name="id" value="{{Auth::User()->id}}" class="form-control"/><br>
              <input type="text" name="company_id" value="{{$company->company_id}}" class="form-control"/>
              <div class="form-group row">
                 <div class="col">
                    <div class="rate">
                       <input type="radio" id="star5" class="rate" name="rating" value="5"/>
                       <label for="star5" title="text">5 stars</label>
                       <input type="radio" id="star4" class="rate" name="rating" value="4"/>
                       <label for="star4" title="text">4 stars</label>
                       <input type="radio" id="star3" class="rate" name="rating" value="3"/>
                       <label for="star3" title="text">3 stars</label>
                       <input type="radio" id="star2" class="rate" name="rating" value="2">
                       <label for="star2" title="text">2 stars</label>
                       <input type="radio" checked  id="star1" class="rate" name="rating" value="1"/>
                       <label for="star1" title="text">1 star</label>
                    </div>
                 </div>
              </div>
              <div class="form-group row mt-4">
                 <div class="col">
                    <textarea class="form-control" name="review" rows="6 " placeholder="Add your reviews" maxlength="200"></textarea>
                 </div>
              </div>
              <div class="mt-3 text-right">
                <input type="submit" value="Submit" class="btn btn-sm py-2 px-3 btn-info"/>
              </div>
           </form>
        </div>
     </div>
      <div class="row">
        <table>
          @foreach ($jobs as $job)
            <tr>
              <td>
                <table>
                    <tr><td><h1>{{$job->name}}</h1></td></tr>
                    <tr><td>{{$job->salary}}</td></tr>
                    <tr><td>{{$job->vacancy}}</td></tr>
                    <tr><td><h4>{{$job->experience}}</h4><br></td></tr>
                    <tr><td><h4>{{$job->description}}</h4> <br></td></tr>
                    <hr>
                  </table>
              </td>
            </tr>
          @endforeach
        </table>
      </div>
      @endforeach
    </div>
  </body>
</html>
