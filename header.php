<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php bloginfo( 'title' ) ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri();?>/assets/img/favicon.ico">

   <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- ? Preloader Start -->
<!--     <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php //echo get_template_directory_uri();?>/assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->
    <?php global $laundry; ?>
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <!-- Logo -->
                <div class="header-left">
                    <div class="logo">
                        <a href="<?php echo site_url('/'); ?>">
                            <img src="<?php echo $laundry['logo']['url']; ?>" alt="">
                       </a>
                    </div>
                    <div class="menu-wrapper  d-flex align-items-center">
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav> 
                                <?php 
                                    wp_nav_menu(array(
                                        'theme_location'   => 'primary_menu',
                                        'container'        => 'ul', 
                                        'menu_id'      => 'navigation',

                                    ));

                                ?>

                            </nav>
                        </div>
                    </div>
                </div> 
                <div class="header-right d-none d-lg-block">
                    <a href="<?php echo $laundry['header_num_link'];?>" class="header-btn1">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/call.png" alt=""> 

                        <?php echo $laundry['header_support_num'];?>
                    </a>
                    <a href="<?php echo $laundry['header_booking_link']; ?>" class="header-btn2"><?php echo $laundry['header_booking_text']; ?></a>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
