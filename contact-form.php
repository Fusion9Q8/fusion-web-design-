<?php
  $email_to="larkamanm@gmail.com";
  $headers='From: '.$_POST['email'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];
  mail($email_to,$subject,$message,$headers);
  header("Location: index.html");
?>
