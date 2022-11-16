<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject =$_POST['subject'];
$message = $_POST['message'];
$to ="anirbanmahataofficial@gmail.com";

$headers="From: ".$name."\r\n" .
"cc:contactanirban@anirbanmahata.in";

$txt=" E-mail from ".$name
."\r\nSubject:".$subject 
."\r\nEmail: ".$email 
."\r\nMessage: ". $message;

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
header('Location:thankyou.html');
?>