<?php
/*
 *   Crafted On Tue Feb 21 2023
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

/* This File Will Handle Alerts */
if (isset($success)) { ?>
    <!-- Pop Success Alert -->
    <script>
        new Noty({
            type: 'success',
            text: '<?php echo $success; ?>',
            theme: 'metroui',
            timeout: '2000',
            progressBar: false,
            layout: 'topRight',
            animation: {
                open: function(promise) {
                    var n = this;
                    var Timeline = new mojs.Timeline();
                    var body = new mojs.Html({
                        el: n.barDom,
                        x: {
                            500: 0,
                            delay: 0,
                            duration: 500,
                            easing: 'elastic.out'
                        },
                        isForce3d: true,
                        onComplete: function() {
                            promise(function(resolve) {
                                resolve();
                            })
                        }
                    });

                    var parent = new mojs.Shape({
                        parent: n.barDom,
                        width: 200,
                        height: n.barDom.getBoundingClientRect().height,
                        radius: 0,
                        x: {
                            [150]: -150
                        },
                        duration: 1.2 * 500,
                        isShowStart: true
                    });

                    n.barDom.style['overflow'] = 'visible';
                    parent.el.style['overflow'] = 'hidden';

                    var burst = new mojs.Burst({
                        parent: parent.el,
                        count: 10,
                        top: n.barDom.getBoundingClientRect().height + 75,
                        degree: 90,
                        radius: 75,
                        angle: {
                            [-90]: 40
                        },
                        children: {
                            fill: '#EBD761',
                            delay: 'stagger(500, -50)',
                            radius: 'rand(8, 25)',
                            direction: -1,
                            isSwirl: true
                        }
                    });

                    var fadeBurst = new mojs.Burst({
                        parent: parent.el,
                        count: 2,
                        degree: 0,
                        angle: 75,
                        radius: {
                            0: 100
                        },
                        top: '90%',
                        children: {
                            fill: '#EBD761',
                            pathScale: [.65, 1],
                            radius: 'rand(12, 15)',
                            direction: [-1, 1],
                            delay: .8 * 500,
                            isSwirl: true
                        }
                    });

                    Timeline.add(body, burst, fadeBurst, parent);
                    Timeline.play();
                },
                close: function(promise) {
                    var n = this;
                    new mojs.Html({
                        el: n.barDom,
                        x: {
                            0: 500,
                            delay: 10,
                            duration: 500,
                            easing: 'cubic.out'
                        },
                        skewY: {
                            0: 10,
                            delay: 10,
                            duration: 500,
                            easing: 'cubic.out'
                        },
                        isForce3d: true,
                        onComplete: function() {
                            promise(function(resolve) {
                                resolve();
                            })
                        }
                    }).play();
                }
            }
        }).show();
    </script>

<?php }
if (isset($err)) { ?>
    <script>
        new Noty({
            type: 'error',
            text: '<?php echo $err; ?>',
            theme: 'metroui',
            timeout: '2000',
            progressBar: false,
            layout: 'topRight',
            animation: {
                open: function(promise) {
                    var n = this;
                    var Timeline = new mojs.Timeline();
                    var body = new mojs.Html({
                        el: n.barDom,
                        x: {
                            500: 0,
                            delay: 0,
                            duration: 500,
                            easing: 'elastic.out'
                        },
                        isForce3d: true,
                        onComplete: function() {
                            promise(function(resolve) {
                                resolve();
                            })
                        }
                    });

                    var parent = new mojs.Shape({
                        parent: n.barDom,
                        width: 200,
                        height: n.barDom.getBoundingClientRect().height,
                        radius: 0,
                        x: {
                            [150]: -150
                        },
                        duration: 1.2 * 500,
                        isShowStart: true
                    });

                    n.barDom.style['overflow'] = 'visible';
                    parent.el.style['overflow'] = 'hidden';

                    var burst = new mojs.Burst({
                        parent: parent.el,
                        count: 10,
                        top: n.barDom.getBoundingClientRect().height + 75,
                        degree: 90,
                        radius: 75,
                        angle: {
                            [-90]: 40
                        },
                        children: {
                            fill: '#EBD761',
                            delay: 'stagger(500, -50)',
                            radius: 'rand(8, 25)',
                            direction: -1,
                            isSwirl: true
                        }
                    });

                    var fadeBurst = new mojs.Burst({
                        parent: parent.el,
                        count: 2,
                        degree: 0,
                        angle: 75,
                        radius: {
                            0: 100
                        },
                        top: '90%',
                        children: {
                            fill: '#EBD761',
                            pathScale: [.65, 1],
                            radius: 'rand(12, 15)',
                            direction: [-1, 1],
                            delay: .8 * 500,
                            isSwirl: true
                        }
                    });

                    Timeline.add(body, burst, fadeBurst, parent);
                    Timeline.play();
                },
                close: function(promise) {
                    var n = this;
                    new mojs.Html({
                        el: n.barDom,
                        x: {
                            0: 500,
                            delay: 10,
                            duration: 500,
                            easing: 'cubic.out'
                        },
                        skewY: {
                            0: 10,
                            delay: 10,
                            duration: 500,
                            easing: 'cubic.out'
                        },
                        isForce3d: true,
                        onComplete: function() {
                            promise(function(resolve) {
                                resolve();
                            })
                        }
                    }).play();
                }
            }
        }).show();
    </script>
<?php }
if (isset($info)) { ?>
    <script>
        new Noty({
            type: 'warning',
            text: '<?php echo $info; ?>',
            theme: 'metroui',
            timeout: '2000',
            progressBar: false,
            layout: 'topRight',
            animation: {
                open: function(promise) {
                    var n = this;
                    var Timeline = new mojs.Timeline();
                    var body = new mojs.Html({
                        el: n.barDom,
                        x: {
                            500: 0,
                            delay: 0,
                            duration: 500,
                            easing: 'elastic.out'
                        },
                        isForce3d: true,
                        onComplete: function() {
                            promise(function(resolve) {
                                resolve();
                            })
                        }
                    });

                    var parent = new mojs.Shape({
                        parent: n.barDom,
                        width: 200,
                        height: n.barDom.getBoundingClientRect().height,
                        radius: 0,
                        x: {
                            [150]: -150
                        },
                        duration: 1.2 * 500,
                        isShowStart: true
                    });

                    n.barDom.style['overflow'] = 'visible';
                    parent.el.style['overflow'] = 'hidden';

                    var burst = new mojs.Burst({
                        parent: parent.el,
                        count: 10,
                        top: n.barDom.getBoundingClientRect().height + 75,
                        degree: 90,
                        radius: 75,
                        angle: {
                            [-90]: 40
                        },
                        children: {
                            fill: '#EBD761',
                            delay: 'stagger(500, -50)',
                            radius: 'rand(8, 25)',
                            direction: -1,
                            isSwirl: true
                        }
                    });

                    var fadeBurst = new mojs.Burst({
                        parent: parent.el,
                        count: 2,
                        degree: 0,
                        angle: 75,
                        radius: {
                            0: 100
                        },
                        top: '90%',
                        children: {
                            fill: '#EBD761',
                            pathScale: [.65, 1],
                            radius: 'rand(12, 15)',
                            direction: [-1, 1],
                            delay: .8 * 500,
                            isSwirl: true
                        }
                    });

                    Timeline.add(body, burst, fadeBurst, parent);
                    Timeline.play();
                },
                close: function(promise) {
                    var n = this;
                    new mojs.Html({
                        el: n.barDom,
                        x: {
                            0: 500,
                            delay: 10,
                            duration: 500,
                            easing: 'cubic.out'
                        },
                        skewY: {
                            0: 10,
                            delay: 10,
                            duration: 500,
                            easing: 'cubic.out'
                        },
                        isForce3d: true,
                        onComplete: function() {
                            promise(function(resolve) {
                                resolve();
                            })
                        }
                    }).play();
                }
            }
        }).show();
    </script>
<?php }
?>