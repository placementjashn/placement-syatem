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

  @foreach ($companies as $company)
    <div  class="card">
      <div class="container">
          <img  style="width:100%" src="img/company/{{$company->image}}" >
          <h2>{{$company->name}}</h2>
          <h4>{{$company->email}}</h4>
          <h4>{{$company->contact}}</h4>
          <h4>{{$company->location}}</h4> 
      </div>
    </div>
  @endforeach
    
</body>
</html>