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
    /* Template name: contact-us */
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
    
            <!--
        |========================
        |  HEADER
        |========================
        -->
        <section class="subpage header-section">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="sub-header-content">
                        <div class="col-md-6">
                            <h4>Contact us </h4>
                        </div>
                        <div class="col-md-6 subpage-nav">
                            <ol class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">Contact Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
        |========================
        |  CONTACT
        |========================
        -->
        <section class="section ch-contact" id="ch-contact">
            <div class="container">
                <div class="row section-separator">
                    <div class="ch-contact-content">
                        <div class="col-md-4 col-sm-4 contact-item wow fadeInRight" data-wow-delay="0.3s">
                            <div class="row">
                                <div class="col-md-3 col-sm-12 icon ">
                                    <i class="fa main-color flaticon-location"></i>
                                </div>
                                <div class="col-md-9 col-sm-12 padding-left-o">
                                    <h4 class="margin-top-o">Office Location</h4>
                                    <p class="main-color">754 Salt Lake City, Australia</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 contact-item wow fadeInRight" data-wow-delay="0.5s">
                            <div class="row">
                                <div class="col-md-3 col-sm-12 icon">
                                    <i class="fa main-color flaticon-phone-call"></i> 
                                </div>
                                <div class="col-md-9 col-sm-12 padding-left-o">
                                    <h4 class="margin-top-o">Contact Info</h4>
                                    <a href="" class="main-color">+88 248 755 542 22</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 contact-item wow fadeInRight" data-wow-delay="0.7s">
                            <div class="row">
                                <div class="col-md-3 col-sm-12 icon">
                                    <i class="fa main-color flaticon-mail"></i>
                                </div>
                                <div class="col-md-9 col-sm-12 padding-left-o">
                                    <h4 class="margin-top-o">Mail Address</h4>
                                    <a href="mailto:" class="main-color">hello@chearty.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
        |========================
        |  MAP
        |========================
        -->
        <div class="map" id="ch-map"></div>
        <!--
        |========================
        |  testimonial
        |========================
        -->
        <section class="section ch-testimonial" id="ch-testimonial">
            <div class="container-half container-half-left cover-bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/ch-testimonial.jpg);"></div>
            <div class="container-half container-half-right main-color-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-4 client-quates">
                        <div class="section-title">
                            <h2>Clients Testimonial</h2>
                            <span> Get a head-start with one of the included page 
                            demos or start experimenting.</span>
                        </div>
                        <div class="ch-client-testimonial">
                            <div class="slider-content  wow ">
                                <div class="carousel xt-carousel-fade slide" data-ride="carousel" id="quote-carousel">
                                    <div class="carousel-inner text-center">
                                        <!-- Quote 1 -->
                                        <div class="item active">
                                            <blockquote>
                                                <div class="row">
                                                    <div class="">
                                                        <p>If you find something that isn’t working right feel free to leave a comment or post on 
                                                        the issues tracker. If you have any interesting </p>
                                                        
                                                        <h3>Sam Andro  <span>Manager</span></h3>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!-- Quote 2 -->
                                        <div class="item">
                                            <blockquote>
                                                <div class="row">
                                                    <div class="">
                                                        <p>Phasellus et diam nec massa lobortis venenatis. Nullam phasellus et diam udi ngnec massa lobortis venenatis ullamcorper semper. </p>
                                                        <h3>Linux Wlis <span>CEO</span></h3>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!-- Quote 3 -->
                                        <div class="item">
                                            <blockquote>
                                                <div class="row">
                                                    <div class="">
                                                        <p>The lessc object can be configured through an assortment of instance methods. Some possible configuration options 
                                                        include venenatis</p>
                                                        <h3>Becky Rand <span>Directer</span></h3>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <!-- Bottom Carousel Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="assets/images/t3.jpg" alt=""></li>
                                        <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="assets/images/t2.jpg" alt=""></li>
                                        <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="assets/images/t4.jpg" alt=""></li>
                                    </ol>
                                </div>
                            </div>
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

<!--
        |========================
        |      Script
        |========================
        -->
        
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