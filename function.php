<?php
//Session start
session_start();
//connect to database
function connect_db()
{
    $con = mysqli_connect("localhost", "root", "", "marksheet");
    if($con){
        return $con;
    }
    else{
        die('could not connect');
    }
}



//Check Login
function loggedin(){
    if(isset($_COOKIE['stu']) || isset($_SESSION['stu'])){
        $loggedin= TRUE;
        return $loggedin;
    }
}
