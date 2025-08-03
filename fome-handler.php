<?php
$name = $POST['name'];
$visitor_email = $POST['email'];
$subject = $POST['subject'];
$message = $POST['message'];

$email_form ='lakha@yourwebsite.com';

$email_subject ='New From Subission';

$email_body ="User Name: $name.\n".
              "User Email: $visitor_email.\n".
               "User Subject: $subject.\n".
               "User Message: $message.\n";
               
$to ='rohitlakha40gmail.com';

$headers ="From: $email-from \r\n";

$headers .= "Reply-To $visitor_email \r\n\";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>