<?php
include "../db/config.php";
$status = $_GET['status'];
$id = $_GET['id'];
if($status == 0){
    $sql = $conn->query("update withdrawals set status=1 where id='$id'");
    
    $show = mysqli_fetch_array($conn->query("select * from withdrawals where id='$id'"));
    $address=$show['address'];
    $email=$show['email'];
    $method =$show['method'];
    $amount=$show['amount'];
    $show_user = mysqli_fetch_array($conn->query("select * from users where email='$email'"));
    $tot_with = $show_user['total_withdrawal'];
    $new_with = $tot_with + $amount;
    $tot_bal = $show_user['balance'];
    $new_bal = $tot_bal-$amount;
    $sql = $conn->query("update user set balance='$new_bal',total_withdrawal='$new_with'");
    require ("../email/withdraw.php");
    if($sql){header("location:withdrawals.php");}
}else if($status == 1){
    $sql = $conn->query("update withdrawals set status=0 where id='$id'");
    if($sql){header("location:withdrawals.php");}
}