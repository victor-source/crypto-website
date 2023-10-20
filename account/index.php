<?php include "includes/sidenav.php";
$invest_bal = 0;
function dateDiffInDays($date1, $date2) 
  {
      // Calculating the difference in timestamps
      $diff = strtotime($date2) - strtotime($date1);
  
      // 1 day = 24 hours
      // 24 * 60 * 60 = 86400 seconds
      return abs(round($diff / 86400));
  }
  $investments = $conn->query("select * from deposits where email='$user' and status = 1");
  foreach($investments as $investment){
      // Start date
      $date2 = $investment['date'];
      $id = $investment['id'];
      // End date
      
      $date1 = date("d-m-Y");
      // Function call to find date difference
      $dateDiff = dateDiffInDays($date1, $date2);
      $plan = $investment['plan'];
      $amount = $investment['amount'];
      if($plan =='starter'){
          $interest = 0.03;
          $duration = 4;
      }else if($plan == 'dedicated_portfolios'){
          $interest = 0.05 ;
          $duration = 4;
      }else if($plan == 'core_portfolio'){
          $interest = 0.09;
          $duration = 7;
      }else if($plan == 'premium'){
          $interest = 0.14;
          $duration = 7;
      }else if($plan == 'retirement'){
          $interest = 0.035;
          $duration = 365;
      }
      if($dateDiff>$duration){
        //   update investment
        $total_invest_outcome = $interest * $amount * $duration;
        $total_invest_outcome = $total_invest_outcome + $amount;
        $sql = $conn->query("update deposits set status=2 where id='$id' ");
        $main_balance = $show['balance']+$total_invest_outcome;
        $sql = $conn->query("update users set balance='$main_balance' where email='$user'");
      }else{
        //   add up interest
        $new_invest_bal = $interest * $amount;
        $new_invest_bal = $new_invest_bal * $dateDiff+$amount;
        $invest_bal = $invest_bal+$new_invest_bal;
      }
  }
  


$show = mysqli_fetch_array($conn->query("select * from users where email='$user'")); 
?>

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
            <div class="row">
                <div class="col-md-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="icon-left text-secondary"><i class="ti-wallet"></i></div>
                            <div class="number-right text-right">
                                <h6 class="bold text-secondary">Balance (profit)</h6>
                                <h3 class="card-title text-success bold">$<?php echo number_format($show['balance'],2);?></h3>
                            </div>
                            <!-- <div class="progress progress-bar-sm">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress-text text-secondary">
                                <span class="float-left"><small>$0</small></span>
                                <span class="float-right"><small>$100,000</small></span>
                            </div> -->
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="icon-left text-secondary"><i class="ti-money"></i></div>
                            <div class="number-right text-right">
                                <h6 class="bold text-secondary">Investment Balance</h6>
                                <h3 class="card-title text-warning bold">$<?php echo number_format($invest_bal,2);?></h3>
                            </div>
                            <!-- <div class="progress progress-bar-sm">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress-text text-secondary">
                                <span class="float-left"><small>$0</small></span>
                                <span class="float-right"><small>$100,000</small></span>
                            </div> -->
                        </div>
                    </div>
                </div>
                
                
                <div class="col-md-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="icon-left text-secondary"><i class="ti-receipt"></i></div>
                            <div class="number-right text-right">
                                <h6 class="bold text-secondary">Affilliate Commission</h6>
                                <h3 class="card-title text-primary bold">$<?php echo number_format($show['ref_earnings'],2);?></h3>
                            </div>
                            <!-- <div class="progress progress-bar-sm">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress-text text-secondary">
                                <span class="float-left"><small>Total Monthly Orders</small></span>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="icon-left text-secondary"><i class="ti-money"></i></div>
                            <div class="number-right text-right">
                                <h6 class="bold text-secondary">Total Withdrawal(s)</h6>
                                <h3 class="card-title text-bubblegum bold">$<?php echo number_format($show['total_withdrawal'],2);?></h3>
                            </div>
                            <!-- <div class="progress progress-bar-sm">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-bubblegum" role="progressbar" style="width: 30%" aria-valuenow="30"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress-text text-secondary">
                                <span class="float-left"><small>0%</small></span>
                                <span class="float-right"><small>100%</small></span>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Year Comparison Chart -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div style="height:492px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38; padding: 0px; margin: 0px; width: 100%;"><div style="height:472px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=dark&cnt=7&pref_coin_id=1505&graph=yes" width="100%" height="468px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by investwise</div></div>
                    </div>
                </div>
            </div>

          

            <!-- EOF MAIN-BODY -->

        </div>
        <!-- EOF MAIN -->

        <!-- BOF FOOTER -->
        <div class="footer">
           

            <p class="text-center">Copyright © 2013-2021 investwise All rights reserved.</p>
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
</body>


</html>