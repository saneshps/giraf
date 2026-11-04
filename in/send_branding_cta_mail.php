<?php
header('Content-Type: application/json');

function respondWithError($message, $statusCode)
{
    http_response_code($statusCode);
    echo json_encode([
        'status' => 'error',
        'message' => $message
    ]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respondWithError('Invalid request method.', 405);
}

$recaptchaResponse = trim($_POST['g-recaptcha-response'] ?? '');
if ($recaptchaResponse === '') {
    respondWithError('Please complete the reCAPTCHA verification.', 400);
}

$recaptchaSecret = '6Le7ggIrAAAAAJL3u9oJOgKDlli3W1HnROlyST0o';
if (!function_exists('curl_init')) {
    error_log('reCAPTCHA verification requires the PHP cURL extension.');
    respondWithError('Unable to verify reCAPTCHA right now. Please try again.', 503);
}

$curl = curl_init('https://www.google.com/recaptcha/api/siteverify');
if ($curl === false) {
    error_log('Unable to initialize the reCAPTCHA verification request.');
    respondWithError('Unable to verify reCAPTCHA right now. Please try again.', 503);
}

if (!curl_setopt_array($curl, [
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query([
        'secret' => $recaptchaSecret,
        'response' => $recaptchaResponse,
        'remoteip' => $_SERVER['REMOTE_ADDR'] ?? ''
    ]),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CONNECTTIMEOUT => 5,
    CURLOPT_TIMEOUT => 10
])) {
    $curlError = curl_error($curl);
    curl_close($curl);
    error_log('Unable to configure the reCAPTCHA verification request: ' . $curlError);
    respondWithError('Unable to verify reCAPTCHA right now. Please try again.', 503);
}

$verificationResponse = curl_exec($curl);
$httpStatus = curl_getinfo($curl, CURLINFO_RESPONSE_CODE);
$curlError = curl_error($curl);
curl_close($curl);

if ($verificationResponse === false || $httpStatus < 200 || $httpStatus >= 300) {
    error_log('reCAPTCHA verification request failed with HTTP status ' . $httpStatus . ': ' . $curlError);
    respondWithError('Unable to verify reCAPTCHA right now. Please try again.', 503);
}

$verification = json_decode($verificationResponse, true);
if (!is_array($verification)) {
    error_log('reCAPTCHA verification returned invalid JSON: ' . json_last_error_msg());
    respondWithError('Unable to verify reCAPTCHA right now. Please try again.', 503);
}

if (($verification['success'] ?? false) !== true) {
    respondWithError('reCAPTCHA validation failed. Please confirm you are not a robot.', 400);
}

require __DIR__ . '/send_cta_mail.php';
