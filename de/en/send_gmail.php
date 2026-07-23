<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');

// Load PHPMailer via Composer
require 'vendor/autoload.php';

// Your secret key
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


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name   = $_POST['firstname'];
        $email   = $_POST['email'];
        $phone   = $_POST['phone'];
        $message = $_POST['msg'];
        $subject = $_POST['subject'];


        // $subject   = $_POST['form_subject'];
        // $message = $_POST['form_message'];

        $mail = new PHPMailer(true);

        try {
            // SMTP Configuration
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'info@girafcreatives.com'; 
            $mail->Password   = 'azvfazgjgyyciicd'; 
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            // Recipients
            $mail->setFrom($email, $name );
            $mail->addAddress('info@girafcreatives.com'); 

            $mail->isHTML(true);
            $mail->Subject = 'New Message From Giraf Creatives';
            // $mail->Body = '
            //     <div style="max-width:600px;margin:0 auto;border:1px solid #ddd;padding:20px;font-family:sans-serif;background:#f9f9f9;">
            //         <h2 style="color:#333;border-bottom:1px solid #ddd;padding-bottom:10px;">📩 ' .  htmlspecialchars($subject) . '</h2>
            //         <table cellpadding="10" cellspacing="0" width="100%" style="color:#333;">
            //             <tr>
            //                 <td width="30%"><strong>Name:</strong></td>
            //                 <td>' . htmlspecialchars($name) . '</td>
            //             </tr>
            //             <tr>
            //                 <td><strong>Email:</strong></td>
            //                 <td>' . htmlspecialchars($email) . '</td>
            //             </tr>
            //             <tr>
            //                 <td><strong>Phone:</strong></td>
            //                 <td>' . htmlspecialchars($phone) . '</td>
            //             </tr>
            //             <tr>
            //                 <td valign="top"><strong>Message:</strong></td>
            //                 <td>' . nl2br(htmlspecialchars($message)) . '</td>
            //             </tr>
            //         </table>
            //         <p style="margin-top:30px;font-size:12px;color:#888;">This message was sent from the contact form on <a href="https://girafcreatives.com/in" style="color:#0066cc;">girafcreatives.com</a>.</p>
            //     </div>
            // ';
            
            $template = file_get_contents('email-template.html');
            $replacements = [
                '{{name}}' => htmlspecialchars($name),
                '{{email}}' => htmlspecialchars($email),
                '{{phone}}' => htmlspecialchars($phone),
                '{{message}}' => htmlspecialchars($message),
                '{{subject}}' => htmlspecialchars($subject),
            ];

            foreach ($replacements as $key => $value) {
                $template = str_replace($key, $value, $template);
            }

            $mail->Body = $template;

            $mail->send();
            // echo 'Message sent successfully.';
            echo json_encode([
                'status' => 'success',
                'message' => 'Mail sent successfully.'
            ]);
        } catch (Exception $e) {
            // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            echo json_encode([
                'status' => 'error',
                'message' => "Message could not be sent. Error: {$mail->ErrorInfo}"
            ]);
        }
    }
}
