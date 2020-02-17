<?php
  session_start();
  include('inc/config.php');
  include('inc/checklogin.php');
  check_login();
  //hold logged in user session.
  $c_id = $_SESSION['c_id'];
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
    <div class="header  pb-8 pt-5 pt-md-8" style="min-height: 500px; background-image: url(../../img/header-bg.jpg); background-size: cover; background-position: center top;">
    <span class="mask bg-gradient-default opacity-5"></span>
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">

            <div class="col-xl-4 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">My Hired Cars</h5>
                        <?php
                              //code for summing up number of hired cars
                              $c_id = $_SESSION['c_id'];
                              $result ="SELECT count(*) FROM crms_bookings  WHERE c_id = ? AND  b_status  = 'Approved'  ";
                              $stmt = $mysqli->prepare($result);
                              $stmt->bind_param('i',$c_id);
                              $stmt->execute();
                              $stmt->bind_result($hired_cars);
                              $stmt->fetch();
                              $stmt->close();
                        ?>
                      <span class="h2 font-weight-bold mb-0"><?php echo $hired_cars;?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                        <i class="fas fa-business-time"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-danger mr-2"></span>
                    <span class="text-nowrap"></span>
                  </p>
                </div>
              </div>
            </div>
            
            <div class="col-xl-4 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Available Cars</h5>
                        <?php
                              //code for summing up all number of Cars
                              $result ="SELECT count(*) FROM crms_cars WHERE car_status = 'Available'  ";
                              $stmt = $mysqli->prepare($result);
                              $stmt->execute();
                              $stmt->bind_result($cars);
                              $stmt->fetch();
                              $stmt->close();
                        ?>
                      <span class="h2 font-weight-bold mb-0"><?php echo $cars;?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                        <i class="fas fa-car"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-warning mr-2"></span>
                    <span class="text-nowrap"></span>
                  </p>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">My Payments</h5>
                      <?php
                          //code for summing up number of payments done by clients
                          $c_id = $_SESSION['c_id'];
                          $result ="SELECT SUM(p_amt) FROM crms_car_payments WHERE c_id =? ";
                          $stmt = $mysqli->prepare($result);
                          $stmt ->bind_param('i', $c_id);
                          $stmt->execute();
                          $stmt->bind_result($clients_payments);
                          $stmt->fetch();
                          $stmt->close();
                      ?>
                      <span class="h2 font-weight-bold mb-0">Ksh <?php  echo $clients_payments;?> </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                        <i class="fas fa-money-check-alt"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"></span>
                    <span class="text-nowrap"></span>
                  </p>
                </div>
              </div>
            </div>

          </div>
          <br>
          <div class="row">

            

          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt--7">
    <!--Pie chart to show number of car categories-->
      <div class="row">
        <div class="col-xl-6">
        <!--Pie chart to show number of cars rented  per category-->
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Car Categories</h6>
                  <h2 class="mb-0">Percentage  Number Of Cars Per Car Category</h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <div class="chart">
              <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-6">
        <!--Pie chart to show number of cars rented  per category-->
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">My Car Renting Trend</h6>
                  <h2 class="mb-0"> Percentage Total Hires Per Car Category</h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <div class="chart">
              <div id="chartContainer1" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>              </div>
            </div>
          </div>
        </div>
      </div>

      

      <!-- Footer -->
      <?php include("inc/footer.php");?>      
    </div>
  </div>
  <!--   Core   -->
  <script>
      window.onload = function () {

      var chart1 = new CanvasJS.Chart("chartContainer", {
        theme: "light",
      //  exportFileName: "Doughnut Chart",
       // exportEnabled: true,
        animationEnabled: true,
        title:{
          text: ""
        },
        legend:{
          cursor: "pointer",
          itemclick: explodePie
        },
        data: [{
          type: "doughnut",
          innerRadius: 90,
          showInLegend: true,
          toolTipContent: "<b>{name}</b>: {y} (#percent%)",
          indexLabel: "{name} - #percent%",
          dataPoints: [
            { 
              y:
                <?php
                  //code for summing up number of hatch backs
                  $result ="SELECT count(*) FROM crms_cars WHERE car_type  = 'Hatchback' ";
                  $stmt = $mysqli->prepare($result);
                  $stmt->execute();
                  $stmt->bind_result($hatchback);
                  $stmt->fetch();
                  $stmt->close();
                  echo $hatchback;
                  ?> , name: "Hatchback" },

            { y:
                <?php
                    //code for summing up number of Sedan | Saloon
                    $result ="SELECT count(*) FROM crms_cars WHERE car_type  = 'Sedan | Saloon' ";
                    $stmt = $mysqli->prepare($result);
                    $stmt->execute();
                    $stmt->bind_result($sedan);
                    $stmt->fetch();
                    $stmt->close();
                    echo $sedan;
                    ?> , name: "Sedan | Saloon" },

            { y:
              <?php
                    //code for summing up number of Multi-Purpose Vehicle (MPV)
                    $result ="SELECT count(*) FROM crms_cars WHERE car_type  = 'Multi-Purpose Vehicle (MPV)' ";
                    $stmt = $mysqli->prepare($result);
                    $stmt->execute();
                    $stmt->bind_result($MPV);
                    $stmt->fetch();
                    $stmt->close();
                    echo $MPV;
              ?> , name: "Multi-Purpose Vehicle (MPV)" },

            { y:
              <?php
                    //code for summing up number of Sports Utility Vehicle (SUV)
                    $result ="SELECT count(*) FROM crms_cars WHERE car_type  = 'Sports Utility Vehicle (SUV)' ";
                    $stmt = $mysqli->prepare($result);
                    $stmt->execute();
                    $stmt->bind_result($SUV);
                    $stmt->fetch();
                    $stmt->close();
                    echo $SUV;
              ?>, name: "Sports Utility Vehicle (SUV)" },

            { y: 
              <?php
                    //code for summing up number of Crossover
                    $result ="SELECT count(*) FROM crms_cars WHERE car_type  = 'Crossover' ";
                    $stmt = $mysqli->prepare($result);
                    $stmt->execute();
                    $stmt->bind_result($Crossover);
                    $stmt->fetch();
                    $stmt->close();
                    echo $Crossover;
              ?> , name: "Crossover" },

            { y:
              <?php
                    //code for summing up number of Coupe
                    $result ="SELECT count(*) FROM crms_cars WHERE car_type  = 'Coupe' ";
                    $stmt = $mysqli->prepare($result);
                    $stmt->execute();
                    $stmt->bind_result($Coupe);
                    $stmt->fetch();
                    $stmt->close();
                    echo $Coupe;
              ?>, name: "Coupe"},

            { y:
              <?php
                    //code for summing up number of Convertible
                    $result ="SELECT count(*) FROM crms_cars WHERE car_type  = 'Convertible' ";
                    $stmt = $mysqli->prepare($result);
                    $stmt->execute();
                    $stmt->bind_result($Convertible);
                    $stmt->fetch();
                    $stmt->close();
                    echo $Convertible;
              ?> , name: "Convertible" }
          ]
        }]
      });

      var chart2 = new CanvasJS.Chart("chartContainer1", {
        animationEnabled: true,
        title: {
          text: ""
        },
        data: [{
          type: "pie",
          startAngle: 240,
          yValueFormatString: "##0.00'%'",
          indexLabel: "{label} {y}",
          dataPoints: [
            { 
              y:
                <?php
                  //code for summing up number of hatch backs
                  $c_id = $_SESSION['c_id'];
                  $result ="SELECT count(*) FROM crms_bookings WHERE c_id =? AND car_type  = 'Hatchback' AND b_status ='Approved' ";
                  $stmt = $mysqli->prepare($result);
                  $stmt->bind_param('i', $c_id);
                  $stmt->execute();
                  $stmt->bind_result($hatchback);
                  $stmt->fetch();
                  $stmt->close();
                  echo $hatchback;
                  ?> , label: "Hatchback" },

            { y:
                <?php
                    //code for summing up number of Sedan | Saloon
                    $c_id = $_SESSION['c_id'];
                    $result ="SELECT count(*) FROM crms_bookings WHERE c_id = ? AND  car_type  = 'Sedan | Saloon' AND b_status ='Approved' ";
                    $stmt = $mysqli->prepare($result);
                    $stmt->bind_param('i', $c_id);
                    $stmt->execute();
                    $stmt->bind_result($sedan);
                    $stmt->fetch();
                    $stmt->close();
                    echo $sedan;
                    ?> , label: "Sedan | Saloon" },

            { y:
              <?php
                    //code for summing up number of Multi-Purpose Vehicle (MPV)
                    $c_id = $_SESSION['c_id'];
                    $result ="SELECT count(*) FROM crms_bookings WHERE c_id = ? AND  car_type  = 'Multi-Purpose Vehicle (MPV)' AND b_status ='Approved' ";
                    $stmt = $mysqli->prepare($result);
                    $stmt->bind_param('i', $c_id);
                    $stmt->execute();
                    $stmt->bind_result($MPV);
                    $stmt->fetch();
                    $stmt->close();
                    echo $MPV;
              ?> , label: "Multi-Purpose Vehicle (MPV)" },

            { y:
              <?php
                    //code for summing up number of Sports Utility Vehicle (SUV)
                    $c_id = $_SESSION['c_id'];
                    $result ="SELECT count(*) FROM crms_bookings WHERE c_id =? AND  car_type  = 'Sports Utility Vehicle (SUV)' AND b_status ='Approved' ";
                    $stmt = $mysqli->prepare($result);
                    $stmt->bind_param('i', $c_id);
                    $stmt->execute();
                    $stmt->bind_result($SUV);
                    $stmt->fetch();
                    $stmt->close();
                    echo $SUV;
              ?>, label: "Sports Utility Vehicle (SUV)" },

            { y: 
              <?php
                    //code for summing up number of Crossover
                    $c_id = $_SESSION['c_id'];
                    $result ="SELECT count(*) FROM crms_bookings WHERE c_id =? AND  car_type  = 'Crossover' AND b_status ='Approved' ";
                    $stmt = $mysqli->prepare($result);
                    $stmt->bind_param('i', $c_id);
                    $stmt->execute();
                    $stmt->bind_result($Crossover);
                    $stmt->fetch();
                    $stmt->close();
                    echo $Crossover;
              ?> , label: "Crossover" },

            { y:
              <?php
                    //code for summing up number of Coupe
                    $c_id = $_SESSION['c_id'];
                    $result ="SELECT count(*) FROM crms_bookings WHERE c_id =? AND car_type  = 'Coupe' AND b_status ='Approved' ";
                    $stmt = $mysqli->prepare($result);
                    $stmt->bind_param('i', $c_id);
                    $stmt->execute();
                    $stmt->bind_result($Coupe);
                    $stmt->fetch();
                    $stmt->close();
                    echo $Coupe;
              ?>, label: "Coupe"},

            { y:
              <?php
                    //code for summing up number of Convertible
                    $c_id = $_SESSION['c_id'];
                    $result ="SELECT count(*) FROM crms_bookings WHERE c_id = ? AND car_type  = 'Convertible' AND b_status ='Approved' ";
                    $stmt = $mysqli->prepare($result);
                    $stmt->bind_param('i', $c_id);
                    $stmt->execute();
                    $stmt->bind_result($Convertible);
                    $stmt->fetch();
                    $stmt->close();
                    echo $Convertible;
              ?> , label: "Convertible" }
          ]
        }]
      });
      chart1.render();
      chart2.render();

      function explodePie (e) {
        if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
          e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
        } else {
          e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
        }
        e.chart.render();
      }

      }
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