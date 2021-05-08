<?php
echo "Hello";

$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject = $_POST['subject'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$email_from = 'musaddikmoulavi@gmail.com';
$email_subject = $_POST['subject'];
$email_body = "User Name: $name.\n".
               "Subject: $subject.\n".
              "User Phone: $phone.\n".
              "User Email: $visitor_email.\n".
              "User Message: $message.\n";

$to = "musaddikmoulavi@gmail.com";

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location:contacts.html");
?>
