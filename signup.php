<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email']; // Retrieve the email address from the form
    
    // Set the recipient email address
    $to = "info@rielart.com";
    
    // Set the subject of the email
    $subject = "New Signup";

    // Set the message body
    $message = "A new user has signed up with the email: " . $email;

    // Set additional headers
    $headers = "From: " . $email . "\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for signing up! We'll be in touch soon.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
