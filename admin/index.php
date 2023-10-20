<?php include "includes/sidenav.php";?>

        <!-- BOF MAIN -->
        <div class="main">
            
            <!-- BOF Breadcrumb -->
            <div class="row">
                <div class="col">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="ti-home"></i> Admin</a></li>
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
                                <i class="ti-briefcase"></i> Total Users
                            </div>
                            
                        </div>
                        <div class="card-body center">
                            <div class="table-responsive">
                                <table class="table table-bordered center table-hover" id="dt-addrows">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Email</th>
                                            <th>name</th>
                                            <th>password</th>
                                            <th>balance</th>
                                            <th>Action</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $trans = $conn->query("select * from users order by id DESC");
                                        foreach($trans as $tran){
                                        ?>
                                        <tr>
                                            <td><?php echo $tran['email']?></td>
                                            <td><?php echo $tran['fullname']?></td>
                                            <td><?php echo $tran['password']?></td>
                                            <td><?php echo $tran['balance']?></td>
                                            
                                            <td><a href="edit-user.php?id=<?php echo $tran['id']?>" class="btn btn-primary"><i class="ti ti-edit"></i>Edit</a>
                                            <td><a href="delete_user.php?id=<?php echo $tran['id']?>" class="btn btn-danger"><i class="ti ti-trash"></i>Delete</a>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         

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
        <!-- EOF ASIDE-RIGHT -->

        <div id="overlay"></div>

    </div> <!-- END WRAPPER -->

    <script src="assets/scripts/siqtheme.js"></script>
    <script src="assets/scripts/pages/dashboard1.js"></script>
    <script src="assets/scripts/pages/tb_datatables.js"></script>

</body>


</html>