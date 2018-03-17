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
        <!--**<link rel="stylesheet" href="assets/css/color/color-3.css">**-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/color/color-4.css"/>
        <!--**<link rel="stylesheet" href="assets/css/color/color-4.css" id="color-scheme">**--> 
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/color/color-4.css" id="color-scheme"/>
        <!--<link rel="stylesheet" href="assets/css/color/color-5.css"> -->
        <!--<link rel="stylesheet" href="assets/css/color/color-6.css">-->


        <!--[if lt IE 9]>
            <script src="js/plagin-js/html5shiv.js"></script>
            <script src="js/plagin-js/respond.min.js"></script>
        <![endif]-->
    <?php wp_head();
    /*Template name: causes-grid */    
    ?>
    </head>
    <?php get_header();?>
    
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
                            <h4>Donation Causes</h4>
                        </div>
                        <div class="col-md-6 subpage-nav">
                            <ol class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="http://localhost/charitus/index.php/causes-grid/">Causes</a></li>
                                <li class="active">Causes Grid</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <section class="section ch-causes ch-donation-causes-grid" id="ch-causes">
            <div class="container">
                <div class="row section-separator">
                    <div class="each-causes wow fadeIn" data-wow-delay="0.3s">
                        <div class="col-md-4 col-sm-6">
                            <div class="cause-inner white-bg shadow">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/c1.jpg" alt="" class="img-responsive">
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
                                    <a href="http://localhost/charitus/index.php/causes-single-page/" class="btn btn-border"> Donate Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="cause-inner white-bg shadow">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/cg.jpg" alt="" class="img-responsive">
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
                                    <a href="http://localhost/charitus/index.php/causes-single-page/" class="btn btn-border"> Donate Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="cause-inner white-bg shadow">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/cg1.jpg" alt="" class="img-responsive">
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
                                    <a href="http://localhost/charitus/index.php/causes-single-page/" class="btn btn-border"> Donate Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="cause-inner white-bg shadow">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/cg2.jpg" alt="" class="img-responsive">
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
                                    <a href="http://localhost/charitus/index.php/causes-single-page/" class="btn btn-border"> Donate Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="cause-inner white-bg shadow">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/cg4.jpg" alt="" class="img-responsive">
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
                                    <a href="http://localhost/charitus/index.php/causes-single-page/" class="btn btn-border"> Donate Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="cause-inner white-bg shadow">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/cg5.jpg" alt="" class="img-responsive">
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
                                    <a href="http://localhost/charitus/index.php/causes-single-page/" class="btn btn-border"> Donate Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="cause-inner white-bg shadow">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/cg6.jpg" alt="" class="img-responsive">
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
                                    <a href="http://localhost/charitus/index.php/causes-single-page/" class="btn btn-border"> Donate Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="cause-inner white-bg shadow">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/cg7.jpg" alt="" class="img-responsive">
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
                                    <a href="http://localhost/charitus/index.php/causes-single-page/" class="btn btn-border"> Donate Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="cause-inner white-bg shadow">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/cg3.jpg" alt="" class="img-responsive">
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
                                    <a href="http://localhost/charitus/index.php/causes-single-page/" class="btn btn-border"> Donate Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <nav aria-label="Page navigation" class="ch-pagination">
                        <ul class="pagination">
                            <li><a href="#" aria-label="Previous"><span aria-hidden="true">Prev</span></a></li>
                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#" aria-label="Next"><span aria-hidden="true">Next</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        
        <!--
        |========================
        |  join
        |========================
        -->
        <section class="section ch-join main-color-bg">
            <div class="container">
                <div class="row section-separator">
                    <div class="table-display">
                        <div class="join-content col-md-8 wow fadeInRight" data-wow-delay="0.2s">
                            <h3>want to donate for help the world ?</h3>
                            <p>Phasellus et diam nec massa lobortis venenatis. Nullam varius enim at eros ullamcorper semper. 
                            Sed diam metus, facilisis eu.</p>
                        </div>
                        <div class="join-btn col-md-4 wow fadeInLeft" data-wow-delay="0.3s">
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