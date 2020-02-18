<?php
	session_start();
	include('inc/config.php');
		if(isset($_POST['reset_pwd']))
		{
      $email=$_POST['email'];
      $token=$_POST['token'];
      
      //sql to insert captured values
      $query="INSERT INTO crms_pwd_resets (email, token) values(?,?)";
      $stmt = $mysqli->prepare($query);
      $rc=$stmt->bind_param('ss', $email, $token);
      $stmt->execute();

            if($stmt)
            {
                      $success = "Check Your Mail For Password Reset Instructions.";
                      
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
            </a>
        
        </div>
    </nav>
  
    <!-- Header -->
    <div class="header  py-7 py-lg-8" style="min-height: 500px; background-image: url(../../img/header-bg.jpg); background-size: cover; background-position: center top;">
    <span class="mask bg-gradient-default opacity-5"></span>
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
                <h1 class="text-white">Password Reset</h1>
            </div>
          </div>
        </div>
      </div>
      
    <br><br><br><br>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary shadow border-0">
          
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Provide Your Email Inorder To Reset Password</small>
              </div>
              <form method = "post" role="form">
                
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" name="email" placeholder="Email" type="email">
                  </div>
                </div>

                <div class="form-group" style="display:none">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                        <?php 
                          $length = 20;    
                          $number =  substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
                        ?>
                    <input class="form-control" name="token" value="<?php echo $number;?>" placeholder="Number" type="text">
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" name="reset_pwd" class="btn btn-primary mt-4">Reset Password</button>
                </div>
              </form>
            </div>
          </div>
         
          <div class="row mt-3">
<!--
            <div class="col-6">
              <a href="admin_register.php" class="text-light"><small>Create An Account </small></a>
            </div>
-->
            <div class="col-6 text-centre">
              <a href="client_login.php" class="btn btn-outline-success"><small>Remembered Password</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include("inc/footer.php");?>
  </div>  
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