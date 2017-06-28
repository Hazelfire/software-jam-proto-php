<?php
require './vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
ini_set('display_errors' , 1);
ini_set('display_startup_errors' , 1);
error_reporting(E_ALL);

$mail = new PHPMailer;
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';

$mail->SMTPDebug = 4;
$mail->Host = "BHS-MON01.bhs1.local";
$mail->SMTPAuth = false;
$mail->Port = 25;

$mail->setFrom("noreply@bhs.vic.edu.au", "noreply");
$mail->addAddress("src@bhs.vic.edu.au", "SRC");
$mail->IsHTML(true);

$suggestion = $_POST["suggestion"];
$email = $_POST["email"];
$name = $_POST["name"];
$response = $_POST["response"];
$wantsresponse = "";
if($response){
	$wantsresponse = "Student wants response";
}else{
	$wantsresponse = "Student does not want response";
}
$yearlvl = $_POST["yearlvl"];
$mail->Subject = "New Suggestion for SRC";
$mail->Body =<<<EOT
<p>Here is the suggestion from the SRC Box</p>

<p>$suggestion</p>
<p>Sent from: $email</p>
<p>From: $name</p>
<p>Year level: $yearlvl</p>
<p>$wantsresponse</p>

EOT;

if($mail->send()){
    echo "Message successfully sent";
}
else{
    echo "There was an error sending the suggestion";
    echo $mail->ErrorInfo;
}
