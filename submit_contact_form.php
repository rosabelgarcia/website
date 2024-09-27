<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));
    
    // Email setup
    $to = "rosabelg.rg@gmail.com"; 
    $headers = "From: " . $email;
    $email_subject = "Contact Form: " . $subject;
    $email_body = "You have received a new message from $name.\n".
                  "Here is the message:\n$message";
    
    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong, and we couldn't send your message.";
    }
}
?>
