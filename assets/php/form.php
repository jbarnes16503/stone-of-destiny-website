<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$query = $_POST['query'];
$formcontent=" From: $name \n Phone: $phone \n Email: $email \n Query: $query";
$recipient = "contactform@stratagemstone.com";
$subject = "Contact Form";
$mailheader = "From: $recipient \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
?>