<?php include "includes/sidenav.php";?>

        <!-- BOF MAIN -->
        <div class="main">
          
            <!-- BOF Breadcrumb -->
            <div class="row">
                <div class="col">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="ti-home"></i> Dashboard</a></li>
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
                                <i class="ti-briefcase"></i> Total investments Made
                            </div>
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dt-addrows">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>User</th>
                                            <th>Plan</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $trans = $conn->query("select * from investments");
                                        foreach($trans as $tran){
                                        ?>
                                        <tr>
                                            <td><?php echo $tran['email']?></td>
                                            <td><?php echo $tran['package']?></td>
                                            <td><?php echo $tran['amount']?></td>
                                            <td><?php echo $tran['date']?></td>
                                            <td><?php if($tran['status']==0){?><a href="investment_action.php?id=<?php echo $tran['id'];?>&status=<?php echo $tran['status'];?>" class="btn btn-danger">Ongoing</a><?php }else if($tran['status']==1){?><a href="investment_action.php?id=<?php echo $tran['id'];?>&status=<?php echo $tran['status'];?>" class="btn btn-success">Finished</a><?php }?></td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- EOF Datatable Addrows -->
            <!-- Year Comparison Chart -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3">
                      
                    </div>
                </div>
            </div>

          

            <!-- EOF MAIN-BODY -->

        </div>
        <!-- EOF MAIN -->

        <!-- BOF FOOTER -->
        <div class="footer">
           

            <p class="text-center">Copyright © 2013-2021 Ava Digital Finance All rights reserved.</p>
        </div>
        
        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- EOF FOOTER -->

        <!-- BOF ASIDE-RIGHT --><!-- BOF ASIDE-RIGHT -->
        <?php include "includes/right-bar.php" ?>
        <!-- EOF ASIDE-RIGHT -->

        <div id="overlay"></div>

    </div> <!-- END WRAPPER -->

    <script src="assets/scripts/siqtheme.js"></script>
    <script src="assets/scripts/pages/dashboard1.js"></script>
    <script src="assets/scripts/pages/tb_datatables.js"></script>

</body>


</html>