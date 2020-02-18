<?php
	//session_start();
	include('BackEnd/admin/inc/config.php');
	
?>

<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/elements/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Car Rentals</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/nice-select.css">			
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

        <?php include("inc/nav.php");?>
        <!-- #header -->
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
			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
										<?php echo $row->car_name;?>	
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="cars.php"> Cars</a> <span class="lnr lnr-arrow-right"></span>  <a href=""> <?php echo $row->car_name;?></a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<div class="whole-wrap">
				<div class="container">
					<div class="section-top-border">
						<h3 class="mb-30"><?php echo $row->car_name;?></h3>
						<div class="row">
							<div class="col-md-12">
								<img src="BackEnd/Uploads/Cars/<?php echo $row->exterior_img;?>" alt="" class="img-fluid">
							</div>
							
						</div>
					</div>
                    <div class="section-top-border">
						<h3 class="mb-30"><?php echo $row->car_name;?> Details</h3>
						<div class="row">
							<div class="col-md-4">
                                <p>
                                    Car Category     : <?php echo $row->car_type;?> <br>
                                    Car Reg No       : <?php echo $row->car_regno;?> <br>
                                    Car Status       : <?php if($row->car_status =='Hired'){echo "<span class='badge badge-danger'>Hired</span>";}else{echo"<span class='badge badge-success'>Available</span>";}?> <br>
                                </p>
							</div>
							
						</div>
					</div>
					<div class="section-top-border">
						<h3 class="mb-30"><?php echo $row->car_name;?> Features</h3>
						<div class="row">
							<div class="col-md-12">
                                <p><?php echo $row->car_features;?></p>
							</div>
						</div>
					</div>

					<div class="section-top-border">
						<h3><?php echo $row->car_name;?> Image Gallery</h3>
						<div class="row gallery-item">

							<div class="col-md-6">
								<a href="BackEnd/Uploads/Cars/<?php echo $row->exterior_img;?>" class="img-pop-up"><div class="single-gallery-image" style="background: url(BackEnd/Uploads/Cars/<?php echo $row->exterior_img;?>);"></div></a>
							</div>
							<div class="col-md-6">
								<a href="BackEnd/Uploads/Cars/<?php echo $row->interior_img;?>" class="img-pop-up"><div class="single-gallery-image" style="background: url(BackEnd/Uploads/Cars/<?php echo $row->interior_img;?>);"></div></a>
							</div>
							<div class="col-md-6">
								<a href="BackEnd/Uploads/Cars/<?php echo $row->rear_img;?>" class="img-pop-up"><div class="single-gallery-image" style="background: url(BackEnd/Uploads/Cars/<?php echo $row->rear_img;?>);"></div></a>
							</div>
							<div class="col-md-6">
								<a href="BackEnd/Uploads/Cars/<?php echo $row->front_img;?>" class="img-pop-up"><div class="single-gallery-image" style="background: url(BackEnd/Uploads/Cars/<?php echo $row->front_img;?>);"></div></a>
							</div>

							
						</div>
                            <hr>
                                <?php 
                                if($row->car_status == 'Hired')
                                {
                                    echo 
                                    "
                                        <a class='text-uppercase btn btn-outline-danger' href=''>Woops Too Late This Car Is Already Hired</a>

                                    ";

                                }
                                    else
                                    {
                                            echo 
                                            "

                                                <a class='text-uppercase btn btn-outline-success' href='BackEnd/client/client_login.php'>Hire This Car</a>

                                            ";
                                    }

                                ?>
					</div>


                 <br>
				</div>
			</div>
			<!-- End Align Area -->
            <?php }?>
			<!-- start footer Area -->		
			<?php include("inc/footer.php");?>
			<!-- End footer Area -->		

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>			
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>					
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>
