<?php include "includes/sidenav.php";?>

<link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css">
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
                                <i class="ti-briefcase"></i>Start New Investment
                            </div>
                            
                        </div>
                        <form action="proceed_invest.php">
                           
                            <div class="form-group p-2">
                                <div class="alert alert-danger " style="display:none" id="mess"></div>
                                <heading>Enter Amount to Invest</heading><br>
                                <p style="color:#7f8282">Pls Note: Amount must be lesser than or equal to main account balance desplayed below</p>
                                 <hr>
                                 <b>Balance: </b>$<?php echo $show['balance'];?>
                                 <input type="text" name="invest_amount" class="form-control" Placeholder="enter investment amount here!!" id="amount">
                                 <input type="hidden" id="balance" value="<?php echo $show['balance']?>">
                               
                               
                            </div>
                            <div class="form-group p-2">
                             <button id="next" type="button" class="btn btn-primary"><i class="ti-new-window"></i> PROCEED</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script>
                $("#next").click(function(){
                    let params = new URLSearchParams(window.location.search);
                    let plan = params.get('plan');
                    if(plan == "premium"){
                        var min=15000;
                        var max= 1000000;
                        $("#price").html("USD 15,000.00 - USD 1,000,000.00");
                    }else if(plan == "core_portfolio"){
                        var min=5500;
                        var max= 14999;
                        $("#price").html("USD 5,500.00 - USD 14,999.00");
                    }
                    else if(plan == "retirement"){
                        var min=20000;
                        var max= 1000000000000;
                        $("#price").html("USD 20,000.00 - Unlimited");
                    }
                    else if(plan == "dedicated_portfolios"){
                        var min=2000;
                        var max= 5499;
                        $("#price").html("USD 2,000.00 - USD 5,499.00");
                    }
                    else if(plan == "starter"){
                        var min=200;
                        var max= 1999;
                        $("#price").html("USD 200.00 - USD 1,999.00");
                    }
                    
                    
                    var amount=$("#amount").val();
                    var amt = parseInt(amount);
                    if(amt<min){
                        $("#mess").show();
                        $("#mess").html("minimum investment for "+plan+" Plan is "+"$"+min);
                    }else if(amt>max){
                        $("#mess").show();
                        $("#mess").html("maximum investment for "+plan+" Plan is "+"$"+max);
                    }else{
                        location.replace("deposit_fund.php?plan="+plan+"&amount="+amt);
                    }
                    
                });
            </script>
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