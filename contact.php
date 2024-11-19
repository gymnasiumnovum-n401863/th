<?php
if (isset($_POST['email']) && !empty($_POST['email'])) {
    $subject = "New contact request: " . $_POST['subject'];
    $message = $_POST['body'];
    $headers = 'From: info@yourwebsite.com' . "\r\n" .
               'Reply-To: ' . $_POST['email'] . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    mail('your@email.address', $subject, $message, $headers);
    die('Thank you for your email');
}
?>