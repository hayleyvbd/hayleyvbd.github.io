<?php
//fetch values
$name = $_POST['name1'];
$email = $_POST['email1'];
$subject = $_POST['subject1'];
$rrequest = $_POST['rrequest1'];
$message = $_POST['message1'];

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:' . $email. "\r\n"; // Sender's Email

$message = wordwrap($message, 70);

$to = "hayley.vb.davidson@gmail.com";
mail($to,$subject,$message,$headers);
?>