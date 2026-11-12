<?php
// Email details
$to = "palace0261@naver.com";
$subject = "Test Email";
$message = "This is a test email sent from PHP.";
$headers = "From: your-email@example.com";

// Send email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully to $to";
} else {
    echo "Failed to send email.";
}
?>