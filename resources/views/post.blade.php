<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>post</title>
        <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   </head>
    <body>
    <div class="form-group">
   
  <select class="form-control"  name="item_id">
        <option value="all">all</option>
    @foreach($Users as $item)
        <option value="{{$item->username}}">{{$item->username}}</option>
    @endforeach
  </select>
    </div>  
    
    <div class="col-xs-8 col-xs-offset-2" style="margin-top:50px;">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>Username</td>
                        <td>Title</td>
                        <td>Description</td>
                        <td>edit</td>
                        <td>delete</td>
                    </tr>
                </thead>
                <tbody id="tbody">

                </tbody>
            </table>
            
        </div>
        <script>
            $("#item_id").change(function(e) {
                e.preventDefault();
                var username = $(this).val();

                $.ajax({
                    url: '/project/public/post?username=' + username
                }).done(function(res) {
                    $("#tbody").html(res);
                });
            });
        </script>
    </body>
</html>
