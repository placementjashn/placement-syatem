<html>
<head>
    <title>Company List</title>
</head>

<style>
  .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 25%;
    border-radius: 5px;
  }
  
  .card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  }
  
  img {
    border-radius: 5px 5px 0 0;
  }
  
  .container {
    padding: 2px 16px;
  }
  </style>
<body>
  <table cellpadding="15" cellspacing="10">
   
  @foreach ($companies as $company)
        <tr>
          <td> <img height="250px" width="250px" src="img/company/{{$company->image}}"></td>
          <td>
            <table>
              <tr><td><h1>{{$company->name}}</h1  ></td></tr>
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