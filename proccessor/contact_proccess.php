<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['msg_subject'];
    $message = $_POST['message'];

    // Check if all fields are filled
    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        // Set recipient email address
        $to = "recipient@example.com"; // Change this to your email address

        // Set email subject
        $email_subject = "New Contact Form Submission: $subject";

        // Compose email message
        $email_body = "You have received a new message from your website contact form.\n\n";
        $email_body .= "Name: $name\n";
        $email_body .= "Email: $email\n";
        $email_body .= "Subject: $subject\n";
        $email_body .= "Message:\n$message\n";

        // Set email headers
        $headers = "From: $name <$email>\r\n";
        $headers .= "Reply-To: $email\r\n";

        // Send email
        if (mail($to, $email_subject, $email_body, $headers)) {
            // Email sent successfully
            echo "Thank you for contacting us. We will get back to you soon!";
        } else {
            // Failed to send email
            echo "Oops! Something went wrong. Please try again later.";
        }
    } else {
        // Required fields are missing
        echo "Please fill in all fields.";
    }
} else {
    // Form not submitted, redirect to homepage or display an error message
    echo "Form submission error.";
}
?>
