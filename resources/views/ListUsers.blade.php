<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>list user</title>
        <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css">

   </head>
    <body>
        
    <form action="/project/public/search" method="GET" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="search" class="form-control" name="search"
            placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search">SEARCH</span>
            </button>
        </span>
    </div>
</form>    
    <div class="col-xs-8 col-xs-offset-2" style="margin-top:50px;">
            <table class="table table-hover">
                <tr>
                    <td>Name</td>
                    <td>Username</td>
                    <td>Email</td>
                    <td>edit</td>
                    <td>delete</td>
                </tr>
               
                <?php foreach($Users as $User): ?>
                    <tr>
                        <td>{{ $User->name}}</td>
                        <td>{{ $User->username}}</td>
                        <td>{{ $User->email}}</td>
                        <td>
                            <a href="user/<?php echo $User['id']?>/edit">edit</a>
                            
                        </td>
                        <td><a href="user/<?php echo $User['id']?>/delete ">delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            
        </div>
    </body>
</html>
