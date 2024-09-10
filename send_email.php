<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Set the recipient email address
    $to = "sales@360acpl.com"; // Replace with your email address
    //  $to = "tomarvaishnavi01@gmail.com"; // Replace with your email address

    // Set the email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Compose the email content
    $full_message = "Name: $name\n";
    $full_message .= "Email: $email\n";
    $full_message .= "Subject: $subject\n";
    $full_message .= "Message:\n$message\n";

    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    if (mail($to, $subject, $full_message, $headers)) {
        echo "<script>alert('Message sent successfully!'); window.location.href = 'index.php';</script>";
    } else {
        error_log("Mail failed to send to $to", 0);
        echo "<script>alert('Message could not be sent. Please try again later.')";
        //  window.location.href = 'index.php';</script>";
    }
    
} else {
    echo "Invalid request method.";
}
?>
