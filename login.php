<?php
session_start();
error_reporting(0);
if(isset($_SESSION['id'])){
       header("location: dashboard.php",  true,  302 );  exit;
}

  require_once('connect.php');

     $email=$_POST['email'] ;
     $pass=$_POST['password'];

     if(isset($email) && isset($pass)){
        $query="SELECT * from `users` where `email`='$email' and `password`= '$pass';";
        $result=$conn->query($query);
        //$num_result = $result->num_rows;
        $row = $result->fetch_assoc();
        
        if($row['id']!="" || $row['id']!=null){
            $_SESSION['id']= $row['id'];
       header("location: dashboard.php",  true,  302 );  exit;
        }
     else{
     echo "<script language='javascript'> alert('Incorrect Email or Password.');</script>";
    require_once('home.php');
     }
       
     }

?>