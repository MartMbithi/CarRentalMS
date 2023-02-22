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
if (isset($_SESSION['user_dpic'])) {
    $image_url = '../storage/users/' . $_SESSION['user_dpic'];
} else {
    $image_url = '../storage/users/no-profile.png';
}
?>
<nav class="navbar navbar-light navbar-glass navbar-top sticky-kit navbar-expand" style="display:none;">
    <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
    <a class="navbar-brand mr-1 mr-sm-3" href="dashboard">
        <div class="d-flex align-items-center">
            <img class="mr-2" src="../storage/system/logo.png" />
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
        <li class="nav-item dropdown dropdown-on-hover">
            <a class="nav-link notification-indicator notification-indicator-primary px-0 icon-indicator" id="navbarDropdownNotification" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell fs-4" data-fa-transform="shrink-6"></span></a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-card" aria-labelledby="navbarDropdownNotification">
                <div class="card card-notification shadow-none" style="max-width: 20rem">
                    <div class="card-header">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <h6 class="card-header-title mb-0">Notifications</h6>
                            </div>
                            <div class="col-auto"><a class="card-link font-weight-normal" href="#">Mark all as read</a></div>
                        </div>
                    </div>
                    <div class="list-group list-group-flush font-weight-normal fs--1">
                        <div class="list-group-title border-bottom">NEW</div>
                        <div class="list-group-item">
                            <a class="notification notification-flush bg-200" href="#!">
                                <div class="notification-avatar">
                                    <div class="avatar avatar-2xl mr-3">
                                        <img class="rounded-circle" src="../assets/img/team/1-thumb.png" alt="" />
                                    </div>
                                </div>
                                <div class="notification-body">
                                    <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                                    <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">💬</span>Just now</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="card-footer text-center border-top"><a class="card-link d-block" href="../pages/notifications.html">View all</a></div>
                </div>
            </div>
        </li>
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

<nav class="navbar navbar-light navbar-glass navbar-top sticky-kit navbar-expand-lg navbar-top-combo" data-move-target="#navbarVerticalNav" style="display:none;">
    <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
    <a class="navbar-brand mr-1 mr-sm-3" href="dashboard">
        <div class="d-flex align-items-center">
            <img class="mr-2" src="../storage/system/logo.png" alt="" />
        </div>
    </a>
    <div class="collapse navbar-collapse" id="navbarStandard">
        <ul class="navbar-nav">
            <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link dropdown-toggle" id="navbarDropdownHome" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownHome">
                    <div class="bg-white rounded-soft py-2"><a class="dropdown-item" href="../index.html">Dashboard</a><a class="dropdown-item" href="dashboard-alt.html">Dashboard alt</a><a class="dropdown-item" href="feed.html">Feed</a><a class="dropdown-item" href="landing.html">Landing</a></div>
                </div>
            </li>
            <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link dropdown-toggle" id="navbarDropdownPages" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownPages">
                    <div class="card navbar-card-pages shadow-none">
                        <div class="card-body scrollbar perfect-scrollbar max-h-dropdown"><img class="position-absolute b-0 r-0" src="../assets/img/illustrations/authentication-corner.png" width="130" alt="" />
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/activity.html">Activity</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/associations.html">Associations</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/billing.html">Billing</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/customer-details.html">Customer details</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/event-detail.html">Event detail</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/event-create.html">Event create</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/events.html">Events</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/faq.html">Faq</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/invoice.html">Invoice</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/invite-people.html">Invite people</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/notifications.html">Notifications</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/people.html">People</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/pricing.html">Pricing</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/pricing-alt.html">Pricing alt</a></div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/profile.html">Profile</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/settings.html">Settings</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/starter.html">Starter</a><a class="nav-link py-1 text-700 font-weight-medium" href="../calendar.html">Calendar</a><a class="nav-link py-1 text-700 font-weight-medium" href="../chat.html">Chat</a><a class="nav-link py-1 text-700 font-weight-medium" href="../kanban.html">Kanban</a><a class="nav-link py-1 text-700 font-weight-medium" href="../widgets.html">Widgets</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/errors/404.html">404</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/errors/500.html">500</a>
                                        <div class="nav-link py-1 text-900 font-weight-bold mt-3">Emails</div><a class="nav-link py-1 text-700 font-weight-medium" href="../email/inbox.html">Inbox</a><a class="nav-link py-1 text-700 font-weight-medium" href="../email/email-detail.html">Email detail</a><a class="nav-link py-1 text-700 font-weight-medium" href="../email/compose.html">Compose</a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="nav flex-column">
                                        <div class="nav-link py-1 text-900 font-weight-bold">E-commerce</div><a class="nav-link py-1 text-700 font-weight-medium" href="../e-commerce/product-list.html">Product list</a><a class="nav-link py-1 text-700 font-weight-medium" href="../e-commerce/product-grid.html">Product grid</a><a class="nav-link py-1 text-700 font-weight-medium" href="../e-commerce/product-details.html">Product details</a><a class="nav-link py-1 text-700 font-weight-medium" href="../e-commerce/orders.html">Orders</a><a class="nav-link py-1 text-700 font-weight-medium" href="../e-commerce/order-details.html">Order details</a><a class="nav-link py-1 text-700 font-weight-medium" href="../e-commerce/customers.html">Customers</a><a class="nav-link py-1 text-700 font-weight-medium" href="../e-commerce/shopping-cart.html">Shopping cart</a><a class="nav-link py-1 text-700 font-weight-medium" href="../e-commerce/checkout.html">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link dropdown-toggle" id="navbarDropdownDocumentation" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Documentation</a>
                <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownDocumentation">
                    <div class="bg-white rounded-soft py-2"><a class="dropdown-item" href="../documentation/getting-started.html">Getting started</a><a class="dropdown-item" href="../documentation/file-structure.html">File structure</a><a class="dropdown-item" href="../documentation/customization.html">Customization</a><a class="dropdown-item" href="../documentation/dark-mode.html">Dark mode</a><a class="dropdown-item" href="../documentation/fluid-layout.html">Fluid layout</a><a class="dropdown-item" href="../documentation/gulp.html">Gulp</a><a class="dropdown-item" href="../documentation/RTL.html">RTL</a><a class="dropdown-item" href="../documentation/plugins.html">Plugins</a></div>
                </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="../widgets.html">Widgets</a></li>
        </ul>
    </div>
    <ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">
        <li class="nav-item d-none d-md-block">
            <a class="nav-link px-3 py-0" href="https://prium.github.io/falcon/v3.0.0-beta5/" target="_blank"><img src="../assets/img/logos/bootstrap-5.png" alt="" height="35" /></a>
        </li>
        <li class="nav-item">
            <a class="nav-link settings-popover" href="#settings-modal" data-toggle="modal"><span class="ripple"></span><span class="fa-spin position-absolute a-0 d-flex flex-center"><span class="icon-spin position-absolute a-0 d-flex flex-center"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path>
                        </svg></span></span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill icon-indicator" href="../e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart fs-4" data-fa-transform="shrink-7"></span><span class="notification-indicator-number">1</span></a>
        </li>
        <li class="nav-item dropdown dropdown-on-hover">
            <a class="nav-link notification-indicator notification-indicator-primary px-0 icon-indicator" id="navbarDropdownNotification" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell fs-4" data-fa-transform="shrink-6"></span></a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-card" aria-labelledby="navbarDropdownNotification">
                <div class="card card-notification shadow-none" style="max-width: 20rem">
                    <div class="card-header">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <h6 class="card-header-title mb-0">Notifications</h6>
                            </div>
                            <div class="col-auto"><a class="card-link font-weight-normal" href="#">Mark all as read</a></div>
                        </div>
                    </div>
                    <div class="list-group list-group-flush font-weight-normal fs--1">
                        <div class="list-group-title border-bottom">NEW</div>
                        <div class="list-group-item">
                            <a class="notification notification-flush bg-200" href="#!">
                                <div class="notification-avatar">
                                    <div class="avatar avatar-2xl mr-3">
                                        <img class="rounded-circle" src="../assets/img/team/1-thumb.png" alt="" />
                                    </div>
                                </div>
                                <div class="notification-body">
                                    <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                                    <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">💬</span>Just now</span>
                                </div>
                            </a>
                        </div>
                        <div class="list-group-item">
                            <a class="notification notification-flush bg-200" href="#!">
                                <div class="notification-avatar">
                                    <div class="avatar avatar-2xl mr-3">
                                        <div class="avatar-name rounded-circle"><span>AB</span></div>
                                    </div>
                                </div>
                                <div class="notification-body">
                                    <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                                    <span class="notification-time"><span class="mr-1 fab fa-gratipay text-danger"></span>9hr</span>
                                </div>
                            </a>
                        </div>
                        <div class="list-group-title">EARLIER</div>
                        <div class="list-group-item">
                            <a class="notification notification-flush" href="#!">
                                <div class="notification-avatar">
                                    <div class="avatar avatar-2xl mr-3">
                                        <img class="rounded-circle" src="../assets/img/icons/weather-sm.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="notification-body">
                                    <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                                    <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">🌤️</span>1d</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="card-footer text-center border-top"><a class="card-link d-block" href="../pages/notifications.html">View all</a></div>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link pr-0" id="navbarDropdownUser" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="../assets/img/team/3-thumb.png" alt="" />
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white rounded-soft py-2">
                    <a class="dropdown-item font-weight-bold text-warning" href="#!"><span class="fas fa-crown mr-1"></span><span>Go Pro</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">Set status</a>
                    <a class="dropdown-item" href="../pages/profile.html">Profile &amp; account</a>
                    <a class="dropdown-item" href="#!">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../pages/settings.html">Settings</a>
                    <a class="dropdown-item" href="../authentication/basic/logout.html">Logout</a>
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