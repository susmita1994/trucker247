<html lang=en>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <title>Home page</title>
        <link rel="stylesheet" href="<?= base_url('public/frontend/css/bootstrap.min.css');?>">
        <link rel="stylesheet" href="<?= base_url('public/frontend/css/owl.carousel.min.css');?>">
        <link rel="stylesheet" href="<?= base_url('public/frontend/css/owl.theme.default.min.css');?>">
        <link rel="stylesheet" href="<?= base_url('public/frontend/css/jquery.fancybox.min.css');?>">
        <link rel="stylesheet" href="<?= base_url('public/frontend/fonts/icomoon/style.css');?>">
        <link rel="stylesheet" href="<?= base_url('fonts/flaticon/font/flaticon.css');?>">
        <link rel="stylesheet" href="<?= base_url('public/frontend/css/aos.css');?>">
        <link rel="stylesheet" href="<?= base_url('public/frontend/css/style.css');?>">    
    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="100">       
        <div class="lines-wrap">
            <div class="lines-inner">
                <div class="lines"></div>
            </div>
        </div>
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close">
                    <span class="icofont-close js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <!-- nav start -->
        <nav class="site-nav dark js-site-navbar mb-5 site-navbar-target">
            <div class="container">
                <div class="site-navigation">
                    <a href="<?= base_url('Home');?>" class="logo m-0 float-left">
                        <img src="<?= base_url('public/logo/1630250620_logo.png');?>" alt="logo">
                    </a>
                    <ul class="js-clone-nav d-none d-lg-inline-block site-menu float-left">
                        <li class="active"><a href="<?= base_url('/');?>" class="nav-link">Home</a></li>
                        <!-- <li class="has-children">
                            <a href="#" class="nav-link">Dropdown</a>
                            <ul class="dropdown">
                                <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                                <li class="has-children">
                                    <a href="#">Menu Two</a>
                                    <ul class="dropdown">
                                        <li><a href="#" class="nav-link">Sub Menu One</a></li>
                                        <li><a href="#" class="nav-link">Sub Menu Two</a></li>
                                        <li><a href="#" class="nav-link">Sub Menu Three</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="nav-link">Menu Three</a></li>
                            </ul>
                        </li> -->
                        <li><a href="<?= site_url('#features-section');?>" class="nav-link">Features</a></li>
                        <li><a href="<?=site_url('#pricing-section');?>" class="nav-link">Pricing</a></li>
                        <li><a href="<?= site_url('#about-section');?>" class="nav-link">About</a></li>
                        <li><a href="<?= site_url('#contact-section');?>" class="nav-link">Contact</a></li>
                    </ul>
                    <ul class="js-clone-nav d-none mt-1 d-lg-inline-block site-menu float-right">
                        <li class="cta-button-outline"><a href="<?= site_url('userlogin');?>">Sign in</a></li>
                        <li class="cta-primary"><a href="<?= site_url('usersignup');?>">Register</a></li>
                    </ul>
                                        
                    <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block dark d-lg-none" data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>
                </div>
            </div>
        </nav>    <!-- nav end -->
    
        <?= $this->renderSection('body-content'); ?>
      
        <div class="site-footer">
        <div class="footer-dots"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>About Trucker247<span class="text-primary">.</span> </h3>
                        <p>Making trucking smart and efficient through digital transformation. We are building a new and better tomorrow for all players in the trucking ecosystem including commission agents, transporters, and fleet owners</p>
                    </div>
                </div>
                <div class="col-lg-2 ml-auto">
                    <div class="widget">
                        <h3>Quick Links</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="<?= site_url('#features-section');?>">Features</a></li>
                            <li><a href="<?=site_url('#pricing-section');?>">Pricing</a></li>
                            <li><a href="<?= site_url('#about-section');?>">About</a></li>
                            <li><a href="http://trucker247.com#testimonials-section">Testimonials</a></li>
                            <li><a href="<?= site_url('#contact-section');?>">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="widget">
                        <h3>Special Links</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="<?= site_url('userlogin');?>">Sign In</a></li>
                            <li><a href="<?= site_url('usersignup');?>">Register</a></li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h3>Connect</h3>
                        <ul class="list-unstyled social">
                            <li><a href="https://www.facebook.com/"><span class="bi bi-facebook"></span></a></li>
                            <li><a href="#"><span class="bi bi-instagram "></span></a></li>
                            <li><a href="#"><span class="bi bi-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget">
                        <h3>Contact</h3>
                        <address>Navi Mumbai, Maharashtra 410210</address>
                        <ul class="list-unstyled links mb-4">
                            <li><a>+91 (7777-054-510)</a></li>                            
                            <li><a href="mailto:#"><span class="__cf_email__">info@trucker247.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <p>
                        Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                        <script>
                        document.write(new Date().getFullYear());
                        </script> All rights reserved | This design is made with <i class="bi bi-heart-fill text-danger" aria-hidden="true"></i> by <a href="https://neatfox.co.in/" target="_blank">NeatFox</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>



    <script src="<?= base_url('public/frontend/js/jquery-3.4.1.min.js');?>"></script>
    <script src="<?=base_url('public/frontend/js/jquery-migrate-3.0.1.min.js');?>"></script>
    <script src="<?= base_url('public/frontend/js/popper.min.js');?>"></script>
    <script src="<?= base_url('public/frontend/js/bootstrap.min.js');?>"></script>
    <script src="<?= base_url('public/frontend/js/owl.carousel.min.js');?>"></script>
    <script src="<?= base_url('public/frontend/js/jquery.easing.1.3.js');?>"></script>
    <script src="<?= base_url('public/frontend/js/jquery.animateNumber.min.js');?>"></script>
    <script src="<?= base_url('public/frontend/js/jquery.waypoints.min.js');?>"></script>
    <script src="<?= base_url('public/frontend/js/jquery.fancybox.min.js');?>"></script>
    <script src="<?= base_url('public/frontend/js/aos.js');?>"></script>
    <script src="<?= base_url('public/frontend/js/custom.js');?>"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    </body>
</html>