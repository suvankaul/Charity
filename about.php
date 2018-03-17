<!DOCTYPE html>
<!--[if IE 7]> <html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
    <head>
        <!-- TITLE OF SITE -->
        <title> Charity</title>
        
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="description" content="app landing page template" />
        <meta name="keywords" content="app, landing page, gradient background, image background, video background, template, responsive, bootstrap" />
        <meta name="developer" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- FAV AND ICONS   -->
        <!--**<link rel="shortcut icon" href="assets/images/favicon.png">**-->
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/assets/images/favicon.png"/>
        <!--**<link rel="shortcut icon" href="assets/images/apple-icon.png">**-->
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/assets/images/apple-icon.png"/>
        <!--**<link rel="shortcut icon" sizes="72x72" href="assets/images/apple-icon-72x72.png">**-->
        <link rel="shortcut icon" sizes="72x72" href="<?php echo get_template_directory_uri();?>/assets/images/apple-icon-72x72.png"/>
        <!--**<link rel="shortcut icon" sizes="114x114" href="assets/images/apple-icon-114x114.png">*-->
        <link rel="shortcut icon" sizes="114x114" href="<?php echo get_template_directory_uri();?>/assets/images/apple-icon-114x114.png"/>

        <!-- GOOGLE FONTS -->
        <!--**<link href="https://fonts.googleapis.com/css?family=Khula:300,400,600,700,800%7CRoboto:300,400,400i,500,700,900" rel="stylesheet">**-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>https://fonts.googleapis.com/css?family=Khula:300,400,600,700,800%7CRoboto:300,400,400i,500,700,900"/>

        <!--<link rel="stylesheet" href="assets/plugins/css/icon-font.min.css">-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/plugins/css/icon-font.min.css"/>

        <!-- FONT ICONS -->
        <!--<link rel="stylesheet" href="assets/icons/font-awesome-4.7.0/css/font-awesome.min.css">-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/icons/font-awesome-4.7.0/css/font-awesome.min.css"/>
        
        <!-- Custom Icon Font -->
        <!--<link rel="stylesheet" href="assets/fonts/flaticon.css">-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/fonts/flaticon.css"/>
        
        <!-- Bootstrap-->
        <!--<link rel="stylesheet" href="assets/plugins/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/plugins/css/bootstrap.min.css"/>
        
        <!-- Fancybox-->
        <!--<link rel="stylesheet" href="assets/plugins/css/jquery.fancybox.css">-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/plugins/css/jquery.fancybox.css"/>
        
        <!-- Animation -->
        <!--<link rel="stylesheet" href="assets/plugins/css/animate.css">-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/plugins/css/animate.css"/>
        
        <!-- wow -->
        <!--<link rel="stylesheet" href="assets/plugins/css/owl.css">
        <link rel="stylesheet" href="assets/plugins/css/slider.css">-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/plugins/css/owl.css"/>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/plugins/css/slider.css"/>

        <!-- COUSTOM CSS link  -->
        <!--**<link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">**-->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/responsive.css/"/>


        <!-- COLOR -->
        <!--<link rel="stylesheet" href="assets/css/color/color-1.css">  -->
        <!--<link rel="stylesheet" href="assets/css/color/color-2.css">-->
        <!--<link rel="stylesheet" href="assets/css/color/color-3.css">-->
        <!--**<link rel="stylesheet" href="assets/css/color/color-4.css" id="color-scheme">**--> 
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/color/color-4.css" id="color-scheme"/>
        <!--<link rel="stylesheet" href="assets/css/color/color-5.css"> -->
        <!--<link rel="stylesheet" href="assets/css/color/color-6.css">-->


        <!--[if lt IE 9]>
            <script src="js/plagin-js/html5shiv.js"></script>
            <script src="js/plagin-js/respond.min.js"></script>
        <![endif]-->
    <?php wp_head(); 
    /*Template name: about */    
    ?>
    </head>
    
    <?php get_header(); ?>
    
<!-- Mobile Menu-->
        <div class="menu-spacing visible-xs">
            <div class="mobile-menu-area visible-xs visible-sm">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="main">
                            <li><a class="main-a" href="index.html">Home</a></li>
                            <li><a class="main-a" href=" http://localhost/charitus/index.php/about/">About</a></li>
                            <li class="active"><a class="main-a" href="#">Causes</a>
                                <ul>
                                    <li><a href="http://localhost/charitus/index.php/causes-grid/">Causes Grid</a></li>
                                    <li><a href="http://localhost/charitus/index.php/causes-list/ ">Causes List</a></li>
                                    <li><a href="http://localhost/charitus/index.php/causes-single-page/">Causes Single</a></li>
                                </ul>	
                            </li>
                            <li><a class="main-a" href="#"><span>Events</span></a>
                                <ul>
                                    <li><a href="http://localhost/charitus/index.php/event-grid/">Events Grid</a></li>
                                    <li><a href="http://localhost/charitus/index.php/event-list/">Events List</a></li>
                                    <li><a href="http://localhost/charitus/index.php/events-single-page/">Events Single</a></li>
                                </ul>
                            </li>
                            <li><a class="main-a" href=""><span>Blog</span></a>
                                <ul>
                                    <li><a href="http://localhost/charitus/index.php/blog-grid/">Blog Grid</a></li>
                                    <li><a href="http://localhost/charitus/index.php/blog-list/">Blog List</a></li>			
                                    <li><a href="http://localhost/charitus/index.php/blog-single/">Blog Single</a></li>			
                                </ul>
                            </li>
                            <li><a class="main-a" href="index.html#ch-gallery">Gallery</a></li>
                            <li><a class="main-a" href="http://localhost/charitus/index.php/contact/">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>	
            </div>
        </div>
        
        <!-- Breadcumb -->
        
        <section class="subpage header-section">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="sub-header-content">
                        <div class="col-md-6">
                            <h4>About Us</h4>
                        </div>
                        <div class="col-md-6 subpage-nav">
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">About</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--
        |========================
        |   FEATURE CONTENT
        |========================
        -->
        <section class="section ch-who-we-are" id="ch-who-we">
            <div class="container">
                <div class="row section-separator">
                    <div class="section-title wow fadeIn" data-wow-delay="0.2s">
                        <h2>Who <span>we are</span></h2>
                        <p>Sed cursus elementum arcu vitae mollis. Curabitur vehicula egestas libero.</p>
                    </div>
                    <div class="ch-mission-content">
                        <div class="two-column-content col-md-6 col-sm-6 wow fadeInRight" data-wow-delay="0.3s">
                            <h4>We Provide Worldwide Charity Service Since 2003</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
                            officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste 
                            natus error sit voluptatem accusantium doloremque laudantium, totam rem 
                            aperiam, eaque ipsa quae ab illo inventore veritatis et quasi .</p>
                        </div>
                        <div class="two-column-content col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0.5s">
                            <div class="inner" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/hand.jpg);"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
       <!--
        |========================
        |   MISSION CONTENT
        |========================
        -->
        <section class="section ch-mission bg-2" id="ch-mission">
            <div class="container">
                <div class="row section-separator">
                    <div class="section-title wow fadeIn" data-wow-delay="0.2s">
                        <h2>We are <span>Helping Hands</span></h2>
                        <p>Sed cursus elementum arcu vitae mollis. Curabitur vehicula egestas libero.</p>
                    </div>
                    <div class="ch-mission-content">
                        <div class="col-md-4 col-sm-4 mission-item wow fadeInRight" data-wow-delay="0.3s">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 icon ">
                                    <i class="fa main-color flaticon-fire"></i>
                                </div>
                                <div class="col-md-9 col-sm-9 padding-left-o">
                                    <h4 class="margin-top-o">Our Mission</h4>
                                    <p>Cras venenatis nibh sed velit posuere 
                                    pharetra. Donec sit amet magna vel v
                                    elit gravida lobortis auctor sed dui.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 mission-item wow fadeInRight" data-wow-delay="0.5s">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 icon">
                                    <i class="fa main-color flaticon-rocket-launch"></i>
                                </div>
                                <div class="col-md-9 col-sm-9 padding-left-o">
                                    <h4 class="margin-top-o">Our Vision</h4>
                                    <p>Cras venenatis nibh sed velit posuere 
                                    pharetra. Donec sit amet magna vel v
                                    elit gravida lobortis auctor sed dui.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 mission-item wow fadeInRight" data-wow-delay="0.8s">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 icon">
                                    <i class="fa main-color flaticon-list"></i>
                                </div>
                                <div class="col-md-9 col-sm-9 padding-left-o">
                                    <h4 class="margin-top-o">Our History</h4>
                                    <p>Cras venenatis nibh sed velit posuere 
                                    pharetra. Donec sit amet magna vel v
                                    elit gravida lobortis auctor sed dui.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--
        |========================
        |  FAME
        |========================
        -->
        <section class="section ch-fame main-color-bg">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-md-6 join-v wow fadeInRight" data-wow-delay="0.5s">
                        <h3>Ready to became a Volanteer?</h3>
                        <p>Phasellus et diam nec massa lobortis venenatis. Nullam 
                        varius enim at eros ullamcorper semper. </p>
                         <div class="join-btn">
                            <a href="" class="btn btn-fill">Join Now</a>
                        </div>
                    </div>
                    <div class="col-md-6 fame-item wow fadeInLeft" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="vl-icon">
                                    <i class="fa flaticon-graphic"></i>
                                    <h3 class="number aw">767</h3>
                                    <span class="text">Awared</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="vl-icon">
                                    <i class="fa flaticon-profile"></i>
                                    <h3 class="number" id="aw">555</h3>
                                    <span class="text">Volanteer</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="vl-icon">
                                    <i class="fa flaticon-graphic"></i>
                                    <h3 class="number">555</h3>
                                    <span class="text">Projects</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--
        |========================
        |  volanteer
        |========================
        -->
        <section class="section ch-volanteer" id="ch-volanteer">
            <div class="container">
                <div class="row section-separator">
                    <div class="section-title wow fadeIn"  data-wow-delay="0.1s">
                        <h2>Our <span>Volanteers</span></h2>
                        <p>Sed diam metus, facilisis eu diam sit amet pulvinar dictum quam odio lorem</p>
                    </div>
                   <div class="each-volanteer">
                        <div class="col-md-3 col-sm-6">
                            <div class="vl-thumb wow fadeInRight" data-wow-delay="0.3s">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/t1.jpg" alt="" class="img-responsive">
                                <div class="vl-content center shadow">
                                    <ul>
                                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                    <h4>John doe</h4>
                                </div>
                            </div> 
                        </div> 
                        <div class="col-md-3 col-sm-6">
                            <div class="vl-thumb wow fadeInRight" data-wow-delay="0.5s">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/t2.jpg" alt="" class="img-responsive">
                                <div class="vl-content center shadow">
                                    <ul>
                                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                    <h4>Sarah lee</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="vl-thumb wow fadeInRight" data-wow-delay="0.7s">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/t3.jpg" alt="" class="img-responsive">
                                <div class="vl-content center shadow">
                                    <ul>
                                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                    <h4>Jonathan smith</h4>
                                </div>
                            </div> 
                        </div> 
                        <div class="col-md-3 col-sm-6">
                            <div class="vl-thumb wow fadeInRight" data-wow-delay="0.9s">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/t4.jpg" alt="" class="img-responsive">
                                <div class="vl-content center shadow">
                                    <ul>
                                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                    <h4>Maria sarapova</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <!--
        |========================
        |  Join
        |========================
        -->
        <section class="section ch-join main-color-bg">
            <div class="container">
                <div class="row section-separator">
                    <div class="table-display">
                        <div class="join-content col-md-8 wow fadeInRight">
                            <h3>want to donate for help the world ?</h3>
                            <p>Phasellus et diam nec massa lobortis venenatis. Nullam varius enim at eros ullamcorper semper. 
                            Sed diam metus, facilisis eu.</p>
                        </div>
                        <div class="join-btn col-md-4 wow fadeInLeft">
                            <a href="" class="btn pull-right btn-fill">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
        |========================
        |  CLIENT
        |========================
        -->
        <section class="section ch-client">
            <div class="container">
                <div class="row section-separator">
                    <div class="section-title wow fadeIn" data-wow-delay="0.2s">
                        <h2>Featured <span>Clients</span></h2>
                        <span> Get a head-start with one of the included page 
                        demos or start experimenting.</span>
                    </div>
                    <div class="ch-client-logos col-xs-12">
                        <ul>
                            <li class="wow fadeInUp" data-wow-delay="0.3s"><img src="<?php echo get_template_directory_uri();?>/assets/images/fc1.png" alt="" class="img-responsive"></li>
                            <li class="wow fadeInUp" data-wow-delay="0.5s"><img src="<?php echo get_template_directory_uri();?>/assets/images/fc2.png" alt="" class="img-responsive"></li>
                            <li class="wow fadeInUp" data-wow-delay="0.7s"><img src="<?php echo get_template_directory_uri();?>/assets/images/fc3.png" alt="" class="img-responsive"></li>
                            <li class="wow fadeInUp" data-wow-delay="0.9s"><img src="<?php echo get_template_directory_uri();?>/assets/images/fc4.png" alt="" class="img-responsive"></li>
                            <li class="wow fadeInUp" data-wow-delay="1.0s"><img src="<?php echo get_template_directory_uri();?>/assets/images/fc5.png" alt="" class="img-responsive"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container shadow contact-form">
                <div class="row">
                    <div class="col-md-10 col-sm-12 col-xs-12 center wow fadeIn" data-wow-delay="0.2s">
                        <div class="section-title">
                            <h2>Contact <span>Us</span></h2>
                        </div>
                        <form id="contactForm" data-toggle="validator">
                            <div class="row">
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Name*" required="">
                                </div>
                                 <div class="form-group col-md-6">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email*" required="">
                                </div>
                                <div class="form-group col-xs-12">
                                    <textarea name="message" class="form-control input-lg" id="message" rows="6" placeholder="Message*"></textarea>
                                </div>
                                <div class="btn-form col-xs-12">
                                    <button type="submit" class="btn btn-fill disabled" id="form-submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    
    <?php get_footer(); ?>
    
    <!-- jquery -->
        <!--**<script src="assets/plugins/js/jquery-1.11.3.min.js"></script>**-->
        <script src="<?php echo get_template_directory_uri();?>/assets/plugins/js/jquery-1.11.3.min.js"></script>
    
        <!-- Bootstrap -->
        <!--**<script src="assets/plugins/js/bootstrap.min.js"></script>**-->
        <script src="<?php echo get_template_directory_uri();?>/assets/plugins/js/bootstrap.min.js"></script>
    
        <!-- mean menu nav-->
        <!--**<script src="assets/plugins/js/meanmenu.js"></script>**-->
        <script src="<?php echo get_template_directory_uri();?>/assets/plugins/js/meanmenu.js"></script>
    
        <!-- ajaxchimp -->
        <!--**<script src="assets/plugins/js/jquery.ajaxchimp.min.js"></script>**-->
        <script src="<?php echo get_template_directory_uri();?>/assets/plugins/js/jquery.ajaxchimp.min.js"></script>
    
        <!-- wow -->
        <!--**<script src="assets/plugins/js/wow.min.js"></script>**-->
        <script src="<?php echo get_template_directory_uri();?>/assets/plugins/js/wow.min.js"></script>
    
        <!-- Fancybox js-->
        <!--**<script src="assets/plugins/js/jquery.fancybox.pack.js"></script>**-->
        <script src="<?php echo get_template_directory_uri();?>/assets/plugins/js/jquery.fancybox.pack.js"></script>
    
        <!-- Owl carousel-->
        <!--**<script src="assets/plugins/js/owl.carousel.js"></script>**-->
        <script src="<?php echo get_template_directory_uri();?>/assets/plugins/js/owl.carousel.js"></script>
    
        <!-- Image Load-->
        <!--**<script src="//npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>**-->
        <script src="<?php echo get_template_directory_uri();?>//npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
    
        <!--validator -->
        <!--**<script src="assets/plugins/js/validator.min.js"></script>**-->
        <script src="<?php echo get_template_directory_uri();?>/assets/plugins/js/validator.min.js"></script>
    
        <!--smooth scroll-->
        <!--**<script src="assets/plugins/js/smooth-scroll.js"></script>**-->
        <script src="<?php echo get_template_directory_uri();?>/assets/plugins/js/smooth-scroll.js"></script>
    
        <!-- init -->
        <!--**<script src="assets/js/init.js"></script>**-->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/init.js"></script>
    
    <?php wp_footer(); ?>
    </body>
</html>
