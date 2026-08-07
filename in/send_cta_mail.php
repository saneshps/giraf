<?php
/**
 * Homepage CTA form mailer only.
 * 1) Internal notification → info@girafcreatives.com
 * 2) Auto-reply confirmation → the user who submitted the form
 */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();
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

$safeName    = htmlspecialchars($name);
$safeEmail   = htmlspecialchars($email);
$safePhone   = htmlspecialchars($phone);
$safeSubject = htmlspecialchars($subject !== '' ? $subject : 'Homepage CTA');
$safeMessage = nl2br(htmlspecialchars($message));

$replacements = [
    '{{name}}'    => $safeName,
    '{{email}}'   => $safeEmail,
    '{{phone}}'   => $safePhone,
    '{{message}}' => $safeMessage,
    '{{subject}}' => $safeSubject,
];

function fillTemplate($file, $replacements) {
    $template = file_get_contents($file);
    foreach ($replacements as $key => $value) {
        $template = str_replace($key, $value, $template);
    }
    return $template;
}

function configureSmtp(PHPMailer $mail) {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'saneshbigleap@gmail.com';
    $mail->Password   = 'bzxvsgeinuwisdkt';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
    $mail->CharSet    = 'UTF-8';
}

try {
    // 1) Internal notification
    $mail = new PHPMailer(true);
    configureSmtp($mail);

    $mail->setFrom('info@girafcreatives.com', 'Giraf Creatives');
    $mail->addReplyTo($email, $name);
    // Test recipient — add original mail after testing, e.g.:
    // $mail->addAddress('info@girafcreatives.com');
    $mail->addAddress('info@girafcreatives.com');

    $mail->isHTML(true);
    $mail->Subject = $subject !== ''
        ? $subject
        : 'New Message From Homepage CTA';
    $mail->Body = fillTemplate('email-template.html', $replacements);
    $mail->send();

    // 2) Auto-reply to the user
    $reply = new PHPMailer(true);
    configureSmtp($reply);

    $reply->setFrom('info@girafcreatives.com', 'Giraf Creatives');
    $reply->addAddress($email, $name);
    $reply->addReplyTo('info@girafcreatives.com', 'Giraf Creatives');

    $reply->isHTML(true);
    $reply->Subject = 'Thank you for contacting Giraf Creatives';
    $reply->Body = fillTemplate('email-auto-reply.html', $replacements);
    $reply->send();

    $_SESSION['cta_thank_you_name'] = $name;

    echo json_encode([
        'status' => 'success',
        'message' => 'Thank you! Your message has been sent.',
        'redirect' => 'thank-you.php'
    ]);
} catch (Exception $e) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Message could not be sent. Please try again later.',
        'debug' => isset($mail) ? $mail->ErrorInfo : (isset($reply) ? $reply->ErrorInfo : $e->getMessage()),
    ]);
}
