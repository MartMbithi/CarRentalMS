<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Car Rental Client Dashboard
  </title>
  <!-- Favicon -->
  <link href="assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="assets/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
   <!-- Favicon -->
   <link href="assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="assets/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
  
  <script src="assets/js/swal.js"></script>

  <!--Inject SWAL-->
  <?php if(isset($success)) {?>
  <!--This code for injecting an alert-->
          <script>
                      setTimeout(function () 
                      { 
                          swal("Success","<?php echo $success;?>","success");
                      },
                          50);
          </script>

  <?php } ?>

  <?php if(isset($err)) {?>
  <!--This code for injecting an alert-->
          <script>
                      setTimeout(function () 
                      { 
                          swal("Failed","<?php echo $err;?>","error");
                      },
                          50);
          </script>

  <?php } ?>
  <script>
        function getCarCategoryId(val) {
          //get Room Type
        $.ajax({
        type: "POST",
        url: "pages_carcategory.php",
        data:'car_type='+val,
        success: function(data){
        //alert(data);
        $('#car_category_id').val(data);
        }
        });

        }
        
</script>       
</head>
