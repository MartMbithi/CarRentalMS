<?php
  session_start();
  include('inc/config.php');
  include('inc/checklogin.php');
  check_login();
  //hold logged in user session.
  $a_id = $_SESSION['a_id'];
  //register staff
  
		if(isset($_POST['reg_staff']))
		{
            $s_no = $_POST['s_no'];
            $s_name = $_POST['s_name'];
            $s_natidno = $_POST['s_natidno'];
            $s_phone = $_POST['s_phone'];
            //$c_dob = $_POST['c_dob'];
            $s_adr = $_POST['s_adr'];
            $s_email = $_POST['s_email'];
            $s_pwd = sha1(md5($_POST['s_pwd']));//enc this shit 
            //$c_bio = $_POST['c_bio'];

            $s_dpic=$_FILES["s_dpic"]["name"];
		        move_uploaded_file($_FILES["s_dpic"]["tmp_name"],"../Uploads/Users/".$_FILES["s_dpic"]["name"]);//move uploaded image
            
            //$h_front_dpic=$_FILES["h_front_dpic"]["name"];
            //move_uploaded_file($_FILES["h_front_dpic"]["tmp_name"],"dist/img/houses/".$_FILES["h_front_dpic"]["name"]);
            
            //sql to insert captured values
            $query="INSERT INTO crms_staff (s_no, s_name, s_natidno, s_phone, s_adr, s_email, s_pwd, s_dpic) VALUES (?,?,?,?,?,?,?,?)";
            $stmt = $mysqli->prepare($query);
            $rc=$stmt->bind_param('ssssssss', $s_no, $s_name, $s_natidno, $s_phone, $s_adr, $s_email, $s_pwd, $s_dpic);
            $stmt->execute();

            if($stmt)
            {
                      $success = "Staff Account Created";
                      
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
        <!--Pie chart to show number of car categories-->
        <div class="row">
            <div class="card col-md-12">
                <h2 class="card-header">Add New Staff</h2>
                <div class="card-body">
                    <!--Form-->
                    <form method="post" enctype="multipart/form-data" >
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" required name="s_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-6" style="display:none">
                                <label for="exampleInputEmail1">Staff Number</label>
                                    <?php 
                                        $length = 4;    
                                        $alph_num =  substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
                                        $num =  substr(str_shuffle('0123456789'),1,$length);

                                    ?>
                                <input type="text" required name="s_no" value="CRMS-S-<?php echo $alph_num;?>-<?php echo $num;?> " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Phone Number</label>
                                <input type="text" required name="s_phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Residency</label>
                                <input type="text" required name="s_adr" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">National ID Number</label>
                                <input type="text" required name="s_natidno" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Passport</label>
                                <input type="file"  required name="s_dpic" class="form-control btn btn-outline-success" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            
                        </div> 

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" required name="s_email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" required name="s_pwd" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>  

                        
                        <button type="submit" name="reg_staff" class="btn btn-primary">Add Staff</button>
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