<?php
    $c_id = $_SESSION['c_id'];
    $ret="SELECT  * FROM  crms_clients  WHERE c_id=?";
    $stmt= $mysqli->prepare($ret) ;
    $stmt->bind_param('i',$c_id);
    $stmt->execute() ;//ok
    $res=$stmt->get_result();
    //$cnt=1;
    while($row=$res->fetch_object())
    {
?>
 <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">

    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="staff_dashboard.php">
        <img src="assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="../Uploads/Users/<?php echo $row->c_dpic;?>">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome! <?php echo $row->c_name;?></h6>
            </div>
            <a href="client_profile.php" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>

            <a href="client_update_profile.php" class="dropdown-item">
              <i class="fas fa-user-cog"></i>
              <span>Update profile</span>
            </a>
            
            <a href="client_change_pwd.php" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Change Password</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="client_logout.php" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="staff_dashboard.php">
                <img src="assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item   ">
            <a class="nav-link  " href="client_dashboard.php">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="client_view_cars.php">
              <i class="fa fa-car text-blue"></i>Cars
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="client_hire_car.php">
              <i class="fas fa-business-time text-blue"></i> Hire Car
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="client_manage_hiring.php">
              <i class="fas fa-cogs text-blue"></i> Manage My Hiring
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="client_manage_payments.php">
              <i class="fas fa-money-check-alt text-blue"></i> Payments
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="client_manage_returns.php">
              <i class="fas fa-clipboard-check text-blue"></i> Manage Returns
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="client_advance_reporting.php">
              <i class="fas fa-bullhorn text-blue"></i> Advance Reporting
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="client_give_feedbacks.php">
              <i class="fas fa-envelope text-blue"></i> Feedbacks
            </a>
          </li>

          
          <li class="nav-item">
            <a class="nav-link " href="client_logout.php">
            <i class="ni ni-user-run text-red"></i> Log Out
            </a>
          </li>

          
        </ul>
        
      </div>
    </div>
  </nav>

<?php }?>