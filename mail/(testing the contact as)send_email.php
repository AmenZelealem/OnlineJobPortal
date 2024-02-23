<?php
require 'mail/PHPMailerAutoload.php';

// Create a new PHPMailer instance
$mail = new PHPMailer();

// SMTP Configuration
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com'; // Your SMTP host
$mail->Port = 587; // Your SMTP port (e.g., 587 for TLS, 465 for SSL)
$mail->SMTPSecure = 'tls'; // Enable encryption, 'ssl' also accepted
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = 'nat292115@gmail.com'; // SMTP username
$mail->Password = 'cjpk ueoy tzce vcaw'; // SMTP password

// Sender and recipient settings
$mail->setFrom('alex@gmail.com', 'alex'); // Sender email and name
$mail->addAddress('nat292115@gmail.com', 'nati'); // Recipient email and name

// Email content
$mail->isHTML(true); // Set email format to HTML
$mail->Subject = '?'; // Email subject
$mail->Body = '?';

// Send the email
if ($mail->send()) {
    echo 'Email sent successfully!';
} else {
    echo 'An error occurred while sending the email: ' . $mail->ErrorInfo;
}
?>