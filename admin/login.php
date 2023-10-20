<?php
session_start();
if(isset($_POST['login'])){
     include "../db/config.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $check = mysqli_num_rows($conn->query("select * from admin where username='$username' and password='$password' and id=1"));
    if($check>0){
        $_SESSION['admin'] = "LOGGEDIN";
        header("location:index.php");
    }else{
        echo "<script>alert('Password entered is incorrect');</script>";
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
    <meta name="description" content="Admin Login Ava digital trade" />
    <meta name="author" content="siQuang - Simon Nguyen" />

    <title>Admin - Login</title>

    <!-- Core Styles -->
    <link rel="stylesheet" href="assets/css/siqtheme.css">

    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body class="theme-default">

    <div class="login-wrapper">
        <div class="d-flex justify-content-center mt-5">
            <div class="card" id="login-card">
                <div class="card-body text-center">
                    <h3><span class="text-carolina bold">investwise</span>Login</h3>
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="text-center pb-3">
                            <h5 class="text-center bold">Sign-In</h5>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ti-user"></i></span>
                            </div>
                            <input type="text" name="username" class="form-control" placeholder="username">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ti-lock"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control" placeholder="password">
                        </div>
                        <div class="form-checkbox">
                            <label>
                                <input type="checkbox" name="remember">
                                <span class="checkmark"><i class="ti-check"></i></span>
                                Remember
                            </label>
                            
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" name="login" class="btn btn-carolina">Login</button>
                        </div>
                    </form>
                </div>
               
                
            </div>
        </div>
    </div>

    <script src="assets/scripts/siqtheme.js"></script>
    <script src="assets/scripts/pages/pg_login.js" type="text/javascript"></script>
</body>


<!-- Mirrored from siqtheme.siquang.com/pg_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Oct 2021 17:41:53 GMT -->
</html>