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
    <?php wp_head(); ?>
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
        |   SLIDER CONTENT
        |========================
        -->
        <section class="header-slider header-slider-preloader" id="header-slider">
            <div class="animation-slides owl-carousel owl-theme" id="animation-slide">
                 <!--Slide 1-->
                <div style="background-image:url("<?php echo get_template_directory_uri();?>/assets/images/ch-slider.jpg")"  class="item">
                    <div class="slide-table">
                        <div class="slide-tablecell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="slide-text">
                                           <h1>we need your help</h1>
                                               <p>Phasellus et diam nec massa lobortis venenatis. Nullam varius enim at eros semper. Sed diam metus, facilisis eu diam sit amet.</p>
                                            <div class="slide-buttons">
                                                <a href="#" class="slide-btn btn btn-border">Donate Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                 <!--Slide 2-->
                <div style="background-image:url("<?php echo get_template_directory_uri();?>/assets/images/ch-slide2.jpg");" class="item">
                    <div class="slide-table">
                        <div class="slide-tablecell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="slide-text">
                                            <h1>Lorem Ipsum is simply </h1>
                                            <p>Miker Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                           <div class="slide-buttons">
                                                <a href="#" class="slide-btn btn btn-border">Download Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                 <!--Slide 3-->
                <div style="background-image:url(<?php echo get_template_directory_uri();?>/assets/images/ch-slide3.jpg)" class="item">
                    <div class="slide-table">
                        <div class="slide-tablecell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7 col-xs-12">
                                        <div class="slide-text">
                                            <h1>Help to come back</h1>
                                            <p>Miker Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                           <div class="slide-buttons">
                                                <a href="#" class="slide-btn btn btn-border">Start Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Preloader -->
            <div class="slider_preloader">
                <div class="slider_preloader_status">&nbsp;</div>
            </div>

        </section>
        <!--
        |========================
        |  SERVICE
        |========================
        -->

        <section class="section bg-2" id="ch-service">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-md-4 col-sm-6 wow fadeInRight" data-wow-delay="0.3s">
                         <div class="each-features">
                            <div class="features-inner">
                                <div class="each-details center">
                                    <i class="fa flaticon-money"></i>
                                    <h3>Donation</h3>
                                    <p>Pulvinar dictum quam odio lorem...</p>
                                </div>
                                <div class="features-content col-xs-8">
                                    <h3 class="title">Send Donation</h3>
                                    <p class="date"> Sed diam metus, facilisis eu diam sit amet pulvinar dictum quam odio lorem </p>
                                    <a href="#" class="btn btn-fill">See More</a>
                                </div>
                            </div> <!-- End: .features-inner -->
                        </div> <!-- End: .each-features -->
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInRight"  data-wow-delay="0.5s">
                         <div class="each-features">
                            <div class="features-inner">
                                <div class="each-details center">
                                    <i class="fa flaticon-graphic"></i>
                                    <h3>FUNDRAISE</h3>
                                    <p>Pulvinar dictum quam odio lorem...</p>
                                </div>
                                <div class="features-content col-xs-8">
                                    <h3 class="title">Send Donation</h3>
                                    <p class="date"> Sed diam metus, facilisis eu diam sit amet pulvinar dictum quam odio lorem </p>
                                    <a href="#" class="btn btn-fill">See More</a>
                                </div>
                            </div> <!-- End: .features-inner -->
                        </div> <!-- End: .each-features -->
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInRight" data-wow-delay="0.8s">
                         <div class="each-features">
                            <div class="features-inner">
                                <div class="each-details center">
                                    <i class="fa flaticon-profile"></i>
                                    <h3>VOLUNTEERS</h3>
                                    <p>Pulvinar dictum quam odio lorem...</p>
                                </div>
                                <div class="features-content col-xs-8">
                                    <h3 class="title">Send Donation</h3>
                                    <p class="date"> Sed diam metus, facilisis eu diam sit amet pulvinar dictum quam odio lorem </p>
                                    <a href="#" class="btn btn-fill">See More</a>
                                </div>
                            </div> <!-- End: .features-inner -->
                        </div> <!-- End: .each-features -->
                    </div>
                </div>
            </div>
        </section>
        <!--
        |========================
        |  CAUSES
        |========================
        -->
        <section class="section ch-causes main-color-bg ch-donation-causes-grid" id="ch-causes">
            <div class="container">
                <div class="row section-separator">
                    <div class="section-title wow fadeIn" data-wow-delay="0.2s">
                        <h2>Causes of donation</h2>
                        <p>Sed diam metus facilisis eu. Sit amet pulvinar dictum quam odio lorem</p>
                    </div>
                    <div class="each-causes wow fadeIn" data-wow-delay="0.4s">
                        <div class="col-md-4 col-sm-6">
                            <div class="cause-inner white-bg">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/cs1.jpg" alt="" class="img-responsive">
                                <div class="cause-inner-content">
                                    <h4>charity for summer</h4>
                                    <div class="fund-circle"><span class="raised">Raised: <span class="amount main-color">$9,240</span></span> <span>Goal:  <span class="amount main-color">$11,000</span></span></div>
                                    <span class="progress-val">84%</span>
                                    <div class="fund-process">
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 80%">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <p>Phasellus et diam nec massa lortis venenatis. 
                                    Nullam varius enim at eros ullaorper semper. 
                                    Sed diam metus.</p>
                                    <a href="" class="btn btn-border"> Donate Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="cause-inner white-bg">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/cs2.jpg" alt="" class="img-responsive">
                                <div class="cause-inner-content">
                                    <h4>DONATE FOR CHILDREN</h4>
                                    <div class="fund-circle"><span class="raised">Raised: <span class="amount main-color">$9,240</span></span> <span>Goal:  <span class="amount main-color">$11,000</span></span></div>
                                    <span class="progress-val">84%</span>
                                    <div class="fund-process">
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 80%">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <p>Phasellus et diam nec massa lortis venenatis. 
                                    Nullam varius enim at eros ullaorper semper. 
                                    Sed diam metus.</p>
                                    <a href="" class="btn btn-border"> Donate Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="cause-inner white-bg">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/cs3.jpg" alt="" class="img-responsive">
                                <div class="cause-inner-content">
                                    <h4>Home for homeless</h4>
                                    <div class="fund-circle"><span class="raised">Raised: <span class="amount main-color">$9,240</span></span> <span>Goal:  <span class="amount main-color">$11,000</span></span></div>
                                    <span class="progress-val">84%</span>
                                    <div class="fund-process">
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 80%">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <p>Phasellus et diam nec massa lortis venenatis. 
                                    Nullam varius enim at eros ullaorper semper. 
                                    Sed diam metus.</p>
                                    <a href="" class="btn btn-border"> Donate Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
        |========================
        |  EVENT
        |========================
        -->
        <section class="section ch-event event-grid" id="ch-events">
            <div class="container">
                <div class="row section-separator">
                    <div class="section-title wow fadeIn" data-wow-delay="0.2s">
                        <h2>Upcoming <span>Events</span></h2>
                        <p>Sed diam metus facilisis eu. Sit amet pulvinar dictum quam odio lorem</p>
                    </div>
                    <div class="each-events my-carousel" id="my-carousel">
                        <div class="item">
                            <div class="event-inner">
                                <div class="event-banner">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/e1.jpg" alt="" class="img-responsive">
                                    <span class="date">07 jan</span>
                                </div>
                                <div class="event-content">
                                    <h4>Ride for a promise </h4>
                                    <div class="schedule">
                                        <span class="event-time"><i class="fa fa-clock-o main-color"></i> 10:00 am - 11:00am</span>
                                        <span class="event-place"><i class="fa fa-map-marker main-color"></i> los angeles</span>
                                    </div>
                                    <p>Phasellus et diam nec massa lortis venenatis. 
                                    Nullam varius enim at eros ullaorper semper. 
                                    Sed diam metus, facilisis eu.</p>
                                     <a href="" class="btn btn-border"> Donate Now</a>
                                </div>
                            </div>
                        </div>                        
                        <div class="item">
                            <div class="event-inner">
                                <div class="event-banner">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/e2.jpg" alt="" class="img-responsive">
                                    <span class="date">07 jan</span>
                                </div>
                                <div class="event-content">
                                    <h4>live music for Charity</h4>
                                    <div class="schedule">
                                        <span class="event-time"><i class="fa fa-clock-o main-color"></i> 10:00 am - 11:00am</span>
                                        <span class="event-place"><i class="fa fa-map-marker main-color"></i> los angeles</span>
                                    </div>
                                    <p>Phasellus et diam nec massa lortis venenatis. 
                                    Nullam varius enim at eros ullaorper semper. 
                                    Sed diam metus, facilisis eu.</p>
                                     <a href="" class="btn btn-border"> Donate Now</a>
                                </div>
                            </div>
                        </div>                        
                        <div class="item">
                            <div class="event-inner">
                                <div class="event-banner">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/e3.jpg" alt="" class="img-responsive">
                                    <span class="date">07 jan</span>
                                </div>
                                <div class="event-content">
                                    <h4>Poor children’s smile </h4>
                                    <div class="schedule">
                                        <span class="event-time"><i class="fa fa-clock-o main-color"></i> 10:00 am - 11:00am</span>
                                        <span class="event-place"><i class="fa fa-map-marker main-color"></i> los angeles</span>
                                    </div>
                                    <p>Phasellus et diam nec massa lortis venenatis. 
                                    Nullam varius enim at eros ullaorper semper. 
                                    Sed diam metus, facilisis eu.</p>
                                     <a href="" class="btn btn-border"> Donate Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
        |========================
        |  JOIN
        |========================
        -->
        <section class="section ch-join main-color-bg">
            <div class="container">
                <div class="row section-separator">
                    <div class="table-display">
                        <div class="join-content col-md-8 wow fadeInRight" data-wow-delay="0.3s">
                            <h3>Ready to become a volenteer?</h3>
                            <p>Phasellus et diam nec massa lobortis venenatis. Nullam varius enim at eros ullamcorper semper. 
                            Sed diam metus, facilisis eu.</p>
                        </div>
                        <div class="join-btn col-md-4 wow fadeInLeft" data-wow-delay="0.3s">
                            <a href="" class="btn pull-right btn-fill">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
        |========================
        |  GALLERY
        |========================
        -->
        <section class="section ch-gallery" id="ch-gallery">
            <div class="container-fluid">
                <div class="row section-separator">
                    <div class="section-title wow fadeIn" data-wow-delay="0.2s">
                        <h2>Our <span>Gallery</span></h2>
                        <p>Sed diam metus, facilisis eu diam sit amet pulvinar dictum quam odio lorem</p>
                    </div>
                    <div class="part-1">
                        <div class="project-loader-backButton">
                            <div class="col-xs-12 grid-paddng">
                                <div class="row">
                                <div class="ch-grid project-gallery wow fadeIn" id="project-gallery" data-wow-delay="0.2s">
                                    <div class="ch-grid-item col-md-3 col-sm-6">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/gl-1.jpg" alt="" class="img-responsive">
                                            <figcaption>
                                                <span class="icon flaticon-signs"></span>
                                                <h4 class="title">Title goes here </h4>
                                                <p class="sub-title">Sed diam metus, facilisis eu diam</p>
                                                <a href="assets/images/gl-1.jpg" class="view-project-detail single_image"></a>
                                            </figcaption>
                                        </figure>
                                    </div> <!-- End: .each-item -->
                                    <div class="ch-grid-item col-md-3 col-sm-6">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/gl-2.jpg" alt="" class="img-responsive">
                                            <figcaption>
                                                <span class="icon flaticon-signs"></span>
                                                <h4 class="title">Title goes here </h4>
                                                <p class="sub-title">Sed diam metus, facilisis eu diam</p>
                                                <a href="assets/images/gl-2.jpg" class="view-project-detail single_image"></a> 
                                            </figcaption>
                                        </figure>
                                    </div> <!-- End: .each-item -->
                                    <div class="ch-grid-item col-md-3 col-sm-6">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/gl-3.jpg" alt="" class="img-responsive">
                                            <figcaption>
                                                <span class="icon flaticon-signs"></span>
                                                <h4 class="title">Title goes here </h4>
                                                <p class="sub-title">Sed diam metus, facilisis eu diam</p>
                                                <a href="assets/images/gl-3.jpg" class="view-project-detail single_image"></a>
                                            </figcaption>
                                        </figure>
                                    </div> <!-- End: .each-item -->
                                    <div class="ch-grid-item col-md-3 col-sm-6">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/gl-4.jpg" alt="" class="img-responsive">
                                            <figcaption>
                                                <span class="icon flaticon-signs"></span>
                                                <h4 class="title">Title goes here </h4>
                                                <p class="sub-title">Sed diam metus, facilisis eu diam</p>
                                                <a href="assets/images/gl-4.jpg" class="view-project-detail single_image"></a>
                                            </figcaption>
                                        </figure>
                                    </div> <!-- End: .each-item -->
                                    <div class="ch-grid-item col-md-3 col-sm-6">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/gl-5.jpg" alt="" class="img-responsive">
                                            <figcaption>
                                                <span class="icon flaticon-signs"></span>
                                                <h4 class="title">Title goes here </h4>
                                                <p class="sub-title">Sed diam metus, facilisis eu diam</p>
                                                <a href="assets/images/gl-5.jpg" class="view-project-detail single_image"></a>
                                            </figcaption>
                                        </figure>
                                    </div> <!-- End: .each-item -->
                                    <div class="ch-grid-item col-md-3 col-sm-6">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/gl-6.jpg" alt="" class="img-responsive">
                                            <figcaption>
                                                <span class="icon flaticon-signs"></span>
                                                <h4 class="title">Title goes here </h4>
                                                <p class="sub-title">Sed diam metus, facilisis eu diam</p>
                                                <a href="assets/images/gl-6.jpg" class="view-project-detail single_image"></a>
                                            </figcaption>
                                        </figure>
                                    </div> <!-- End: .each-item -->
                                    <div class="ch-grid-item col-md-3 col-sm-6">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/gl-7.jpg" alt="" class="img-responsive">
                                            <figcaption>
                                                <span class="icon flaticon-signs"></span>
                                                <h4 class="title">Title goes here </h4>
                                                <p class="sub-title">Sed diam metus, facilisis eu diam</p>
                                                <a href="assets/images/gl-7.jpg" class="view-project-detail single_image"></a>
                                            </figcaption>
                                        </figure>
                                    </div> <!-- End: .each-item -->
                                    <div class="ch-grid-item col-md-3 col-sm-6">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/gl-8.jpg" alt="" class="img-responsive">
                                            <figcaption>
                                                <span class="icon flaticon-signs"></span>
                                                <h4 class="title">Title goes here </h4>
                                                <p class="sub-title">Sed diam metus, facilisis eu diam</p>
                                                <a href="assets/images/gl-8.jpg" class="view-project-detail single_image"></a> 
                                            </figcaption>
                                        </figure>
                                    </div> <!-- End: .each-item -->
                                </div> <!-- End: .ch-grid -->
                                </div> <!-- End: .ch-grid -->
                            </div>
                        </div> <!-- End: .row -->
                    </div> <!-- End: .part-1 -->
                </div>
            </div>
        </section>
        <!--
        |========================
        |  MISSION
        |========================
        -->
        <section class="section ch-mission" id="ch-mission">
            <div class="container">
                <div class="row section-separator">
                    <div class="section-title wow fadeIn" data-wow-delay="0.2s">
                        <h2>Our <span>Mission</span></h2>
                        <p>Sed cursus elementum arcu vitae mollis. Curabitur vehicula egestas libero.</p>
                    </div>
                    <div class="ch-mission-content">
                        <div class="col-md-4 col-sm-6 wow fadeInRight mission-item" data-wow-delay="0.2s">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 icon ">
                                    <i class="fa main-color flaticon-book"></i>
                                </div>
                                <div class="col-md-9 col-sm-9 padding-left-o">
                                    <h4 class="margin-top-o">Charity for education</h4>
                                    <p>Phasellus et diam nec massa lobortis 
                                    venenatis nullam varius.</p>
                                    <a href="" class="main-color">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 wow fadeInRight mission-item" data-wow-delay="0.4s">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 icon">
                                    <i class="fa main-color flaticon-food"></i>
                                </div>
                                <div class="col-md-9 col-sm-9 padding-left-o">
                                    <h4 class="margin-top-o">Feed for hungry child</h4>
                                    <p>Phasellus et diam nec massa lobortis 
                                    venenatis nullam varius.</p>
                                    <a href="" class="main-color">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 wow fadeInRight mission-item" data-wow-delay="0.6s">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 icon">
                                    <i class="fa main-color flaticon-internet"></i>
                                </div>
                                <div class="col-md-9 col-sm-9 padding-left-o">
                                    <h4 class="margin-top-o">Home for the homeless</h4>
                                    <p>Phasellus et diam nec massa lobortis 
                                    venenatis nullam varius.</p>
                                    <a href="" class="main-color">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 wow fadeInRight mission-item" data-wow-delay="0.3s">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 icon">
                                    <i class="fa main-color flaticon-weather"></i>
                                </div>
                                <div class="col-md-9 col-sm-9 padding-left-o">
                                    <h4 class="margin-top-o">Clean water for people</h4>
                                    <p>Phasellus et diam nec massa lobortis 
                                    venenatis nullam varius.</p>
                                    <a href="" class="main-color">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 wow fadeInRight mission-item" data-wow-delay="0.5s">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 icon">
                                    <i class="fa main-color flaticon-summer"></i>
                                </div>
                                <div class="col-md-9 col-sm-9 padding-left-o">
                                    <h4 class="margin-top-o">Charity for entertain</h4>
                                    <p>Phasellus et diam nec massa lobortis 
                                    venenatis nullam varius.</p>
                                    <a href="" class="main-color">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 wow fadeInRight mission-item" data-wow-delay="0.8s">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 icon">
                                    <i class="fa flaticon-present main-color"></i>
                                </div>
                                <div class="col-md-9 col-sm-9 padding-left-o">
                                    <h4 class="margin-top-o">Heart to heart event</h4>
                                    <p>Phasellus et diam nec massa lobortis 
                                    venenatis nullam varius.</p>
                                    <a href="" class="main-color">Read More</a>
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
                    <div class="col-md-6 join-v wow fadeInRight" data-wow-delay="0.2s">
                        <h3>Ready to became a Volanteer?</h3>
                        <p>Phasellus et diam nec massa lobortis venenatis. Nullam 
                        varius enim at eros ullamcorper semper. </p>
                         <div class="join-btn">
                            <a href="" class="btn btn-fill">Join Now</a>
                        </div>
                    </div>
                    <div class="col-md-6 fame-item wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="vl-icon">
                                    <i class="fa flaticon-trophy"></i>
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
                                        <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="<?php echo get_template_directory_uri();?>/assets/images/t3.jpg" alt=""></li>
                                        <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/images/t2.jpg" alt=""></li>
                                        <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/images/t4.jpg" alt=""></li>
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