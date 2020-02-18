<?php
  session_start();
  include('inc/config.php');
  include('inc/checklogin.php');
  check_login();
  //hold logged in user session.
  //use staff id to hold session
  $s_id = $_SESSION['s_id'];
  //register staff
  
		if(isset($_POST['update_change_pwd']))
		{
            $s_id = $_SESSION['s_id'];
            /*
            //$s_no = $_GET['s_no'];
            $s_name = $_POST['s_name'];
            $s_natidno = $_POST['s_natidno'];
            $s_phone = $_POST['s_phone'];
            //$c_dob = $_POST['c_dob'];
            $s_adr = $_POST['s_adr'];
            $s_email = $_POST['s_email'];
            */
            $s_pwd = sha1(md5($_POST['s_pwd']));//enc this shit 
            //$c_bio = $_POST['c_bio'];

            //$s_dpic=$_FILES["s_dpic"]["name"];
		        //move_uploaded_file($_FILES["s_dpic"]["tmp_name"],"../Uploads/Users/".$_FILES["s_dpic"]["name"]);//move uploaded image
            
            //$h_front_dpic=$_FILES["h_front_dpic"]["name"];
            //move_uploaded_file($_FILES["h_front_dpic"]["tmp_name"],"dist/img/houses/".$_FILES["h_front_dpic"]["name"]);
            
            //sql to insert captured values
            $query="UPDATE crms_staff SET s_pwd=? WHERE s_id=?";
            $stmt = $mysqli->prepare($query);
            $rc=$stmt->bind_param('si',  $s_pwd, $s_id);
            $stmt->execute();

            if($stmt)
            {
                      $success = "Staff Account Password Updated ";
                      
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
            //Get single details of logged in user
            $s_id = $_SESSION['s_id'];
            $ret="SELECT  * FROM  crms_staff  WHERE s_id=?";
            $stmt= $mysqli->prepare($ret) ;
            $stmt->bind_param('i',$s_id);
            $stmt->execute() ;//ok
            $res=$stmt->get_result();
            //$cnt=1;
            while($row=$res->fetch_object())
            {
            ?>
        <div class="row">
            <div class="card col-md-12">
                <h2 class="card-header">Update <?php echo $row->s_name;?>'s  Account</h2>
                <div class="card-body">
                    <!--Form-->
                    <form method="post" enctype="multipart/form-data" >
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Old Password</label>
                                <input type="password" required  name="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">New Password</label>
                                <input type="password"  required name="s_pwd" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Confirm New Password</label>
                                <input type="password"  required name="s_pwd" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                       </div>
                        <button type="submit" name="update_change_pwd" class="btn btn-outline-primary">Update  Staff Password</button>
                    </form>
                    <!-- ./ Form -->
                </div>    
            </div>
        </div>
        <?php }?>
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