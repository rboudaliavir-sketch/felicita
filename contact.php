<?php
header('Content-Type: application/json; charset=utf-8');

// To use PHPMailer, you need to install it via Composer:
// composer require phpmailer/phpmailer
// Then include Composer's autoloader.
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check if the request is of type POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method Not Allowed.']);
    exit;
}

// Retrieving and cleaning form data
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

// Simple validation
if (empty($name) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($message)) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Please fill in all required fields.']);
    exit;
}

// Creating a new instance of PHPMailer
$mail = new PHPMailer(true);

try {
    // ========================================
    // SMTP SERVER CONFIGURATION
    // ========================================
    // Update the following settings with your custom SMTP server credentials:
    //
    // For custom/company server:
    //   - Host: Your SMTP server hostname or IP address
    //   - Username: SMTP authentication username
    //   - Password: SMTP authentication password or API key
    //   - Port: 587 (STARTTLS) or 465 (SSL) - confirm with your server admin
    //   - SMTPSecure: ENCRYPTION_STARTTLS (port 587) or ENCRYPTION_SMTPS (port 465)
    //
    // Popular providers:
    //   Gmail: smtp.gmail.com, Port 587 (use App Password, not regular password)
    //   SendGrid: smtp.sendgrid.net, Port 587 (username: 'apikey', password: your API key)
    //   Mailgun: smtp.mailgun.org, Port 587
    // ========================================

    $mail->isSMTP();
    $mail->Host = 'smtp.example.com';                          // TODO: Replace with your SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'your_email@example.com';                // TODO: Replace with SMTP username
    $mail->Password = 'your_password';                         // TODO: Replace with SMTP password/API key
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;        // Use ENCRYPTION_SMTPS for port 465
    $mail->Port = 587;                                         // Use 465 for SSL, 587 for TLS
    $mail->CharSet = 'UTF-8';

    // ========================================
    // EMAIL ADDRESSES
    // ========================================
    // Update these to your agency's email addresses

    // Recipients - Configure who receives the contact form submissions
    $mail->setFrom('no-reply@boudalia-agency.com', 'BOUDALIA Contact Form');        // TODO: Update sender email
    $mail->addAddress('contact@boudalia-agency.com', 'BOUDALIA Agency');             // TODO: Update recipient email
    $mail->addReplyTo($email, $name);

    // Email content
    $mail->isHTML(true);
    $mail->Subject = "New message from the website from: $name";
    
    $body = "<h1>New Contact Form Submission</h1>";
    $body .= "<p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>";
    $body .= "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
    $body .= "<h2>Message:</h2>";
    $body .= "<p>" . nl2br(htmlspecialchars($message)) . "</p>";

    $mail->Body = $body;

    $mail->send();
    
    echo json_encode(['status' => 'success', 'message' => 'Your message has been sent successfully. We will get back to you shortly.']);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => "The message could not be sent. Error: {$mail->ErrorInfo}"]);
}
?>