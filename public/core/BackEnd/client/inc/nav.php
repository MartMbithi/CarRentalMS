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
  <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
        <div class="container-fluid">
          <!-- Brand -->
          <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="client_dashboard.php"><?php echo $row->c_name;?> Dashboard</a>
          <!-- Form -->
          
          <!-- User -->
          <ul class="navbar-nav align-items-center d-none d-md-flex">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../Uploads/Users/<?php echo $row->c_dpic;?>">
                  </span>
                  <div class="media-body ml-2 d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?php echo $row->c_name;?></span>
                  </div>
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

                  <a href="client_profile_update.php" class="dropdown-item">
                  <i class="fas fa-user-cog"></i>
                  <span>Update Profile</span>
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
        </div>
  </nav>
<?php }?>