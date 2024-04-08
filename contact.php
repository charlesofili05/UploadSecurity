<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $desc = $_POST['needs'];

    if (empty($name) && empty($company) && empty($email) && empty($desc)) {
        header("Location: index.php?error=1");
        exit;
    } else {
                // Construct the email message
                $emailText = "Name: $name\n";
                $emailText .= "Company: $company\n";
                $emailText .= "Email: $email\n";
                $emailText .= "Description of Needs: $desc\n";
        
                // Set the necessary email headers
                $headers = "From: $email\r\n";
                $headers .= "Reply-To: $email\r\n";
                $headers .= "X-Mailer: PHP/" . phpversion();
        
                // Send the email
                $sendTo = 'charlesofili622@gmail.com'; // Change this to the recipient's email address
                $subject = 'New message from contact form';
    
        
        if (mail($sendTo, $subject, $emailText, $headers)) {
            echo 'Email sent successfully!';
            header("Location: index.php?success=1");
        exit;
        } else {
            echo 'Failed to send email. Check your server configuration.';
            header("Location: index.php?error=2");
        exit;
        }
    }
} else {
    header("Location: index.php");
    exit;
}
