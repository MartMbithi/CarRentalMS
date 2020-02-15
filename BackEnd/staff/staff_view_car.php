<?php
  session_start();
  include('inc/config.php');
  include('inc/checklogin.php');
  check_login();
  //hold logged in user session.
  $s_id = $_SESSION['s_id'];
  /*
  if(isset($_POST['update_profile']))
  {
      $a_id = $_SESSION['a_id'];
      $a_name = $_POST['a_name'];
      $a_email = $_POST['a_email'];
      $a_bio = $_POST['a_bio'];
      
      $a_dpic = $_FILES["a_dpic"]["name"];
          move_uploaded_file($_FILES["a_dpic"]["tmp_name"],"assets/img/theme/".$_FILES["a_dpic"]["name"]);//move uploaded image
      
      
      //sql to insert captured values
      $query="UPDATE crms_admin SET a_name=?, a_email = ?, a_bio=?, a_dpic = ? WHERE a_id =?";
      $stmt = $mysqli->prepare($query);
      $rc=$stmt->bind_param('ssssi', $a_name, $a_email, $a_bio, $a_dpic, $a_id);
      $stmt->execute();

      if($stmt)
      {
                $success = "Profile Updated!";
                
                //echo "<script>toastr.success('Have Fun')</script>";
      }
      else {
        $err = "Please Try Again Or Try Later";
      }
      
      
  }
  */
?>

<!DOCTYPE html>
<html>

<?php include("inc/head.php");?>

<body>
  <!-- Sidenav -->
  <?php include("inc/sidebar.php");?>
  <!-- Main content -->
  
        <div class="main-content">
            <!-- Top navbar -->
            <?php include("inc/nav.php");?>
            <!-- Header -->
        <?php
            //Get single details of logged in user
            $car_id = $_GET['car_id'];
            $ret="SELECT  * FROM  crms_cars  WHERE car_id=?";
            $stmt= $mysqli->prepare($ret) ;
            $stmt->bind_param('i',$car_id);
            $stmt->execute() ;//ok
            $res=$stmt->get_result();
            //$cnt=1;
            while($row=$res->fetch_object())
            {
        ?>
            <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 500px; background-image: url(../Uploads/Cars/<?php echo $row->front_img;?>); background-size: cover; background-position: center top;">
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-8"></span>
            <!-- Header container -->
            <div class="container-fluid d-flex align-items-center">
                <div class="row">
                <div class="col-lg-12 col-md-10">
                    <h3 class="display-2 text-white"><?php echo $row->car_name;?></h3>
                </div>
                </div>
            </div>
            </div>
            <!-- Page content -->
            <div class="container-fluid mt--7">
            <div class="row">
                <div class="col-xl-12 order-xl-2 mb-5 mb-xl-0">
                    <div class="card card-profile shadow">
                        <div class="row justify-content-center">
                        <div class="col-lg-6 order-lg-2">
                            <div class="card-profile-image">
                            <a href="#">
                                <img src="../Uploads/Cars/<?php echo $row->rear_img ;?>" class="circle">
                            </a>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 order-lg-2">
                            <div class="card-profile-image">
                            <a href="#">
                                <img src="../Uploads/Cars/<?php echo $row->interior_img;?>" class="circle">
                            </a>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 order-lg-2">
                            <div class="card-profile-image">
                            <a href="#">
                                <img src="../Uploads/Cars/<?php echo $row->exterior_img;?>" class="circle">
                            </a>
                            </div>
                        </div>
                        </div>
                        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        
                        </div>
                        <div class="card-body pt-0 pt-md-4">
                        
                        <div class="text-center">
                            
                            <hr>
                            <div class="card shadow">
                                <div class="card-header border-0">
                                <div class="row align-items-center">
                                    <div class="col">
                                    <h3 class="mb-0"><?php echo $row->car_name;?> Records</h3>
                                    </div>
                                   
                                </div>
                                </div>
                                <div class="table-responsive">
                                <!-- Projects table -->
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Car Name</th>
                                        <th scope="col">Car Type</th>
                                        <th scope="col">Car Reg No.</th>
                                        <th scope="col">Car Hire Price Per Day </th>
                                        <th scope="col">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        //get details of all cars this client has hired
                                        $car_id = $_GET['car_id'];
                                        $ret="SELECT * FROM crms_cars WHERE car_id = ? "; 
                                        $stmt= $mysqli->prepare($ret) ;
                                        $stmt->bind_param('i',$car_id);
                                        $stmt->execute() ;//ok
                                        $res=$stmt->get_result();
                                        $cnt=1;
                                        while($row=$res->fetch_object())
                                        {
                                            //Trim Timestamp to <DD-MM-YYY>
                                            //$mysqlDateTime = $row->b_date;
                                    ?>
                                        <tr>
                                            
                                            <td>
                                                <?php echo $row->car_name;?>
                                            </td>
                                            <td>
                                                <?php echo $row->car_type;?>
                                            </td>
                                            <td>
                                                <?php echo $row->car_regno;?>
                                            </td>
                                            <td>
                                              Ksh <?php echo $row->car_price;?>
                                            </td>
                                            <td>
                                            
                                                <?php 
                                                if($row->car_status == 'Available')
                                                {
                                                    echo '<span class="badge badge-success">Available<span>';
                                                }
                                                else
                                                {
                                                    echo '<span class="badge badge-danger">Hired</span>';
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
                            <br>
                            <?php
                            
                                $car_id = $_GET['car_id'];
                                $ret="SELECT  * FROM  crms_cars  WHERE car_id=?";
                                $stmt= $mysqli->prepare($ret) ;
                                $stmt->bind_param('i',$car_id);
                                $stmt->execute() ;//ok
                                $res=$stmt->get_result();
                                //$cnt=1;
                                while($row=$res->fetch_object())
                                {
                            ?>
                            <div class="card">
                                <div class="card-header">
                                    <?php echo $row->car_name;?> Features
                                </div>
                                <div class="card-body">
                                    <div class="card-text"><?php echo $row->car_features;?></div>
                                </div>
                            </div>

                            <?php }?>
                        </div>
                    </div>
                </div>
                
            </div>
            <?php }?>
            <!-- Footer -->
            <?php include("inc/footer.php");?>
            </div>
        </div>
    
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.0.0"></script>
  <script src="assets/js/argon-dashboard.min.js?v=1.1.2"></script>

  <!--Ck Editor-->
  <script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
  <script type="text/javascript">
    CKEDITOR.replace('bio')
</script>
</body>

</html>