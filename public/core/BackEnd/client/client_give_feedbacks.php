<?php
  session_start();
  include('inc/config.php');
  include('inc/checklogin.php');
  check_login();
  //hold logged in user session.
  $c_id = $_SESSION['c_id'];
  //register staff
  
		if(isset($_POST['feed_back']))
		{
            $user_name = $_POST['user_name'];
            $user_number = $_POST['user_number'];
            $feedback  = $_POST['feedback'];
            
            //sql to insert captured values
            $query1="INSERT INTO crms_feedbacks (user_name, user_number, feedback) VALUES (?,?,?)";

            $stmt1 = $mysqli->prepare($query1);

            $rc=$stmt1->bind_param('sss' , $user_name, $user_number, $feedback);

            $stmt1->execute();

            if($stmt1 )
            {
                      $success = "Feedback Submitted";
                      
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
                            
            $c_id = $_SESSION['c_id'];
            $ret="SELECT  * FROM  crms_clients  WHERE c_id=?";
            $stmt= $mysqli->prepare($ret) ;
            $stmt->bind_param('i',$c_id);
            $stmt->execute() ;//ok
            $res=$stmt->get_result();
            //$cnt=1;
            while($row=$res->fetch_object())
            {
        ?>
        <div class="row">
            <div class="card col-md-12">
                <h2 class="card-header">Hey <?php echo $row->c_name;?>! Tell Us How Do You Feel About Car Rentals Agency.</h2>
                <div class="card-body">
                    <!--Form-->
                    <form method="post">
                        <div class="row">
                            <div class="form-group col-md-4" style="display:none">
                                <label for="exampleInputEmail1">User Name</label>
                                <input type="text" required readonly name="user_name" value="<?php echo $row->c_name;?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-4" style="display:none">
                                <label for="exampleInputEmail1">Client Number</label>
                                <input type="text" required readonly name="user_number" value="<?php echo $row->c_number;?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            
                        </div>
                        
                       
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Please Give Your Testimonial, Feedback Or Complain.</label>
                            <textarea type="text" required  name="feedback" class="form-control" id="testimonials" aria-describedby="emailHelp"></textarea>
                        </div>


                        <button type="submit" name="feed_back" class="btn btn-outline-success">Submit</button>
                    </form>
                    <!-- ./ Form -->
                </div>    
            </div>

            <?php }?>
        </div>
      <!-- Footer -->
        <?php include("inc/footer.php");?>      
    </div>
  </div>

  <script src="//cdn.ckeditor.com/4.13.1/full/ckeditor.js"></script>
    <script type="text/javascript">
    CKEDITOR.replace('testimonials')
  </script> 
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