<html>
<head>
    <title>Company List</title>
</head>

<style>
 
  a{
    color:black;
    text-decoration:none;
  }
  </style>
<body>
  <table cellpadding="15" cellspacing="10">
   
  @foreach ($companies as $company)
        <tr>
          <td> <img height="250px" width="250px" src="img/company/{{$company->image}}"></td>
          <td>
            <table>
              <tr><td><a href="{{route('joblist',$company->company_id)}}"><input type="hidden"value="{{$company->company_id}}"></a></td></tr>
              <tr><td><a href="{{route('joblist',$company->company_id)}}"><h1>{{$company->name}}</h1></a></td></tr>
              <tr><td>{{$company->location}}</td></tr>
              <tr><td>{{$company->email}}</td></tr>
              <tr><td><h4>{{$company->contact}}</h4><br></td></tr>
              <tr><td><h4>{{$company->location}}</h4> <br></td></tr>
            </table>
          </td>
    </tr>
  @endforeach
   
  </table>
</body>
</html>