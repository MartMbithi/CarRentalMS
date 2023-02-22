<nav class="navbar navbar-vertical navbar-expand-xl navbar-light" style="display:none;">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle) {
            document.querySelector('.navbar-vertical').className += ' navbar-' + navbarStyle;
        }
    </script>
    <div class="d-flex align-items-center">
       
        <a class="navbar-brand" href="../index.html">
            <div class="d-flex align-items-center py-3">
                <img class="mr-2" src="../storage/system/logo_backoffice.png" alt="" />
            </div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content perfect-scrollbar scrollbar">
            <ul class="navbar-nav flex-column">
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#home" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="home">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text">Home</span></div>
                    </a>
                    <ul class="nav collapse show" id="home" data-parent="#navbarVerticalCollapse">
                        <li class="nav-item"><a class="nav-link" href="../index.html">Dashboard</a></li>
                        <li class="nav-item active"><a class="nav-link" href="dashboard-alt.html">Dashboard alt</a></li>
                        <li class="nav-item"><a class="nav-link" href="feed.html">Feed</a></li>
                        <li class="nav-item"><a class="nav-link" href="landing.html">Landing</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#pages" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="pages">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-copy"></span></span><span class="nav-link-text">Pages</span></div>
                    </a>
                    <ul class="nav collapse" id="pages" data-parent="#navbarVerticalCollapse">
                        <li class="nav-item"><a class="nav-link" href="../pages/activity.html">Activity</a></li>
                        <li class="nav-item"><a class="nav-link" href="../pages/associations.html">Associations</a></li>
                        <li class="nav-item"><a class="nav-link" href="../pages/billing.html">Billing</a></li>
                        <li class="nav-item"><a class="nav-link" href="../pages/customer-details.html">Customer details</a></li>
                        <li class="nav-item"><a class="nav-link" href="../pages/event-detail.html">Event detail</a></li>
                        <li class="nav-item"><a class="nav-link" href="../pages/event-create.html">Event create</a></li>
                        <li class="nav-item"><a class="nav-link" href="../pages/events.html">Events</a></li>
                        <li class="nav-item"><a class="nav-link" href="../pages/faq.html">Faq</a></li>
                        <li class="nav-item"><a class="nav-link" href="../pages/invoice.html">Invoice</a></li>
                        <li class="nav-item"><a class="nav-link" href="../pages/invite-people.html">Invite people</a></li>
                        <li class="nav-item"><a class="nav-link" href="../pages/notifications.html">Notifications</a></li>
                        <li class="nav-item"><a class="nav-link" href="../pages/people.html">People</a></li>
                        <li class="nav-item"><a class="nav-link" href="../pages/pricing.html">Pricing</a></li>
                        <li class="nav-item"><a class="nav-link" href="../pages/pricing-alt.html">Pricing alt</a></li>
                        <li class="nav-item"><a class="nav-link" href="../pages/profile.html">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="../pages/settings.html">Settings</a></li>
                        <li class="nav-item"><a class="nav-link" href="../pages/starter.html">Starter</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#pages-errors" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="pages-errors">Errors</a>
                            <ul class="nav collapse" id="pages-errors" data-parent="#pages">
                                <li class="nav-item"><a class="nav-link" href="../pages/errors/404.html">404</a></li>
                                <li class="nav-item"><a class="nav-link" href="../pages/errors/500.html">500</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="../chat.html">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-comments"></span></span><span class="nav-link-text"> Chat</span></div>
                    </a></li>
                <li class="nav-item"><a class="nav-link" href="../kanban.html">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-trello"></span></span><span class="nav-link-text"> Kanban</span></div>
                    </a></li>
                <li class="nav-item"><a class="nav-link" href="../calendar.html">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text"> Calendar</span></div>
                    </a></li>
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#email" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="email">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text">Email</span></div>
                    </a>
                    <ul class="nav collapse" id="email" data-parent="#navbarVerticalCollapse">
                        <li class="nav-item"><a class="nav-link" href="../email/inbox.html">Inbox</a></li>
                        <li class="nav-item"><a class="nav-link" href="../email/email-detail.html">Email detail</a></li>
                        <li class="nav-item"><a class="nav-link" href="../email/compose.html">Compose</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#authentication" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="authentication">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-unlock-alt"></span></span><span class="nav-link-text">Authentication</span></div>
                    </a>
                    <ul class="nav collapse" id="authentication" data-parent="#navbarVerticalCollapse">
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#authentication-basic" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="authentication-basic">Basic</a>
                            <ul class="nav collapse" id="authentication-basic" data-parent="#authentication">
                                <li class="nav-item"><a class="nav-link" href="../authentication/basic/login.html">Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="../authentication/basic/logout.html">Logout</a></li>
                                <li class="nav-item"><a class="nav-link" href="../authentication/basic/register.html">Register</a></li>
                                <li class="nav-item"><a class="nav-link" href="../authentication/basic/forgot-password.html">Forgot password</a></li>
                                <li class="nav-item"><a class="nav-link" href="../authentication/basic/reset-password.html">Reset password</a></li>
                                <li class="nav-item"><a class="nav-link" href="../authentication/basic/confirm-mail.html">Confirm mail</a></li>
                                <li class="nav-item"><a class="nav-link" href="../authentication/basic/lock-screen.html">Lock screen</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#authentication-card" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="authentication-card">Card</a>
                            <ul class="nav collapse" id="authentication-card" data-parent="#authentication">
                                <li class="nav-item"><a class="nav-link" href="../authentication/card/login.html">Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="../authentication/card/logout.html">Logout</a></li>
                                <li class="nav-item"><a class="nav-link" href="../authentication/card/register.html">Register</a></li>
                                <li class="nav-item"><a class="nav-link" href="../authentication/card/forgot-password.html">Forgot password</a></li>
                                <li class="nav-item"><a class="nav-link" href="../authentication/card/reset-password.html">Reset password</a></li>
                                <li class="nav-item"><a class="nav-link" href="../authentication/card/confirm-mail.html">Confirm mail</a></li>
                                <li class="nav-item"><a class="nav-link" href="../authentication/card/lock-screen.html">Lock screen</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#authentication-split" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="authentication-split">Split</a>
                            <ul class="nav collapse" id="authentication-split" data-parent="#authentication">
                                <li class="nav-item"><a class="nav-link" href="../authentication/split/login.html">Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="../authentication/split/logout.html">Logout</a></li>
                                <li class="nav-item"><a class="nav-link" href="../authentication/split/register.html">Register</a></li>
                                <li class="nav-item"><a class="nav-link" href="../authentication/split/forgot-password.html">Forgot password</a></li>
                                <li class="nav-item"><a class="nav-link" href="../authentication/split/reset-password.html">Reset password</a></li>
                                <li class="nav-item"><a class="nav-link" href="../authentication/split/confirm-mail.html">Confirm mail</a></li>
                                <li class="nav-item"><a class="nav-link" href="../authentication/split/lock-screen.html">Lock screen</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../authentication/wizard.html">Wizard</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!" data-toggle="modal" data-target="#authentication-modal">In Modal</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#e-commerce" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="e-commerce">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-cart-plus"></span></span><span class="nav-link-text">E commerce</span></div>
                    </a>
                    <ul class="nav collapse" id="e-commerce" data-parent="#navbarVerticalCollapse">
                        <li class="nav-item"><a class="nav-link" href="../e-commerce/product-list.html">Product list</a></li>
                        <li class="nav-item"><a class="nav-link" href="../e-commerce/product-grid.html">Product grid</a></li>
                        <li class="nav-item"><a class="nav-link" href="../e-commerce/product-details.html">Product details</a></li>
                        <li class="nav-item"><a class="nav-link" href="../e-commerce/orders.html">Orders</a></li>
                        <li class="nav-item"><a class="nav-link" href="../e-commerce/order-details.html">Order details</a></li>
                        <li class="nav-item"><a class="nav-link" href="../e-commerce/customers.html">Customers</a></li>
                        <li class="nav-item"><a class="nav-link" href="../e-commerce/shopping-cart.html">Shopping cart</a></li>
                        <li class="nav-item"><a class="nav-link" href="../e-commerce/checkout.html">Checkout</a></li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-vertical-divider">
                <hr class="navbar-vertical-hr my-2" />
            </div>
            <ul class="navbar-nav flex-column">
                <li class="nav-item"><a class="nav-link" href="../widgets.html">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-poll"></span></span><span class="nav-link-text"> Widgets</span></div>
                    </a></li>
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="components">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-puzzle-piece"></span></span><span class="nav-link-text">Components</span></div>
                    </a>
                    <ul class="nav collapse" id="components" data-parent="#navbarVerticalCollapse">
                        <li class="nav-item"><a class="nav-link" href="../components/accordion.html">Accordion</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/alerts.html">Alerts</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/avatar.html">Avatar</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/background.html">Background</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/badges.html">Badges</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/breadcrumb.html">Breadcrumb</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/bulk-select.html">Bulk select</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/buttons.html">Buttons</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/cards.html">Cards</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/carousel.html">Carousel</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/collapse.html">Collapse</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/countup.html">Countup</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/dropdowns.html">Dropdowns</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/fancyscroll.html">Fancyscroll</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/fancytab.html">Fancytab</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/forms.html">Forms</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/hoverbox.html">Hoverbox</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/list-group.html">List group</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/modals.html">Modals</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/media-object.html">Media object</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/navs.html">Navs</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#components-navbar" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="components-navbar">Navbar</a>
                            <ul class="nav collapse" id="components-navbar" data-parent="#components">
                                <li class="nav-item"><a class="nav-link" href="../components/navbar/default.html">Default</a></li>
                                <li class="nav-item"><a class="nav-link" href="../components/navbar/vertical.html">Vertical</a></li>
                                <li class="nav-item"><a class="nav-link" href="../components/navbar/top.html">Top</a></li>
                                <li class="nav-item"><a class="nav-link" href="../components/navbar/combo.html">Combo</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../components/cookie-notice.html">Cookie notice</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/page-headers.html">Page headers</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/pagination.html">Pagination</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/popovers.html">Popovers</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/progress.html">Progress</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/search.html">
                                <div class="d-flex align-items-center">Search<span class="badge badge-pill ml-2 badge-soft-success">New</span></div>
                            </a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/scrollspy.html">Scrollspy</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/sidepanel.html">Sidepanel</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/spinners.html">Spinners</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/tables.html">Tables</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/tabs.html">Tabs</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/toasts.html">Toasts</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/tooltips.html">Tooltips</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#utilities" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="utilities">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-fire"></span></span><span class="nav-link-text">Utilities</span></div>
                    </a>
                    <ul class="nav collapse" id="utilities" data-parent="#navbarVerticalCollapse">
                        <li class="nav-item"><a class="nav-link" href="../utilities/borders.html">Borders</a></li>
                        <li class="nav-item"><a class="nav-link" href="../utilities/clearfix.html">Clearfix</a></li>
                        <li class="nav-item"><a class="nav-link" href="../utilities/close-icon.html">Close icon</a></li>
                        <li class="nav-item"><a class="nav-link" href="../utilities/colors.html">Colors</a></li>
                        <li class="nav-item"><a class="nav-link" href="../utilities/display.html">Display</a></li>
                        <li class="nav-item"><a class="nav-link" href="../utilities/embed.html">Embed</a></li>
                        <li class="nav-item"><a class="nav-link" href="../utilities/figures.html">Figures</a></li>
                        <li class="nav-item"><a class="nav-link" href="../utilities/flex.html">Flex</a></li>
                        <li class="nav-item"><a class="nav-link" href="../utilities/grid.html">Grid</a></li>
                        <li class="nav-item"><a class="nav-link" href="../utilities/sizing.html">Sizing</a></li>
                        <li class="nav-item"><a class="nav-link" href="../utilities/spacing.html">Spacing</a></li>
                        <li class="nav-item"><a class="nav-link" href="../utilities/stretched-link.html">Stretched link</a></li>
                        <li class="nav-item"><a class="nav-link" href="../utilities/typography.html">Typography</a></li>
                        <li class="nav-item"><a class="nav-link" href="../utilities/vertical-align.html">Vertical align</a></li>
                        <li class="nav-item"><a class="nav-link" href="../utilities/visibility.html">Visibility</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#plugins" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="plugins">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-plug"></span></span><span class="nav-link-text">Plugins</span></div>
                    </a>
                    <ul class="nav collapse" id="plugins" data-parent="#navbarVerticalCollapse">
                        <li class="nav-item"><a class="nav-link" href="../plugins/bootstrap-wizard.html">Bootstrap wizard</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#plugins-charts" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="plugins-charts">Charts</a>
                            <ul class="nav collapse" id="plugins-charts" data-parent="#plugins">
                                <li class="nav-item"><a class="nav-link" href="../plugins/charts/chart-js.html">Chart js</a></li>
                                <li class="nav-item"><a class="nav-link" href="../plugins/charts/echarts.html">Echarts</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../plugins/countdown.html">Countdown</a></li>
                        <li class="nav-item"><a class="nav-link" href="../plugins/data-table.html">Data table</a></li>
                        <li class="nav-item"><a class="nav-link" href="../plugins/date-picker.html">Date picker</a></li>
                        <li class="nav-item"><a class="nav-link" href="../plugins/draggable.html">Draggable</a></li>
                        <li class="nav-item"><a class="nav-link" href="../plugins/dropzone.html">Dropzone</a></li>
                        <li class="nav-item"><a class="nav-link" href="../plugins/emojionearea.html">Emojionearea</a></li>
                        <li class="nav-item"><a class="nav-link" href="../plugins/fancybox.html">Fancybox</a></li>
                        <li class="nav-item"><a class="nav-link" href="../plugins/fontawesome.html">Fontawesome</a></li>
                        <li class="nav-item"><a class="nav-link" href="../plugins/fullcalendar.html">Fullcalendar</a></li>
                        <li class="nav-item"><a class="nav-link" href="../plugins/inline-player.html">Inline player</a></li>
                        <li class="nav-item"><a class="nav-link" href="../plugins/jquery-validation.html">Jquery validation</a></li>
                        <li class="nav-item"><a class="nav-link" href="../plugins/lightbox.html">Lightbox</a></li>
                        <li class="nav-item"><a class="nav-link" href="../plugins/lottie.html">Lottie</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#plugins-map" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="plugins-map">Map</a>
                            <ul class="nav collapse" id="plugins-map" data-parent="#plugins">
                                <li class="nav-item"><a class="nav-link" href="../plugins/map/google-map.html">Google map</a></li>
                                <li class="nav-item"><a class="nav-link" href="../plugins/map/leaflet-map.html">Leaflet map</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../plugins/toastr.html">Toastr</a></li>
                        <li class="nav-item"><a class="nav-link" href="../plugins/owl-carousel.html">Owl carousel</a></li>
                        <li class="nav-item"><a class="nav-link" href="../plugins/perfect-scrollbar.html">Perfect scrollbar</a></li>
                        <li class="nav-item"><a class="nav-link" href="../plugins/progressbar.html">Progressbar</a></li>
                        <li class="nav-item"><a class="nav-link" href="../plugins/raty.html">Raty</a></li>
                        <li class="nav-item"><a class="nav-link" href="../plugins/select2.html">Select2</a></li>
                        <li class="nav-item"><a class="nav-link" href="../plugins/tinymce.html">Tinymce</a></li>
                        <li class="nav-item"><a class="nav-link" href="../plugins/typed-text.html">Typed text</a></li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-vertical-divider">
                <hr class="navbar-vertical-hr my-2" />
            </div>
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#documentation" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="documentation">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-book"></span></span><span class="nav-link-text">Documentation</span></div>
                    </a>
                    <ul class="nav collapse" id="documentation" data-parent="#navbarVerticalCollapse">
                        <li class="nav-item"><a class="nav-link" href="../documentation/getting-started.html">Getting started</a></li>
                        <li class="nav-item"><a class="nav-link" href="../documentation/file-structure.html">File structure</a></li>
                        <li class="nav-item"><a class="nav-link" href="../documentation/customization.html">Customization</a></li>
                        <li class="nav-item"><a class="nav-link" href="../documentation/dark-mode.html">Dark mode</a></li>
                        <li class="nav-item"><a class="nav-link" href="../documentation/fluid-layout.html">Fluid layout</a></li>
                        <li class="nav-item"><a class="nav-link" href="../documentation/gulp.html">Gulp</a></li>
                        <li class="nav-item"><a class="nav-link" href="../documentation/RTL.html">RTL</a></li>
                        <li class="nav-item"><a class="nav-link" href="../documentation/plugins.html">Plugins</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="../changelog.html">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-code-branch"></span></span><span class="nav-link-text"> Changelog</span><span class="badge badge-pill ml-2 badge-soft-primary">v2.8.1</span></div>
                    </a></li>
            </ul>
            <div class="settings px-3 px-xl-0">
                <div class="navbar-vertical-divider px-0">
                    <hr class="navbar-vertical-hr my-3" />
                </div><a class="btn btn-sm btn-block btn-purchase mb-3" href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/"> Purchase</a>
            </div>
        </div>
    </div>
</nav>
<nav class="navbar navbar-light navbar-glass navbar-top sticky-kit navbar-expand-lg" style="display:none;">
    <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
    <a class="navbar-brand mr-1 mr-sm-3" href="../index.html">
        <div class="d-flex align-items-center"><img class="mr-2" src="../assets/img/illustrations/falcon.png" alt="" width="40" /><span class="text-sans-serif">falcon</span></div>
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
            <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link dropdown-toggle" id="navbarDropdownComponents" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Components</a>
                <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownComponents">
                    <div class="card shadow-none navbar-card-components">
                        <div class="card-body scrollbar perfect-scrollbar max-h-dropdown">
                            <div class="row">
                                <div class="col-6 col-xl-3">
                                    <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../components/accordion.html">Accordion</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/alerts.html">Alerts</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/avatar.html">Avatar</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/background.html">Background</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/badges.html">Badges</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/breadcrumb.html">Breadcrumb</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/bulk-select.html">Bulk select</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/buttons.html">Buttons</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/cards.html">Cards</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/carousel.html">Carousel</a></div>
                                </div>
                                <div class="col-6 col-xl-3">
                                    <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../components/collapse.html">Collapse</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/countup.html">Countup</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/dropdowns.html">Dropdowns</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/fancyscroll.html">Fancyscroll</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/fancytab.html">Fancytab</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/forms.html">Forms</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/hoverbox.html">Hoverbox</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/list-group.html">List group</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/modals.html">Modals</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/media-object.html">Media object</a></div>
                                </div>
                                <div class="col-6 col-xl-3">
                                    <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../components/navs.html">Navs</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/navbar/default.html">Navbar default</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/navbar/vertical.html">Navbar vertical</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/navbar/top.html">Navbar top</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/navbar/combo.html">Navbar combo</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/cookie-notice.html">Cookie notice</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/page-headers.html">Page headers</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/pagination.html">Pagination</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/popovers.html">Popovers</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/progress.html">Progress</a></div>
                                </div>
                                <div class="col-6 col-xl-3">
                                    <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../components/search.html">Search<span class="badge badge-pill ml-2 fs--2 badge-soft-success">New</span></a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/scrollspy.html">Scrollspy</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/sidepanel.html">Sidepanel</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/spinners.html">Spinners</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/tables.html">Tables</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/tabs.html">Tabs</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/toasts.html">Toasts</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/tooltips.html">Tooltips</a></div>
                                </div>
                            </div>
                            <div class="nav-link py-1 text-900 font-weight-bold mt-3">Plugins</div>
                            <div class="row">
                                <div class="col-6 col-xl-3">
                                    <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/bootstrap-wizard.html">Bootstrap wizard</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/charts/chart-js.html">Chart js</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/charts/echarts.html">Echarts</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/countdown.html">Countdown</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/data-table.html">Data table</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/date-picker.html">Date picker</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/draggable.html">Draggable</a></div>
                                </div>
                                <div class="col-6 col-xl-3">
                                    <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/dropzone.html">Dropzone</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/emojionearea.html">Emojionearea</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/fancybox.html">Fancybox</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/fontawesome.html">Fontawesome</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/fullcalendar.html">Fullcalendar</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/inline-player.html">Inline player</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/jquery-validation.html">Jquery validation</a></div>
                                </div>
                                <div class="col-6 col-xl-3">
                                    <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/lightbox.html">Lightbox</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/lottie.html">Lottie</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/map/google-map.html">Google map</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/map/leaflet-map.html">Leaflet map</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/toastr.html">Toastr</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/owl-carousel.html">Owl carousel</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/perfect-scrollbar.html">Perfect scrollbar</a></div>
                                </div>
                                <div class="col-6 col-xl-3">
                                    <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/progressbar.html">Progressbar</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/raty.html">Raty</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/select2.html">Select2</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/tinymce.html">Tinymce</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/typed-text.html">Typed text</a></div>
                                </div>
                            </div>
                            <div class="nav-link py-1 text-900 font-weight-bold mt-3">Utilities</div>
                            <div class="row">
                                <div class="col-6 col-xl-3">
                                    <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../utilities/borders.html">Borders</a><a class="nav-link py-1 text-700 font-weight-medium" href="../utilities/clearfix.html">Clearfix</a><a class="nav-link py-1 text-700 font-weight-medium" href="../utilities/close-icon.html">Close icon</a><a class="nav-link py-1 text-700 font-weight-medium" href="../utilities/colors.html">Colors</a></div>
                                </div>
                                <div class="col-6 col-xl-3">
                                    <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../utilities/display.html">Display</a><a class="nav-link py-1 text-700 font-weight-medium" href="../utilities/embed.html">Embed</a><a class="nav-link py-1 text-700 font-weight-medium" href="../utilities/figures.html">Figures</a><a class="nav-link py-1 text-700 font-weight-medium" href="../utilities/flex.html">Flex</a></div>
                                </div>
                                <div class="col-6 col-xl-3">
                                    <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../utilities/grid.html">Grid</a><a class="nav-link py-1 text-700 font-weight-medium" href="../utilities/sizing.html">Sizing</a><a class="nav-link py-1 text-700 font-weight-medium" href="../utilities/spacing.html">Spacing</a><a class="nav-link py-1 text-700 font-weight-medium" href="../utilities/stretched-link.html">Stretched link</a></div>
                                </div>
                                <div class="col-6 col-xl-3">
                                    <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../utilities/typography.html">Typography</a><a class="nav-link py-1 text-700 font-weight-medium" href="../utilities/vertical-align.html">Vertical align</a><a class="nav-link py-1 text-700 font-weight-medium" href="../utilities/visibility.html">Visibility</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link dropdown-toggle" id="navbarDropdownAuthentication" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Authentication</a>
                <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownAuthentication">
                    <div class="card shadow-none navbar-card-auth">
                        <div class="card-body scrollbar perfect-scrollbar max-h-dropdown"><img class="position-absolute b-0 r-0" src="../assets/img/illustrations/authentication-corner.png" width="130" alt="" />
                            <div class="row">
                                <div class="col-6 col-xxl-3">
                                    <div class="nav-link py-1 text-900 font-weight-bold">Basic</div>
                                    <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/basic/login.html">Login</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/basic/logout.html">Logout</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/basic/register.html">Register</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/basic/forgot-password.html">Forgot password</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/basic/reset-password.html">Reset password</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/basic/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/basic/lock-screen.html">Lock screen</a></div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <div class="nav-link py-1 text-900 font-weight-bold">Split</div><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/split/login.html">Login</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/split/logout.html">Logout</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/split/register.html">Register</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/split/forgot-password.html">Forgot password</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/split/reset-password.html">Reset password</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/split/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/split/lock-screen.html">Lock screen</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <div class="nav-link py-1 text-900 font-weight-bold mt-3 mt-xxl-0">Card</div><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/card/login.html">Login</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/card/logout.html">Logout</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/card/register.html">Register</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/card/forgot-password.html">Forgot password</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/card/reset-password.html">Reset password</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/card/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/card/lock-screen.html">Lock screen</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <div class="nav-link py-1 text-900 font-weight-bold mt-3 mt-xxl-0">Special</div><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/wizard.html">Wizard</a><a class="nav-link py-1" href="#!" data-toggle="modal" data-target="#authentication-modal">In Modal</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
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
        <li class="nav-item d-none d-sm-inline-block ml-1">
            <a class="nav-link px-0" href="../changelog.html" data-toggle="tooltip" data-placement="bottom" title="Changelog"><span class="fas fa-code-branch fs-4" data-fa-transform="shrink-8"></span></a>
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