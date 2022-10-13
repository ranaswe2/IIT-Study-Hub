<?php
session_start();
error_reporting(0);
require_once 'connect.php';

if(isset($_POST['title']) && isset($_POST['type'])){
    $title=$_POST['title'];
    $type=$_POST['type']; 
    $description= $_POST['description'];
    $fileContent="";
    if($title!="" && $type!=""){
    if( !empty($_FILES['fname']['name'])){
        
        $file_path= "img/";  //'C:\xampp\htdocs\PGDITAdmissionAutomation\photo\     
        
        $file= basename($_FILES['fname']['name']);      
        $fileName = $file_path. $file; 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('pdf','doc','docx','ppt','pptx','png','jpg','gif'); 
        
        if(in_array($fileType, $allowTypes)){ 
            $pdf = $_FILES['fname']['tmp_name']; 
            $pdfContent = addslashes(file_get_contents($pdf)); //If we want to upload original file
                if (move_uploaded_file($_FILES['fname']['tmp_name'], $fileName)) {
                    $fileContent= $file;
                }
                
        }else{
            echo "<script language='javascript'> alert('Your file is not of any pdf,doc,docx,ppt,pptx,png,jpg or gif document.');</script>";
        }
          
    }
    
     
        $result1= $conn->query("INSERT INTO `files`(`id`, `file_name`, `type`, `title`, `description`) VALUES (".$_SESSION['id'].",'$fileContent','$type','$title','$description')");
        
        if($result1==true){
            echo "<script language='javascript'> alert('Success! File has uploaded.');</script>";
        
            $title="";
            $type="";
            
        }
 else {
     
            echo "<script language='javascript'> alert('Sorry! File has not uploaded.');</script>";
 }
    
    $conn->close();
    }
}

            
       header("location: dashboard.php",  true,  302 );  exit;
?>


