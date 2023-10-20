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

     $mail->Host = 'websitename.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->Username = 'support@websitename.com'; // YOUR gmail email
    $mail->Password = 'kolomenta00'; // YOUR gmail password


    // Sender and recipient settings
    $mail->SetFrom('admin@websitename.com', 'investwise');
    $mail->AddAddress($email, 'User');
    

    // Setting the email content
    $mail->IsHTML(true);
    $mail->Subject = "investwise Withdrawal Success";
    $mail->Body = '<div class="gs"><div class=""><div class="aHl"></div><div id=":1ah" tabindex="-1"></div><div id=":19e" class="ii gt" jslog="20277; u014N:xr6bB; 4:W251bGwsbnVsbCxbXV0."><div id=":19d" class="a3s aiL "><u></u>



    
    
    
    
    


<div style="width:100%!important;min-width:100%;margin:0;padding:0;background-color:#ffffff">
    
    <table style="border-spacing:0;border-collapse:collapse;vertical-align:top;height:100%;width:100%;table-layout:fixed" cellpadding="0" cellspacing="0" width="100%" border="0">
        <tbody>
            <tr style="vertical-align:top">
                <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top;text-align:center;background-color:#ffffff" align="center" valign="top">
                    <table style="border-spacing:0;border-collapse:collapse;vertical-align:top;background-color:transparent" cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                        <tbody>
                            <tr style="vertical-align:top">
                                <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top" width="100%">
                                    
                                    
                                    <table style="border-spacing:0;border-collapse:collapse;vertical-align:top;max-width:500px;margin:0 auto;text-align:inherit" cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                                        <tbody>
                                            <tr style="vertical-align:top">
                                                <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top" width="100%">
                                                    <table style="border-spacing:0;border-collapse:collapse;vertical-align:top;width:100%;max-width:500px;color:#000000;background-color:transparent" cellpadding="0" cellspacing="0" width="100%" bgcolor="transparent">
                                                        <tbody>
                                                            <tr style="vertical-align:top">
                                                                <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top;text-align:center;font-size:0">
                                                                    
                                                                    
                                                                    <div style="display:inline-block;vertical-align:top;width:500px">
                                                                        <table style="border-spacing:0;border-collapse:collapse;vertical-align:top" cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                                                                            <tbody>
                                                                                <tr style="vertical-align:top">
                                                                                    <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top;background-color:transparent;padding-top:5px;padding-right:0px;padding-bottom:5px;padding-left:0px;border-top:0px solid transparent;border-right:0px solid transparent;border-bottom:0px solid transparent;border-left:0px solid transparent">
                                                                                        <table style="border-spacing:0;border-collapse:collapse;vertical-align:top" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                                                            <tbody>
                                                                                                <tr style="vertical-align:top">
                                                                                                    <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top;width:100%;padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:30px" align="center">
                                                                                                        <div align="center">
                                                                                                            <img style="outline:none;text-decoration:none;clear:both;display:block;border:0;height:auto;line-height:100%;margin:0 auto;float:none;max-height:40px" align="center" border="0" src="https://ci6.googleusercontent.com/proxy/-pdpWdFlm0NWvTrMGwctwNMgoy-pElh-j_1ncFUwZgwpZeieaS9KcvulDcZlxi-0BP121LGDFQeXGMRnfU9jIZZ55QehDiJ90EM40WJ82IB9uXyCyWQuHEmfd2A8PdxZLrQbYorgHpw9YRsK9-3E=s0-d-e1-ft#https://public-files-paystack-prod.s3.eu-west-1.amazonaws.com/integration-logos/paystack.jpg" alt="Image" title="Image" class="CToWUd">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    
                                                                    
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="border-spacing:0;border-collapse:collapse;vertical-align:top;background-color:transparent" cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                        <tbody>
                            <tr style="vertical-align:top">
                                <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top" width="100%">
                                    
                                    
                                    <table style="border-spacing:0;border-collapse:collapse;vertical-align:top;max-width:500px;margin:0 auto;text-align:inherit" cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                                        <tbody>
                                            <tr style="vertical-align:top">
                                                <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top" width="100%">
                                                    <table style="border-spacing:0;border-collapse:collapse;vertical-align:top;width:100%;max-width:500px;color:#000000;background-color:transparent" cellpadding="0" cellspacing="0" width="100%" bgcolor="transparent">
                                                        <tbody>
                                                            <tr style="vertical-align:top">
                                                                <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top;text-align:center;font-size:0">
                                                                    
                                                                    
                                                                    <div style="display:inline-block;vertical-align:top;width:500px">
                                                                        <table style="border-spacing:0;border-collapse:collapse;vertical-align:top" cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                                                                            <tbody>
                                                                                <tr style="vertical-align:top">
                                                                                    <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top;background-color:transparent;padding-top:0;padding-right:20px;padding-bottom:20px;padding-left:20px">
                                                                                        <div style="font-size:12px;line-height:14px;text-align:center;color:#555555;font-family:-apple-system,BlinkMacSystemFont,sans-serif">
                                                                                            <p style="margin:0;font-size:12px;line-height:14px;text-align:center">investwise Successful Withdrawal Receipt.
                                                                                            </p>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr style="vertical-align:top">
                                                                                    <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top;background-color:transparent;padding-top:0;padding-right:0;padding-bottom:30px;padding-left:0;border-top:1px solid #ededed;border-right:1px solid #ededed;border-bottom:1px solid #ededed;border-left:1px solid #ededed">
                                                                                        
                                                                                        <table style="border-spacing:0;border-collapse:collapse;vertical-align:top;background:#0d3e65" cellpadding="0" cellspacing="0" width="100%">
                                                                                            <tbody>
                                                                                                <tr style="vertical-align:top">
                                                                                                    <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top;padding-top:40px;padding-right:10px;padding-bottom:0px;padding-left:10px">
                                                                                                        <div style="color:#fdfffe;line-height:150%;font-family:-apple-system,BlinkMacSystemFont,sans-serif">
                                                                                                            <div style="padding-bottom:40px">
                                                                                                                <p style="margin:0 auto;max-width:300px;font-size:12px;line-height:18px;text-align:center">
                                                                                                                    <span style="font-size:18px;line-height:20px">Amount Withdrawn</span>
                                                                                                                </p>
                                                                                                                <p style="margin:0;font-size:14px;line-height:17px;text-align:center;padding-top:10px">
                                                                                                                    <span style="font-size:36px;line-height:43px">
                                                                                                                        <strong>
                                                                                                                            <span style="line-height:43px;font-size:36px">'.$amount.'  '.$method.'</span>
                                                                                                                        </strong>
                                                                                                                    </span>
                                                                                                                    <br>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                        <table style="border-spacing:0;border-collapse:collapse;vertical-align:top" cellpadding="0" cellspacing="0" width="100%">
                                                                                            <tbody>
                                                                                                
                                                                                                <tr style="vertical-align:top">
                                                                                                    <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top;padding-top:10px;padding-right:10px;padding-bottom:20px;padding-left:10px">
                                                                                                        <div style="color:#555555;line-height:120%;font-family:-apple-system,BlinkMacSystemFont,sans-serif">
                                                                                                            <div style="font-size:14px;line-height:17px;text-align:center;color:#555555;font-family:-apple-system,BlinkMacSystemFont,sans-serif">
                                                                                                                <p style="margin:20px 0 0;font-size:14px;line-height:17px;text-align:center">
                                                                                                                    <strong>
                                                                                                                        <span style="font-size:16px;line-height:19px">Transaction Details</span>
                                                                                                                    </strong>
                                                                                                                    <br>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                        <table style="border-spacing:0;border-collapse:collapse;vertical-align:top" cellpadding="0" cellspacing="0" width="100%">
                                                                                            <tbody>
                                                                                                <tr style="vertical-align:top">
                                                                                                    <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top;padding-top:0;padding-right:20px;padding-bottom:0;padding-left:20px">
                                                                                                        <div style="color:#555555;line-height:120%;font-family:-apple-system,BlinkMacSystemFont,sans-serif">
                                                                                                            <div style="font-size:14px;line-height:17px;text-align:left;color:#555555;font-family:-apple-system,BlinkMacSystemFont,sans-serif;border-bottom:solid 1px #ededed;padding-top:15px;padding-right:10px;padding-bottom:15px;padding-left:10px">
                                                                                                                <p style="margin:0;font-size:14px;line-height:17px;text-align:left">Reference&nbsp;
                                                                                                                    <strong style="float:right">PZHZAI20211017141337</strong>
                                                                                                                    <br>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                              <tr style="vertical-align:top">
                                                                                                    <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top;padding-top:0;padding-right:20px;padding-bottom:0;padding-left:20px">
                                                                                                        <div style="color:#555555;line-height:120%;font-family:-apple-system,BlinkMacSystemFont,sans-serif">
                                                                                                            <div style="font-size:14px;line-height:17px;text-align:left;color:#555555;font-family:-apple-system,BlinkMacSystemFont,sans-serif;border-bottom:solid 1px #ededed;padding-top:15px;padding-right:10px;padding-bottom:15px;padding-left:10px">
                                                                                                                <p style="margin:0;font-size:14px;line-height:17px;text-align:left">Address&nbsp;
                                                                                                                    <strong style="float:right">'.$address.'</strong>
                                                                                                                    <br>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                              <tr style="vertical-align:top">
                                                                                                    <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top;padding-top:0;padding-right:20px;padding-bottom:0;padding-left:20px">
                                                                                                        <div style="color:#555555;line-height:120%;font-family:-apple-system,BlinkMacSystemFont,sans-serif">
                                                                                                            <div style="font-size:14px;line-height:17px;text-align:left;color:#555555;font-family:-apple-system,BlinkMacSystemFont,sans-serif;border-bottom:solid 1px #ededed;padding-top:15px;padding-right:10px;padding-bottom:15px;padding-left:10px">
                                                                                                                <p style="margin:0;font-size:14px;line-height:17px;text-align:left">Amount&nbsp;
                                                                                                                    <strong style="float:right">'.$amount.'</strong>
                                                                                                                    <br>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr style="vertical-align:top">
                                                                                                    <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top;padding-top:0;padding-right:20px;padding-bottom:0;padding-left:20px">
                                                                                                        <div style="color:#555555;line-height:120%;font-family:-apple-system,BlinkMacSystemFont,sans-serif">
                                                                                                            <div style="font-size:14px;line-height:17px;text-align:left;color:#555555;font-family:-apple-system,BlinkMacSystemFont,sans-serif;border-bottom:solid 1px #ededed;padding-top:15px;padding-right:10px;padding-bottom:15px;padding-left:10px">
                                                                                                                <p style="margin:0;font-size:14px;line-height:17px;text-align:left">Currency&nbsp;
                                                                                                                    <strong style="float:right">'.$method.'</strong>
                                                                                                                    <br>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>

                                                                                                
                                                                                                    
                                                                                                        
                                                                                                        
                                                                                                            
                                                                                                        
                                                                                                            
                                                                                                                
                                                                                                                
                                                                                                                    
                                                                                                                    
                                                                                                                    <tr style="vertical-align:top">
                                                                                                                        <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top;padding-top:0;padding-right:20px;padding-bottom:0;padding-left:20px">
                                                                                                                            <div style="color:#555555;line-height:120%;font-family:-apple-system,BlinkMacSystemFont,sans-serif">
                                                                                                                                <div style="font-size:14px;line-height:17px;text-align:left;color:#555555;font-family:-apple-system,BlinkMacSystemFont,sans-serif;padding-top:15px;padding-right:10px;padding-bottom:15px;padding-left:10px">
                                                                                                                                    
                                                                                                                                        
                                                                                                                                        <p style="margin:0;font-size:14px;line-height:17px;text-align:left">Status&nbsp;&nbsp;
                                                                                                                                            <strong style="float:right;color:#00ff00">
                                                                                                                                               
                                                                                                                                                Completed </strong>
                                                                                                                                            <br>
                                                                                                                                        </p>
                                                                                                                                        
                                                                                                                                    
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                            
                                                                                                          
                                                                                                          
                                                                                                        
                                                                                                        
                                                                                                    
                                                                                                
                                                                                            </tbody>
                                                                                        </table>
                                                                                        <table style="border-spacing:0;border-collapse:collapse;vertical-align:top" align="center" width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                                            <tbody>
                                                                                                <tr style="vertical-align:top">
                                                                                                    <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top;padding-top:30px;padding-right:10px;padding-bottom:10px;padding-left:10px" align="center">
                                                                                                        <div style="height:1px">
                                                                                                            <table style="border-spacing:0;border-collapse:collapse;vertical-align:top;border-top:1px solid #d9d9d9;width:20px" align="center" border="0" cellspacing="0">
                                                                                                                <tbody>
                                                                                                                    <tr style="vertical-align:top">
                                                                                                                        <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top" align="center"></td>
                                                                                                                    </tr>
                                                                                                                </tbody>
                                                                                                            </table>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                        <table style="border-spacing:0;border-collapse:collapse;vertical-align:top" cellpadding="0" cellspacing="0" width="100%">
                                                                                            <tbody>
                                                                                                <tr style="vertical-align:top">
                                                                                                    <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top;padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:10px">
                                                                                                        <div style="color:#555555;line-height:150%;font-family:-apple-system,BlinkMacSystemFont,sans-serif">
                                                                                                            <div style="font-size:14px;line-height:21px;text-align:center;color:#555555;font-family:-apple-system,BlinkMacSystemFont,sans-serif">
                                                                                                                <p style="margin:0;font-size:14px;line-height:21px;text-align:center">
                                                                                                                    <span style="font-size:16px;line-height:24px;color:#0d3e65"><strong>investwise Team</strong></span>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                            <div style="font-size:14px;line-height:21px;text-align:center;color:#555555;font-family:-apple-system,BlinkMacSystemFont,sans-serif">
                                                                                                                <p style="margin:0;font-size:12px;line-height:21px;text-align:center">
                                                                                                                    Account Department
                                                                                                                    <a style="font-size:14px;line-height:21px;text-align:center;color:#50a1f7" title="email" href="mailto:support@websitename.com" target="_blank"></a>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                            
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    
                                                                    
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="border-spacing:0;border-collapse:collapse;vertical-align:top;background-color:transparent" cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                        <tbody>
                            <tr style="vertical-align:top">
                                <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top" width="100%">
                                    
                                    
                                    <table style="border-spacing:0;border-collapse:collapse;vertical-align:top;max-width:500px;margin:0 auto;text-align:inherit" cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                                        <tbody>
                                            <tr style="vertical-align:top">
                                                <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top" width="100%">
                                                    <table style="border-spacing:0;border-collapse:collapse;vertical-align:top;width:100%;max-width:500px;color:#000000;background-color:transparent" cellpadding="0" cellspacing="0" width="100%" bgcolor="transparent">
                                                        <tbody>
                                                            <tr style="vertical-align:top">
                                                                <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top;text-align:center;font-size:0">
                                                                    
                                                                    
                                                                    <div style="display:inline-block;vertical-align:top;width:500px">
                                                                        <table style="border-spacing:0;border-collapse:collapse;vertical-align:top" cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                                                                            <tbody>
                                                                                <tr style="vertical-align:top">
                                                                                    <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top;background-color:transparent;padding-top:30px;padding-right:0px;padding-bottom:30px;padding-left:0px;border-top:0px solid transparent;border-right:0px solid transparent;border-bottom:0px solid transparent;border-left:0px solid transparent">
                                                                                        <table style="border-spacing:0;border-collapse:collapse;vertical-align:top" cellpadding="0" cellspacing="0" width="100%">
                                                                                            <tbody>
                                                                                                <tr style="vertical-align:top">
                                                                                                    <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px">
                                                                                                        <div style="color:#555555;line-height:120%;font-family:-apple-system,BlinkMacSystemFont,sans-serif">
                                                                                                          <div style="font-size:12px;line-height:14px;text-align:center;color:#555555;font-family:-apple-system,BlinkMacSystemFont,sans-serif">
                                                                                                                <p style="margin:0;font-size:12px;line-height:14px;text-align:center">Do not reply this email. If you have any questions contact
                                                                                                                    <br><a style="font-size:12px;line-height:14px;text-align:center;color:#50a1f7" href="mailto:support@websitename.com" target="_blank">support@websitename.com</a><br><br><br>
                                                                                                                  © investwise 2021
                                                                                                                    <br>All Rights Reserved
                                                                                                                    <br>
                                                                                                                </p>
                                                                                                            </div>  
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    
                                                                    
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table><div class="yj6qo"></div><div class="adL">
</div></div><div class="adL">

</div></div></div><div id=":18p" class="ii gt" style="display:none"><div id=":18q" class="a3s aiL "></div></div><div class="hi"></div></div></div>';
    
    
    $mail->send();
        
        } catch (Exception $e) {
            echo "4";
        }

?>
