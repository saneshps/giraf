<?php
/**
 * Homepage CTA form mailer only.
 * Test recipient: saneshbigleap@gmail.com
 * After testing, add the original address (e.g. info@girafcreatives.com) below.
 */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');

require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method.'
    ]);
    exit;
}

$name    = trim($_POST['firstname'] ?? '');
$email   = trim($_POST['email'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['msg'] ?? '');

if ($name === '' || $email === '' || $phone === '') {
    echo json_encode([
        'status' => 'error',
        'message' => 'Please fill in all required fields.'
    ]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Please enter a valid email address.'
    ]);
    exit;
}

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'saneshbigleap@gmail.com';
    $mail->Password   = 'bzxvsgeinuwisdkt';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $mail->setFrom('saneshbigleap@gmail.com', 'Giraf Creatives');
    $mail->addReplyTo($email, $name);

    // Test recipient — add original mail after testing, e.g.:
    // $mail->addAddress('info@girafcreatives.com');
    $mail->addAddress('saneshbigleap@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = $subject !== ''
        ? $subject
        : 'New Message From Homepage CTA';

    $template = file_get_contents('email-template.html');
    $replacements = [
        '{{name}}'    => htmlspecialchars($name),
        '{{email}}'   => htmlspecialchars($email),
        '{{phone}}'   => htmlspecialchars($phone),
        '{{message}}' => htmlspecialchars($message),
        '{{subject}}' => htmlspecialchars($subject !== '' ? $subject : 'Homepage CTA'),
    ];

    foreach ($replacements as $key => $value) {
        $template = str_replace($key, $value, $template);
    }

    $mail->Body = $template;
    $mail->send();

    echo json_encode([
        'status' => 'success',
        'message' => 'Thank you! Your message has been sent.'
    ]);
} catch (Exception $e) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Message could not be sent. Please try again later.',
        // Uncomment while debugging SMTP issues:
        // 'debug' => $mail->ErrorInfo,
    ]);
}
