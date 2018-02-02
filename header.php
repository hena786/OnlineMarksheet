<?php
//include 'function.php';
//$con = connect_db();
//$result = mysqli_query($con, "select * from users");

?>
<html>
    <head>
        <title>Home </title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <!--sidebar-->
        <div class="col-sm-4 col-sm-4">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="img/baby.jpg">
        </div>
            <div class="useravatar">
                <img alt="" src="img/forest.jpg">
            </div>
            <div class="card-info"> <span class="card-title">Admin</span>

            </div>
    </div>
            <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                <div class="btn-group" role="group">
                    <button type="button" id="stars" class="btn" href="#profile" data-toggle="tab" style="background-color: #6F0638; color: #fff;">
                        <div class="hidden-xs"> Profile</div>
                    </button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" id="stars" class="btn " href="#pass" data-toggle="tab" style="background-color: #075B70; color: #fff;">
                        <div class="hidden-xs">Change Password</div>
                    </button>
                </div>
                <div class="btn-group" role="group">
                    <a id="stars" class="btn " href="logout.php"  style="background-color: #4A235A;color: #fff;">
                        <div class="hidden-xs">Logout</div>
                    </a>
                </div>


            </div>

        <div class="well">
      <div class="tab-content">
<!--          profile-->
        <div class="tab-pane fade in active" id="profile">
            <h3 style="text-align: center; color: #512E5F;">Profile Summary</h3>
            <div class="col-lg-12">
                    <div class="form-group">
                        <label class="col-lg-6 control-label">School Name</label>
                        <div class="col-lg-6">
                            <p>
                                <?php
                                $con = connect_db();
                                $result = mysqli_query($con, "select * from users");
                                $row = mysqli_fetch_array($result);
                                echo $row['sname']; 
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-6 control-label">Principal Name</label>
                        <div class="col-lg-6">
                            <p><?php
                            $con = connect_db();
                            $result = mysqli_query($con, "select * from users");
                            $row = mysqli_fetch_array($result);
                            echo $row['pname']; 
                            ?>
                            </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-6 control-label">Address</label>
                        <div class="col-lg-6">
                            <p><?php echo $row['address']; ?></p>
                        </div>
                    </div>
                        <div class="form-group">
                            <label class="col-lg-6 control-label">Phone Number</label>
                            <div class="col-lg-6">
                                <p><?php echo $row['phone']; ?></p>
                            </div>
                        </div>
            </div>
              
            <button type="button" class="btn btn-danger btn-lg">Modify!!!</button>
 
        </div>
        <div class="tab-pane fade in" id="pass">
            <h3 style="text-align: center; color: #512E5F;">Change Password </h3>
            <div class="col-lg-12">
                <form class="form-horizontal" id="changePass">
                        <fieldset>
<!--                            <div class="form-group">
                                <div class="col-lg-6">
                                    <input type="hidden" value="<?php echo $id; ?>" class="form-control input-sm" id="inputPassId">
                                </div>
                            </div>-->
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <label for="inputOld" class="control-label">Current Password</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="password" class="form-control input-sm" id="inputOld">
                                </div>
                                <div class="col-lg-6" id="validOld">
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <label for="inputNew" class="control-label">New Password</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="password" class="form-control input-sm" id="inputNew">
                                </div>
                                <div class="col-lg-6" id="validNew">
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <label for="inputCnfm" class="control-label">Confirm Password</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="password" class="form-control input-sm" onkeyup="matchPass()" id="inputCnfm">
                                </div>
                                <div class="col-lg-6" id="validCnfm">
                                    
                                </div>
                            </div> 
                        </fieldset>
                    </form>
                
            </div>
            <button type="reset" class="btn btn-default btn-lg">Cancel!!!</button>
            <button type="submit" class="btn btn-danger btn-lg">Submit!!!</button>
            
        </div>
<!--        logout-->
            
        
      </div>
    </div>
    
    </div>
            <script>
        $(document).ready(function() {
    $(".btn-pref .btn").click(function () {
        $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
        // $(".tab").addClass("active"); // instead of this do the below 
        $(this).removeClass("btn-default").addClass("btn-primary");   
    });
    });
</script>
    </body>
</html>