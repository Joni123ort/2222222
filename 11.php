<?php
// Import necessary libraries
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP(); $mail->Host = 'smtp.example.com'; $mail->SMTPAuth =
true; $mail->Username = 'adquajoha@gmail.com'; $mail->Password =
'your_password'; $mail->SMTPSecure = 'tls'; $mail->Port = 587;
$mail->setFrom('adquajoha@gmail.com', 'Contact Form');
$mail->addAddress('adquajoha@gmail.com'); $mail->isHTML(true); $mail->Subject
= 'New Contact Message'; $mail->Body = "<strong>Name:</strong>
$name<br /><strong>Email:</strong> $email<br /><strong>Message:</strong
><br />$message"; $mail->send(); echo 'Message has been sent'; } catch
(Exception $e) { echo "Message could not be sent. Mailer Error:
{$mail->ErrorInfo}"; } } ?>
