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
  $mail->Host = 'www.p2pcoindex.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->Username = 'support@p2pcoindex.com'; // YOUR gmail email
    $mail->Password = 'kolomenta00'; // YOUR gmail password


    // Sender and recipient settings
    $mail->SetFrom('support@p2pcoindex.com', 'P2P Coindex Transaction');
    $mail->AddAddress('support@p2pcoindex.com', "support Request");
    

    // Setting the email content
    $mail->IsHTML(true);
    $mail->Subject = $_GET['subject'];
    $mail->Body = 'Name: '. $_GET['name'].' Email: '. $_GET['email'].' <br>Message: '.$_GET['message'].'';
    
    
    $mail->send();
        header ("location:../../index.php?mailsent");
        } catch (Exception $e) {
            header ("location:../../index.php?mailnotsent");
        }

?>
