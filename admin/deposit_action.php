<?php
include "../db/config.php";
$status = $_GET['status'];
$code = $_GET['code'];
if($status == 0){
    $sql = $conn->query("update deposits set status=1 where code='$code'");
    $amount = $_GET['amount'];
    $email = $_GET['user'];
    $commission = 0.05*$amount;
    $show = mysqli_fetch_array($conn->query("select * from users where email='$email'"));
    $user = $show['referral'];
    $plan = $_GET['plan'];
    $show_user = mysqli_fetch_array($conn->query("select * from users where username='$user'"));
    $old_comm = $show_user['ref_earnings'];
    $new_comm = $old_comm + $commission;
    $sqli = $conn->query("update users set ref_earnings='$new_comm' where username='$user'");
    if($sqli){
        require_once("../email/deposit_success.php");
        header("location:deposits.php");
    }
    
}else if($status == 1){
    $sql = $conn->query("update deposits set status=0 where code='$code'");
    header("location:deposits.php");
}