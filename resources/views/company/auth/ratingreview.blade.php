<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
        <!-- Bootstrap JS ,then jQuery first, then Bootstrap JS ,awesome -->
    {{-- cdn link --}}<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>  --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    {{-- switchery --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  </head>
  <style>

  </style>
  <script>
    $(document).ready( function(){
    $('.switch').each(function() {
        var checkbox = $(this).children('input[type=checkbox]');
        var toggle = $(this).children('label.switch-toggle');

        if (checkbox.length) {
            checkbox.addClass('hidden');
            toggle.removeClass('hidden');
            if (checkbox[0].checked) {
                toggle.addClass('on');
                toggle.removeClass('off');
                toggle.text(toggle.attr('data-on'));
            } else {
                toggle.addClass('off');
                toggle.removeClass('on');
                toggle.text(toggle.attr('data-off'));
            };
        }
    });

    $('.switch-toggle').click(function(){
        var checkbox = $(this).siblings('input[type=checkbox]')[0];
        var toggle = $(this);

        if (checkbox.checked) {
            toggle.addClass('off');
            toggle.removeClass('on');
            toggle.text(toggle.attr('data-off'));
        } else {
            toggle.addClass('on');
            toggle.removeClass('off');
            toggle.text(toggle.attr('data-on'));
        };
    });
});
  </script>
  <body>
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
                    <tr><td colspan="2">{{$rating['status']}}</td><tr>
                    <td>
                      <input type="checkbox" data-rating_id="{{$rating['rating_id']}}" name="status" class="js-switch" {{$rating['status'] == 1 ? 'checked' : '' }}> 
                    </td>
                  @endforeach
              </table>
              
            </td>
          </tr>
          </table>
        </div>
      </div>
      <p id = "para"></p>
    </section>
    <script>let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

      elems.forEach(function(html) {
          let switchery = new Switchery(html,  { size: 'small' });
      });

      $(document).ready(function(){
        $('.js-switch').change(function () {
            let status = $(this).prop('checked') === true ? 1 : 0;
            alert(status);
            let rating_id = $(this).data('rating_id');
            alert(rating_id);
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{ route('company.rating.status') }}',
                data: {'status': status, 'rating_id': rating_id},
                success: function (data) {
                        toastr.options.closeButton = true;
                        toastr.options.closeMethod = 'fadeOut';
                        toastr.options.closeDuration = 100;
                        toastr.success(data.message);
                        console.log(data);
                }
            });
        });
    });  
  </script>  
  </body>
</html>