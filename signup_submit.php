<?php
require 'common.php';
$name= mysqli_escape_string($con, $_POST['fullname']);
$email=mysqli_escape_string($con, $_POST['email']);
$password=mysqli_escape_string($con, $_POST['password']);
$phone=$_POST['phone'];
$city=mysqli_escape_string($con, $_POST['city']);
$address=mysqli_escape_string($con, $_POST['address']);
$select_query="Select id from users where email='$email'";
$result= mysqli_query($con, $select_query) or die($result);
if(mysqli_num_rows($result)==0){
    $query="insert into users (name, email, passwor, contact, city,address) values('$name','$email','$password','$phone','$city','$address');";
    $insert_query= mysqli_query($con, $query) or die(mysqli_error($con));
    $_SESSION['email']=$email;
    $_SESSION['id']= mysqli_insert_id($con);
    header('location:products.php');
}else{
    echo 'Email ID is Already in Use';
}

?>