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
  <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
        <div class="container-fluid">
          <!-- Brand -->
          <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="admin_dashboard.php"><?php echo $row->a_name;?> Dashboard</a>
          <!-- Form -->
          
          <!-- User -->
          <ul class="navbar-nav align-items-center d-none d-md-flex">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="assets/img/theme/<?php echo $row->a_dpic;?>">
                  </span>
                  <div class="media-body ml-2 d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?php echo $row->a_name;?></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                <div class=" dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome! <?php echo $row->a_name;?></h6>
                </div>
                  <a href="admin_profile.php" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                <span>My profile</span>
                
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
        </div>
  </nav>
<?php }?>