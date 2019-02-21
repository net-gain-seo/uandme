<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-53992934-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-53992934-2');
    </script>

    <script type="application/ld+json">
        [{
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "U & Me Moving",
            "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "2626 Electronics Way",
                    "addressCountry": "US",
                    "addressLocality": "West Palm Beach",
                    "addressRegion": "FL",
                    "postalCode": "33407"
            },
            "description": "Offices...Plants...Equipment. U & Me has moved a great many of the area's largest corporations, schools, manufacturing plants and department stores efficiently with the least disruption of their services.",
            "legalName": "U & Me Moving",

            "hasMap" : "https://www.google.com/maps/d/edit?authuser=0&authuser=0&hl=en&hl=en&mid=z0F82UWX4dPI.kmE4BL3FeEEA",

            "telephone": "(561) 832-6156",
            "url": "http://www.uandmemoving.com/",
            "image" : "http://www.uandmemoving.com/images/logo.gif"
        },

        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "url": "http://www.uandmemoving.com",
            "sameAs" : [
                    "https://www.facebook.com/UandMeMoving",
                    "https://plus.google.com/101681162393193589896",
                    "https://twitter.com/UandMeMoving"
            ],


            "logo" : "http://www.uandmemoving.com/images/logo.gif",
            "contactPoint" : [{
                    "@type" : "ContactPoint",
                    "telephone" : "+15618326156",
                    "contactType" : "Customer Service"
            }]
        }]
    </script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
    <div id="flexHeader" class="container flex-header">

        <div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/uandme-logo.png" alt=""></a></div>

        <div class="header-block">
            <div class="social-text">
                <div class="social">
                    <a href="https://www.google.com/search?newwindow=1&safe=off&source=hp&q=u%26me+moving+and+storage&oq=u%26me+moving&gs_l=psy-ab.3.0.0j0i22i30k1l2.1105.7419.0.8666.22.17.4.0.0.0.163.1402.14j2.17.0....0...1.1.64.psy-ab..1.21.1539.6..35i39k1j0i131k1j0i20i264k1j0i10k1.112.Q3PlS_7EsB4#lrd=0x88d8d5da6e75c16d:0x4ceafff85685b71f,3,," target="_blank" class="i-social i-google-review"><img src="<?php bloginfo('template_url'); ?>/img/i-google-review-v2.png" alt="Review U & Me Moving on Google"></a>
                    <a href="https://www.facebook.com/UandMeMoving" target="_blank" class="i-social i-facebook"><img src="<?php bloginfo('template_url'); ?>/img/i-facebook.png" alt="U & Me Moving on Facebook"></a>
                    <a href="https://twitter.com/UandMeMoving" target="_blank" class="i-social i-twitter"><img src="<?php bloginfo('template_url'); ?>/img/i-twitter.png" alt="U & Me Moving on Twitter"></a>
                    <a href="https://plus.google.com/+UMeMovingandStorageWestPalmBeach" target="_blank" class="i-social i-google-plus"><img src="<?php bloginfo('template_url'); ?>/img/i-google.png-v2" alt="U & Me Moving on Google Plus"></a>
                </div>
                <div class="family-operated">Family owned and operated since 1923 <br />Four generations of service</div>
            </div>
            <div class="call-estimate">
                <div class="estimate">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#popForm">Get An Estimate</a>
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
            <div class="mobile-icons">
                <a href="javascript:void(0)" data-toggle="modal" data-target="#popForm" class="nav-contact">
                    <i class="fa fa-envelope"></i>
                    <span>GET ESTIMATE</span>
                </a>

                <a href="tel:15618326156" class="nav-phone">
                    <i class="fa fa-phone"></i>
                    <span>CALL</span>
                </a>

                <a href="javascript:void(0);" id="navToggle" class="nav-toggle">
                    <i class="fa fa-bars"></i>
                    <span>MENU</span>
                </a>
            </div>
            <div class="sticky-get-quote">
                <a href="javascript:void(0)" data-toggle="modal" data-target="#popForm">GET AN ESTIMATE</a>
            </div>
            <nav id="mainNav" class="mobile-nav" role="navigation">
               <?php wp_nav_menu( array( 'theme_location' => 'main', 'container' => '' ) ); ?>
            </nav>

        </div>
    </div>
</header>

<main>
