<?php

if(isset($_POST['submit']))
{
    $firstname =$_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
    $subject = "New Message on Portfolio";
    
    $mailTo = "shreyasbhosale@csu.fullerton.edu";
    $headers = "From: $firstname<$mailFrom>";
    
    $mail_body = "You've received an email from ".$firstname.".\n\n".$message;
    
    if(mail($mailTo,$subject, $mail_body, $headers)){
        echo "Thank You! I will be with you shortly";
    
    }
    else{
        echo "Error, you need to submit the form!";
    }
}



?>