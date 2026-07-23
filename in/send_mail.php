<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');
require 'vendor/autoload.php';

// Your Google reCAPTCHA secret key
$recaptchaSecret = '6Le7ggIrAAAAAJL3u9oJOgKDlli3W1HnROlyST0o';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if reCAPTCHA response is present
    if (!isset($_POST['g-recaptcha-response'])) {
        echo json_encode([
            'status' => 'error',
            'message' => 'reCAPTCHA verification failed. Please try again.'
        ]);
        exit;
    }

    // Verify reCAPTCHA with Google
    $recaptchaResponse = $_POST['g-recaptcha-response'];
    $userIP = $_SERVER['REMOTE_ADDR'];
    $verifyURL = "https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$recaptchaResponse}&remoteip={$userIP}";
    
    $response = file_get_contents($verifyURL);
    $responseKeys = json_decode($response, true);

    if (!$responseKeys["success"]) {
        echo json_encode([
            'status' => 'error',
            'message' => 'reCAPTCHA validation failed. Please confirm you are not a robot.'
        ]);
        exit;
    }

    // Collect form data
    $name    = $_POST['firstname'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $message = $_POST['msg'];
    $subject = $_POST['subject'];

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration (Webmail)
        $mail->isSMTP();
        $mail->Host       = 'mail.girafcreatives.com'; 
        $mail->SMTPAuth   = true;
        $mail->Username   = 'demo@girafcreatives.com';         // Replace with your Webmail address
        // $mail->Username   = 'demo@giraf.in';         // Replace with your Webmail address
        $mail->Password   = '%J)B0pmzdGzt';       // Replace with Webmail password
        $mail->SMTPSecure = 'tls';                         // Use 'ssl' if your provider requires it
        $mail->Port       = 587;                           // Or 465 for SSL

        // Recipients
        $mail->setFrom('demo@girafcreatives.com', 'Message From Giraf Creatives'); // Sender
        $mail->addAddress('info@girafcreatives.com');
        $mail->addAddress('muhsin.giraf@gmail.com');                 // Recipient (can be same as above)
        $mail->addReplyTo($email, $name);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Message From Giraf Creatives';
        $mail->Body = '
            <div style="max-width:600px;margin:0 auto;border:1px solid #ddd;padding:20px;font-family:sans-serif;background:#f9f9f9;">
                <h2 style="color:#333;border-bottom:1px solid #ddd;padding-bottom:10px;">📩 ' .  htmlspecialchars($subject) . '</h2>
                <table cellpadding="10" cellspacing="0" width="100%" style="color:#333;">
                    <tr>
                        <td width="30%"><strong>Name:</strong></td>
                        <td>' . htmlspecialchars($name) . '</td>
                    </tr>
                    <tr>
                        <td><strong>Email:</strong></td>
                        <td>' . htmlspecialchars($email) . '</td>
                    </tr>
                    <tr>
                        <td><strong>Phone:</strong></td>
                        <td>' . htmlspecialchars($phone) . '</td>
                    </tr>
                    <tr>
                        <td valign="top"><strong>Message:</strong></td>
                        <td>' . nl2br(htmlspecialchars($message)) . '</td>
                    </tr>
                </table>
                <p style="margin-top:30px;font-size:12px;color:#888;">This message was sent from the contact form on <a href="https://girafcreatives.com/in" style="color:#0066cc;">girafcreatives.com</a>.</p>
            </div>
        ';

        $mail->send();

        echo json_encode([
            'status' => 'success',
            'message' => 'Mail sent successfully.'
        ]);
    } catch (Exception $e) {
        echo json_encode([
            'status' => 'error',
            'message' => "Message could not be sent. Error: {$mail->ErrorInfo}"
        ]);
    }
}
?>
