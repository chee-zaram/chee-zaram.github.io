<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Prepare email content
$to = 'ecokeke21@gmail.com';
$subject = 'New Contact Form Submission';
$body = "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Message:\n$message\n";

// Set email headers
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";

// Send the email
$mailSent = mail($to, $subject, $body, $headers);

// Check if the email was sent successfully
if ($mailSent) {
  echo 'Thank you for contacting us. We will get back to you soon!';
} else {
  echo 'Oops! An error occurred while sending your message.';
}
?>
