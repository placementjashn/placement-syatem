<!doctype html>
<html lang="en">
  <head>
    <title>Compare company</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
 <!--  <style>
    div{
      border: 3px solid black;
    }
  </style>
  --> <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> \
    <form action="" method="post">
      <h1>company comparison</h1>
      <div class="container-fluid">
      <div class="sticky-top">
          <div class="card">
            <h5 class="card-title">Compare</h5>
            <div class="input-group">

               <input id="search" name="search" type="text" placeholder="Compare Company"><button>search</button>
              {{--<div class="input-group-append">
                <span class="input-group-text" id="basic-addon2"><i class="fa fa-search"></i></span>
              </div> --}}
              <ul class="nav nav-tabs">
                <select>
                  <option disabled selected="selected">Selected Item</option>
                  @foreach ($companies as $company)
                    <option value="{{$company->company_id}}">{{$company->name}}</option>
                  @endforeach  
                </select>
                <select>
                  <option disabled selected="selected">Selected Item</option>
                  @foreach ($companies as $company)
                    <option value="{{$company->company_id}}"> {{$company->name}}</option>
                  @endforeach  
                </select>
                <select>
                  <option disabled selected="selected">Selected Item</option>
                  @foreach ($companies as $company)
                  <option value="{{$company->company_id}}">  {{$company->name}}</option>
                @endforeach  
                </select>
{{--                 <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Employee List</a>
                  <div class="dropdown-menu">
                      @foreach ($data as $val)
                          <a class="dropdown-item" value="{{$val->name}}" href="">{{$val->name}}</a>
                      @endforeach  
                  </div>
              </li> --}}
              </ul>
              {{-- <input type="text" placeholder="Compare Company">
              <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2"><i class="fa fa-search"></i></span>
              </div>
              
              <input type="text" placeholder="Compare Company">
              <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2"><i class="fa fa-search"></i></span>
              </div> --}}
            </div>            
          <div>
        </div>
      </div>
    </form>
   {{--  <form method="" action="">
        <div class="row">
          <div class="col-sm-3">
            <b>Company Details</b>
          </div>
          <div class="col-sm-3">
            {{-- @foreach($companies as $company) 
              <table>
                  <thead>
                  </thead>
                  <tbody>
                    <th></th>
                    <tr>
                      <td>{{-- {{$company->$email}} <td> 
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            {{-- @endforeach 
          </div>
          <div>
          </div class="col-sm-3">
            <input type="button" value="value">
          </div>
        </div class="col-sm-3">
      </div>
    </form> --}}
  </body>
</html>
<script>
  $(document).ready(function()
  {
    function clear_icon()
    {
      $('#id_icon').html('');
      $('#post_title_icon').html('');
    }
    
    //image
    function feach_data(page,sort_type,sort_by,query)
    {
      $.ajax({
        url:"/pagintion/fetch_data?page="+page+"&sortby"
            +sort_by+"&sorttype"+sort_type+"&query"+query,
        success:function(data)
        {
          $('tbody').html('');
          $('tbody').html(data);
        }
      })
    }

    //search
    $(document).on('keyup','#serach',function(){
      var query = $("#search").val();
      var column_name = $("#hidden_column_name").val();
      var sort_type = $("#hidden_sort_type").val();
      var page =$("hidden_page").val();
      feach_data(query,column_name,sort_type,page);
    });

    //asc desc order
    $(document).on('click','.sorting',function(){
      var column_name=$(this).data('column_name');
      var order_type=$(this).data('sorting_type');
      var revers_order ='';

      if(order_type == 'asc')
      {
        $(this).data('shorting_type','desc');
        revers_order = 'desc';
        clear_icon();
        $('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-top"></span>');
      }
      if(order_type == 'desc')

      {
        $(this).data('sorting_type','asc');
        revers_order = 'asc';
        clear_icon
        $('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-top"></span>');
      }

      $('#hidden_column_name').val(column_name);
      $('#hidden_sort_type').val(revers_order);
      var page = $('#hidden_page').val();
      feach_data(page,revers_order,column_name);
    });

    //pagination
    $(document).on('click','.pagination a',function(event)
    {
      event.preventDefault();
      var page = $(this).attr('href').split('page=')[1];
      $('#hidden_page').val(page);
      var column_name = $("#hidden_column_name").val();
      var sort_type = $("#hidden_sort_type").val();
      var query = $("#serach").val();
      $('li').removeClass('active');
      $(this).perent().addClass('active');
      feach_data(page,revers_order,column_name,query);
    });

  })
</script>
