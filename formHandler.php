<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $-POST['subject'];
$message = $_POST['message'];

$email_from = 'info@testwebsite.com';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "Message: $message.\n".

$to = 'info@testgmail.com';
$headers = "From: $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>