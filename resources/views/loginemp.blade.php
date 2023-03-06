<!doctype html>
<html lang="en">
  <head>
    <title>Employee Login</title>

    <!-- font - awesome -->
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

      <!-- Bootstrap CSS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      
  </head>

  <style>
    body{
        color: #000000;
    }
    form{
            width: 450px;
            color: #ffffff;
            border-radius: 30px; 
            
    }
    .input-Box{
            padding-top: 20px;
            padding-bottom: 10px; 
            background: transparent;
    }
    input{  
            border-bottom: 2px solid rgb(255, 255, 255);
            border-top: none;
            border-left: none;
            border-right: none;
            background: transparent;
            outline: none;
            color: #e0e6eb;
        }
    #hide1{
            display: none;
    }
    span.eay{
            position: absolute;
    }
    .fa{
            margin-right: 10px;
            color: #ffffff;
        }
    a:link{
            text-decoration: none;    
    }     
    a:visited{
        color: rgb(255, 255, 255);
    }
    .btn {
            font-size: 18px;
            color: #0a0b33;
            background-color: #e0e6eb;
            border: 2px solid #ffffff;
            border-radius: 80px;
            box-shadow: #0a0b33 0 -12px 8px inset;
            width: 150px;
            height: 40px;
            text-align: center;
            margin: 10px;
    } 
    ::placeholder{
            color:rgb(255, 255, 255);
    }
    fieldset{
        margin-top: 20px;
        background-color: #0a0b33;
        border-radius: 30px;
        padding-bottom: 20px
    }
    
</style>

{{-- <script>
    $(document).ready(function(){
    var i;
    for(i=1;i<1000;i++)
    $("h1").fadeIn(2000).fadeOut()
        /* $("h1").fadeToggle(); */
    });
</script>

<script type="text/javascript">

    /* javascript for password hide/show */
    function pwdHide()
    {
        var x = document.getElementById("password");
        var y = document.getElementById("hide1");
        var z = document.getElementById("hide2");
        if(x.type === 'password'){
        x.type = "text";
        y.style.display = "block";
        z.style.display = "none";
        }
        else{
        x.type = "password";0
        y.style.display = "none";
        z.style.display = "block";
        }
    }
</script> --}}

  <body>
  
    <center>
    <form action="{{url('/loginemp')}}" method="post">
        @if(Session::has('success'))
        <div class="alert alert-success">{{session::get('success')}}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{session::get('fail')}}</div>
        @endif
        @csrf
                <fieldset><legend><img src="/img/log3.jpeg" height="90" width="100" class="rounded-circle"></legend>
                <div class="row">
                    <div class="col-sm-12">
                        <center><h1>Login</h1></center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 input-Box">
                        <i class="fa fa-user-circle"></i><input type="email" size="25" autocomplete="off" placeholder="Enter Email" value="{{old('email')}}" class="form-group" name="email"/>
                        <br><span class="text-secondary">@error('email') {{$message}} @enderror</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 input-Box">
                        <i class="fa fa-key"></i><input type="password" size="25" placeholder="Enter Password" class="form-group" name="password"/>
                        {{-- <span class="eay" onclick=" pwdHide()">
                            <i id="hide1" class="fa fa-eye"  ></i>
                            <i id="hide2" class="fa fa-eye-slash" ></i> --}}
                        </span>
                        <br><span class="text-secondary">@error('password') {{$message}} @enderror</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <input type="submit" value="Login" class="btn form-group" />
                    </div>
                </div>
    </form>
    </center>
</body>
</html>