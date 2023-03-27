<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    {{-- <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script> --}}
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <section class="content">
      <div class="row form-group">
        <div class="col-sm-12">
          <table>
            <tr>
                <td> <img height="250px" width="250px" src="/img/company/{{Auth::guard('company')->user()->image}}"></td>
                <td>
                    <table>
                        <tr><td><h2>{{Auth::guard('company')->user()->name}}</h2></td></tr>
                        <tr><td>{{Auth::guard('company')->user()->email}}</td></tr>
                        <tr><td>{{Auth::guard('company')->user()->contact}}</td></tr>
                        <tr><td>{{Auth::guard('company')->user()->location}}</td></tr>
                    </table>
                </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <table>
          <tr><td colspan="2"><h3>Students Rating & Review</td></tr>
          <tr>
            <td colspan='2'>
              <table>
                  @foreach ($ratings as $rating)
                  <tr>
                    <td><img class="rounded-circle" width="40px" height="40px" src="/img/student/{{$rating['user']['image']}}"/></td>
                    <td>{{$rating['user']['name']}}</td><tr>
                    {{-- <tr><td colspan="2">{{$rating['rating_id']}}</td><tr> --}}
                    <tr><td colspan="2">{{$rating['rating']}}</td><tr>
                    <tr><td colspan="2">{{$rating['review']}}</td><tr>
                    <tr><td colspan="2">
                      @if($rating['status']==1)
                        <a class="updateRatingStatus" id="rating-{{$rating['rating_id']}}" rating_id="{{$rating['rating_id']}}" href="javascript:void(0)"><i class="fa fa-toggle-on" aria-hidden="true" status="Active"></i> </a>
                      @else
                        <a class="updateRatingStatus" id="rating-{{$rating['rating_id']}}" rating_id="{{$rating['rating_id']}}" href="javascript:void(0)"><i class="fa fa-toggle-off" aria-hidden="true" status="Inactive"></i></a>
                      @endif
                    </td><tr>

                   {{--  <tr><td colspan="2">{{$rating['status']}}</td><tr> --}}
                  @endforeach
              </table>
              
            </td>
          </tr>
          </table>
        </div>
      </div>
      <p id = "para"></p>
    </section>
    <script type="text/javascript">
      $(document).ready(function(){
        
        $(document).on("click",".updateRatingStatus",function(){
         
         var status=$(this).children("i").attr("status");
        var rating_id=$(this).attr("rating_id");
          $.ajax({
      
          headers:{
            'X-CSRF_TOKEN':$('meta[name="csrf-token"]').attr('content')
          },
          type:'post',
          url:'/company/update-rating-status',
          data:{status:status,rating_id:rating_id},
          success:function(resp){
            if(resp['status']==0)
            {
              $("#rating-"+rating_id).html("<i class="fa fa-toggle-off" aria-hidden="true" status="Inactive"></i>")
            }
            else if(resp['status']==1)
            {
              $("#rating-"+rating_id).html("<i class="fa fa-toggle-on" aria-hidden="true" status="Inactive"></i>")
            }
          },error:function(){
            alert("Error");
          }
        });  
      });
      });

      </script>
  </body>
</html>