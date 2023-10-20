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
                                <i class="ti-briefcase"></i> Make Deposit
                            </div>
                            
                        </div>
                        <form action="proceed_invest.php">
                           
                            <div class="form-group p-2">
                                <?php echo $with_msg;?>
                                <heading>Select Investment Plan</heading><br>
                                <p style="color:#7f8282">Each investment product is carefully crafted by our experts. Whether it's your risk profile, social values, or beliefs, you should be able to find one to match your investment needs and preferences.<a href="https://websitename.com/plans.php">More Details</a></p>
                                <select class="form-control selectpicker" id="plan" onchange="planchange()"data-error="Select an investment plan to proceed" name="plan" required >
                                    <option value="">Select Plan Here</option>
                                    <option value="starter">Starter Plan</option>
                                    <option value="dedicated_portfolios">Dedicated Portfolio</option>
                                    <option value="core_portfolios">Core Portfolio</option>
                                    <option value="premium">Premium Plan</option>
                                    <option value="retirement">retirement</option>
                                </select>
                                 <br>
                                 <hr>
                                 <div class="details" style="display:none; margin-top:10px;">
                                    <span style="font-weight:bolder; text-align:center;" id="title"></span>
                                    <ul>
                                        <li id="percent"></li> Daily for
                                        <li id="duration"></li>
                                        <li id="price"></li>
                                    </ul>
                                    
                                </div>
                               
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                                <script>
                                    function planchange(){
                                        $(".details").show();
                                        var selected = $("#plan").val();
                                        if(selected == "starter"){
                                            $("#title").html("Starter Plan");
                                            $("#percent").html("3%");
                                            $("#duration").html("4 Days");
                                            $("#price").html("$200 - $1,999");
                                        }else if(selected == "dedicated_portfolios"){
                                            $("#title").html("Dedicated Portfolio");
                                            $("#percent").html("5%");
                                            $("#duration").html("4 Days");
                                            $("#price").html("$2,000 - $5,499");
                                        }
                                        else if(selected == "retirement"){
                                            $("#title").html("Retirement Investment Income");
                                            $("#percent").html("3.5%");
                                            $("#duration").html("1 Year");
                                            $("#price").html("$20,000-unlimited");
                                        }
                                        else if(selected == "core_portfolios"){
                                            $("#title").html("Core Portfolios");
                                            $("#percent").html("9%");
                                            $("#duration").html("7 Days");
                                            $("#price").html("$5,500 - $14,999");
                                        }
                                        else if(selected == "premium"){
                                            $("#title").html("Premium Plan");
                                            $("#percent").html("14%");
                                            $("#duration").html("7 Days");
                                            $("#price").html("$15,000-1,000,000");
                                        }else if(selected == ""){
                                            $(".details").hide();
                                        }
                                    }
                                </script>
                            </div>
                            <div class="form-group p-2">
                             <button name="proceed_invest" type="submit" class="btn btn-primary"><i class="ti-new-window"></i> PROCEED TO AMOUNT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        
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