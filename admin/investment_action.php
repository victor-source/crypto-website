<?php
include "../db/config.php";
$status = $_GET['status'];
$id = $_GET['id'];
if($status == 0){
    $sql = $conn->query("update investments set status=1 where id='$id'");
    
    if($sql){header("location:investments.php");}
}else if($status == 1){
    $sql = $conn->query("update investments set status=0 where id='$id'");
    if($sql){header("location:investments.php");}
}