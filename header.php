<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body>
    <!-- Preloader area start -->
    <!-- <div id="loading" class="preloader">
      <div class="loading-overlay"></div>
      <div class="custom-loader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div> -->
    <!-- Preloader area end -->
    <!-- Top header area start here -->
    <div class="header-top d-none d-lg-block">
        <div class="container">
            <div class="header-top-wrp">
                <ul class="info">
                    <li>
                        <i class="fa-solid fa-paper-plane"></i>
                        <a href="#0">info.company@gmail.com</a>
                    </li>
                    <li class="bor-left ms-4 ps-4">
                        <i class="fa-solid fa-location-dot"></i>
                        <a href="#0">85 Ketch Harbour RoadBensalem, PA 19020</a>
                    </li>
                </ul>
                <ul class="link-info">
                    <li class="bor-right">
                        <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li class="bor-right">
                        <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li class="bor-right">
                        <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa-brands fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Top header area end here -->

    <!-- Header area start here -->
    <header class="header-area">
        <div class="container">
            <div class="header__main">
                <!-- <a href="index.php" class="logo"> -->
                <!-- <img src="<?php //echo esc_url(get_template_directory_uri()); 
                                ?>/assets/images/logo/logo.svg" alt="logo" /> -->
                <!-- </a> -->
                <a href="index.php" class="logo logo-light">
                    <?php if (function_exists('the_custom_logo')) {
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                    ?>
                        <img src="<?php echo esc_url($logo[0]??''); ?>" alt="logo" />
                    <?php } else { ?>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo/logo.svg" alt="logo" />
                    <?php } ?>
                </a>

                <div class="main-menu">
                    <nav>
                        <ul>
                        <?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container_id' => 'navbar-collapse-1',
                            'container_class'=>'navbar-collapse collapse navbar-right',
                            'menu_class'=>'nav navbar-nav',
                            'fallback_cb'=>false,
                            'items_wrap' => '%3$s',
                            'container'=>false,
                            'depth'=>'5', 
                        )); ?>
                            <!-- <li>
                                <a href="#0">Home <i class="fa-solid fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li>
                                    <a href="index.php">Digital Marketing</a>
                                    </li>
                                    <li>
                                    <a href="<?php //echo esc_url(get_template_directory_uri()); ?>/index-2.php">Seo Marketing</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="about.html">About Us</a></li>
                            <li>
                            <a href="#0"
                                >Services <i class="fa-solid fa-angle-down"></i
                            ></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="service.html">Service</a>
                                </li>
                                <li>
                                    <a href="service-details.html">Service Details</a>
                                </li>
                            </ul>
                            </li>
                            <li>
                            <a href="#0">Pages <i class="fa-solid fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="team.html">Team</a>
                                </li>
                                <li>
                                <a href="team-details.html">Team Details</a>
                                </li>
                                <li>
                                <a href="pricing.html">Pricing Plan</a>
                                </li>
                                <li>
                                <a href="book-demo.html">Book a Demo</a>
                                </li>
                                <li>
                                <a href="error.html">404 Error</a>
                                </li>
                            </ul>
                            </li>
                            <li>
                            <a href="#0">Blog <i class="fa-solid fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li>
                                <a href="blog.html">Blog & Articles 01</a>
                                </li>
                                <li>
                                <a href="blog-two.html">Blog & Articles 02</a>
                                </li>
                                <li>
                                <a href="blog-details.html">Blog Details</a>
                                </li>
                            </ul>
                            </li>
                            <li><a href="<?php //echo esc_url(get_template_directory_uri()); ?>/contact.php">Contact</a></li> -->
                        </ul> 
                    </nav>
                </div>
                <a href="<?php echo esc_url(get_template_directory_uri()); ?>/contact.php" class="btn-menu d-none d-lg-inline-block">Get in Touch<i class="fa-regular fa-circle-arrow-right ml-10"></i></a>
                <div class="bars d-block d-lg-none">
                    <i id="openButton" class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </header>
    <!-- Header area end here -->
    <!-- Sidebar area start here -->
    <div id="targetElement" class="sidebar-area sidebar__hide">
        <div class="sidebar__overlay"></div>
        <a href="index.html" class="logo mb-40">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo/logo-light.svg" alt="logo" />
        </a>
        <div class="mobile-menu overflow-hidden"></div>
        <ul class="info pt-40">
            <li>
                <i class="fa-solid primary-color fa-location-dot"></i>
                <a href="#0">example@example.com</a>
            </li>
            <li class="py-2">
                <i class="fa-solid primary-color fa-phone-volume"></i>
                <a href="tel:+912659302003">+91 2659 302 003</a>
            </li>
            <li>
                <i class="fa-solid primary-color fa-paper-plane"></i>
                <a href="#0">info.company@gmail.com</a>
            </li>
        </ul>
        <div class="social-icon mt-20">
            <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#0"><i class="fa-brands fa-instagram"></i></a>
            <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#0"><i class="fa-brands fa-youtube"></i></a>
        </div>
        <button id="closeButton" class="text-white">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
    <!-- Sidebar area end here -->