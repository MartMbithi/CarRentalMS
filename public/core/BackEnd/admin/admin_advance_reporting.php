<?php
  session_start();
  include('inc/config.php');
  include('inc/checklogin.php');
  check_login();
  //hold logged in user session.
  $a_id = $_SESSION['a_id'];
  
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

    <div class="container-fluid mt--7">
        <!--Pie chart to show number of car categories-->
        <div class="row">
            <div class="card col-md-12">
                <h2 class="card-header">Client Records</h2>
                <div class="card-body">
                    <div class="table-responsive">
                    <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">National ID No.</th>
                                <th scope="col">Phone No.</th>
                                <th scope="col">Residency</th>
                                <th scope="col">Action<th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                //get details of recently joined clients
                                    $ret="SELECT * FROM crms_clients ORDER BY RAND() LIMIT 10 "; 
                                    $stmt= $mysqli->prepare($ret) ;
                                    $stmt->execute() ;//ok
                                    $res=$stmt->get_result();
                                    $cnt=1;
                                    while($row=$res->fetch_object())
                                    {
                            ?>
                                <tr>
                                <th scope="row">
                                    <?php echo $cnt;?>
                                </th>
                                <td>
                                    <?php echo $row->c_name;?>
                                </td>
                                <td>
                                    <?php echo $row->c_natidno;?>
                                </td>
                                
                                <td>
                                    <?php echo $row->c_phone;?>
                                </td>
                                
                                <td>
                                    <?php echo $row->c_adr;?>
                                </td>
                                <td>
                                        <a href  ="admin_view_client.php?c_id=<?php echo $row->c_id;?>&c_nnumber=<?php echo $row->c_number;?>" class="badge badge-success">
                                            <i class="fa fa-eye"></i> <i class="fa fa-user"></i>
                                                View
                                        </a>
                                               
                                </td>
                                </tr>
                            <?php $cnt = 1+$cnt; }?>
                            </tbody>
                        </table>
                    </div>
                </div>    
            </div>
            <br><br>
            <div class="card col-md-12">
                <h2 class="card-header">Staff Accounts Records</h2>
                <div class="card-body">
                    <div class="table-responsive">
                    <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">National ID No.</th>
                                <th scope="col">Phone No.</th>
                                <th scope="col">Residency</th>
                                <th scope="col">Action<th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                //get details of recently joined staff
                                    $ret="SELECT * FROM crms_staff ORDER BY RAND() LIMIT 10 "; 
                                    $stmt= $mysqli->prepare($ret) ;
                                    $stmt->execute() ;//ok
                                    $res=$stmt->get_result();
                                    $cnt=1;
                                    while($row=$res->fetch_object())
                                    {
                            ?>
                                <tr>
                                <th scope="row">
                                    <?php echo $cnt;?>
                                </th>
                                <td>
                                    <?php echo $row->s_name;?>
                                </td>
                                <td>
                                    <?php echo $row->s_natidno;?>
                                </td>
                                
                                <td>
                                    <?php echo $row->s_phone;?>
                                </td>
                                
                                <td>
                                    <?php echo $row->s_adr;?>
                                </td>
                                
                                <td>
                                        <a href  ="admin_view_staff.php?s_id=<?php echo $row->s_id;?>&s_no=<?php echo $row->s_no;?>" class="badge badge-success">
                                            <i class="fa fa-eye"></i> <i class="fa fa-user"></i>
                                                View
                                        </a>
                                              
                                </td>
                                </tr>
                            <?php $cnt = 1+$cnt; }?>
                            </tbody>
                        </table>
                    </div>
                </div>    
            </div>
            <div class="card col-md-12">
                <h2 class="card-header">Car Records</h2>
                <div class="card-body">
                    <div class="table-responsive">
                    <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">RegNo.</th>
                                <th scope="col">Category</th>
                                <th scope="col">Availability</th>
                                <th scope="col">Action<th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            //get details of all cars
                                    $ret="SELECT * FROM crms_cars  ORDER BY RAND() "; 
                                    $stmt= $mysqli->prepare($ret) ;
                                    $stmt->execute() ;//ok
                                    $res=$stmt->get_result();
                                    $cnt=1;
                                    while($row=$res->fetch_object())
                                    {
                            ?>
                                <tr>
                                <th scope="row">
                                    <?php echo $cnt;?>
                                </th>
                                <td>
                                    <?php echo $row->car_name;?>
                                </td>
                                <td>
                                    <?php echo $row->car_regno;?>
                                </td>
                                
                                <td>
                                    <?php echo $row->car_type;?>
                                </td>
                                
                                <td>
                                    <?php 
                                        if($row->car_status == 'Available')
                                        {
                                            echo '<span class="badge badge-success">Available</span>';
                                        }
                                        else
                                        {
                                            echo '<span class="badge badge-danger">Hired</span>';
                                        }
                                    ?>
                                </td>
                                <td>
                                        <a href  ="admin_view_car.php?car_id=<?php echo $row->car_id;?>&car_regno=<?php echo $row->car_regno;?>" class="badge badge-success">
                                            <i class="fa fa-eye"></i> <i class="fa fa-car"></i>
                                                View
                                        </a>
                                              
                                </td>
                                </tr>
                            <?php $cnt = 1+$cnt; }?>
                            </tbody>
                        </table>
                    </div>
                </div>    
            </div>
            <div class="card col-md-12">
                <h2 class="card-header">Booking Records</h2>
                <div class="card-body">
                    <div class="table-responsive">
                    <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Car Name</th>
                                <th scope="col">RegNo.</th>
                                <th scope="col">Category</th>
                                <th scope="col">Client Name</th>
                                <th scope="col">Date Hired</th>
                                <th scope="col">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            //get details of all cars
                                    $ret="SELECT * FROM crms_bookings  ORDER BY RAND() "; 
                                    $stmt= $mysqli->prepare($ret) ;
                                    $stmt->execute() ;//ok
                                    $res=$stmt->get_result();
                                    $cnt=1;
                                    while($row=$res->fetch_object())
                                    {
                                        //Trim Timestamp To DD-MM-YYYY
                                        $mysqlDateTime = $row->b_date;
                            ?>
                                <tr>
                                <th scope="row">
                                    <?php echo $cnt;?>
                                </th>
                                <td>
                                    <?php echo $row->car_name;?>
                                </td>
                                <td>
                                    <?php echo $row->car_regno;?>
                                </td>
                                
                                <td>
                                    <?php echo $row->car_type;?>
                                </td>

                                <td>
                                    <?php echo $row->c_name;?>
                                </td>

                                <td>
                                    <?php echo date("d-m-Y", strtotime($mysqlDateTime));?>
                                </td>
                                
                                <td>
                                    <?php 
                                    //If Approved show in Green If Pending Red
                                        if($row->b_status == 'Approved')
                                        {
                                            echo '<span class="badge badge-success">Approved</span>';
                                        }
                                        else
                                        {
                                            echo '<span class="badge badge-danger">Pending</span>';
                                        }
                                    ?>
                                </td>
                                
                                </tr>
                            <?php $cnt = 1+$cnt; }?>
                            </tbody>
                        </table>
                    </div>
                </div>    
            </div>
            <div class="card col-md-12">
                <h2 class="card-header"> Financial Records</h2>
                <div class="card-body">
                    <div class="table-responsive">
                    <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Car Name</th>
                                <th scope="col">RegNo.</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Client Name</th>
                                <th scope="col">Date Paid</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            //get details of all cars hiring payment records
                                    $ret="SELECT * FROM crms_car_payments    ORDER BY RAND() "; 
                                    $stmt= $mysqli->prepare($ret) ;
                                    $stmt->execute() ;//ok
                                    $res=$stmt->get_result();
                                    $cnt=1;
                                    while($row=$res->fetch_object())
                                    {
                                        //Trim Timestamp To DD-MM-YYYY
                                        $mysqlDateTime = $row->p_date;
                            ?>
                                <tr>
                                <th scope="row">
                                    <?php echo $cnt;?>
                                </th>
                                <td>
                                    <?php echo $row->car_name;?>
                                </td>
                                <td>
                                    <?php echo $row->car_regno;?>
                                </td>
                                
                                <td>
                                    Ksh <?php echo $row->p_amt;?>
                                </td>

                                <td>
                                    <?php echo $row->c_name;?>
                                </td>

                                <td>
                                    <?php echo date("d-m-Y", strtotime($mysqlDateTime));?>
                                </td>
                                
                                <td>
                                    <a href="admin_generate_receipt.php?p_id=<?php echo $row->p_id;?>" class="badge badge-success">
                                        <i class="fas fa-money-check-alt"></i> 
                                             Get Receipt
                                    </a>
                                </td>
                                
                                </tr>
                            <?php $cnt = 1+$cnt; }?>
                            </tbody>
                        </table>
                    </div>
                </div>    
            </div>

        </div>
      <!-- Footer -->
        <?php include("inc/footer.php");?>      
    </div>
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
</body>

</html>