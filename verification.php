<?php
session_start();
//error_reporting(0);
require_once 'connect.php';
  
$otp= sprintf("%06d", mt_rand(100000,999999));

        $to_address='rana2514@student.nstu.edu.bd';
        //$to_address=$_SESSION['email'];
         $subject= "IIT Study Hub";
         $mailcontent= "Your account verification code is: ".$otp;
         $from_address= "From: election.divs@gmail.com";//rana2514@student.nstu.edu.bd
         
        $result= $conn->query("UPDATE `users` SET `otp`=$otp WHERE email='rana2514@student.nstu.edu.bd'");
        //$result= $conn->query("UPDATE `users` SET `otp`=$otp WHERE email='$to_address'");
        
        if (mail($to_address, $subject, $mailcontent,$from_address)) {
        
     echo "<script language='javascript'> alert('Check your Email for verification code.');</script>";
}
        
        else {
      header("location: home.php",  true,  302 );  exit;
            
}
        
        
?>

