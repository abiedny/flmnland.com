<?php
require 'PHPMailerAutoload.php';
$debug = 1;

$from_name = $_POST['name'];
$from = $_POST['email'];
$message = $_POST['message'];
$to = ($debug == 1) ? 'test@flmnland.com' : 'info@flmnland.com';
$subject = "FL LAND: Message from $from_name";

$mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPDebug = $debug;  // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465; 
    $mail->Username = 'abiedny09'; //TODO: Replace with adamfree96
    $mail->Password = 'nffacihrrekzznkt'; // Google app specific password for mail DO NOT TOUCH:
    $mail->setFrom($from, $from_name);
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->addAddress($to);
    if(!$mail->Send()) {
        $error = 'Mail error: '.$mail->ErrorInfo; 
    } else {
        $error = 'Message sent!';
    }