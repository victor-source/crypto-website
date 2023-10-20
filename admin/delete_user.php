<?php include "config.php";
$id = $_GET['id'];
$sql = $conn->query("delete from users where id='$id'");
if($sql){
    header("location:index.php");
    
}else{
    echo "<script>alert('sorry something went wrong');</script>";
}