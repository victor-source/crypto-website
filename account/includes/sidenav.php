<?php
session_start();
if(!isset($_SESSION['user'])){
    header("location:../login.php");
}else{
    $with_msg = "";
    include "../db/config.php";
    $user = $_SESSION['user'];
    if(isset($_POST['update_account'])){
        $fullname = $_POST['name'];
        $password = $_POST['password'];
        $country = $_POST['country'];
        $phone = $_POST['phone'];
        $sql = $conn->query("update users set fullname='$fullname',password='$password', country='$country', phone='$phone' where email='$user'");
                if($sql){
                  
                }
    }
    $show = mysqli_fetch_array($conn->query("select * from users where email='$user'"));
}
$show = mysqli_fetch_array($conn->query("select * from users where email='$user'"));
if(isset($_POST['deposit'])){
    $method = $_POST['method'];
    $amount = $_GET['amount'];
    if($method == "btc"){
        $address = "";
    }else if($method == "eth"){
        $address = "";
    }else{
        $address = "NOT SPECIFIED!";
    }
    $code = rand(0000,1111);
    $plan = $_GET['plan'];
    $date = date("d-m-Y");
    //add to deposits
    $sql = $conn->query("insert into deposits(email,method,amount,plan,code,status,date)values('$user','$method','$amount','$plan','$code',0,'$date')");
    //add to transactions
    $tranx = $conn->query("insert into transactions(email,type,amount,method)values('$user','Deposit','$amount','$method')");
    if($sql){
        $name = $show['fullname'];
        require_once("../email/deposit.php");
        header("location:generate_address.php?amount=$amount&method=$method&code=$code");
    }
}
if(isset($_POST['withdraw'])){
    $method = $_POST['method'];
    $amount = $_POST['amount'];
    $address = $_POST['address'];
    if($amount>$show['balance']){
        $with_msg = "<div class='alert alert-danger'>Your total balance is not enough to satisfy this transaction</div>";
    }else{
        $sql = $conn->query("insert into withdrawals(email,amount,method,address)values('$user','$amount','$method','$address')");
        //add to transactions
        $tranx = $conn->query("insert into transactions(email,type,amount,method)values('$user','Withdrawal','$amount','$method')");
        if($sql){
            require_once("../email/withdrawal_notice.php");
            $with_msg = "<div class='alert alert-success'>Your withdrawal request has been submitted successfully. Kindly wait for approval and disbursement</div>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <title>investwise</title>

    <link rel="stylesheet" href="assets/css/siqtheme.css">

    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/pages/dashboard1.css">
    <script src="//code.tidio.co/nmgh7v5xyvj7sr12r4ha8sb8dgrvnaa2.js" async></script>
</head>

<div class="mgm" style="display: none;">
<div class="txt" style="color:black;">Someone from <b></b> just earned <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>
<!-- Smartsupp Live Chat script -->

<!--End of Tawk.to Script-->
<body class="theme-light">
    <div class="grid-wrapper sidebar-bg bg1">

        <!-- Theme switcher -->
        <div id="theme-tab">
            <div class="theme-tab-item switch-theme bg-white" data-theme="theme-default" data-toggle="tooltip" title="Light"></div>
            <div class="theme-tab-item switch-theme bg-dark" data-theme="theme-dark" data-toggle="tooltip" title="Dark"></div>
        </div>

        <!-- BOF HEADER -->
        <div class="header">
            <div class="header-bar">
                <div class="brand">
                    <a href="index.html" class="logo"><span class="text-carolina ml-2"> investwise </span>Invest</a>
                    <a href="index.html" class="logo-sm text-carolina" style="display: none;">investwise</a>
                </div>
                <div class="btn-toggle">
                    <!-- <a href="#" class="toggle-sidebar-btn"><i class="ti-arrow-circle-left"></i></a> -->
                    <a href="#" class="slide-sidebar-btn" style="display: none;"><i class="ti-menu"></i></a>
                </div>
                <div class="navigation d-flex">

                    <!-- BOF Header Search -->
                   
                    <!-- BOF Header Nav -->
                    <div class="navbar-menu d-flex">
                        
                        <div class="menu-item">
                            <a href="#" class="btn right-sidebar-toggle"><i class="ti-user"></i></a>
                        </div>
                    </div>
                    <!-- EOF Header Nav -->

                </div>
            </div>
        </div>
        <!-- EOF HEADER -->

        <!-- BOF ASIDE-LEFT -->
        <div id="sidebar" class="sidebar">
            <div class="sidebar-content">
                <!-- sidebar-menu  -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            Categories
                        </li>
                        <li class="active">
                            <a href="index.php">
                                <i class="ti-dashboard"></i>
                                <span class="menu-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="maincat ">
                            <a href="invest.php">
                                <i class="ti-plug"></i>
                                <span class="menu-text">New Investment</span>
                            </a>
                        </li>
                        <li class="maincat ">
                            <a href="investments.php">
                                <i class="ti-palette"></i>
                                <span class="menu-text">My Investments</span>
                            </a>
                        </li>
                        
                        <li class="maincat ">
                            <a href="transaction_summary.php">
                                <i class="ti-write"></i>
                                <span class="menu-text">Transaction Summary</span>
                            </a>
                        </li>
         
                        <li class="header-menu">
                            Account
                        </li>
                        <li class="maincat ">
                            <a href="withdraw.php">
                                <i class="ti-arrow-down"></i>
                                <span class="menu-text">Withdraw</span>
                            </a>
                        </li>
                        <li class="maincat ">
                            <a href="referrals.php">
                                <i class="ti-user"></i>
                                <span class="menu-text">Affiliate Center</span>
                            </a>
                        </li>
                        <li class="maincat ">
                            <a href="#">
                                <i class="ti-file"></i>
                                <span class="menu-text right-sidebar-toggle">My Profile</span>
                            </a>
                        </li>
                        <li class="maincat">
                            <a href="logout.php">
                                <i class="ti-layers-alt"></i>
                                <span class="menu-text">Logout</span>
                            </a>
            
                        </li>
                       
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
        </div>
        
        <!-- EOF ASIDE-LEFT -->