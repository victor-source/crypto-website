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

     $mail->Host = 'p2pcoindex.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->Username = 'support@p2pcoindex.com'; // YOUR gmail email
    $mail->Password = 'kolomenta00'; // YOUR gmail password


    // Sender and recipient settings
    $mail->SetFrom('support@p2pcoindex.com', 'p2pcoindex');
    $mail->AddAddress('support@p2pcoindex.com', 'Admin Withdrawal request');
    

    // Setting the email content
    $mail->IsHTML(true);
    $mail->Subject = "p2pcoindex Withdrawal Request";
    $mail->Body = '<table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,\'Segoe UI\',Roboto,Helvetica,Arial,sans-serif,\'Apple Color Emoji\',\'Segoe UI Emoji\',\'Segoe UI Symbol\';border-collapse:collapse;background-color:#edf2f7;margin:0;padding:0;width:100%">
<tbody><tr style="box-sizing:border-box">
<td align="center" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,\'Segoe UI\',Roboto,Helvetica,Arial,sans-serif,\'Apple Color Emoji\',\'Segoe UI Emoji\',\'Segoe UI Symbol\'">
<table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,\'Segoe UI\',Roboto,Helvetica,Arial,sans-serif,\'Apple Color Emoji\',\'Segoe UI Emoji\',\'Segoe UI Symbol\';border-collapse:collapse;margin:0;padding:0;width:100%">
<tbody><tr style="box-sizing:border-box">
<td style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,\'Segoe UI\',Roboto,Helvetica,Arial,sans-serif,\'Apple Color Emoji\',\'Segoe UI Emoji\',\'Segoe UI Symbol\';padding:25px 0;text-align:center">
<a href="https://p2pcoindex.com" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,\'Segoe UI\',Roboto,Helvetica,Arial,sans-serif,\'Apple Color Emoji\',\'Segoe UI Emoji\',\'Segoe UI Symbol\';background-color:transparent;color:#3d4852;font-size:19px;font-weight:bold;text-decoration:none;display:inline-block" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://p2pcoindex.com&amp;source=gmail&amp;ust=1631021779923000&amp;usg=AFQjCNHObrhELRZmT6fpRPflGwNxF6P5MA">
p2pcoindex.com
</a>
</td>
</tr>


<tr style="box-sizing:border-box">
<td width="100%" cellpadding="0" cellspacing="0" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,\'Segoe UI\',Roboto,Helvetica,Arial,sans-serif,\'Apple Color Emoji\',\'Segoe UI Emoji\',\'Segoe UI Symbol\';background-color:#edf2f7;border-bottom:1px solid #edf2f7;border-top:1px solid #edf2f7;margin:0;padding:0;width:100%">
<table align="center" width="570" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,\'Segoe UI\',Roboto,Helvetica,Arial,sans-serif,\'Apple Color Emoji\',\'Segoe UI Emoji\',\'Segoe UI Symbol\';border-collapse:collapse;background-color:#ffffff;border-color:#e8e5ef;border-radius:2px;border-width:1px;margin:0 auto;padding:0;width:570px">

<tbody><tr style="box-sizing:border-box">
<td style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,\'Segoe UI\',Roboto,Helvetica,Arial,sans-serif,\'Apple Color Emoji\',\'Segoe UI Emoji\',\'Segoe UI Symbol\';max-width:100vw;padding:32px">

<div style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,\'Segoe UI\',Roboto,Helvetica,Arial,sans-serif,\'Apple Color Emoji\',\'Segoe UI Emoji\',\'Segoe UI Symbol\';display:flex;margin-bottom:50px">
    <div style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,\'Segoe UI\',Roboto,Helvetica,Arial,sans-serif,\'Apple Color Emoji\',\'Segoe UI Emoji\',\'Segoe UI Symbol\';width:100%;padding-right:15px;padding-left:15px;text-align:center!important">
        <img src="https://p2pcoindex.com/img/logo.png" class="m_218790692649420091header_image CToWUd a6T" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,\'Segoe UI\',Roboto,Helvetica,Arial,sans-serif,\'Apple Color Emoji\',\'Segoe UI Emoji\',\'Segoe UI Symbol\';vertical-align:middle;border-style:none;height:100px!important;max-width:100%" tabindex="0"><div class="a6S" dir="ltr" style="opacity: 0.01; left: 325px; top: 170px;"><div id=":4y" class="T-I J-J5-Ji aQv T-I-ax7 L3 a5q" title="Download" role="button" tabindex="0" aria-label="Download attachment " data-tooltip-class="a1V"><div class="akn"><div class="aSK J-J5-Ji aYr"></div></div></div></div>
    </div>
</div>
<div style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,\'Segoe UI\',Roboto,Helvetica,Arial,sans-serif,\'Apple Color Emoji\',\'Segoe UI Emoji\',\'Segoe UI Symbol\';width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;padding-top:3rem!important;padding-bottom:3rem!important">
    <p style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,\'Segoe UI\',Roboto,Helvetica,Arial,sans-serif,\'Apple Color Emoji\',\'Segoe UI Emoji\',\'Segoe UI Symbol\';font-size:16px;line-height:1.5em;text-align:left;margin-top:0;margin-bottom:1rem">
        Hi Admin,
    </p>
    <p style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,\'Segoe UI\',Roboto,Helvetica,Arial,sans-serif,\'Apple Color Emoji\',\'Segoe UI Emoji\',\'Segoe UI Symbol\';font-size:16px;line-height:1.5em;text-align:left;margin-top:0;margin-bottom:1rem"> '.$_SESSION['user'].' has just placed a withdrawal Request on your website. <p> Kindly Login to review this Withdrawal Request</p>
   
    <p style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,\'Segoe UI\',Roboto,Helvetica,Arial,sans-serif,\'Apple Color Emoji\',\'Segoe UI Emoji\',\'Segoe UI Symbol\';font-size:16px;line-height:1.5em;text-align:left;margin-top:0;margin-bottom:1rem"> Click  <a href="https://p2pcoindex.com/user/admin.php" target="_blank">Here</a> To Login to your admin panel</p>
</div>



</td>
</tr>
</tbody></table>
</td>
</tr>

<tr style="box-sizing:border-box">
<td style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,\'Segoe UI\',Roboto,Helvetica,Arial,sans-serif,\'Apple Color Emoji\',\'Segoe UI Emoji\',\'Segoe UI Symbol\'">
<table align="center" width="570" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,\'Segoe UI\',Roboto,Helvetica,Arial,sans-serif,\'Apple Color Emoji\',\'Segoe UI Emoji\',\'Segoe UI Symbol\';border-collapse:collapse;margin:0 auto;padding:0;text-align:center;width:570px">
<tbody><tr style="box-sizing:border-box">
<td align="center" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,\'Segoe UI\',Roboto,Helvetica,Arial,sans-serif,\'Apple Color Emoji\',\'Segoe UI Emoji\',\'Segoe UI Symbol\';max-width:100vw;padding:32px">
<p style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,\'Segoe UI\',Roboto,Helvetica,Arial,sans-serif,\'Apple Color Emoji\',\'Segoe UI Emoji\',\'Segoe UI Symbol\';line-height:1.5em;margin-top:0;margin-bottom:1rem;color:#b0adc5;font-size:12px;text-align:center">© 2021 p2pcoindex 2022 All rights reserved.</p>

</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>';
    
    
    $mail->send();
        
        } catch (Exception $e) {
            echo "4";
        }

?>
