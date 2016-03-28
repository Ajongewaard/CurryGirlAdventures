<?php
  /* 
  PHP code is placed within these PHP
  brackets. This type is a comment wrapped
  between the forward slash and stars symbols. 
  */

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
 
  $to = "pillaiadventures.com";
  $subject = "Pillai Adventures";
  $emailcontent= "From: $name \n Likes Your Site: $like \n\n $message";
  $mailheader = "From: $email";
  mail($to, $subject, $emailcontent, $mailheader) or header('Location: emailerror.html');
  $thank_you_url = '../thank-you.html';
  header('Location: '.$thank_you_url);
?>