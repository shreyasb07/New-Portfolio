<?php

if(!isset($_POST['submit']))
{
    echo "Error, you need to submit the form!";
}

$firstname =$_POST['firstname'];
$lastname = $_POST['lastname'];
$mailFrom = $_POST['email'];
$message = $_POST['message'];

$mailTo = "shreyasbhosale@csu.fullerton.edu";
$headers = "From: ".$mailFrom;

$mail_body = "You've received an email from ".$firstname.".\n\n".$message;

mail($mailTo, $mail_body, $headers);

header("Location: index.html?mailsend");
echo "Thank You!";
?>
