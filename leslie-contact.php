<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="assets/favicon.png">

    <title>Contact Form - Leslie Stark, Realtor&reg;</title>
  <link rel="stylesheet" href="css/main.css" type="text/css">
</head>

<?php

        $email;$comment;$captcha;
        if(isset($_POST['email'])){
          $email=$_POST['email'];
        }if(isset($_POST['comment'])){
          $email=$_POST['comment'];
        }if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          echo '<div class="captchaerror"><strong>Please complete the captcha form.</strong><br/><a href="javascript:history.back()">Go Back</a></div>';
          exit;
        }
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Le4_hkTAAAAAFBz1H0TXZqu_njnUAWuw_7WZU4a&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        if($response.success==true)            
        {
          echo '<p>Thank you! I will get back to you as soon as possible.</h2><p><a href="index.html">Go back.</a>';
        } 
?>

<?php

$EmailFrom = "Leslie Stark, Realtor website";
$EmailTo = "lesliestark777@gmail.com"; 
$Subject = "lesliestarkaz.com form submission";
$Name = Trim(stripslashes($_POST['Name']));  
$Phone = Trim(stripslashes($_POST['Phone'])); 
$Email = Trim(stripslashes($_POST['Email']));
$Message = Trim(stripslashes($_POST['Message']));
$headers = 'From:' . $Email . "\r\n" .
    'Reply-To:' . $Email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email Address: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $Phone;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";


// send email 
$success = mail($EmailTo, $Subject, $Body, $headers);

/* redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=thanks.php#thanks\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?> */