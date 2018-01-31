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
        
        <div class="container form-container" style="margin-top: 30px;">
            <div class="row">
            <div class="col-sm-8 col-sm-offset-2 jumbotron">
                    <form id="Form">
                        <fieldset>
                            <legend>Hello, Please Provide Your Details</legend>
                            <div class="form-group">
                                <label for="inputName" class="text1">Name of the School</label>
                                <input type="text" onfocus="this.value=''" class="form-control" id="inputName" value = "Enter School Name" style="font-size: 15px;">
                            </div>
                            <div class="form-group" id="validateName">
                                
                            </div>
                            <div class="form-group">
                                <label for="inputAdd"  class="text1"> Address of the School</label>
                                <input type="text" onfocus="this.value=''" class="form-control" id="inputAdd" value = "Enter Address " style="font-size: 15px;">
                            </div>
                            <div class="form-group" id="validateAdd">
                                
                            </div>
                            <div class="form-group">
                                <label for="inputDist"  class="text1"> District</label>
                                <input type="text" onfocus="this.value=''" class="form-control" id="inputDist" value = "Enter District" style="font-size: 15px;">
                            </div>
                            <div class="form-group" id="validateDist">
                                
                            </div>
                            <div class="form-group">
                                <label for="inputState"  class="text1"> State</label>
                                <input type="text" onfocus="this.value=''" class="form-control" id="inputState" value = "Enter State" style="font-size: 15px;">
                            </div>
                            <div class="form-group" id="validateState">
                                
                            </div>
<!--                            <div class="form-group">
                              <label for="inputPhone" class="text1"> Phone Number</label>
                              <input type="number" class="form-control" id="inputPhone" placeholder="Password" style="font-size: 15px;">
                            </div>-->
                            <div class="form-group" id="validatePhone">
                                
                            </div>
                            <div class="form-group">
                              <label for="inputAdmin" class="text1">Name of Admin</label>
                              <input type="text" onfocus="this.value=''" class="form-control" id="inputAdmin" value = "Name of Admin" style="font-size: 15px;">
                            </div>
                            <div class="form-group" id="validateAdmin">
                                
                            </div>
                            <button type="submit" class="btn btn-primary">Save Settings !!!</button>
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
                $('#validateDist').html("");
                $('#validateState').html("");
                $('#validateAdmin').html("");
                var name = $('#inputName').val();
                var Add = $('#inputAdd').val();
                var Dist = $('#inputDist').val();
                var state = $('#inputState').val();
                var admin = $('#inputAdmin').val();
                
                if(name === ''){
                   $('#validateName').html("<h6 class='text-right'>*School name is compulsory</h6>");
                }
                if(Add === ''){
                    $('#validateAdd').html("<h6 class='text-right'>*Address is compulsory</h6>");
                }
                if(Dist === ''){
                    $('#validateDist').html("<h6 class='text-right'>*Provide District here</h6>");
                }
                if(state === ''){
                    $('#validateState').html("<h6 class='text-right'>*Provide State here</h6>");
                }
                if(admin === ''){
                    $('#validateAdmin').html("<h6 class='text-right'>*Provide name of Admin</h6>");
                }
                if(name !== '' && Add !== '' && Dist !== '' && state !== '' && admin !== ''){
                    var dataString = "name="+name+"&Add="+Add+"&Dist="+Dist+"&state="+state+"&admin="+admin;
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