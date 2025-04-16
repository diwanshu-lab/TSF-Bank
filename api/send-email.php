<?php
require __DIR__ . '/../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username = getenv('GMAIL_USER');           // 🔒 अपना Gmail डालो
        $mail->Password = getenv('GMAIL_PASS');              // 🔐 App Password बनाओ
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom($_POST['email'], $_POST['name']);
        $mail->addAddress('diwanshuraj42@gmail.com');            // 👉 तुम्हें जहां message चाहिए

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body    = "
            <h3>Contact Form Message</h3>
            <p><strong>Name:</strong> {$_POST['name']}</p>
            <p><strong>Email:</strong> {$_POST['email']}</p>
            <p><strong>Phone:</strong> {$_POST['phone']}</p>
            <p><strong>Message:</strong><br>{$_POST['message']}</p>
        ";

        $mail->send();
        echo 'Message sent successfully!';
    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request.";
}
