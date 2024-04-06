<?php
$to = 'charlesofili622@gmail.com';
$subject = 'Test Email';
$message = 'This is a test email to check if your server can send emails.';
$headers = 'From: charlesofili622@gmail.com';

if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully!';
} else {
    echo 'Failed to send email. Check your server configuration.';
}
?>
