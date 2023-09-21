<?php
   $to_email = "govindrmdhl8@gmail.com";
   $subject = $_POST['subject'];
   $body = $_POST['message'];
   $headers = "From: ".$_POST["email"]."\r\n";
 
   if ( mail($to_email, $subject, $body, $headers)) {
      echo("Email successfully sent to $to_email...");
   } else {
      echo("Email sending failed...");
   }
 
?>