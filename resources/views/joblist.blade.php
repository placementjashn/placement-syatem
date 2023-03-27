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
    </style>
  
  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <table cellpadding="15" cellspacing="10">
      <div class="row">
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
                <th><a href="{{url('/appliedCompanyStudentList',$company->company_id)}}"><button>Apply</button></a></th>
              </table>
            </td>
          </tr>
        @endforeach
      </div>
      <div class="row">
        @foreach ($jobs as $job)
          <tr>
            <td>
              <table>
                  <tr><td><h1>{{$job->name}}</h1></td></tr>
                  <tr><td>{{$job->salary}}</td></tr>
                  <tr><td>{{$job->vacancy}}</td></tr>
                  <tr><td><h4>{{$job->experience}}</h4><br></td></tr>
                  <tr><td><h4>{{$job->description}}</h4> <br></td></tr>
                </table>
              </td>
        </tr>
      @endforeach
       
      </table>
  </body>
</html>