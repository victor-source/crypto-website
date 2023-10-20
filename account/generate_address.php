<?php include "includes/sidenav.php";?>
<?php
$msg="";
if(isset($_GET['method'])){
    $method = $_GET['method'];
    $amount = $_GET['amount'];
    $code = $_GET['code'];
    
    $address = "";
    
    if($method=="btc"){
        $address = "";
    }else if($method == "eth"){
        $address = "";
    }
}
if(isset($_POST['payment_sent'])){
    $sql = $conn->query("update deposits set mark=1 where code='$code'");
    if($sql){
        $msg = "<div class='alert alert-success'><b>Success</b> Deposit marked as paid, kindly wait while we credit your account after confirmation.</div>";
    }
}
?>

<link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css">
        <!-- BOF MAIN -->
        <div class="main">
            <div style="height:62px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:40px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=dark&pref_coin_id=1505&invert_hover=" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Invest Wise</div></div>
            <!-- BOF Breadcrumb -->
            <div class="row">
                <div class="col">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="ti-home"></i> Complete Deposit</a></li>
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
                                <i class="ti-briefcase"></i>Complete Funds Deposit
                            </div>
                            
                        </div>
                        <div class="card-body">
                            <?php echo $msg ?>
                            <p>Complete deposit by sending <b><?php echo $amount;?></b> of <b><?php echo $method?> </b>to the stipulated address below.</b></p>
                            <br>

                            <input type="text" id='address' value="<?php echo $address?>" class="form-control"><br>
                           
                                    <button class="btn btn-primary" onclick="copy()">Copy Address</button>
                                    <br>
                                   <p>-OR-</p>
                                   <small>Scan the code below to make payment:</small>
                                   <br>
                                   <img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=<?php echo $address;?>&choe=UTF-8">
                                    <form method="post" style="margin-top: 5px;;">
                                        <button class="btn btn-success" name='payment_sent'>I have sent payment</button>
                                    </form>
                           
                           
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- EOF Datatable Addrows -->
           

          <script>
                function copy() {
                  /* Get the text field */
                  var copyText = document.getElementById("address");
                
                  /* Select the text field */
                  copyText.select();
                  copyText.setSelectionRange(0, 99999); /* For mobile devices */
                
                  /* Copy the text inside the text field */
                  navigator.clipboard.writeText(copyText.value);
                  
                  /* Alert the copied text */
                  alert("Copied the text: " + copyText.value);
                }
                function copys() {
                  /* Get the text field */
                  var copyText = document.getElementById("toks");
                
                  /* Select the text field */
                  copyText.select();
                  copyText.setSelectionRange(0, 99999); /* For mobile devices */
                
                  /* Copy the text inside the text field */
                  navigator.clipboard.writeText(copyText.value);
                  
                  /* Alert the copied text */
                  alert("Copied the text: " + copyText.value);
                }
                </script>

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