<?php
  session_start();
  include('inc/config.php');
  include('inc/checklogin.php');
  check_login();
  //hold logged in user session.
  $a_id = $_SESSION['a_id'];
  
  if(isset($_POST['publish']))
  {
      $f_id = $_GET['f_id'];
      $f_status = $_POST['f_status'];
      
      
      //sql to insert captured values
      $query="UPDATE crms_feedbacks SET f_status = ? WHERE f_id =?";
      $stmt = $mysqli->prepare($query);
      $rc=$stmt->bind_param('si', $f_status, $f_id);
      $stmt->execute();

      if($stmt)
      {
                $success = "Published!";
                
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
            $f_id = $_GET['f_id'];
            $ret="SELECT  * FROM  crms_feedbacks  WHERE f_id=?";
            $stmt= $mysqli->prepare($ret) ;
            $stmt->bind_param('i',$f_id);
            $stmt->execute() ;//ok
            $res=$stmt->get_result();
            //$cnt=1;
            while($row=$res->fetch_object())
            {
        ?>
            <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 300px; background-image: url(../Uploads/Cars/); background-size: cover; background-position: center top;">
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-8"></span>
            <!-- Header container -->
            </div>
            <!-- Page content -->
            <div class="container-fluid mt--7">
            <div class="row">
                <div class="col-xl-12 order-xl-2 mb-5 mb-xl-0">
                    <div class="card card-profile shadow">
                       
                        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        
                        </div>
                        <div class="card-body pt-0 pt-md-4">
                        
                        <div class="text-center">
                            
                            <hr>
                            <div class="card shadow">
                                <div class="card-header border-0">
                                <h3 class="mb-0"><?php echo $row->user_name;?> Feedback</h3>
                                </div>
                                <div class="table-responsive">
                                <!-- Projects table -->
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col">User Name</th>
                                        <th scope="col">User Number</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $f_id = $_GET['f_id'];
                                        $ret="SELECT  * FROM  crms_feedbacks  WHERE f_id=?";
                                        $stmt= $mysqli->prepare($ret) ;
                                        $stmt->bind_param('i',$f_id);
                                        $stmt->execute() ;//ok
                                        $res=$stmt->get_result();
                                        $cnt=1;
                                        while($row=$res->fetch_object())
                                        {
                                    ?>
                                        <tr>
                                            
                                            <td>
                                                <?php echo $row->user_name;?>
                                            </td>
                                            <td>
                                                <?php echo $row->user_number;?>
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
                                        $f_id = $_GET['f_id'];
                                        $ret="SELECT  * FROM  crms_feedbacks  WHERE f_id=?";
                                        $stmt= $mysqli->prepare($ret) ;
                                        $stmt->bind_param('i',$f_id);
                                        $stmt->execute() ;//ok
                                        $res=$stmt->get_result();
                                        $cnt=1;
                                        while($row=$res->fetch_object())
                                        {
                            ?>
                            <div class="card">
                                <div class="card-header">
                                     Messange
                                </div>
                                <div class="card-body">
                                    <div class="card-text"><?php echo $row->feedback;?></div>
                                    <hr>
                                    <form method = "POST">
                                    <div class="row">
                                        
                                        <div class="form-group col-md-6" style="display:none">
                                            <label for="exampleInputEmail1"></label>
                                            <input type="text" required name="f_status" value = "Published" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <button type="submit" required name="publish" class="form-control btn btn-outline-success" id="exampleInputEmail1" aria-describedby="emailHelp">Publish</button>
                                        </div>
                                    </div>
                                    </form>
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