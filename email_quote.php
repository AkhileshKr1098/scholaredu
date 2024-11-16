<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'macreelinfosoft@gmail.com';
        $mail->Password = 'thwo werv prdz xuhu';
        $mail->SMTPSecure = 'tls'; // Enable TLS encryption, ssl also accepted
        $mail->Port = 587; // TCP port to connect to

        // Sender and recipient settings
        $mail->setFrom('scholarcrpark@gmail.com', 'Scholar');
        $mail->addAddress('scholarcrpark@gmail.com', '');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'You have new Enquiry';
        $mail->Body = '<table style="border-collapse: collapse; width: 100%; padding: 10px; background-color:; font-size: large;">
    <tr>
        <td colspan="2" style="text-align: center;">
            <img src="https://scholaredu.in/images/logo3%20copy.jpg" alt="Header Image" style="max-width: 100%;">
        </td>
    </tr>
    <tr>
        <td style="padding: 10px;">Name :</td>
        <td style="padding: 10px;">' . $name . '</td>
    </tr>
    <tr>
        <td style="padding: 10px;">Email :</td>
        <td style="padding: 10px;">' . $email . '</td>
    </tr>
    <tr>
        <td style="padding: 10px;">Course :</td>
        <td style="padding: 10px;">' . $course . '</td>
    </tr>
    <tr>
        <td style="padding: 10px;">Phone :</td>
        <td style="padding: 10px;">' . $phone . '</td>
    </tr>
    <tr>
        <td style="padding: 10px;">Message:</td>
        <td style="padding: 10px;">' . $message . '</td>
    </tr>
</table>';

        // Send email
        $mail->send();
        echo "Thank you! We will contact you soon.";
    } catch (Exception $e) {
        echo "Oops! Something went wrong: {$mail->ErrorInfo}";
    }
}
?>