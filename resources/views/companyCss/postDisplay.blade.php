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
    <div class="container">
        <div class="row">
            @foreach ($jobs as $job)
            <div class="col-sm-6">
                <div class="card" style="border:solid 5px black;border-radius: 20px;">
                    <div class="card-header">
                        {{$job->name}}
                    </div>
                    <div class="card-body">
                    <blockquote >
                        <table>
                            <tr><td>Salary</td><td>: {{$job->salary}}</td></tr>
                            <tr><td>Experience</td><td>: {{$job->expirence}}</td></tr>
                            <tr><td>Vaccancy</td><td>: {{$job->vaccancy}}</td></tr>
                            <tr><td>Description</td><td>: {{$job->description}}</td></tr>
                            <tr><td>Time</td><td>: {{$job->time}}</td></tr>
                        </table>
{{--                         <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
 --}}                    </blockquote>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
