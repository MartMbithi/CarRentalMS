<?php
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
 <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">

    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="admin_dashboard.php">
        <img src="assets/img/brand/blue.png" class="navbar-brand-img" alt="..." height="60">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="assets/img/theme/<?php echo $row->a_dpic;?>">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome! <?php echo $row->a_name;?></h6>
            </div>
            <a href="admin_profile.php" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            
            <a href="admin_change_pwd.php" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Change Password</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="admin_logout.php" class="dropdown-item">
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
              <a href="admin_dashboard.php">
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
            <a class="nav-link  " href="admin_dashboard.php">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="admin_add_clients.php">
              <i class="fa fa-user-plus text-blue"></i>Add Clients
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="admin_manage_clients.php">
              <i class="fa fa-user-cog text-blue"></i>Manage Clients
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="admin_add_staff.php">
              <i class="fa fa-users text-blue"></i> Add Staff
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="admin_manage_staff.php">
              <i class="fa fa-users text-blue"></i>Manage Staff
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="admin_add_car.php">
              <i class="fa fa-car text-blue"></i> Add Cars
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="admin_manage_cars.php">
              <i class="fa fa-car text-blue"></i> Manage Cars
            </a>
          </li>
<!--
          <li class="nav-item">
            <a class="nav-link " href="admin_manage_bookings.php">
              <i class="fas fa-business-time text-blue"></i> Hire Car
            </a>
          </li>
-->
          <li class="nav-item">
            <a class="nav-link " href="admin_approve_bookings.php">
              <i class="fas fa-cogs text-blue"></i> Manage Hiring
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="admin_manage_payments.php">
              <i class="fas fa-money-check-alt text-blue"></i> Payments
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="admin_manage_returns.php">
              <i class="fas fa-clipboard-check text-blue"></i> Manage Returns
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="admin_advance_reporting.php">
              <i class="fas fa-bullhorn text-blue"></i> Advance Reporting
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="admin_manage_feedbacks.php">
              <i class="fas fa-envelope text-blue"></i> Feedbacks
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link " href="admin_logout.php">
            <i class="ni ni-user-run text-red"></i> Log Out
            </a>
          </li>

          
        </ul>
        
      </div>
    </div>
  </nav>

<?php }?>