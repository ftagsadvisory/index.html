<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Perform necessary actions with the form data
  // For example, send an email using the form data
  $to = 'ayushbisht66@gmail.com';
  $subject = 'New Contact Form Submission';
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  $headers = "From: $email";

  // Send the email
  if (mail($to, $subject, $body, $headers)) {
    echo 'Message sent successfully.';
  } else {
    echo 'An error occurred. Please try again.';
  }
}
?>
