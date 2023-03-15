<x-company-layout>
    <!doctype html>
    <html lang="en">
      <head>
        <title>Title</title>
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
        <form >
            <!-- Nav tabs --> 
            <ul class="nav nav-tabs">
                <li>
                      <img src="/webimg/logo a.gif" height="50px" width="50px" />
                </li>
                <li class="nav-item">
                    <a href="#tab1Id" class="nav-link active">Home</a>
                </li>
    
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Employee List</a>
                    <div class="dropdown-menu">
                         @foreach ($data as $val)
                            <a class="dropdown-item" value="{{$val->id}}" href="">{{$val->empname}}</a>
                        @endforeach  
                    </div>
                </li>
                <li class="nav-item">
                    <i class="fa fa-user-plus"></i><a href="{{url('/addemployee')}}" class="nav-link"> Add Employee </a>
                </li>
                <li class="nav-item"> 
                    <a href="{{url('/companystudlist')}}" class="nav-link">All Student</a>
                </li>
                
                <li class="nav-item">
                    <i class="fa fa-sign-in"></i><a href="{{url('/loginemp')}}" class="nav-link"> Employee Login </a>
                </li>
            </ul>
        </form>
      </body>
    </html>
</x-company-layout>
