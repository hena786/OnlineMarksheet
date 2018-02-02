<?php
include 'function.php';
$con = connect_db();
?>

<html>
    <head>
        <title>Login </title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body style="background-image: url('img/body.jpg'); 
          -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;">
        
        <div class="container form-container" style="margin-top: 30px;">
            <div class="row">
            <div class="col-sm-7 col-sm-offset-3 jumbotron">
                    <form id="Form">
                        <fieldset>
                            <legend>Hello, Please Provide Your Details</legend>
                            <div class="form-group">
                                <label for="inputName" class="text1">Name of the School</label>
                                <input type="text"  class="form-control" id="inputName" placeholder = "Enter School Name" style="font-size: 12px;">
                            </div>
                            <div class="form-group" id="validateName">
                                
                            </div>
                            <div class="form-group">
                                <label for="inputAdd"  class="text1"> Address of the School</label>
                                <input type="text"  class="form-control" id="inputAdd" placeholder = "Enter Address " style="font-size: 12px;">
                            </div>
                            <div class="form-group" id="validateAdd">
                                
                            </div>                          
               
                               <div class="form-group">
                              <label for="inputAdmin" class="text1">Name of Principle</label>
                              <input type="text"  class="form-control" id="inputAdmin" placeholder = "Name of Principle" style="font-size: 12px;">
                            </div>
                            <div class="form-group" id="validateAdmin">
                                
                            </div>
                                <div class="form-group">
                              <label for="inputPhone" class="text1">Phone Number</label>
                              <input type="text"  class="form-control" id="inputPhone" placeholder="Phone Number" style="font-size: 12px;">
                            </div>
                            <div class="form-group" id="validatePhone">
                                
                            </div>

                            <div class="form-group">
                              <label for="inputPass" class="text1">Password </label>
                              <input type="password" class="form-control" id="inputPass" placeholder = "Password" style="font-size: 12px;">
                            </div>
                            <div class="form-group" id="validatePassword">
                                
                            </div>
                            <button type="submit" class="btn btn-primary"> Save Settings !!!</button>
<!--                            <button type="button" class="btn btn-success"><a href = 'login.php'>Continue to Login >>></a></button>-->
                            <div class="form-group" id="validateSubmit">
                                
                            </div>
                        </fieldset>
                    </form>
                </div>
        </div>
        </div>
        <script>
            $("#Form").submit(function(e){
                e.preventDefault();
                $('#validateName').html("");
                $('#validateAdd').html("");
                $('#validateAdmin').html("");
                $('#validatePhone').html("");
                $('#validatePassword').html("");
                var name = $('#inputName').val();
                var add = $('#inputAdd').val();
                var admin = $('#inputAdmin').val();
                var phone = $('#inputPhone').val();
                var pass = $('#inputPass').val();
                if(name === ''){
                    $('#validateName').html("<h6 class='text-danger text-right'>*School name is compulsory</h6>");
                }
                if(add === ''){
                    $('#validateAdd').html("<h6 class='text-danger text-right'>*Addtress of School compulsory</h6>");
                }
                if(admin === ''){
                    $('#validateAdmin').html("<h6 class='text-danger text-right'>*Name of Principle is compulsory</h6>");
                }
                if(phone === ''){
                    $('#validatePhone').html("<h6 class='text-danger text-right'>*Phone Number is compulsory</h6>");
                }
                if(pass === ''){
                    $('#validatePassword').html("<h6 class='text-danger text-right'>*Password is compulsory</h6>");
                }
                if(name !== '' && add !== '' && admin !== '' && phone !== '' && pass !== ''){
                    var dataString = "name="+name+"&add="+add+"&admin="+admin+"&phone="+phone+"&pass="+pass;
                    $.ajax({
                        type: "POST",
                        url: "module/setup_mod.php",
                        data: dataString,
                        cache: false,
                        success: function(result){
                            if(result === 'success'){
                                window.location.replace("login.php");
                            }else{
                                $('#validateSubmit').html(result);
                            }
                        }
                    });
                }
                
            }); 
        </script>
    </body>
</html>