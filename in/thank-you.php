<?php
session_start();
$name = trim($_SESSION['cta_thank_you_name'] ?? '');
unset($_SESSION['cta_thank_you_name']);
$displayName = $name !== '' ? htmlspecialchars($name) : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Thank you for contacting Giraf Creatives. We will get back to you within 24 hours.">
  <meta name="robots" content="noindex, follow">
  <title>Thank You | Giraf Creatives</title>
  <link href="https://girafcreatives.com/in/thank-you.php" rel="canonical">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="shortcut icon" href="./img/favicon.ico">
  <link rel="shortcut icon" href="./img/favicon-16x16.png">
  <link rel="shortcut icon" href="./img/favicon-32x32.png">
  <script type="text/javascript" charset="UTF-8" src="//cdn.cookie-script.com/s/35eaccce22fb0d051cda9731c9be6e07.js"></script>
  <?php include("gtag_head.php"); ?>
</head>

<body>
  <?php include('header.php'); ?>

  <section class="thank-you-area">
    <div class="container">
      <div class="thank-you-box">
        <div class="thank-you-icon" aria-hidden="true">
          <i class="fas fa-check"></i>
        </div>
        <p class="thank-you-eyebrow">Message sent</p>
        <h2>
          <?php if ($displayName !== ''): ?>
            Thank you, <?php echo $displayName; ?>!
          <?php else: ?>
            Thank you!
          <?php endif; ?>
        </h2>
        <p class="thank-you-text">
          We’ve received your enquiry and our team will get back to you within 24 hours.
        </p>
        <div class="thank-you-actions">
          <a href="./" class="thank-you-btn thank-you-btn--primary">
            Back to Home
            <i class="fas fa-arrow-right" aria-hidden="true"></i>
          </a>
          <a href="connect-us.php" class="thank-you-btn thank-you-btn--ghost">Contact Us</a>
        </div>
        <p class="thank-you-meta">
          Prefer a call?
          <a href="tel:+918075461989">+91 80 75 46 19 89</a>
        </p>
      </div>
    </div>
  </section>

  <?php include('footer.php'); ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
</body>

</html>
