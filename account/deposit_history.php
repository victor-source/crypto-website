<?php include "includes/sidenav.php";?>

        <!-- BOF MAIN -->
        <div class="main">
            <div style="height:62px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:40px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=dark&pref_coin_id=1505&invert_hover=" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Invest Wise</div></div>
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
                        <div class="card-body center">
                            <div class="table-responsive">
                                <table class="table table-bordered center table-hover" id="dt-addrows">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Method</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>View Info</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $trans = $conn->query("select * from deposits where email='$user' order by id DESC");
                                        foreach($trans as $tran){
                                        ?>
                                        <tr>
                                            <td><?php echo $tran['method']?></td>
                                            <td><?php echo $tran['amount']?></td>
                                            <td><?php echo $tran['date']?></td>
                                            <td><?php if($tran['status']==0){?><button type="button" class="btn btn-danger">Pending Review</button><?php }else if($tran['status']==1){?><button type="button" class="btn btn-success">Approved</button><?php }?></td>
                                            <td><a href="generate_address.php?amount=<?php echo $tran['amount'];?>&method=<?php echo $tran['method'];?>&code=<?php echo $tran['code'];?>" class="btn btn-primary"><i class="ti-write"></i>View</a></td>
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
                        <div style="height:492px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38; padding: 0px; margin: 0px; width: 100%;"><div style="height:472px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=dark&cnt=7&pref_coin_id=1505&graph=yes" width="100%" height="468px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Invest Wise</div></div>
                    </div>
                </div>
            </div>

          

            <!-- EOF MAIN-BODY -->

        </div>
        <!-- EOF MAIN -->

        <!-- BOF FOOTER -->
        <div class="footer">
           

            <p class="text-center">Copyright © 2013-2021 Britexfxtrad All rights reserved.</p>
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