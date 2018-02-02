<?php
include '../function.php';
$con = connect_db();
if($_POST['name'] != "" && $_POST['add'] != "" && $_POST['admin'] != "" && $_POST['phone'] != "" && $_POST['pass'] != ""){
    $name = $_POST['name'];
    $add = $_POST['add'];
    $admin = $_POST['admin'];
    $phone = $_POST['phone'];
    $pass = md5($_POST['pass']);
    if(mysqli_query($con, "insert into users (sname, address, pname, phone, password) values('$name', '$add', '$admin', '$phone', '$pass');")){
        echo 'Successfully Inserted';
    }  else {
        echo 'Cant add';    
    }
   
}

















//<?php 
//require '../function.php';
//$con = connect_db();
//if($_POST['name'] != "" && $_POST['email'] != "" && $_POST['phone'] != "" && $_POST['id'] != "" && $_POST['password'] != "" ){
//    $name = $_POST['name'];
//    $email = $_POST['email'];
//    $phone = $_POST['phone'];
//    $id = $_POST['id'];
//    $password = $_POST['password'];
//    $pass = md5($password);
//    $set = mysqli_query($con, "Insert into employee(name, email, phone, emp_id, password ) values('$name', '$email', '$phone', '$id', '$pass')");
//    if($set){
//        echo 'success';
//    }else{
//        echo 'Cant add user';
//    }
//}