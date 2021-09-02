<?php
require 'common.php';
$email= mysqli_escape_string($con,$_POST['email']);
$pass= mysqli_escape_string($con,$_POST['password']);
$query="select id,email,passwor from users where email='$email' and passwor='$pass'";
$query_result= mysqli_query($con, $query);
if(mysqli_num_rows($query_result)==0){
    echo 'No user Found';
   // header('location:login.php');
}else{
    $result= mysqli_fetch_array($query_result);
    $_SESSION['email']=$result['email'];
    $_SESSION['id']=$result['id'];
    header('location:products.php');
}
?>
