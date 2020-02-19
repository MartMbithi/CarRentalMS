<?php
  session_start();
  include('inc/config.php');
  include('inc/checklogin.php');
  check_login();
  //hold logged in user session.
  $s_id = $_SESSION['s_id'];
  //update logged in user profile
  
  
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
            //Get single details of logged in user ->
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
            <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(../Uploads/Users/<?php echo $row->s_dpic;?>); background-size: cover; background-position: center top;">
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-8"></span>
            <!-- Header container -->
            <div class="container-fluid d-flex align-items-center">
                <div class="row">
                <div class="col-lg-12 col-md-10">
                    <h3 class="display-2 text-white"><?php echo $row->s_name;?></h3>
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
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                            <a href="#">
                                <img src="../Uploads/Users/<?php echo $row->s_dpic;?>" class="circle">
                            </a>
                            </div>
                        </div>
                        </div>
                        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        
                        </div>
                        <div class="card-body pt-0 pt-md-4">
                        
                        <div class="text-center">
                            <div class="h5 mt-4">
                                <i class="fa fa-user" mr-2"></i>  <?php echo $row->s_name;?>
                                
                            </div>

                            <div class="h5 mt-4 ">
                                <i class="fa fa-envelope" mr-2"></i> <?php echo $row->s_email;?>
                            </div>

                            <div class="h5 mt-4">
                                <i class="fa fa-phone mr-2"></i> <?php echo $row->s_phone;?>
                            </div>

                            <div class="h5 mt-4">
                                <i class="fa fa-map-marker mr-2"></i> <?php echo $row->s_adr;?>
                            </div>

                            <div class="h5 mt-4">
                                <i class="fa fa-address-card mr-2"></i> <?php echo $row->s_natidno;?>
                            </div>

                            <div class="h5 mt-4">
                                <i class="fa fa-user-cog mr-2"></i> <?php echo $row->s_no;?>
                            </div>

                            <div>
                            </div>
                            <hr class="my-4" />
                            <p><?php echo $row->s_bio;?></p>
                            <hr class="my-4" />
                            <!--Client Hired Cars-->
                            <div class="card shadow">
                                <div class="card-header border-0">
                                <div class="row align-items-center">
                                    <div class="col">
                                    <h3 class="mb-0"><?php echo $row->s_name;?> Car Hire Records</h3>
                                    </div>
                                   
                                </div>
                                </div>
                                <div class="table-responsive">
                                <!-- Projects table -->
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Car Name</th>
                                        <th scope="col">Car Type</th>
                                        <th scope="col">Car Reg No.</th>
                                        <th scope="col">Hire Date</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        //get details of all cars this staff has hired
                                        $s_id = $_SESSION['s_id'];
                                        $ret="SELECT * FROM crms_bookings WHERE s_id = ? ORDER BY RAND() LIMIT 10  "; 
                                        $stmt= $mysqli->prepare($ret) ;
                                        $stmt->bind_param('i',$s_id);
                                        $stmt->execute() ;//ok
                                        $res=$stmt->get_result();
                                        $cnt=1;
                                        while($row=$res->fetch_object())
                                        {
                                            //Trim Timestamp to <DD-MM-YYY>
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
                                                <?php echo $row->car_type;?>
                                            </td>
                                            <td>
                                                <?php echo $row->car_regno;?>
                                            </td>
                                            <td>
                                                <?php echo date("d-m-Y", strtotime($mysqlDateTime));?>
                                            </td>
                                            <td>
                                            <?php 
                                                if ($row->b_status == 'Approved')
                                                {
                                                   echo "
                                                        <span class='badge badge-success'>Approved</span>
                                                    ";
                                                }
                                                else{
                                                    echo "
                                                        <span class='badge badge-danger'>Pending</span>
                                                    ";
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