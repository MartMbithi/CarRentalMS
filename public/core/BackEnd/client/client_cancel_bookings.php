<?php
  session_start();
  include('inc/config.php');
  include('inc/checklogin.php');
  check_login();
  //hold logged in user session.
  $c_id = $_SESSION['c_id'];
  //register staff
  
		if(isset($_POST['conf_book_car']))
		{
            
            $b_id = $_GET['b_id'];
            $car_id = $_GET['car_id'];
            $b_status = $_POST['b_status'];
            $car_status = $_POST['car_status'];
        
            //sql to insert captured values
            $query1="UPDATE crms_bookings SET b_status =? WHERE b_id =? ";
            $query2="UPDATE crms_cars SET car_status =? WHERE car_id =? ";

            $stmt1 = $mysqli->prepare($query1);
            $stmt2 = $mysqli->prepare($query2);

            $rc=$stmt1->bind_param('si', $b_status, $b_id);
            $rc=$stmt2->bind_param('si', $car_status, $car_id);

            $stmt1->execute();
            $stmt2->execute();


            if($stmt1 && $stmt2)
            {
                      $success = "Car Hiring Request Cancelled";
                      
                      //echo "<script>toastr.success('Have Fun')</script>";
            }
            else {
              $err = "Please Try Again Or Try Later";
            }
			
			
		}
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
        <?php
                            
            $b_id = $_GET['b_id'];
            $ret="SELECT  * FROM  crms_bookings  WHERE b_id=?";
            $stmt= $mysqli->prepare($ret) ;
            $stmt->bind_param('i',$b_id);
            $stmt->execute() ;//ok
            $res=$stmt->get_result();
            //$cnt=1;
            while($row=$res->fetch_object())
            {
        ?>
        <div class="row">
            <div class="card col-md-12">
                <h2 class="card-header"><?php echo $row->car_name;?></h2>
                <div class="card-body">
                    <!--Form-->
                    <form method="post" enctype="multipart/form-data" >
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Car Name</label>
                                <input type="text" required readonly name="car_name" value="<?php echo $row->car_name;?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Car Type</label>
                                <input type="text" required readonly name="car_type" value="<?php echo $row->car_type;?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Car Registration Number</label>
                                <input type="text" required readonly name="car_regno" value="<?php echo $row->car_regno;?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            
                            
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Number Of Days Hired</label>
                                <input type="text" required readonly name="b_number" value="<?php echo $row->b_duration;?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Client Name</label>
                                <input type="text" readonly value="<?php echo $row->c_name;?>" required name="c_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Client Phone Number</label>
                                <input type="text" required readonly value="<?php echo $row->c_phone;?>" name="c_phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Client ID Number</label>
                                <input type="text"  readonly required name="c_natidno" value="<?php echo $row->c_natidno;?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Booking Number</label>
                                   
                                <input type="text" required readonly name="b_number" readonly value="<?php echo $row->b_number;?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Car Hire Status</label>
                                <input type="text" required readonly name="b_status" readonly value="Pending" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Car Status</label>
                                <input type="text" required readonly name="car_status" readonly value="Available" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            


                        </div> 
                        <?php }?>
                        <button type="submit" name="conf_book_car" class="btn btn-outline-danger">Cancel Hiring</button>
                    </form>
                    <!-- ./ Form -->
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