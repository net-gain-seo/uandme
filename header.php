<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
    <div id="flexHeader" class="container flex-header">

        <div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/uandme-logo.png" alt=""></a></div>

        <div class="header-block">
            <div class="social-text">
                <div class="social">
                    <a href="https://www.google.com/search?newwindow=1&safe=off&source=hp&q=u%26me+moving+and+storage&oq=u%26me+moving&gs_l=psy-ab.3.0.0j0i22i30k1l2.1105.7419.0.8666.22.17.4.0.0.0.163.1402.14j2.17.0....0...1.1.64.psy-ab..1.21.1539.6..35i39k1j0i131k1j0i20i264k1j0i10k1.112.Q3PlS_7EsB4#lrd=0x88d8d5da6e75c16d:0x4ceafff85685b71f,3,," target="_blank" class="i-social i-google-review"><img src="<?php bloginfo('template_url'); ?>/img/i-google-review.png" alt=""></a>
                    <a href="#" target="_blank" class="i-social i-facebook"><img src="<?php bloginfo('template_url'); ?>/img/i-facebook.png" alt=""></a>
                    <a href="#" target="_blank" class="i-social i-twitter"><img src="<?php bloginfo('template_url'); ?>/img/i-twitter.png" alt=""></a>
                    <a href="#" target="_blank" class="i-social i-google-plus"><img src="<?php bloginfo('template_url'); ?>/img/i-google.png" alt=""></a>
                </div>
                <div class="family-operated">Family owned and operated since 1923 <br />Four generations of service</div>
            </div>
            <div class="call-estimate">
                <div class="estimate">
                    <a href="<?php echo home_url(); ?>/contact/">Get An Estimate</a>
                </div>
                <h3 class="phone">
                    <span>Call</span>
                    <a href="tel:15618326156">561-832-6156</a>
                </h3>
            </div>
        </div>

    </div>

    <div class="header-nav">
        <div class="container">
            <!-- <div class="sticky-logo"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/sticky-logo.png" alt=""></a></div> -->
            <div class="mobile-icons">
                <a href="tel:15618326156" class="nav-phone">
                    <i class="fa fa-phone"></i>
                    <span>CALL</span>
                </a>

                <a href="<?php echo home_url(); ?>/contact/" class="nav-contact">
                    <i class="fa fa-envelope"></i>
                    <span>CONTACT</span>
                </a>

                <a href="javascript:void(0);" id="navToggle" class="nav-toggle">
                    <i class="fa fa-bars"></i>
                    <span>MENU</span>
                </a>
            </div>
            <nav id="mainNav" class="mobile-nav" role="navigation">
               <?php wp_nav_menu( array( 'theme_location' => 'main', 'container' => '' ) ); ?>
            </nav>
        </div>
    </div>
</header>

<main>
