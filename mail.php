<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['emailaddress'];
$message= $_POST['message'];
$to = "simplesuperdevelopers@gmail.com";
$subject = "Mail From Contact us.html";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@https://simplesuperdevelopers1.web.app/.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>