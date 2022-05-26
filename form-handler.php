<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form ='taniasahani@gmail.com';

$email_subject ="New form submission";

$email_body ="User Name : $name.\n"
             "User Email : $nvisitor_email.\n".
             "Subject : $subject.\n".
             "User Message : $message .\n";

$to = 'taniasahani2002@gmail.com';

$headers= "From: $email_from \r\n";

$headers= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");



?>