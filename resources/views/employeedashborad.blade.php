<!doctype html>
<html lang="en">
  <head>
    <title>employee dashborad</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Nav tabs -->
    <form>
        <ul class="nav nav-tabs" id="navId">
          <li class="nav-item">
            <a href="#tab1Id" class="nav-link active">Home</a>
          </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Post</a>
                <div class="dropdown-menu">
                    <a href="{{url('/addpost')}}" class="nav-link"> Add Post </a>
                    <a href="{{url('/view')}}" class="nav-link"> Manage Post </a>
                </div>
            </li>
            <li class="nav-item">
                <a href="#tab5Id" class="nav-link">Student list 
                </a>
            </li>
           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profile</a>
              <div class="dropdown-menu">
                <a href="#" class="nav-link">Profile</a>
                <a href="{{url('/logout')}}" class="nav-link" >Logout</a>
              </div>
          </li>
        </ul>
    </form>
  </body>
</html>