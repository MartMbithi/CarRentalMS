<?php
  session_start();
  include('inc/config.php');
  include('inc/checklogin.php');
  check_login();
  //hold logged in user session.
  $c_id = $_SESSION['c_id'];
  /*delete user account
  
  if(isset($_GET['delete_id']))
  {
        $id=intval($_GET['delete_id']);
        $adn="DELETE FROM  crms_clients WHERE c_id = ?";
        $stmt= $mysqli->prepare($adn);
        $stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();	 
  
          if($stmt)
          {
            $success = "Client Account Deleted";
          }
            else
            {
                $err = "Try Again Later";
            }
    }
    */
?>

<!DOCTYPE html>
<html lang="en">

<?php include("inc/head.php");?>

<body class="">
 <!--Sidebar-->
 <?php include("inc/sidebar.php");?>
  
  <div class="main-content">
    <!-- Navbar -->
   <?php include("inc/nav.php");?>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header  pb-8 pt-5 pt-md-8" style="min-height: 300px; background-image: url(../../img/header-bg.jpg); background-size: cover; background-position: center top;">
        <span class="mask bg-gradient-default opacity-5"></span>
    </div>
    <?php
                            
        $p_id = $_GET['p_id'];
        $ret="SELECT  * FROM  crms_car_payments  WHERE p_id=?";
        $stmt= $mysqli->prepare($ret) ;
        $stmt->bind_param('i',$p_id);
        $stmt->execute() ;//ok
        $res=$stmt->get_result();
        //$cnt=1;
        while($row=$res->fetch_object())
        {
            //trim timestamp to DD-MM-YYYY
            $mysqlDateTime = $row->p_date;

    ?>
    <div class="container-fluid mt--7">
        <!--Pie chart to show number of car categories-->
        <div class="row">
            <div class="card col-md-12">
            <div id="invoice">
                <div class="toolbar hidden-print">
                    <div class="text-right">
                        <a href="javascript:window.print()" class="btn btn-info"><i class="fa fa-print"></i> Print</a>
                    </div>
                    <hr>
                </div>

                <div id="print_receipt" class="invoice overflow-auto">
                    <div style="min-width: 600px">
                        <header>
                            <div class="row">
                                <div class="col">
                                    <a target="_blank" href="">
                                        <img src="assets/img/brand/blue.png" class="navbar-brand-img" data-holder-rendered="true" />
                                        </a>
                                </div>
                                
                            </div>
                        </header>
                        <main>
                            <div class="row contacts">
                                <div class="col invoice-to">
                                    <div class="text-gray-light">Payment From:</div>
                                    <h2 class="to"><?php echo $row->c_name;?></h2>
                                    <div class="address"><?php echo $row->c_natidno;?></div>
                                    <div class="address"><?php echo $row->p_code;?></div>

                                </div>
                                <div class="col invoice-details">
                                    <h1 class="invoice-id">Receipt No. CRMS-H-<?php echo $row->p_id;?></h1>
                                    <div class="date">Date Paid: <?php echo date("d-m-Y", strtotime($mysqlDateTime));?></div>
                                </div>
                            </div>
                            <table border="0" cellspacing="0" cellpadding="0">
                                <thead>
                                    <tr>
                                        <th class="text-left">Car Name</th>
                                        <th class="text-right">Car Registration Number</th>
                                        <th class="text-right">Payment Method</th>
                                        <th class="text-right">Refrence Code</th>
                                        <th class="text-right">TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td class="text-left"><?php echo $row->car_name;?></td>
                                        <td class="text-right"><?php echo $row->car_regno;?></td>
                                        <td class="text-right"><?php echo $row->p_method;?></td>
                                        <td class="text-right"><?php echo $row->p_ref_number;?></td>
                                        <td class="text-right">Ksh<?php echo $row->p_amt;?></td>
                                        <?php
                                            //simple tax math
                                            $vat_tax = 0.16;
                                            $taxable_payment = $row->p_amt;
                                            $tax = $vat_tax * $taxable_payment;
                                            $without_tax = $taxable_payment - $tax;

                                        ?>
                                    </tr>
                                   
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2">SUBTOTAL</td>
                                        <td>Ksh <?php echo $without_tax;?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2">TAX 16%</td>
                                        <td>Ksh <?php echo $tax;?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2">GRAND TOTAL</td>
                                        <td>Ksh <?php echo $taxable_payment;?></td>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="thanks">Thank you!</div>
                            <div class="notices">
                                <div>NOTICE:</div>
                                <div class="notice">A finance charge of 1.5% will be made on unpaid balances or delayed car returns after the given days.</div>
                            </div>
                        </main>
                        <footer>
                            System Generated Receipt
                        </footer>
                    </div>
                    <div></div>
                </div>
                </div>  
            </div>
        </div>
      <!-- Footer -->
        <?php include("inc/footer.php");?>      
    </div>
    <?php }?>
  </div>
 
  <script src="assets/js/canvasjs.min.js"></script>
  <script src="assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <script src="assets/js/plugins/chart.js/dist/Chart.min.js"></script>
  <script src="assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
  <!--   Argon JS   -->
  <script src="assets/js/argon-dashboard.min.js?v=1.1.2"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
  
   

<script type="text/javascript">
    function printReceipt() {    
    var printContents = document.getElementById('print_receipt').innerHTML;
    var originalContents = document.body.innerHTML;
     document.body.innerHTML = printContents;
     window.print();
     document.body.innerHTML = originalContents;
    }
</script>




 
</body>

</html>