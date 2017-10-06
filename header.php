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
            <div class="request">
                <a href="<?php echo home_url(); ?>/contact/" class="btn">Request Information</a>
            </div>
            <div class="phone">
                <h3>
                    <span>For Information Call</span>
                    <a href="tel:15099799797">(509) 979-9797</a>
                </h3>
            </div>
        </div>

    </div>

    <div class="header-nav">
        <div class="container">
            <div class="sticky-logo"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo-sticky.png" alt=""></a></div>
            <div class="mobile-icons">
                <a href="tel:15099799797" class="nav-phone"><i class="fa fa-phone"></i></a>
                <a href="<?php echo home_url(); ?>/contact/" class="nav-contact"><i class="fa fa-envelope"></i></a>
                <a href="javascript:void(0);" id="navToggle" class="nav-toggle"><i class="fa fa-bars"></i></a>
            </div>
            <nav id="mainNav" class="mobile-nav" role="navigation">
               <?php wp_nav_menu( array( 'theme_location' => 'main', 'container' => '' ) ); ?>
            </nav>
        </div>
    </div>
</header>

<main>
