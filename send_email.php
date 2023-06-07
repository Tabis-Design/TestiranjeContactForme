<?php
function sendEmail() {
  // Retrieve form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Set email recipient
  $to = 'nitkovnitkovic123@gmail.com';

  // Set email subject and body
  $subject = 'New Message from Contact Form';
  $body = "Sender's Name: $name\n";
  $body .= "Sender's Email: $email\n";
  $body .= "Message: $message\n";

  // Set email headers
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Send the email
  if (mail($to, $subject, $body, $headers)) {
    echo 'Email sent successfully!';
  } else {
    echo 'Oops! An error occurred while sending the email.';
  }
}

// Call the sendEmail function if the request is made via AJAX
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
  sendEmail();
}
?>
