<html>
    <head>
        <title>Login </title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body style="background-image: url('img/body.jpg'); 
          -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;">
        <div class="container" style="margin-top: 150px;">
            
            <div class="row" >
                <div class="col-sm-4 col-sm-offset-4 jumbotron" >
                    <img src="img/login.gif" height="50px" width="200px">
                    <form class="form-horizontal" id="userLogin">
                        
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="inputId" class="control-label" >Login Id</label>
                            </div>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id='inputId'>
                            </div>
                        </div>
                        <div id="validId">
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="inputPass" class="control-label">Password</label>
                            </div>
                            <div class="col-sm-12">
                            <input type="password" class="form-control" id='inputPass'>
                            </div>
                        </div>
                        <div id="validPass">
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                            <input type="checkbox" name="rememberme" value="Remember Me">
                            <span><label for="remember">Remember Me</label></span>
                            </div>
                        </div>
                        <div class="form-group">
                            
                            <div class="col-sm-12">
                                <input type="submit" class="btn btn-danger btn-lg" id="Submit" style="border-bottom: 8px solid #000; border-radius: 50px;" value="Log In">
                            </div>
                        </div>
                        <div id="signIn">
                        </div>
                        
                        
                    </form>
                </div>
            </div>
        </div>
        <script>
            $("#userLogin").submit(function(e){
                e.preventDefault();
                $('#signIn').html('');
                var id = $('#inputId').val();
                var password = $('#inputPass').val();
                if(id === '' || password === ''){
                    $('#signIn').html('<p>Invalid Credential</p>');
                }else
                {
                     var dataString = "id="+id+"&password="+password;
                     // AJAX Code To Submit Form.
                    $.ajax({
                        type: "POST",
                        url: "module/login_mod.php",
                        data: dataString,
                        cache: false,
                        success: function(result){
                            if(result === 'success'){
                                window.location.replace('home.php');
                            }else{
                                $('#signIn').html('<p>'+result+'</p>');
                            }
                        }
                    });
                }
            });
            
        </script>
    </body>
</html>