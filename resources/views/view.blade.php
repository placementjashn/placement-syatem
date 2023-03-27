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
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="container">
      <div class="row">
        <table class="table">
         {{--  <pre>
            {{print_r($Addpost)}}
          </pre> --}}
          <thead>
            <tr>
              <th>Name </th>
              <th>Description </th>
              <th>Salary </th>
              <th>Expirence </th>
              <th>Vacancy </th>
              <th>Timmimg </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($job as $addpost)
            <tr>
              <td>{{$addpost->name}}</td>
              <td>{{$addpost->description}}</td>
              <td>{{$addpost->salary}}</td>
              <td>{{$addpost->expirence}}</td>
              <th>{{$addpost->vacancy}}</th>
              <th>{{$addpost->time}}</th>
              <th><a href="{{route('delete',$addpost->job_id)}}"><button class="btn btn-danger">Delete</button></a></th>
              <th><a href="{{route('edit',$addpost->job_id)}}"><button class="btn btn-info">Edit</button></a></th>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
