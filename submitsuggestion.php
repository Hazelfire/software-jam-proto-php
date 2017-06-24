<?php
require './vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';

$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Port = 587;
$mail->Username = "email@gmail.com";
$mail->Password = "password";
$mail->SMTPSecure = 'tls';

$mail->setFrom("from@gmail.com", "Mailer");
$mail->addAddress("to@gmail.com", "To");
$mail->IsHTML(true);

$suggestion = $_POST["suggestion"];

$mail->Subject = "New Suggestion for SRC";
$mail->Body =<<<EOT
<p>Here is the suggestion from the SRC Box</p>

<p>$suggestion</p>

EOT;

if($mail->send()){
    echo "Message successfully sent";
}
else{
    echo "There was an error sending the suggestion";
    echo $mail->ErrorInfo;
}
