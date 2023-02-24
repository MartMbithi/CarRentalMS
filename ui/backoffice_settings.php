<?php
/*
 *   Crafted On Fri Feb 24 2023
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
session_start();
require_once('../app/settings/config.php');
require_once('../app/settings/back_office_checklogin.php');
require_once('../app/partials/back_office_head.php');
?>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

        <div class="container" data-layout="container">
            <?php require_once('../app/partials/back_office_sidebar.php'); ?>
            <div class="content">
                <?php require_once('../app/partials/back_office_topbar.php');
                /* Load this partial with logged in user session */
                $staff_sql = mysqli_query(
                    $mysqli,
                    "SELECT * FROM users WHERE user_id = '{$_SESSION['user_id']}'"
                );
                if (mysqli_num_rows($staff_sql) > 0) {
                    while ($staffs = mysqli_fetch_array($staff_sql)) {
                        /* Image Url */
                        if (!empty($staffs['user_dpic'])) {
                            $staff_image_url = '../storage/users/' . $staffs['user_dpic'];
                        } else {
                            $staff_image_url = '../storage/users/no-profile.png';
                        }
                ?>

                        <div class="card mb-3">
                            <div class="card-header position-relative min-vh-25 mb-7">
                                <div class="bg-holder rounded-soft rounded-bottom-0" style="background-image:url(../public/backoffice_assets/img/generic/4.jpg);"></div>
                                <!--/.bg-holder-->
                                <div class="avatar avatar-5xl avatar-profile"><img class="rounded-circle img-thumbnail shadow-sm" src="<?php echo $staff_image_url; ?>" width="200" alt="" /></div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h4 class="mb-1"> <?php echo $staffs['user_name']; ?>
                                            <small class="fas fa-check-circle text-primary ml-1" data-toggle="tooltip" data-placement="right" title="Verified" data-fa-transform="shrink-4 down-2"></small>
                                        </h4>
                                        <h5 class="fs-0 font-weight-normal">Staff Number: <?php echo $staffs['user_number']; ?></h5>
                                        <h5 class="fs-0 font-weight-normal">Email: <?php echo $staffs['user_email']; ?></h5>
                                        <hr class="border-dashed my-4 d-lg-none" />
                                    </div>
                                    <div class="col-lg-6">
                                        <h5 class="fs-0 font-weight-normal">ID number: <?php echo $staffs['user_id_number']; ?></h5>
                                        <h5 class="fs-0 font-weight-normal">Contacts: <?php echo $staffs['user_phone_number']; ?></h5>
                                        <h5 class="fs-0 font-weight-normal">Address: <?php echo $staffs['user_address']; ?></h5>
                                        <hr class="border-dashed my-4 d-lg-none" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row no-gutters">
                            <div class="col-lg-8 pr-lg-2">
                                <div class="card mb-3">
                                    <div class="card-header bg-light">
                                        <h5 class="mb-0">Intro</h5>
                                    </div>
                                    <div class="card-body text-justify">
                                        <p class="mb-0 text-1000">Dedicated, passionate, and accomplished Full Stack Developer with 9+ years of progressive experience working as an Independent Contractor for Google and developing and growing my educational social network that helps others learn programming, web design, game development, networking.</p>
                                        <div class="collapse show" id="profile-intro">
                                            <p class="mt-3 text-1000">I’ve acquired a wide depth of knowledge and expertise in using my technical skills in programming, computer science, software development, and mobile app development to developing solutions to help organizations increase productivity, and accelerate business performance. </p>
                                            <p class="text-1000">It’s great that we live in an age where we can share so much with technology but I’m but I’m ready for the next phase of my career, with a healthy balance between the virtual world and a workplace where I help others face-to-face.</p>
                                            <p class="text-1000 mb-0">There’s always something new to learn, especially in IT-related fields. People like working with me because I can explain technology to everyone, from staff to executives who need me to tie together the details and the big picture. I can also implement the technologies that successful projects need.</p>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-light p-0 border-top"><button class="btn btn-link btn-block btn-intro-collapse" type="button" data-toggle="collapse" data-target="#profile-intro" aria-expanded="true" aria-controls="profile-intro">Show <span class="less">less<span class="fas fa-chevron-up ml-2 fs--2"></span></span><span class="full">full<span class="fas fa-chevron-down ml-2 fs--2"></span></span></button></div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header bg-light d-flex justify-content-between">
                                        <h5 class="mb-0">Associations</h5><a class="text-sans-serif" href="associations.html">All Associations</a>
                                    </div>
                                    <div class="card-body fs--1">
                                        <div class="row">
                                            <div class="col-sm-6 mb-3">
                                                <div class="media position-relative align-items-center mb-2"><img class="d-flex align-self-center mr-2" src="../assets/img/logos/apple.png" alt="" width="50" />
                                                    <div class="media-body">
                                                        <h6 class="fs-0 mb-0"><a class="stretched-link" href="#!">Apple</a></h6>
                                                        <p class="mb-0">3243 associates</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mb-3">
                                                <div class="media position-relative align-items-center mb-2"><img class="d-flex align-self-center mr-2" src="../assets/img/logos/g.png" alt="" width="50" />
                                                    <div class="media-body">
                                                        <h6 class="fs-0 mb-0"><a class="stretched-link" href="#!">Google</a></h6>
                                                        <p class="mb-0">34598 associates</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mb-3">
                                                <div class="media position-relative align-items-center mb-2"><img class="d-flex align-self-center mr-2" src="../assets/img/logos/intel.png" alt="" width="50" />
                                                    <div class="media-body">
                                                        <h6 class="fs-0 mb-0"><a class="stretched-link" href="#!">Intel</a></h6>
                                                        <p class="mb-0">7652 associates</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mb-3">
                                                <div class="media position-relative align-items-center mb-2"><img class="d-flex align-self-center mr-2" src="../assets/img/logos/nike.png" alt="" width="50" />
                                                    <div class="media-body">
                                                        <h6 class="fs-0 mb-0"><a class="stretched-link" href="#!">Nike</a></h6>
                                                        <p class="mb-0">765 associates</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header bg-light d-flex justify-content-between">
                                        <h5 class="mb-0">Activity log</h5><a class="text-sans-serif" href="activity.html">All logs</a>
                                    </div>
                                    <div class="card-body fs--1 p-0">
                                        <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300" href="#!">
                                            <div class="notification-avatar">
                                                <div class="avatar avatar-xl mr-3">
                                                    <div class="avatar-emoji rounded-circle "><span role="img" aria-label="Emoji">🎁</span></div>
                                                </div>
                                            </div>
                                            <div class="notification-body">
                                                <p class="mb-1"><strong>Jennifer Kent</strong> Congratulated <strong>Anthony Hopkins</strong></p>
                                                <span class="notification-time">November 13, 5:00 Am</span>
                                            </div>
                                        </a>

                                        <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300" href="#!">
                                            <div class="notification-avatar">
                                                <div class="avatar avatar-xl mr-3">
                                                    <div class="avatar-emoji rounded-circle "><span role="img" aria-label="Emoji">🏷️</span></div>
                                                </div>
                                            </div>
                                            <div class="notification-body">
                                                <p class="mb-1"><strong>California Institute of Technology</strong> tagged <strong>Anthony Hopkins</strong> in a post.</p>
                                                <span class="notification-time">November 8, 5:00 PM</span>
                                            </div>
                                        </a>

                                        <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300" href="#!">
                                            <div class="notification-avatar">
                                                <div class="avatar avatar-xl mr-3">
                                                    <div class="avatar-emoji rounded-circle "><span role="img" aria-label="Emoji">📋️</span></div>
                                                </div>
                                            </div>
                                            <div class="notification-body">
                                                <p class="mb-1"><strong>Anthony Hopkins</strong> joined <strong>Victory day cultural Program</strong> with <strong>Tony Stark</strong></p>
                                                <span class="notification-time">November 01, 11:30 AM</span>
                                            </div>
                                        </a>

                                        <a class="notification border-x-0 border-bottom-0 border-300 rounded-top-0" href="#!">
                                            <div class="notification-avatar">
                                                <div class="avatar avatar-xl mr-3">
                                                    <div class="avatar-emoji rounded-circle "><span role="img" aria-label="Emoji">📅️</span></div>
                                                </div>
                                            </div>
                                            <div class="notification-body">
                                                <p class="mb-1"><strong>Massachusetts Institute of Technology</strong> invited <strong>Anthony Hopkin</strong> to an event</p>
                                                <span class="notification-time">October 28, 12:00 PM</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="card mb-3 mb-xl-0">
                                    <div class="card-header bg-light">
                                        <h5 class="mb-0">Photos</h5>
                                    </div>
                                    <div class="card-body overflow-hidden">
                                        <div class="row no-gutters">
                                            <div class="col-6 p-1"><a href="../assets/img/generic/4.jpg" data-fancybox="gallery" data-caption="Image caption"><img class="rounded w-100" src="../assets/img/generic/4.jpg" alt="" /></a></div>
                                            <div class="col-6 p-1"><a href="../assets/img/generic/5.jpg" data-fancybox="gallery" data-caption="Image caption"><img class="rounded w-100" src="../assets/img/generic/5.jpg" alt="" /></a></div>
                                            <div class="col-4 p-1"><a href="../assets/img/gallery/4.jpg" data-fancybox="gallery" data-caption="Image caption"><img class="rounded w-100" src="../assets/img/gallery/4.jpg" alt="" /></a></div>
                                            <div class="col-4 p-1"><a href="../assets/img/gallery/5.jpg" data-fancybox="gallery" data-caption="Image caption"><img class="rounded w-100" src="../assets/img/gallery/5.jpg" alt="" /></a></div>
                                            <div class="col-4 p-1"><a href="../assets/img/gallery/3.jpg" data-fancybox="gallery" data-caption="Image caption"><img class="rounded w-100" src="../assets/img/gallery/3.jpg" alt="" /></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 pl-lg-2">
                                <div class="sticky-top sticky-sidebar">
                                    <div class="card mb-3">
                                        <div class="card-header bg-light">
                                            <h5 class="mb-0">Experience</h5>
                                        </div>
                                        <div class="card-body fs--1">
                                            <div class="media"><a href="#!"> <img class="img-fluid" src="../assets/img/logos/g.png" alt="" width="56" /></a>
                                                <div class="media-body position-relative pl-3">
                                                    <h6 class="fs-0 mb-0">Big Data Engineer<small class="fas fa-check-circle text-primary ml-1" data-toggle="tooltip" data-placement="top" title="Verified" data-fa-transform="shrink-4 down-2"></small></h6>
                                                    <p class="mb-1"> <a href="#!">Google</a></p>
                                                    <p class="text-1000 mb-0">Apr 2012 - Present &bull; 6 yrs 9 mos</p>
                                                    <p class="text-1000 mb-0">California, USA</p>
                                                    <hr class="border-dashed border-bottom-0" />
                                                </div>
                                            </div>
                                            <div class="media"><a href="#!"> <img class="img-fluid" src="../assets/img/logos/apple.png" alt="" width="56" /></a>
                                                <div class="media-body position-relative pl-3">
                                                    <h6 class="fs-0 mb-0">Software Engineer<small class="fas fa-check-circle text-primary ml-1" data-toggle="tooltip" data-placement="top" title="Verified" data-fa-transform="shrink-4 down-2"></small></h6>
                                                    <p class="mb-1"> <a href="#!">Apple</a></p>
                                                    <p class="text-1000 mb-0">Jan 2012 - Apr 2012 &bull; 4 mos</p>
                                                    <p class="text-1000 mb-0">California, USA</p>
                                                    <hr class="border-dashed border-bottom-0" />
                                                </div>
                                            </div>
                                            <div class="media"><a href="#!"> <img class="img-fluid" src="../assets/img/logos/nike.png" alt="" width="56" /></a>
                                                <div class="media-body position-relative pl-3">
                                                    <h6 class="fs-0 mb-0">Mobile App Developer<small class="fas fa-check-circle text-primary ml-1" data-toggle="tooltip" data-placement="top" title="Verified" data-fa-transform="shrink-4 down-2"></small></h6>
                                                    <p class="mb-1"> <a href="#!">Nike</a></p>
                                                    <p class="text-1000 mb-0">Jan 2011 - Apr 2012 &bull; 1 yr 4 mos</p>
                                                    <p class="text-1000 mb-0">Beaverton, USA</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <div class="card-header bg-light">
                                            <h5 class="mb-0">Education</h5>
                                        </div>
                                        <div class="card-body fs--1">
                                            <div class="media"><a href="#!">
                                                    <div class="avatar avatar-3xl">
                                                        <div class="avatar-name rounded-circle"><span>SU</span></div>
                                                    </div>
                                                </a>
                                                <div class="media-body position-relative pl-3">
                                                    <h6 class="fs-0 mb-0"> <a href="#!">Stanford University<small class="fas fa-check-circle text-primary ml-1" data-toggle="tooltip" data-placement="top" title="Verified" data-fa-transform="shrink-4 down-2"></small></a></h6>
                                                    <p class="mb-1">Computer Science and Engineering</p>
                                                    <p class="text-1000 mb-0">2010 - 2014 • 4 yrs</p>
                                                    <p class="text-1000 mb-0">California, USA</p>
                                                    <hr class="border-dashed border-bottom-0" />
                                                </div>
                                            </div>
                                            <div class="media"><a href="#!"> <img class="img-fluid" src="../assets/img/logos/staten.png" alt="" width="56" /></a>
                                                <div class="media-body position-relative pl-3">
                                                    <h6 class="fs-0 mb-0"> <a href="#!">Staten Island Technical High School<small class="fas fa-check-circle text-primary ml-1" data-toggle="tooltip" data-placement="top" title="Verified" data-fa-transform="shrink-4 down-2"></small></a></h6>
                                                    <p class="mb-1">Higher Secondary School Certificate, Science</p>
                                                    <p class="text-1000 mb-0">2008 - 2010 &bull; 2 yrs</p>
                                                    <p class="text-1000 mb-0">New York, USA</p>
                                                    <hr class="border-dashed border-bottom-0" />
                                                </div>
                                            </div>
                                            <div class="media"><a href="#!"> <img class="img-fluid" src="../assets/img/logos/tj-heigh-school.png" alt="" width="56" /></a>
                                                <div class="media-body position-relative pl-3">
                                                    <h6 class="fs-0 mb-0"> <a href="#!">Thomas Jefferson High School for Science and Technology<small class="fas fa-check-circle text-primary ml-1" data-toggle="tooltip" data-placement="top" title="Verified" data-fa-transform="shrink-4 down-2"></small></a></h6>
                                                    <p class="mb-1">Secondary School Certificate, Science</p>
                                                    <p class="text-1000 mb-0">2003 - 2008 &bull; 5 yrs</p>
                                                    <p class="text-1000 mb-0">Alexandria, USA</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-3 mb-lg-0">
                                        <div class="card-header bg-light">
                                            <h5 class="mb-0">Events</h5>
                                        </div>
                                        <div class="card-body fs--1">
                                            <div class="media btn-reveal-trigger">
                                                <div class="calendar"><span class="calendar-month">Feb</span><span class="calendar-day">21</span></div>
                                                <div class="media-body position-relative pl-3">
                                                    <h6 class="fs-0 mb-0"><a href="event-detail.html">Newmarket Nights</a></h6>
                                                    <p class="mb-1">Organized by <a href="#!" class="text-700">University of Oxford</a></p>
                                                    <p class="text-1000 mb-0">Time: 6:00AM</p>
                                                    <p class="text-1000 mb-0">Duration: 6:00AM - 5:00PM</p>Place: Cambridge Boat Club, Cambridge
                                                    <hr class="border-dashed border-bottom-0" />
                                                </div>
                                            </div>
                                            <div class="media btn-reveal-trigger">
                                                <div class="calendar"><span class="calendar-month">Dec</span><span class="calendar-day">31</span></div>
                                                <div class="media-body position-relative pl-3">
                                                    <h6 class="fs-0 mb-0"><a href="event-detail.html">31st Night Celebration</a></h6>
                                                    <p class="mb-1">Organized by <a href="#!" class="text-700">Chamber Music Society</a></p>
                                                    <p class="text-1000 mb-0">Time: 11:00PM</p>
                                                    <p class="text-1000 mb-0">280 people interested</p>Place: Tavern on the Greend, New York
                                                    <hr class="border-dashed border-bottom-0" />
                                                </div>
                                            </div>
                                            <div class="media btn-reveal-trigger">
                                                <div class="calendar"><span class="calendar-month">Dec</span><span class="calendar-day">16</span></div>
                                                <div class="media-body position-relative pl-3">
                                                    <h6 class="fs-0 mb-0"><a href="event-detail.html">Folk Festival</a></h6>
                                                    <p class="mb-1">Organized by <a href="#!" class="text-700">Harvard University</a></p>
                                                    <p class="text-1000 mb-0">Time: 9:00AM</p>
                                                    <p class="text-1000 mb-0">Location: Cambridge Masonic Hall Association</p>Place: Porter Square, North Cambridge
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-light py-0 border-top"><a class="btn btn-link btn-block" href="events.html">All Events<span class="fas fa-chevron-right ml-1 fs--2"></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-3">
                            <div class="card-header bg-light">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="mb-0" id="followers">Followers <span class="d-none d-sm-inline-block">(233)</span></h5>
                                    </div>
                                    <div class="col text-right"><a class="text-sans-serif" href="people.html">All Members</a></div>
                                </div>
                            </div>
                            <div class="card-body bg-light p-0">
                                <div class="row no-gutters text-center fs--1">
                                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                        <div class="bg-white p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../assets/img/team/1.jpg" alt="" width="100" /></a>
                                            <h6 class="mb-1"><a href="profile.html">Emilia Clarke</a></h6>
                                            <p class="fs--2 mb-1"><a class="text-700" href="#!">Technext limited</a></p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                        <div class="bg-white p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../assets/img/team/2.jpg" alt="" width="100" /></a>
                                            <h6 class="mb-1"><a href="profile.html">Kit Harington</a></h6>
                                            <p class="fs--2 mb-1"><a class="text-700" href="#!">Harvard Korea Society</a></p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                        <div class="bg-white p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../assets/img/team/3.jpg" alt="" width="100" /></a>
                                            <h6 class="mb-1"><a href="profile.html">Sophie Turner</a></h6>
                                            <p class="fs--2 mb-1"><a class="text-700" href="#!">Graduate Student Council</a></p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                        <div class="bg-white p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../assets/img/team/4.jpg" alt="" width="100" /></a>
                                            <h6 class="mb-1"><a href="profile.html">Peter Dinklage</a></h6>
                                            <p class="fs--2 mb-1"><a class="text-700" href="#!">Art Club, MIT</a></p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                        <div class="bg-white p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../assets/img/team/5.jpg" alt="" width="100" /></a>
                                            <h6 class="mb-1"><a href="profile.html">Nikolaj Coster</a></h6>
                                            <p class="fs--2 mb-1"><a class="text-700" href="#!">Archery Club, MIT</a></p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                        <div class="bg-white p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../assets/img/team/6.jpg" alt="" width="100" /></a>
                                            <h6 class="mb-1"><a href="profile.html">Isaac Hempstead</a></h6>
                                            <p class="fs--2 mb-1"><a class="text-700" href="#!">Asymptones</a></p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                        <div class="bg-white p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../assets/img/team/7.jpg" alt="" width="100" /></a>
                                            <h6 class="mb-1"><a href="profile.html">Alfie Allen</a></h6>
                                            <p class="fs--2 mb-1"><a class="text-700" href="#!">Brain Trust</a></p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                        <div class="bg-white p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../assets/img/team/8.jpg" alt="" width="100" /></a>
                                            <h6 class="mb-1"><a href="profile.html">Iain Glen</a></h6>
                                            <p class="fs--2 mb-1"><a class="text-700" href="#!">GSAS Action Coalition</a></p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                        <div class="bg-white p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../assets/img/team/9.jpg" alt="" width="100" /></a>
                                            <h6 class="mb-1"><a href="profile.html">Liam Cunningham</a></h6>
                                            <p class="fs--2 mb-1"><a class="text-700" href="#!">Caving Club, MIT</a></p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                        <div class="bg-white p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../assets/img/team/10.jpg" alt="" width="100" /></a>
                                            <h6 class="mb-1"><a href="profile.html">John Bradley</a></h6>
                                            <p class="fs--2 mb-1"><a class="text-700" href="#!">Chess Club</a></p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                        <div class="bg-white p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../assets/img/team/11.jpg" alt="" width="100" /></a>
                                            <h6 class="mb-1"><a href="profile.html">Rory McCann</a></h6>
                                            <p class="fs--2 mb-1"><a class="text-700" href="#!">Chamber Music Society</a></p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                                        <div class="bg-white p-3 h-100"><a href="profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="../assets/img/team/12.jpg" alt="" width="100" /></a>
                                            <h6 class="mb-1"><a href="profile.html">Joe Dempsie</a></h6>
                                            <p class="fs--2 mb-1"><a class="text-700" href="#!">Clubchem</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                } else { ?>

                <?php } ?>
                <?php require_once('../app/partials/back_office_footer.php'); ?>
            </div>
        </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
    <?php require_once('../app/partials/back_office_scripts.php'); ?>
</body>

</html>