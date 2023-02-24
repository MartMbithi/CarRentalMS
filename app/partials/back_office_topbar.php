<?php
/*
 *   Crafted On Wed Feb 22 2023
 *   Author Martin (martin@devlan.co.ke)
 * 
 *   www.devlan.co.ke
 *   hello@devlan.co.ke
 *
 *
 *   The Devlan Solutions LTD End User License Agreement
 *   Copyright (c) 2022 Devlan Solutions LTD
 *
 *
 *   1. GRANT OF LICENSE 
 *   Devlan Solutions LTD hereby grants to you (an individual) the revocable, personal, non-exclusive, and nontransferable right to
 *   install and activate this system on two separated computers solely for your personal and non-commercial use,
 *   unless you have purchased a commercial license from Devlan Solutions LTD. Sharing this Software with other individuals, 
 *   or allowing other individuals to view the contents of this Software, is in violation of this license.
 *   You may not make the Software available on a network, or in any way provide the Software to multiple users
 *   unless you have first purchased at least a multi-user license from Devlan Solutions LTD.
 *
 *   2. COPYRIGHT 
 *   The Software is owned by Devlan Solutions LTD and protected by copyright law and international copyright treaties. 
 *   You may not remove or conceal any proprietary notices, labels or marks from the Software.
 *
 *
 *   3. RESTRICTIONS ON USE
 *   You may not, and you may not permit others to
 *   (a) reverse engineer, decompile, decode, decrypt, disassemble, or in any way derive source code from, the Software;
 *   (b) modify, distribute, or create derivative works of the Software;
 *   (c) copy (other than one back-up copy), distribute, publicly display, transmit, sell, rent, lease or 
 *   otherwise exploit the Software. 
 *
 *
 *   4. TERM
 *   This License is effective until terminated. 
 *   You may terminate it at any time by destroying the Software, together with all copies thereof.
 *   This License will also terminate if you fail to comply with any term or condition of this Agreement.
 *   Upon such termination, you agree to destroy the Software, together with all copies thereof.
 *
 *
 *   5. NO OTHER WARRANTIES. 
 *   DEVLAN SOLUTIONS LTD  DOES NOT WARRANT THAT THE SOFTWARE IS ERROR FREE. 
 *   DEVLAN SOLUTIONS LTD SOFTWARE DISCLAIMS ALL OTHER WARRANTIES WITH RESPECT TO THE SOFTWARE, 
 *   EITHER EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO IMPLIED WARRANTIES OF MERCHANTABILITY, 
 *   FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT OF THIRD PARTY RIGHTS. 
 *   SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OF IMPLIED WARRANTIES OR LIMITATIONS
 *   ON HOW LONG AN IMPLIED WARRANTY MAY LAST, OR THE EXCLUSION OR LIMITATION OF 
 *   INCIDENTAL OR CONSEQUENTIAL DAMAGES,
 *   SO THE ABOVE LIMITATIONS OR EXCLUSIONS MAY NOT APPLY TO YOU. 
 *   THIS WARRANTY GIVES YOU SPECIFIC LEGAL RIGHTS AND YOU MAY ALSO 
 *   HAVE OTHER RIGHTS WHICH VARY FROM JURISDICTION TO JURISDICTION.
 *
 *
 *   6. SEVERABILITY
 *   In the event of invalidity of any provision of this license, the parties agree that such invalidity shall not
 *   affect the validity of the remaining portions of this license.
 *
 *
 *   7. NO LIABILITY FOR CONSEQUENTIAL DAMAGES IN NO EVENT SHALL DEVLAN SOLUTIONS LTD OR ITS SUPPLIERS BE LIABLE TO YOU FOR ANY
 *   CONSEQUENTIAL, SPECIAL, INCIDENTAL OR INDIRECT DAMAGES OF ANY KIND ARISING OUT OF THE DELIVERY, PERFORMANCE OR 
 *   USE OF THE SOFTWARE, EVEN IF DEVLAN SOLUTIONS LTD HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES
 *   IN NO EVENT WILL DEVLAN SOLUTIONS LTD  LIABILITY FOR ANY CLAIM, WHETHER IN CONTRACT 
 *   TORT OR ANY OTHER THEORY OF LIABILITY, EXCEED THE LICENSE FEE PAID BY YOU, IF ANY.
 *
 */
if (!empty($_SESSION['user_dpic'])) {
    $image_url = '../storage/users/' . $_SESSION['user_dpic'];
} else {
    $image_url = '../storage/users/no-profile.png';
}
/* Notifications Helpers*/
include('../app/helpers/notifications.php');
?>
<nav class="navbar navbar-light navbar-glass navbar-top sticky-kit navbar-expand" style="display:none;">
    <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
    <a class="navbar-brand mr-1 mr-sm-3" href="dashboard">
        <div class="d-flex align-items-center">
            <img class="mr-2" src="../storage/system/logo_backoffice.png" />
        </div>
    </a>
    <ul class="navbar-nav align-items-center d-none d-lg-block">
        <li class="nav-item">
            <div class="search-box">
                <form class="position-relative" data-toggle="search" data-display="static">
                    <input class="form-control search-input" type="search" placeholder="Enter car reg number" aria-label="Search" />
                    <span class="fas fa-search search-box-icon">
                    </span>
                </form>
            </div>
        </li>
    </ul>

    <ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">
        <?php
        /* Pull Notifications */
        $sql = "SELECT * FROM notifications WHERE notification_user_id = '{$_SESSION['user_id']}' 
        AND notification_status = '0'";
        $res = mysqli_query($mysqli, $sql);
        if (mysqli_num_rows($res) > 0) {
        ?>
            <li class="nav-item dropdown dropdown-on-hover">
                <a class="nav-link notification-indicator notification-indicator-primary px-0 icon-indicator" id="navbarDropdownNotification" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="fas fa-bell fs-4" data-fa-transform="shrink-6"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-card" aria-labelledby="navbarDropdownNotification">
                    <div class="card card-notification shadow-none" style="max-width: 20rem">
                        <div class="card-header">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <h6 class="card-header-title mb-0">Notifications</h6>
                                </div>
                                <div class="col-auto">
                                    <form method="POST">
                                        <input type="hidden" name="notification_user_id" value="<?php echo $_SESSION['user_id']; ?>">
                                        <input type="submit" name="User_Mark_As_Read" class="card-link font-weight-normal text-primary" value="Mark all as read">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush font-weight-normal fs--1">
                            <div class="list-group-title border-bottom">NEW</div>
                            <!-- Fetch All Notification -->
                            <?php
                            $notifications_sql = mysqli_query(
                                $mysqli,
                                "SELECT * FROM notifications WHERE notification_user_id = '{$_SESSION['user_id']}' 
                            AND notification_status = '0' ORDER BY notifcation_created_on DESC LIMIT 5
                            "
                            );
                            if (mysqli_num_rows($notifications_sql) > 0) {
                                while ($notifications = mysqli_fetch_array($notifications_sql)) {
                            ?>
                                    <div class="list-group-item">
                                        <a class="notification notification-flush bg-200" href="backoffice_notifications?owner=<?php echo $notifications['notification_user_id']; ?>">
                                            <div class="notification-body">
                                                <p class="mb-1">
                                                    <strong><?php echo $notifications['notification_title']; ?></strong>
                                                    <?php echo $notifications['notification_details']; ?>
                                                </p>
                                                <span class="notification-time">
                                                    <span class="mr-1" role="img" aria-label="Emoji">🕗</span>
                                                    <?php echo date('d M Y g:ia', strtotime($notifications['notifcation_created_on'])); ?>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                            <?php }
                            } ?>
                        </div>
                        <div class="card-footer text-center border-top"><a class="card-link d-block" href="backoffice_notifications?owner=<?php echo $notifications['notification_user_id']; ?>">View all</a></div>
                    </div>
                </div>
            </li>
        <?php } else { ?>
            <li class="nav-item dropdown dropdown-on-hover">
                <a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="fas fa-bell fs-4" data-fa-transform="shrink-6"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-card" aria-labelledby="navbarDropdownNotification">
                    <div class="card card-notification shadow-none" style="max-width: 20rem">
                        <div class="card-header">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <h6 class="card-header-title mb-0">No new notifications</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        <?php } ?>
        <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link pr-0" id="navbarDropdownUser" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="<?php echo $image_url; ?>" alt="" />
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white rounded-soft py-2">
                    <a class="dropdown-item" href="backoffice_settings">Settings</a>
                    <a class="dropdown-item" href="#logout_modal">Logout</a>
                </div>
            </div>
        </li>
    </ul>

</nav>

<script>
    var navbarPosition = localStorage.getItem('navbarPosition');
    var navbarVertical = document.querySelector('.navbar-vertical');
    var navbarTopVertical = document.querySelector('.content .navbar-top');
    var navbarTop = document.querySelector('[data-layout] .navbar-top');
    var navbarTopCombo = document.querySelector('.content .navbar-top-combo');

    if (navbarPosition === 'top') {
        navbarTop.removeAttribute('style');
        navbarTopVertical.parentNode.removeChild(navbarTopVertical);
        navbarVertical.parentNode.removeChild(navbarVertical);
        navbarTopCombo.parentNode.removeChild(navbarTopCombo);
    } else if (navbarPosition === 'combo') {
        navbarVertical.removeAttribute('style');
        navbarTopCombo.removeAttribute('style');
        navbarTop.parentNode.removeChild(navbarTop);
        navbarTopVertical.parentNode.removeChild(navbarTopVertical);
    } else {
        navbarVertical.removeAttribute('style');
        navbarTopVertical.removeAttribute('style');
        navbarTop.parentNode.removeChild(navbarTop);
        navbarTopCombo.parentNode.removeChild(navbarTopCombo);
    }
</script>