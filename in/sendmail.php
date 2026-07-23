<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');
require 'vendor/autoload.php';

// Capture form input safely
$name    = $_POST['name'] ?? 'No Name';
$email   = $_POST['email'] ?? 'noemail@example.com';
$subject = $_POST['subject'] ?? 'No Subject';
$message = $_POST['message'] ?? 'No message provided.';

$mail = new PHPMailer; // Default uses PHP mail()

// From address and name
$mail->From = "info@girafcreatives.com"; 
$mail->FromName = $name;

// Recipient(s)
$mail->addAddress("muhsin.giraf@gmail.com", "Muhsin"); 
$mail->addAddress("demo@girafcreatives.com"); // Optional: internal copy
$mail->addReplyTo($email, $name); // Reply-to sender

// Email content
$mail->isHTML(true); 
$mail->Subject = $subject; 
$mail->Body    = "<strong>Name:</strong> {$name}<br>
                  <strong>Email:</strong> {$email}<br>
                  <strong>Message:</strong><br>{$message}";
$mail->AltBody = "Name: $name\nEmail: $email\nMessage:\n$message";

// Send mail
if (!$mail->send()) {
    echo json_encode(['status' => 'error', 'message' => 'Mailer Error: ' . $mail->ErrorInfo]);
} else {
    echo json_encode(['status' => 'success', 'message' => 'Message has been sent successfully']);
}
?>
