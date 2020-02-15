<?php
  session_start();
  include('inc/config.php');
  include('inc/checklogin.php');
  check_login();
  //hold logged in user session.
  $a_id = $_SESSION['a_id'];
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
            $a_id = $_SESSION['a_id'];
            $ret="SELECT  * FROM  crms_admin  WHERE a_id=?";
            $stmt= $mysqli->prepare($ret) ;
            $stmt->bind_param('i',$a_id);
            $stmt->execute() ;//ok
            $res=$stmt->get_result();
            //$cnt=1;
            while($row=$res->fetch_object())
            {
        ?>
            <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(assets/img/theme/<?php echo $row->a_dpic;?>); background-size: cover; background-position: center top;">
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-8"></span>
            <!-- Header container -->
            <div class="container-fluid d-flex align-items-center">
                <div class="row">
                <div class="col-lg-12 col-md-10">
                    <h3 class="display-2 text-white">Hello <?php echo $row->a_name;?></h3>
                </div>
                </div>
            </div>
            </div>
            <!-- Page content -->
            <div class="container-fluid mt--7">
            <div class="row">
                <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                        <a href="#">
                            <img src="assets/img/theme/<?php echo $row->a_dpic;?>" class="rounded-circle">
                        </a>
                        </div>
                    </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                    
                    </div>
                    <div class="card-body pt-0 pt-md-4">
                    <div class="row">
                        <div class="col">
                        <!--Profile Details-->
                        <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                            
                        </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <h3>
                        <?php echo $row->a_name;?> <span class="font-weight-light"></span>
                        </h3>
                        <div class="h5 font-weight-300">
                        <i class="ni location_pin mr-2"></i><?php echo $row->a_email;?>
                        </div>
                        <div class="h5 mt-4">
                        <i class="ni business_briefcase-24 mr-2"></i>System Administrator Car Renting Agency
                        </div>
                        <div>
                        </div>
                        <hr class="my-4" />
                        <p><?php echo $row->a_bio;?></p>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                        <h3 class="mb-0">Update My Account Details</h3>
                        </div>
                        <div class="col-4 text-right">
                        </div>
                    </div>
                    </div>
                    <div class="card-body">
                    <form method ="POST" enctype="multipart/form-data">
                        <h6 class="heading-small text-muted mb-4">User information</h6>
                        <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Full Name</label>
                                    <input type="text" id="input-username" name="a_name" value="<?php echo $row->a_name;?>" class="form-control form-control-alternative" placeholder="Username" value="lucky.jesse">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Administrator Profile Picture</label>
                                    <input type="file"  name="a_dpic"  class="form-control form-control-alternative" >
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Email address</label>
                                    <input type="email" id="input-email" name="a_email" value="<?php echo $row->a_email;?>" class="form-control form-control-alternative" placeholder="jesse@example.com">
                                </div>
                            </div>
                        </div>
                       <!--
                        <div class="row">
                            <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-first-name">First name</label>
                                <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="Lucky">
                            </div>
                            </div>
                            <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-last-name">Last name</label>
                                <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="Jesse">
                            </div>
                            </div>
                        </div>
                        -->
                        </div>
                        <!--
                        <hr class="my-4" />
                        <h6 class="heading-small text-muted mb-4">Contact information</h6>
                        <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">Address</label>
                                <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-city">City</label>
                                <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="New York">
                            </div>
                            </div>
                            <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-country">Country</label>
                                <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="United States">
                            </div>
                            </div>
                            <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-country">Postal code</label>
                                <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="Postal code">
                            </div>
                            </div>
                        </div>
                        </div>
                        <hr class="my-4" />
                         Description -->
                        <h6 class="heading-small text-muted mb-4">About me</h6>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label>About Me</label>
                                <textarea rows="4" name="a_bio" id="bio" class="form-control form-control-alternative" placeholder="A few words about you ..."><?php echo $row->a_bio;?></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-outline-success" name="update_profile" value="Update Profile">
                                </div>
                        </div>

                    </form>
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