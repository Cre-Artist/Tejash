<?php
 
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
    header('Content-type: text/javascript');

 if(isset($_GET['name'],$_GET['mobile'],$_GET['email'],$_GET['message'] ) ){
    
     $a=$_GET['name'];
    $c=$_GET['mobile'];
    $b=$_GET['email'];
    $d=$_GET['message'];
   
    // mail function //
    $to = "coreunlocked@gmail.com, tejashverma32@gmail.com";  
    $subject = "Contact Us Enquery";
    $message = "Dear Partner,\n Name :".$a."\n Email id :" .$b. "\n Contact Number = " .$c."\nMassage :".$d."\nThank you";
    $headers = "from: tejashverma32@gmail.com";
    
    if(mail($to,$subject,$message,$headers)){
     echo(json_encode("Your Query has been submitted, We will get back to you soon"));
     header("location:index.html")
    }else{
         header("Ah...Failed",true,500);
    }
 }
    
    
  
?>