<?php
session_start();
include "../../db/config.php";
$email = $_SESSION['user'];
$plan = $_GET['plan'];
$amount = $_GET['amount'];
$show = mysqli_fetch_array($conn->query("select * from users where email='$email'"));
$sql = $conn->query("insert into investments(email,package,amount)values('$email','$plan','$amount')");
if($sql){
    $balance = $show['balance'];
    $new_bal=$balance-$amount;
    $update_user = $conn->query("update users set balance='$new_bal' where email='$email'");
    if($update_user){
        $name=$show['fullname'];
        include "../../email/invest.php";
        header("location:../success.php");
    }
}