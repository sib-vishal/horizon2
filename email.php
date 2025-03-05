<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['submit'])) {
    // Check if the hidden field is set to prevent spam
    if (!empty($_POST['hidden'])) {
        die();
    }

    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);

    // Create the email body
    $body_message = "
    <html>
    <body>
        <p>Dear Admin,</p>
        <p>You have received an enquiry from:</p>
        <table width='500' border='1' cellspacing='0'>
            <tr>
                <td style='padding:10px;' width='200'>Name</td>
                <td style='padding:10px;'>$name</td>
            </tr>
            <tr>
                <td style='padding:10px;' width='200'>Phone Number</td>
                <td style='padding:10px;'>$phone</td>
            </tr>
            <tr>
                <td style='padding:10px;' width='200'>Email</td>
                <td style='padding:10px;'>$email</td>
            </tr>
        </table>
    </body>
    </html>";

    // Email headers
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    // $headers .= 'From: support@example.com' . "\r\n";  numeo
    $headers .= 'Reply-To: example@gmail.com' . "\r\n"; // Fixed missing closing quote
    $headers .= 'X-Mailer: PHP/' . phpversion() . "\r\n";
    $headers .= 'CC: example@sibinfotech.com' . "\r\n";  // Add CC recipients here

    // Recipient's email address
    $to = 'example@gmail.com';
    $subject = 'New Inquiry from Numerouno Gifts';

    // Send the email
    if (mail($to, $subject, $body_message, $headers)) {
        // Redirect to thank you page
        echo '<script language="javascript" type="text/javascript">
                window.location = "thanks.php";
              </script>';
    } else {
        // Handle error
        echo '<script language="javascript" type="text/javascript">
                alert("Message failed. Please try again.");
                window.location = "index.php";
              </script>';
    }
}
?>
