<?php
include '../function.php';
$con = connect_db();
?>

<?php
if($_POST['id'] !== '' && $_POST['password'] !== ''){
                $id = ($_POST['id']);               
                $pass = md5($_POST['password']);
                        $check = mysqli_query($con, "Select * from users where phone = '$id' and password = '$pass'");
                            if(mysqli_num_rows($check) == 0){
                                echo 'Invalid Login Id or Password';
                            }else{
                                $row = mysqli_fetch_array($check);
                                $_SESSION['stu'] = $row['id'];
                                echo '<script> window.location.href = "home.php" </script>';
                            }
                              
                            
            }else{
               header("Location: ../setup.php");
                    
            }
            
            



















//if(isset($_POST['id']))
//{
//    if(isset($_POST['rememberme'])){
//        setcookie('stu', $_POST['id'], time()+60*60*24, '/');
//        } else{
//    $id = $_POST["id"];
//    $pass = $_POST["password"];
//    
   
//    $check = mysqli_query($con , "select * from login where login_id = '$id' and password = '$pass'");
//            if(mysqli_num_rows($check) === 0){
//                echo 'Invalid Login Id / Password';
//            }else{
//                    $row = mysqli_fetch_array($check);
//                    $_SESSION['student'] = $row['id'];
//                    echo 'success';
////            header('location: ../home.php');
//                }
//}
//}else{
//        header("Location: ../setup.php");
//                    
//            }
            
