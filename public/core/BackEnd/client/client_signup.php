<!--Server side code to handle  sign up-->
<?php
	session_start();
	include('inc/config.php');
		
    if(isset($_POST['reg_user']))
    {
        $c_number = $_POST['c_number'];
        $c_name = $_POST['c_name'];
        $c_natidno = $_POST['c_natidno'];
        $c_phone = $_POST['c_phone'];
        //$c_dob = $_POST['c_dob'];
        $c_adr = $_POST['c_adr'];
        $c_email = $_POST['c_email'];
        $c_pwd = sha1(md5($_POST['c_pwd']));//enc this shit 
        //$c_bio = $_POST['c_bio'];

        //$c_dpic=$_FILES["c_dpic"]["name"];
           // move_uploaded_file($_FILES["c_dpic"]["tmp_name"],"../Uploads/Users/".$_FILES["c_dpic"]["name"]);//move uploaded image
        
        //$h_front_dpic=$_FILES["h_front_dpic"]["name"];
        //move_uploaded_file($_FILES["h_front_dpic"]["tmp_name"],"dist/img/houses/".$_FILES["h_front_dpic"]["name"]);
        
        //sql to insert captured values
        $query="INSERT INTO crms_clients (c_number, c_name, c_natidno, c_phone, c_adr, c_email, c_pwd) VALUES (?,?,?,?,?,?,?)";
        $stmt = $mysqli->prepare($query);
        $rc=$stmt->bind_param('sssssss', $c_number, $c_name, $c_natidno, $c_phone,  $c_adr, $c_email, $c_pwd);
        $stmt->execute();

        if($stmt)
        {
                  $success = "Account Created Proceed To Log In";
                  
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

<body class="bg-default">
  <div class="main-content">
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand" href="../../">
          <img src="../../img/logo.png" />
        </a>  <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
        <div class="container px-4">
            <a class="navbar-brand" href="../../">
            <img src="../../img/logo.png" />
            </a>
        
        </div>
        </nav>
       
      </div>
    </nav>
  
    <!-- Header -->
    <div class="header  py-7 py-lg-8 " style="min-height: 400px; background-image: url(../../img/header-bg.jpg); background-size: cover; background-position: center top;">
      <span class="mask bg-gradient-default opacity-5"></span>
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">Create Account With US</h1>
            </div>
          </div>
        </div>
      </div>
      <br><br>
      
    
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary shadow border-0">
          
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
              </div>
              <form method = "post" role="form">

                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input class="form-control" name="c_name" placeholder="Full Name" type="text">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-address-book"></i></span>
                    </div>
                    <input class="form-control" name="c_natidno" placeholder="National ID Number" type="text">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    </div>
                    <input class="form-control" name="c_phone" placeholder="Phone Number" type="text">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                    </div>
                    <input class="form-control" name="c_adr" placeholder="Residency" type="text">
                  </div>
                </div>


                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" name="c_email" placeholder="Email" type="email">
                  </div>
                </div>

                <div class="form-group col-md-6" style="display:none">
                  <label for="exampleInputEmail1">Client Number</label>
                      <?php 
                          $length = 4;    
                          $alph_num =  substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
                          $num =  substr(str_shuffle('0123456789'),1,$length);

                      ?>
                  <input type="text" required name="c_number" value="CRMS-C-<?php echo $alph_num;?>-<?php echo $num;?> " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" name="c_pwd" placeholder="Password" type="password">
                  </div>
                </div>

                <div class="row my-4">
                  <div class="col-12">
                    <div class="custom-control custom-control-alternative custom-checkbox">
                      <input required class="custom-control-input" id="customCheckRegister" type="checkbox">
                      <label class="custom-control-label" for="customCheckRegister">
                        <span class="text-muted">I agree with the <a href="#!">Privacy Policy</a></span>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" name="reg_user" class="btn btn-primary mt-4">Create account</button>
                </div>

              </form>
            </div>
          </div>
          <div class="row mt-3">
          <div class="col-6 ">
              <a href="client_login.php" class=" btn btn-outline-success "><small>Have An Account</small></a>
            </div>
            
            <div class="col-6 text-right">
              <a href="client_pwd_reset.php" class=" btn btn-outline-danger"><small>Forgot Password?</small></a>
            </div>

           

          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include("inc/footer.php");?>
  </div>
 
  <!--   Core   -->
  <script src="../assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="../assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="../assets/js/argon-dashboard.min.js?v=1.1.2"></script>
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