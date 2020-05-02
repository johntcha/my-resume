<?php 

if(isset($_POST['submit'])) {
  if(trim($_POST['name']) === '') {
  } 
  else {
    $name = trim($_POST['name']);
  }

  if(trim($_POST['email']) === '')  {
  } 
  else if (!preg_match('/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+.[a-z]{2,4}$/i', trim($_POST['email']))) {
  } 
  else {
  $email = trim($_POST['email']);
  }

  if(isset($_POST['message']) && trim($_POST['message']) === '') {
  } 
  else {
    $message = trim($_POST['message']);
  }

 //if(!isset($hasError)) {

    $subject = 'Vous avez un message de'.$name;

    $body = 'Name: $name nnEmail: $email nnComments: $message';

    $headers = 'From: '.$name.' <'.$email.'>' . 'rn' . 'Reply-To: ' . $email;

    mail('johntcha94@gmail.com', $subject, $body, $headers);
    $emailSent = true;

  //}

} ?>