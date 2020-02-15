<?php
  session_start();
  include('inc/config.php');
  include('inc/checklogin.php');
  check_login();
  //hold logged in user session.
  $a_id = $_SESSION['a_id'];
  //register car
  
		if(isset($_POST['update_car']))
		{
            $car_cat_id = $_POST['car_cat_id'];
            $car_regno = $_POST['car_regno'];
            $car_name = $_POST['car_name'];
            $car_type = $_POST['car_type'];
            $car_price = $_POST['car_price'];
            $car_features = $_POST['car_features'];

            //save car images
            $exterior_img  = $_FILES["exterior_img"]["name"];
		    move_uploaded_file($_FILES["exterior_img"]["tmp_name"],"../Uploads/Cars/".$_FILES["exterior_img"]["name"]);//move uploaded image
            
            $interior_img  = $_FILES["interior_img"]["name"];
		    move_uploaded_file($_FILES["interior_img"]["tmp_name"],"../Uploads/Cars/".$_FILES["interior_img"]["name"]);//move uploaded image
                        
            $front_img  = $_FILES["front_img"]["name"];
		    move_uploaded_file($_FILES["front_img"]["tmp_name"],"../Uploads/Cars/".$_FILES["front_img"]["name"]);//move uploaded image
            
            $rear_img=$_FILES["rear_img"]["name"];
            move_uploaded_file($_FILES["rear_img"]["tmp_name"],"../Uploads/Cars/".$_FILES["rear_img"]["name"]);
            
            //sql to insert captured values
            $query="UPDATE  crms_cars SET car_cat_id = ?, car_regno = ?, car_name = ?, car_price =?, car_type = ?, car_features = ?, exterior_img = ?, rear_img = ?, interior_img = ?, front_img =? car_id = ?";
            $stmt = $mysqli->prepare($query);
            $rc=$stmt->bind_param('ssssssssssi', $car_cat_id, $car_regno, $car_name, $car_price, $car_type, $car_features, $exterior_img, $rear_img, $interior_img, $front_img, $car_id);
            $stmt->execute();

            if($stmt)
            {
                      $success = "Car Updated";
                      
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

        <div class="container-fluid mt--7">
            <!--Pie chart to show number of car categories-->
            <div class="row">
                <div class="card col-md-12">
                    <h2 class="card-header">Update <?php echo $row->car_name;?></h2>
                    <div class="card-body">
                        <!--Form-->
                        <form method="post" enctype="multipart/form-data" >
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Car Name</label>
                                    <input type="text" value="<?php echo $row->car_name;?>" required name="car_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Car Registration Number</label>
                                    <input type="text" required value="<?php echo $row->car_regno;?>" name="car_regno" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Car Hiring Price Per Day (Ksh)</label>
                                    <input type="text" required value="<?php echo $row->car_price;?>" name="car_price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Car Type</label>
                                    <select class="form-control" name="car_type" onChange="getCarCategoryId(this.value);" id="car_type" >
                                        <option>Select Car Type</option>
                                        <?php
                                            //get all car categories
                                            $ret="SELECT * FROM crms_car_categories ORDER BY RAND() LIMIT 10 "; 
                                            $stmt= $mysqli->prepare($ret) ;
                                            $stmt->execute() ;//ok
                                            $res=$stmt->get_result();
                                            $cnt=1;
                                            while($row=$res->fetch_object())
                                            {
                                        ?>
                                            <option value="<?php echo $row->car_cat_name;?>"> <?php echo $row->car_cat_name;?></option>
                                        <?php }?>
                                    </select>
                                </div>

                                <div class="form-group col-md-6" style="display:none">
                                    <label for="exampleInputEmail1">Car Category ID</label>
                                    <input type="text" required name="car_cat_id" id="car_category_id" class="form-control"  aria-describedby="emailHelp">
                                </div>

                            </div>

                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="exampleInputEmail1">Car Body | Extrior Picture</label>
                                    <input type="file" required name="" name="exterior_img" class="form-control btn btn-outline-success" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="exampleInputEmail1">Car Interior Picture </label>
                                    <input type="file" required name="interior_img" class="form-control btn btn-outline-success" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="exampleInputEmail1">Car Rear Picture </label>
                                    <input type="file" required name="rear_img" class="form-control btn btn-outline-success" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="exampleInputEmail1">Car Front Picture </label>
                                    <input type="file" required name="front_img" class="form-control btn btn-outline-success" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <hr>

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

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Car Distinct Features</label>
                                    <textarea type="text" required name="car_features"  class="form-control" id="car_features" aria-describedby="emailHelp"><?php echo $row->car_features;?></textarea>
                                </div>
                                
                            </div> 
                            <?php }?>
                            <button type="submit" name="update_car" class="btn btn-outline-success">Add Car</button>
                        </form>
                        <!-- ./ Form -->
                    </div>    
                </div>
            </div>
        <!-- Footer -->
            <?php include("inc/footer.php");?>      
        </div>
    <?php }?>
  </div>
 
  <script src="//cdn.ckeditor.com/4.13.1/full/ckeditor.js"></script>
    <script type="text/javascript">
    CKEDITOR.replace('car_features')
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