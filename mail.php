<?php
$to = "you@example.com";
$subject = "TEST email";
$message = "this is a test email message";
$from = "meghp9594@gmail.com"
$headers .= "From : $from ";


mail($to,$subject,$message,$headers);

echo"Mail sent.";
?>