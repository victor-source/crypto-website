<?php
include "check.php";
if(!isset($_SESSION['admin'])){
    header("location:login.php");
}else{

    $with_msg = "";
    include "../db/config.php";
    // $admin = $_SESSION['admin'];
    if(isset($_POST['update_account'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
       
        $sql = $conn->query("update admin set username='$username',password='$password' where id=1");
                if($sql){
                   echo "<script>alert('profile info has been changed')</script>";
                }
    }
    $show = mysqli_fetch_array($conn->query("select * from admin where id=1"));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <title>Admin-investwise</title>

    <link rel="stylesheet" href="assets/css/siqtheme.css">

    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/pages/dashboard1.css">
</head>

<body class="theme-dark">
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
                    <a href="index.html" class="logo"><span class="text-carolina">investwise</span>Invest-Admin</a>
                    <a href="index.html" class="logo-sm text-carolina" style="display: none;">Admin investwise</a>
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
                            <a href="investments.php">
                                <i class="ti-palette"></i>
                                <span class="menu-text">Total Investments</span>
                            </a>
                        </li>
                        
                        <li class="maincat ">
                            <a href="deposits.php">
                                <i class="ti-plug"></i>
                                <span class="menu-text">Total Deposits</span>
                            </a>
                           
                        </li>
                        <li class="maincat ">
                            <a href="withdrawals.php">
                                <i class="ti-palette"></i>
                                <span class="menu-text">Total Withdrawals</span>
                            </a>
                        </li>
                        
                        <li class="header-menu">
                            Account
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