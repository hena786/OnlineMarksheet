<html>
    <head>
        <title>Login </title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
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
                    <form id="LoginForm">
                        
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="inputId">Login Id</label>
                            </div>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" id='inputId'>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="inputPass">Password</label>
                            </div>
                            <div class="col-sm-12">
                            <input type="password" class="form-control" id='inputPass'>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                            </div>
                            <div class="col-sm-12">
                                <input type="submit" class="btn btn-success btn-lg" id="Submit" style="border-bottom: 3px solid #000; border-radius: 50px;">
                            </div>
                        </div>
                        
                        
                    </form>
                </div>
            </div>
        </div>
        
    </body>
</html>