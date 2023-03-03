<!doctype html>
<html lang="en">
  <head>
    <title>Company Dashboard</title>

    
    <!-- font - awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
</head>
  <body>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        jQuery(document).ready(function($){
            $('.counter').counterUp({
            delay: 10,
            time: 1000
            });
        })
    </script>
    <style>
        .bg{
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.8),rgba(83,150,243,0.5)),url(/webimg/b.webp);
            background-position: center;
            background-size: cover;
            position: relative;
        }
        .row{
            width: 85%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
        .col{
            flex-basis: 22%;
            text-align: center;
            color: #555;
        }
        .counter-box{
            width: 100%;
            height:100%;
            background: #fff;
            padding: 20px 0;
            border-radius: 5px;
            box-shadow: 0 0 20px -4px #66676c;
        }
        h2,span{
            display: inline-block;
            margin: 15px 0;
            font-size: 50px;
            color: #000;
        }
        .counter-box .fa{
            font-size: 40px;
            color: rgb(20, 20, 75);
            display: block;
        }
    </style>

    <form class="bg">
        <!-- Nav tabs --> 
        <ul class="nav nav-tabs">
            <li>
                  <img src="/webimg/logo a.gif" height="45px" width="45px" />
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
                <i class="fa fa-user-plus"></i><a href="{{url('/addemp')}}" class="nav-link"> Add Employee </a>
            </li>
            <li class="nav-item"> 
                <a href="#" class="nav-link">All Student</a>
            </li>
            
            <li class="nav-item">
                <i class="fa fa-sign-in"></i><a href="{{url('/loginemp')}}" class="nav-link"> Employee Login </a>
            </li>
            
        </ul>
           
        <div class="row">
            <div class="col">
                <div class="counter-box">
                    <i id="hide1" class="fa fa-handshake-o" ></i> <h2 class="counter">255</h2><span class="counter">+</span><h4>Placement Total</h4>
                </div>
            </div>
            <div class="col">
                <div class="counter-box">
                    <i id="hide1" class="fa fa-snowflake-o" ></i> <h2 class="counter">21</h2><h4>Total Gudie</h4>
                </div>
            </div>
            <div class="col">
                <div class="counter-box">
                    <i id="hide1" class="fa fa-calendar-plus-o" > </i><h2 class="counter">50</h2><h4>Company</h4>
                </div>
            </div>
            <div class="col">
                <div class="counter-box">
                    <i id="hide1" class="fa fa-comment" ></i> <h2 class="counter">130</h2><h4>Student</h4>
                </div>
            </div>
        </div>
    </form>
</body>
</html>