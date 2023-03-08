<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <table class="table">
         {{--  <pre>
            {{print_r($Addpost)}}
          </pre> --}}
          <thead>
            <tr>
              <th>Name </th>
              <th>E-mail </th>
              <th>Contact </th>
              <th>Location </th>
              <th>Image </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($companies as $company)
            <tr>
              <td>{{$company->name}}</td>
              <td>{{$company->email}}</td>
              <td>{{$company->contact}}</td>
              <td>{{$company->location}}</td>
              <th>{{$company->vacancy}}</th>
              {{-- <th><a href="{{route('delete',$addpost->job_id)}}"><button class="btn btn-danger">Delete</button></a></th>
              <th><a href="{{route('edit',$addpost->job_id)}}"><button class="btn btn-info">Edit</button></a></th> --}}
            </tr>
            @endforeach
            <tr>
              <td>
               
            </td>
            <td>
                
            </td>
            </tr>
          </tbody>
        </table>
      </div>
</body>
</html>