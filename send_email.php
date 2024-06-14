<?php
$recipient = "luxbusiness@web.de"; // Replace with recipient's email
$subject = "Your Reward is Here!";
$message = "Have fun with your Spotify Premium, babeee!!! 💖";

$headers = "From: lucadiego.1@web.de"; // Replace with your email

if (mail($recipient, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
?>
