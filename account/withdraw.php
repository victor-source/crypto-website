 <?php include "includes/sidenav.php";?>

<link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css">
        <!-- BOF MAIN -->
        <div class="main">
            <div style="height:62px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:40px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=dark&pref_coin_id=1505&invert_hover=" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by investwise</div></div>
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
                                <i class="ti-briefcase"></i>Withdraw Funds
                            </div>
                            
                        </div>
                        <form method="post">
                           
                            <div class="form-group p-2">
                                <?php echo $with_msg;?>
                                <label>Payment Method</label>
                                <select class="form-control selectpicker" name="method" required>
                                    <option value="btc">Bitcoin</option>
                                </select>
                                <br>
                                <label>Amount</label>
                                <input type="text" class="form-control" name="amount" placeholder="enter amount" required >
                                <br>
                                <label>Address</label>
                                <input type="text" step="4" class="form-control" name="address"  placeholder="ex: BTC address" value="<?php echo $show['with_address'];?>" required>
                                <br>

                               
                            </div>
                            <div class="form-group p-2">
                             <button name="withdraw" type="submit" class="btn btn-primary"><i class="ti-new-window"></i> Proceed</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
                                            <th>Method</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $trans = $conn->query("select * from withdrawals where email='$user'");
                                        foreach($trans as $tran){
                                        ?>
                                        <tr>
                                            <td><?php echo $tran['method']?></td>
                                            <td><?php echo $tran['amount']?></td>
                                            <td><?php echo $tran['date']?></td>
                                            <td><?php echo $tran['address']?></td>
                                            <td><?php if($tran['status']==0){?><button type="button" class="btn btn-danger">Pending Review</button><?php }else if($tran['status']==1){?><button type="button" class="btn btn-success">Approved</button><?php }?></td>
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
                        <div style="height:492px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38; padding: 0px; margin: 0px; width: 100%;"><div style="height:472px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=dark&cnt=7&pref_coin_id=1505&graph=yes" width="100%" height="468px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Britexfxtrade</div></div>
                    </div>
                </div>
            </div>

          

            <!-- EOF MAIN-BODY -->

        </div>
            <!-- EOF Datatable Addrows -->
           

          

            <!-- EOF MAIN-BODY -->

        </div>
        <!-- EOF MAIN -->

        <!-- BOF FOOTER -->
        <div class="footer">
           

            <p class="text-center">Copyright © 2013-2021 Invest Wise All rights reserved.</p>
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
    <script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/scripts/pages/fm_control.js"></script>
</body>


</html>