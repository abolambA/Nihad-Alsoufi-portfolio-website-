<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace 'your_email@example.com' with the actual email address where you want to receive the form submissions
    $to = "your_email@example.com";
    $subject = $_POST["subject"];
    $message = "Name: {$_POST['fname']} {$_POST['lname']}\n";
    $message .= "Email: {$_POST['email']}\n";
    $message .= "Subject: {$_POST['subject']}\n";
    $message .= "Message: {$_POST['message']}\n";

    // You can customize the headers if needed
    $headers = "From: {$_POST['email']}";

    // Send the email
    mail($to, $subject, $message, $headers);

    // Redirect to a thank you page or display a success message
    header("Location: thank_you.html");
    exit();
}
?>
