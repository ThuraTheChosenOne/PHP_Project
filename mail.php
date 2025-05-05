<?php
require_once('sessionconfig.php');
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST["fullname"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $to = "tw125966@gmail.com";
    $header = "Form $email";
    if(mail($to,$subject,$message,$header)){
       redirectto('public/webpage/blog.php');
    }else{
        echo "Email Sending Fail";
    }
}
?>