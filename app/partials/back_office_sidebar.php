<nav class="navbar navbar-vertical navbar-expand-xl navbar-light" style="display:none;">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle) {
            document.querySelector('.navbar-vertical').className += ' navbar-' + navbarStyle;
        }
    </script>
    <div class="d-flex align-items-center">

        <a class="navbar-brand" href="dashboard">
            <div class="d-flex align-items-center py-3">
                <img class="mr-2" src="../storage/system/logo_backoffice.png" alt="" />
            </div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content perfect-scrollbar scrollbar">
            <ul class="navbar-nav flex-column">

                <?php if ($_SESSION['user_access_level'] == 'Administrator') { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <span class="fas fa-home"></span>
                                </span>
                                <span class="nav-link-text">
                                    Dashboard
                                </span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="backoffice_users">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span class="fas fa-user-tie"></span></span>
                                <span class="nav-link-text"> Users</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="backoffice_clients">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span class="fas fa-users"></span></span>
                                <span class="nav-link-text"> Clients</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="backoffice_categories">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span class="fas fa-list"></span></span>
                                <span class="nav-link-text"> Vehicle categories</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="backoffice_vehicles">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span class="fas fa-car"></span></span>
                                <span class="nav-link-text"> Vehicles</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="backoffice_rentals">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span class="fas fa-calendar-check"></span></span>
                                <span class="nav-link-text"> Car rentals</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="backoffice_rental_returns">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span class="fas fa-history"></span></span>
                                <span class="nav-link-text"> Rental returns</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="backoffice_payments">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span class="fas fa-hand-holding-usd"></span></span>
                                <span class="nav-link-text"> Payments</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="backoffice_system_setings">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span class="fas fa-cog"></span></span>
                                <span class="nav-link-text"> System settings</span>
                            </div>
                        </a>
                    </li>
                <?php } else if ($_SESSION['user_access_level'] == 'Staff') { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <span class="fas fa-home"></span>
                                </span>
                                <span class="nav-link-text">
                                    Dashboard
                                </span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="backoffice_clients">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span class="fas fa-users"></span></span>
                                <span class="nav-link-text"> Clients</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="backoffice_categories">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span class="fas fa-list"></span></span>
                                <span class="nav-link-text"> Vehicle categories</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="backoffice_vehicles">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span class="fas fa-car"></span></span>
                                <span class="nav-link-text"> Vehicles</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="backoffice_rentals">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span class="fas fa-calendar-check"></span></span>
                                <span class="nav-link-text"> Car rentals</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="backoffice_rental_returns">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span class="fas fa-history"></span></span>
                                <span class="nav-link-text"> Rental returns</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="backoffice_payments">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span class="fas fa-hand-holding-usd"></span></span>
                                <span class="nav-link-text"> Payments</span>
                            </div>
                        </a>
                    </li>

                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <span class="fas fa-home"></span>
                                </span>
                                <span class="nav-link-text">
                                    Dashboard
                                </span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="backoffice_rentals">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span class="fas fa-calendar-check"></span></span>
                                <span class="nav-link-text"> Car rentals</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="backoffice_rental_returns">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span class="fas fa-history"></span></span>
                                <span class="nav-link-text">My Rental returns</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="backoffice_payments">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span class="fas fa-hand-holding-usd"></span></span>
                                <span class="nav-link-text">My Payments</span>
                            </div>
                        </a>
                    </li>
                <?php } ?>
            </ul>

        </div>
    </div>
</nav>
<nav class="navbar navbar-light navbar-glass navbar-top sticky-kit navbar-expand-lg" style="display:none;">
</nav>