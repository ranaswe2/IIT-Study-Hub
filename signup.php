<?php
session_start();
error_reporting(0);
require_once 'connect.php';
      

 $name=$_POST['name2'];
 $email=$_POST['email2'];
 $pass=$_POST['pass2'];
 $re_pass=$_POST['repass2'];


 if(strcmp($pass,$re_pass)==0){
    $password=$pass;
    $query="INSERT into  `users`(`name`,`email`,`password`) 
    values('$name','$email','$password');";

    if($conn->query($query)){
        $_SESSION['email']=$email;
        require_once('dashboard.php');
    }
    else {
        echo "<script language='javascript'> alert('Failed to create an account. Try again later.');</script>";
        require_once 'home.php';
        }
 }


?>