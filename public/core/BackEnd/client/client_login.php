<!-- Server side code for log in-->
<?php
    session_start();
    include('inc/config.php');//get configuration file
    if(isset($_POST['login']))
    {
        $c_email=$_POST['c_email'];
        $c_pwd=sha1(md5($_POST['c_pwd']));//double encrypt to increase security
        $stmt=$mysqli->prepare("SELECT c_email ,c_pwd , c_id FROM crms_clients  WHERE c_email=? AND c_pwd=? ");//sql to log in user
        $stmt->bind_param('ss',$c_email,$c_pwd);//bind fetched parameters
        $stmt->execute();//execute bind
        $stmt -> bind_result($c_email, $c_pwd, $c_id);//bind result
        $rs=$stmt->fetch();
        $_SESSION['c_id']= $c_id;//assaign session to client_id
        //$uip=$_SERVER['REMOTE_ADDR'];
        //$ldate=date('d/m/Y h:i:s', time());
        if($rs)
            {//if its sucessfull
                header("location:client_dashboard.php");
            }

        else
            {
            #echo "<script>alert('Access Denied Please Check Your Credentials');</script>";
                $err = "Access Denied Please Check Your Credentials";
            }
    }
?>
<!DOCTYPE html>
<html lang="en">

<?php include("inc/head.php");?>

<body class="bg-default">
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand" href="../../">
          <img src="../../img/logo.png" />
        </a>
       
      </div>
    </nav>
    <!-- Header -->
    <div class="header  py-7 py-lg-8 " style="min-height: 500px; background-image: url(../../img/header-bg.jpg); background-size: cover; background-position: center top;">
    <span class="mask bg-gradient-default opacity-5"></span>
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">Client Login</h1>
              <p class="text-lead text-light">Please provide your email and passsword inorder to access client portal.</p>
            </div>
          </div>
        </div>
      </div>
      <br><br>

      
    
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary shadow border-0">
            <div class="card-body px-lg-5 py-lg-5">
                <!--Login Form-->
              <form method = "post" role="form">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" required name="c_email" placeholder="Email" type="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" required name="c_pwd" placeholder="Password" type="password">
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Remember me</span>
                  </label>
                </div>
                <div class="text-center">
                  <button type="submit" name="login" class="btn btn-primary my-4">Sign in</button>
                </div>
              </form>

              <!-- ./ Login Form-->

            </div>
          </div>

          <div class="row mt-3">
          <div class="col-4">
              <a href="client_signup.php" class=" btn btn-outline-success "><small>Sign Up</small></a>
            </div>

            <div class="col-4">
              <a href="client_pwd_reset.php" class=" btn btn-outline-danger"><small>Forgot Password?</small></a>
            </div>
            
            <div class="col-4 text-right">
              <a href="../../" class="btn btn-outline-secondary"><small>Home</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
   

    <?php include('inc/footer.php');?>
  </div>
  </div> 
  <!--   Core   -->
  <script src="assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
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