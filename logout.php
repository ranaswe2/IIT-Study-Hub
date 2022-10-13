<?php
session_start();

session_destroy();

header("location: home.php",  true,  302 );  exit;

?>

