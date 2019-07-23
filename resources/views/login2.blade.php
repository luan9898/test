<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <form action="#" method="POST" role="form">
            <legend>Login</legend>
                <div class="alert-danger error" slyle="display: none;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p style="color:red; display:none;" class="error login"></p>
                </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="{{old('email')}}">
                <p style="color:red; display:none;" class="error email"></p>
            </div>   
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                <p style="color:red; display:none;" class="error password"></p>

            </div>
            <div class="form-group">
                <input type="checkbox" name="remember" > remember
            </div>
            <button id="dang-nhap" type="submit" class="btn-primary">login</button>
        
        </form>

        <script>
            $(function(){
                $('#dang-nhap').click(function(e){
                    e.preventDefault();
                    
                });
                $.ajax({
                    url: 'login2',
                    type: 'POST',
                    data: {
                        'email' : $('#email').val(),
                        'password' : $('#password').val(),
                    },
                    success: function(data){
                        console.log(data);
                        if (data.error == true){
                            $('.error').hide();
                            if (data.message.email != undefined){
                                $('.errorEmail').show().text(data.message.email[0]);

                            }
                            if (data.message.password != undefined){
                                $('.errorPassword').show().text(data.message.password[0]);
                            }
                            if (data.message.errorLogin != undefined){
                                $('.errorLogin').show(),text(data.message.errorLogin[0]);

                            }
                        }else{
                            window.location.href = "http://localhost:81/project/public/";
                        }
                    }

                });
            });
        </script>
    </body>
</html>