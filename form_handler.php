<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'info@eduford.com';
$email_subject = 'New Form Submission';
$emait_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message .\n";

$to = 'avinash6252@gmail.com' ;

$headers = "From: $emait_from \r\n";

$headers .= "Reply—To: $visitor_email \r\n";

mail ($to ,$email_subject ,$email_body, $headers);

header ("Locåtion: contact.html");
?>