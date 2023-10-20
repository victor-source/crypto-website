<?php include "includes/sidenav.php";
$id = $_GET['id'];
if(isset($_POST['update_user'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $balance = $_POST['balance'];
    $active_deposit = $_POST['deposit'];
    $total_withdrawal = $_POST['withdrawal'];
    $pin = $_POST['pin'];
    $sql = $conn->query("update users set fullname='$name',email='$email',password='$password',balance='$balance',active_deposit='$active_deposit',total_withdrawal='$total_withdrawal',pin='$pin' WHERE id='$id'");
    if($sql){
        echo "<script>alert('info changed')</script>";
    }else{
        echo "<script>alert('sorry something went wrong try again later')</script>";
    }
}
$user = mysqli_fetch_array($conn->query("select * from users where id='$id'"));

?>

<link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css">
        <!-- BOF MAIN -->
        <div class="main">
     
            <!-- BOF Breadcrumb -->
            <div class="row">
                <div class="col">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="ti-home"></i> Update User</a></li>
                    </ol>
                </div>
            </div>
            <!-- EOF Breadcrumb -->

            <!-- BOF MAIN-BODY -->
           <!-- BOF Datatable Addrows -->
           
           <div class="row">
                <div class="col">
                    <div class="card mb-3">
                        <div class="card-header">
                            <div class="caption uppercase">
                                <i class="ti-briefcase"></i>USER
                            </div>
                            
                        </div>
                       
                        <form method="post">
                            <div class="form-group p-2">
                                <label>Name</label>
                                <input type="text"  class="form-control" name="name" value="<?php echo $user['fullname']?>" required>
                            </div>
                            <div class="form-group p-2">
                                <label>Email</label>
                                <input type="text"  class="form-control" name="email" value="<?php echo $user['email']?>" required>
                            </div>
                            <div class="form-group p-2">
                                <label>Password</label>
                                <input type="text"  class="form-control" name="password" value="<?php echo $user['password']?>" required>
                            </div>
                            <div class="form-group p-2">
                                <label>Balance (Profit)</label>
                                <input type="text"  class="form-control" name="balance" value="<?php echo $user['balance']?>" required>
                            </div>
                            <div class="form-group p-2">
                                <label>Total Deposit</label>
                                <input type="text"  class="form-control" name="deposit" value="<?php echo $user['active_deposit']?>" required>
                            </div>
                            <div class="form-group p-2">
                                <label>Total WIthdrawal</label>
                                <input type="text"  class="form-control" name="withdrawal" value="<?php echo $user['total_withdrawal']?>" required>
                            </div>
                            <div class="form-group p-2">
                                <label>WIthdrawal Pin</label>
                                <input type="text"  class="form-control" name="pin" value="<?php echo $user['pin']?>">
                            </div>
                            <div class="form-group p-2">
                             <button name="update_user" type="submit" class="btn btn-primary"><i class="ti-new-window"></i> Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- EOF Datatable Addrows -->
           

          

            <!-- EOF MAIN-BODY -->

        </div>
        <!-- EOF MAIN -->

        <!-- BOF FOOTER -->
        <div class="footer">
          
        </div>
        
        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- EOF FOOTER -->

        <!-- BOF ASIDE-RIGHT -->
        <?php include "includes/right-bar.php" ?>
        <!-- EOF ASIDE-RIGHT -->        <div id="overlay"></div>

    </div> <!-- END WRAPPER -->

    <script src="assets/scripts/siqtheme.js"></script>
    <script src="assets/scripts/pages/dashboard1.js"></script>
    <script src="assets/scripts/pages/tb_datatables.js"></script>
    <script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/scripts/pages/fm_control.js"></script>
</body>


</html>