<?php
session_start();
unset($_SESSION['message']);
unset($_SESSION['fail']);
unset($_SESSION['g-recpatcha_fail']);
if (isset($_POST['subc'])) {
  //print_r($_POST);exit;
  $name = $_POST['firstname'];
  $mail = $_POST['email'];
  $phone = $_POST['phone'];
  $recaptcha = $_POST['g-recaptcha-response'];

  $secret_key = '6Le7ggIrAAAAAJL3u9oJOgKDlli3W1HnROlyST0o';

  // Hitting request to the URL, Google will
  // respond with success or error scenario
  $url = 'https://www.google.com/recaptcha/api/siteverify?secret='
    . $secret_key . '&response=' . $recaptcha;

  // Making request to verify captcha
  $response = file_get_contents($url);
  $msg = $_POST['msg'];
  $subject = $_POST['subject'];

  $header = 'MIME-Version: 1.0' . "\r\n";
  $header .= 'Content-type: text/html; charset=utf-8' . "\r\n";

  $header .= 'From: ' . $mail . "\r\n";

  $message = '
<div style="background:#e5e5e5; padding:2% 6%">


<div style="padding:15px; background:#e7e7e7;text-align: center;  border-bottom:solid 5px #9dc33b">
<div><img src="https://girafcreatives.com/de/en/img/logo.png"  alt="Giraf" /></div>
</div>


 


<div style="margin-top: -6%;">
<div style="padding:15px 15px 35px 15px; background:white;text-align: center; ">
<H1>Enquiry from Giraf Website</H1>
<div style="padding-bottom:5px; height: 30px; border-top:dashed 1px #e5e5e5; padding-top:20px;">
<div > Name:  <a style="color:#999">' . $name . '</a></div>


</div>
<div style="padding-bottom:5px; height: 30px;">
<div > Mail:  <a style="color:#999">' . $mail . '</a></div>

 
  
</div>

<div style="padding-bottom:5px; height: 30px;">
<div > Phone:  <a style="color:#999">' . $phone . '</a></div>

 
  
</div>


<div style="padding-bottom:5px; height: 30px;">
<div > Subject:  <a style="color:#999">' . $subject . '</a></div>


  
</div>

<div style="padding-bottom:5px; height: 30px;">
<div > Message:  <a style="color:#999">' . $msg . '</a></div>
  
</div>

</div>

';
  $response = json_decode($response);    //echo '<pre>';print_r($message);exit;
  if ($response->success == true) {
    //$result= mail('shahad.bigleap.gmail.com','Enquiry From yesclean website' ,$message,$header);
    $result = mail('info@giraf.com', 'Enquiry From Giraf website', $message, $header);
?>
    <script type="text/javascript">
      window.location = "connect-us.php";
    </script>
<?php
    //mail($email,'Thanks for your feedback' , $feedback,$header);

    if ($result) {
      $_SESSION['message'] = "Thank you for your Enquiry.We will get back to you shortly";
    } else {
      $_SESSION['fail'] = "Thank you for your Enquiry.We will get back to you shortly";
    }
  } else {
    $_SESSION['g-recpatcha_fail'] = "Google reCAPTACHA is not Verified correctly.Please check again";
  }
}

?>