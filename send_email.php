<?php
// Email settings
$to = 'vishalmauryaab@gmail.com';
$from = 'vishalmauryaab@gmail.com';
$fromName = 'Your Name';
$subject = 'Test Email Subject';

// Basic Email
function sendBasicEmail($to, $from, $fromName, $subject)
{
    $message = 'This is the body of the email.';
    $headers = 'From: ' . $fromName . ' <' . $from . '>' . "\r\n" .
        'Reply-To: ' . $from . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    return mail($to, $subject, $message, $headers);
}

// HTML Email Content
$message = '<html><body>';
$message .= '<h1>This is a Heading</h1>';
$message .= '<p>This is a <b>paragraph</b> in HTML format.</p>';
$message .= '<p>Here is a <a href="https://www.example.com">link</a>.</p>';
$message .= '</body></html>';

// Headers for HTML email
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: ' . $fromName . ' <' . $from . '>' . "\r\n";
$headers .= 'Reply-To: ' . $from . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();

// Send email
if (mail($to, $subject, $message, $headers)) {
    echo 'HTML email sent successfully';
} else {
    echo 'Failed to send HTML email';
}
?>