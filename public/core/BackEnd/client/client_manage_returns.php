<?php
  session_start();
  include('inc/config.php');
  include('inc/checklogin.php');
  check_login();
  //hold logged in user session.
  $c_id = $_SESSION['c_id'];
  /*delete Booking
  if(isset($_GET['delete_booking']))
  {
        $id=intval($_GET['delete_booking']);
        $adn="DELETE FROM  crms_bookings WHERE b_id = ?";
        $stmt= $mysqli->prepare($adn);
        $stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();	 
  
          if($stmt)
          {
            $success = "Booking Record Deleted";
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

    <div class="container-fluid mt--7">
        <!--Pie chart to show number of car categories-->
        <div class="row">
            <div class="card col-md-12">
                <h2 class="card-header">Select Any Hired Car To Return It</h2>
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
                                <th scope="col">Return Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            //get details of all cars
                                    $c_id = $_SESSION['c_id'];
                                    $ret="SELECT * FROM crms_bookings WHERE c_id =? AND  b_car_return_status ='Returned'  ORDER BY RAND() "; 
                                    $stmt= $mysqli->prepare($ret) ;
                                    $stmt->bind_param('i', $c_id);
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
                                        if($row->b_car_return_status == 'Returned')
                                        {
                                            echo '<span class="badge badge-success"><i class ="fa fa-check"></i> Returned</span>';
                                        }
                                        else
                                        {
                                            echo '<span class="badge badge-danger">Pending</span>';
                                        }
                                    ?>
                                </td>

                                <!--
                                <td>
                                    <?php 
                                        //Only allow approved cars to be returned.
                                            if($row->b_status == 'Approved')
                                            {
                                                echo 
                                                "
                                                    <a href  ='staff_return_single_booking.php?car_id=$row->car_id&b_id=$row->b_id' class='badge badge-success'>
                                                        <i class='fas fa-check'></i> <i class='fa fa-car'></i>
                                                            Return Car
                                                    </a> 
                                                ";
                                               
                                            }
                                            else
                                            {
                                                echo '<span class="badge badge-danger">Booking Pending </span>';
                                            }
                                    ?>                     
                                </td>-->
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