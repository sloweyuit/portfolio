<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    // Validate and sanitize inputs (you can add more thorough validation)
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $subject = filter_var($subject, FILTER_SANITIZE_STRING);
    $message = filter_var($message, FILTER_SANITIZE_STRING);

    // Check if required fields are not empty
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all required fields.";
    } else {
        // Email recipient
        $to = "truonglevinhphuc2006@gmail.com";  // Replace with your email address

        // Email subject
        $email_subject = "Contact Form Submission: $subject";

        // Email headers
        $headers = "From: $name <$email>\r\n";
        $headers .= "Reply-To: $email\r\n";

        // Send the email
        if (mail($to, $email_subject, $message, $headers)) {
            echo "Your message has been sent. Thank you!";
        } else {
            echo "Sorry, there was an error sending your message.";
        }
    }
} else {
    // Redirect or handle the case when the form is not submitted via POST
    echo "Invalid request.";
}
?>
