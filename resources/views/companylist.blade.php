<html>
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <title>Company List</title>
</head>
<style> 
  a{
    color:black;
    text-decoration:none;
  }
  </style>
<body>
  <form action="{{url('/compare/{company_id}')}}" method="POST">
  <table cellpadding="15" cellspacing="10">
   
  @foreach ($companies as $company)
        <tr>
          <td> <img height="250px" width="250px" src="img/company/{{$company->image}}"></td>
          <td>
            <table>
              <tr><td><a href="{{route('joblist',$company->company_id)}}"><input type="hidden" value="{{$company->company_id}}"></a></td></tr>
              <tr><td><a href="{{route('joblist',$company->company_id)}}"><h1>{{$company->name}}</h1></a></td></tr>
              <tr><td>{{$company->location}}</td></tr>
              <tr><td>{{$company->email}}</td></tr>
              <tr><td><h4>{{$company->contact}}</h4><br></td></tr>
              <tr><td><h4>{{$company->location}}</h4> <br></td></tr>
              <button>
              @auth
                  <a href="{{route('compare',$company->company_id)}}"><input type="hidden" value="{{$company->company_id}}"> 
                  <a href="javaScript:void(0)" class="btn btn-primary" onclick="saveToCompareList('{{$company->company_id}}','{{Auth::User()->id}}')">Add To Compare</a>
              @endauth
              @guest
                  <a href="javascript:void(0)" class="btn btn-primary" onclick="saveToCompareList('{{$company->company_id}})','0')">Add To Compare</a>
              @endguest
              </button>
            </table>
          </td>
        </tr>
  @endforeach
  </table>
  <script>
    function saveToCompareList(company_id,id){
      if(id == 0){
        alert("Login is required To compare the company");
      }else{
        alert("User_ID"+ id);
          $.ajax({
          "url":"{{route("storecomparelist")}}",
          "method":"POST",
          "data":{company_id:company_id,id:id,_token: '{{csrf_token()}}'},
          success:function(resp){
            alert(resp);
          },
          error:function(error){
            alert(error);
          }
        })  
      }
    }
  </script>
</body>
</form>
</html>
