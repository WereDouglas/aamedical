<!DOCTYPE html>
<html class="supports-js supports-no-touch supports-csstransforms supports-csstransforms3d supports-fontface supports-pointerevents">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>AA MEDICAL SUPPLIES</title>

        <meta property="og:type" content="website">
        <meta property="og:title" content="Medical supplies">
        <meta property="og:url" content="www.aamedsupplies.com">
        <meta property="og:description" content="">
        <meta property="og:site_name" content="Medical Equipment">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="Medical Equipment">
        <meta name="twitter:description" content="">
        <link rel="canonical" href="www.aamedsupplies.com">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <meta name="theme-color" content="#1c1d1d">

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="<?= base_url(); ?>assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?= base_url(); ?>assets/css/rating.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?= base_url(); ?>assets/css/timber.scss.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?= base_url(); ?>assets/css/theme.scss.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?= base_url(); ?>assets/css/themepunch.revolution.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?= base_url(); ?>assets/css/digital-world-10.css" rel="stylesheet" type="text/css" media="all">
        <link rel="stylesheet" href=<?= base_url(); ?>assets/css/mainstyle.css" type="text/css" media="screen">
        <!--        <link href="data:image/x-icon;base64,YourBase64StringHere" rel="icon" type="image/x-icon" />-->
        <link rel="icon" href="<?= base_url(); ?>assets/img/favicon.ico" type="image/x-icon"/>
        <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/favicon.ico" type="image/x-icon"/>
        <script>
            window.theme = window.theme || {};
            theme.strings = {
                zoomClose: "Close (Esc)",
                zoomPrev: "Previous (Left arrow key)",
                zoomNext: "Next (Right arrow key)",
                moneyFormat: "\u003cspan class=money\u003e${{amount}}\u003c\/span\u003e"
            };
            theme.settings = {
                cartType: "drawer",
                gridType: "collage",
                zoomEnable: true
            };
        </script>
        <script src="<?= base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.fancybox.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets/js/modernizr.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.easytabs.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets/js/owl.carousel.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>

        <script src="<?= base_url(); ?>assets/js/a.js" type="text/javascript"></script>
        <!-- WOW Visits -->

    </head>


    <body id="digital-world-store" class="template-index">
    
        <div id="PageContainer" class="is-moved-by-drawer">

            <div id="html-section-header" class="html-section">

                <div  id = "header" data-section-id="header" data-section-type="header-section header-style-6" class="header-section header-style-6">
                    <div class="header-wrapper">
                        <header class="site-header" role="header">
                            <!-- Main Header Content -->
                            <div class="wrapper main-header-wrapper">
                                <div class="grid--full grid--table">
                                    <!-- Mobile Button -->
                                    <div class="grid__item large--hide medium-down--one-quarter small--one-sixth">
                                        <div class="site-nav--mobile">
                                            <button type="button" class="icon-fallback-text site-nav__link js-drawer-open-left" aria-controls="NavDrawer" aria-expanded="false">
                                                <span class="icon icon-hamburger" aria-hidden="true"></span>
                                                <span class="fallback-text">Site navigation</span>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Mobile Logo -->
                                    <div class="logo grid__item large--hide medium-down--two-quarter small--three-fifths" style="backgroud-color:#fff;">
                                        <a href="#header" itemprop="url" class="site-header__logo-image">
                                            <img src="<?= base_url(); ?>assets/images/logo_main_.png" alt="">
                                        </a>
                                    </div>
                                    <!-- Mobile Cart -->
                                    <div class="grid__item large--hide medium-down--one-quarter small--one-sixth">
                                        <div class="site-nav--mobile text-right">
                                            <a href="/cart" class="site-nav__link cart-link js-drawer-open-right" aria-controls="CartDrawer" aria-expanded="false">
                                                <span class="icon-fallback-text">
                                                    <span class="icon icon-cart" aria-hidden="true"></span>
                                                    <span class="fallback-text">Inquire</span>
                                                </span>
                                                <span class="cart-link__bubble"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Desktop Header -->
                                    <div class="grid__item large--show medium-down--hide smal--hide">
                                        <!-- Logo -->
                                        <div class="grid__item large--three-tenths logo">
                                            <a href="#header" itemprop="url" class="site-header__logo-image">
                                                <img src="<?= base_url(); ?>assets/img/aaa.png" alt=""> 
                                            </a>
                                        </div>
                                        <div class="grid__item large--two-fifths nav-search">
                                            <form action="/search" method="get" class="input-group search-bar" style="position: relative;">
                                                <input type="hidden" name="type" value="product">
                                                <input type="search" name="q" value="" placeholder="Search ......" class="input-group-field st-default-search-input" aria-label="Search something" autocomplete="off">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn icon-fallback-text">
                                                        <span class="lnr lnr-magnifier"></span>
                                                        <span class="fallback-text">Search</span>
                                                    </button>
                                                </span>
                                                <ul class="search-results" style="position: absolute; left: 0px; top: 38px; display: none;"></ul></form>

                                        </div>
                                        <div class="grid__item large--three-tenths nav-cart">
                                            <a href="/cart" class="site-nav__link site-nav__link--icon cart-link js-drawer-open-right" aria-controls="CartDrawer" aria-expanded="false">

                                                <span class="text">CALL : <span class="name">(703) 498 6383</span></span></span>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>

                    </div>
                </div>
                 <div class="navigation-style-6">
                    <div class="navigation-bar menu-bar navigation3">
                        <div class="wrapper">
                            <div class="grid--full grid--table">
                                <div class="grid__item large--one-whole medium-down--hide navigation-wrapper">
                                    <ul class="site-nav site-nav--init" id="AccessibleNav">
                                        <li class="site-nav__item site-nav--compress__menu">
                                            <button type="button" class="icon-fallback-text site-nav__link site-nav__link--icon js-drawer-open-left" aria-controls="NavDrawer" aria-expanded="false">
                                                <span class="icon icon-hamburger" aria-hidden="true"></span>
                                                <span class="fallback-text">Site navigation</span>
                                            </button>
                                        </li>
                                        <li class="site-nav__item site-nav__expanded-item ">
                                            <a href="#header" class="site-nav__link">
                                                <span>Home</span>
                                            </a>
                                        </li>
                                        <li class="mega-menu site-nav__item site-nav__expanded-item site-nav--has-dropdown" aria-haspopup="true">
                                            <a href="#" class="site-nav__link">
                                                <span>Products</span>
                                                <span class="icon icon-arrow-down" aria-hidden="true"></span>
                                            </a>
                                            
                                            <ul class="site-nav__dropdown megamenu__dropdown megamenu_1">

                                                <li class="nav-links nav-links01 grid__item large--one-quarter">
                                                    <ul>

                                                        <?php
                                                        foreach ($p as $value) {
                                                            ?>
                                                            <li class="list-unstyled nav-sub-mega">
                                                                <a  href="<?php echo base_url() . "index.php/home/category/" . $value; ?>"><?php echo $value; ?></a>
                                                            </li>
                                                        <?php } ?>  

                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                         <li class="site-nav__item site-nav__expanded-item ">
                                            <a href="#html-section-product-template" class="site-nav__link">
                                                <span>About us</span>
                                            </a>
                                        </li>
                                        <li class="site-nav__item site-nav__expanded-item ">
                                            <a href="#html-section-contact-template" class="site-nav__link">
                                                <span>Contact us</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="search-box hide">
                                        <form action="/search" method="get" class="input-group search-bar " role="search" style="position: relative;">
                                            <input type="hidden" name="type" value="product">
                                            <input type="search" name="q" value="" placeholder="Search something" class="input-group-field" aria-label="Search something" autocomplete="off">
                                            <span class="input-group-btn">
                                                <button type="submit" class=" icon-fallback-text">
                                                    <span class="icon icon-search" aria-hidden="true"></span>
                                                    <span class="fallback-text">Search</span>
                                                </button>
                                            </span>
                                            <ul class="search-results" style="position: absolute; left: 0px; top: 43px; display: none;">
                                            </ul>
                                        </form>
                                    </div>
                                    <div class="grid__item phone_support hide">
                                        <div class="phone_icon">
                                            <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                        </div>
                                        <div class="information">
                                            <div class="heading">
                                                Support: (+001) 1234567xxxx
                                            </div>
                                            <div class="extra">
                                                Mon - Sat: 9:00AM-5:00PM
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
     </div>

            <div class="content">
                <div class="index-sections">            


                    <div id="html-section-1493219109018" class="html-section index-section product-banner-grid">
                        <div class="wrapper">
                            <div class="home-product-sidebar-wrapper grid--table grid--full" style="padding-top:px; padding-bottom:px;">
                                <div class="section-header style_3">
                                    <h2><?php echo $value; ?></h2>
                                </div>


                                <div class="grid__item block_content grid--table grid--full">
                                    <div class="grid__item one-fifth content_banner ">
                                        <a href="#">

                                            <img src="<?= base_url(); ?>assets/images/banner1-left-home4_300x.png" alt="">
                                        </a>
                                    </div>

                                    <div class="grid__item four-fifths content_products">
                                        <div class="grid grid--uniform grid--view-items">
                                            <?php
                                            foreach ($c as $l) {
                                                //  echo '<img height="50px" width="50px" src="data:image/jpeg;base64,' . $l->Image . '" />';
                                             
                                                    ?>
                                                    <div class="grid__item small--one-half medium-up--one-quarter one-quarter">
                                                        <div class="grid-view-item">
                                                            <div class="grid-normal-display">
                                                                <div class="grid__image product-image">
                                                                    <a class="grid-view-item__link" href="<?php echo base_url() . "index.php/home/product/" . $l->Id; ?>">
                                                                        <img class="grid-view-item__image" src="data:image/jpeg;base64,<?php echo $l->Image . ' '; ?>"  alt="<?php echo $l->Name . ' '; ?>">
                                                                    </a>
                                                                    <div class="product-label">
                                                                        <div class="label-element new-label">
                                                                            <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                                        </div>
                                                                        <div class="label-element trend-label">
                                                                            <span style="color:#ffffff; background-color: #003cff;">Trending</span>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="action-button">
                                                                        <li class="add-to-cart-form">
                                                                            <form action="<?php echo base_url() . "index.php/home/product/" . $l->Id; ?>" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">																		
                                                                                <div class="effect-ajax-cart">
                                                                                    <input type="hidden" name="quantity" value="1">
                                                                                    <button class="btn btn-1 select-option" type="button" onclick="javascript:location.href = '<?php echo base_url() . "index.php/home/product/" . $l->Id; ?>'" title="Select Options"><i class="fa fa-bars"></i> Options</button>
                                                                                </div>
                                                                            </form>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="h4 grid-view-item__title">
                                                                <a href="<?= base_url(); ?>"><?php echo $l->Name . ' '; ?></a>
                                                            </div>
                                                            <div class="rating-star">
                                                                <span class="spr-badge" id="spr_badge_9059386182" data-rating="4.0">
                                                                    <span class="spr-starrating spr-badge-starrating">
                                                                        <i class="spr-icon spr-icon-star" style=""></i>
                                                                        <i class="spr-icon spr-icon-star" style=""></i>
                                                                        <i class="spr-icon spr-icon-star" style=""></i>
                                                                        <i class="spr-icon spr-icon-star" style=""></i>
                                                                        <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                    </span>
                                                                    <span class="spr-badge-caption">1 review</span>
                                                                </span>
                                                            </div>
                                                            <div class="grid-view-item__meta">															
        <!--                                                            <span class="product__price">$<?php echo $l->Cost . ' '; ?></span>-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }                                           
                                            ?>

                                        </div>
                                    </div>
                                </div>
                                <script>
                                    $("#html-section-1493219109018 .mobile-toggle").on("click", function () {
                                        $('#html-section-1493219109018 .area-tags').toggleClass("open")
                                    });
                                </script>
                            </div>
                        </div>
                    </div>

                 
                    <script>
                        $("#html-section-1487408997957 .mobile-toggle").on("click", function () {
                            $('#html-section-1487408997957 .area-tags').toggleClass("open")
                        });
                    </script>

                </div>


                <main class="main-content">                      
                    <div id="html-section-product-template" class="html-section">
                        <header class="section-header wrapper-breadcrumb">
                            <div class="wrapper">
                                <h3>About us</h3>
                                <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
                                    <a href="#header" title="Back to the frontpage">Home</a>
                                    <span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                    <span>About us</span>
                                </nav>
                            </div> 
                        </header>
                        <div class="wrapper">
                            <div class="grid">
                                <div class="grid__item">

                                    <p>
                                        At AA Medical Supplies, we are committed to make our customers lives comfortable by providing quality medical supplies at affordable prices.<p> Our mission is to add value, by making the shopping experience convenient, providing excellent customer service and delivering the products with sense of urgency . As a local family owned Medical Supplier in Northern Virginia, we are ready to fulfill our promise and build lasting relationships one customer at a time. <p>Thank you again for considering us for your medical supply needs, we look forward to serving you with utmost care and passion for excellence.
                                    </p>



                                </div>
                            </div>
                        </div>
                    </div>
                </main>                        


            </div>
        </div>
    </main>
    <main class="main-content">                      
        <div id="html-section-contact-template" class="html-section">
            <header class="section-header wrapper-breadcrumb">
                <div class="wrapper">
                    <h3>Contact us</h3>
                    <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
                        <a href="#header" title="Back to the frontpage">Home</a>
                        <span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                        <span>Contact us</span>
                    </nav>
                </div>
            </header>
            <div class="wrapper">
                <div class="grid">
                    <div class="grid__item contact-wrapper">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3117.451583910086!2d-77.33511068441294!3d38.615491171116204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b6f8620f65b27f%3A0x86bd8d09ca2931bc!2s15550+Wheatfield+Rd%2C+Woodbridge%2C+VA+22193!5e0!3m2!1sen!2sus!4v1524899144255" width="100%" height="450" frameborder="0" style="border:0;margin-bottom: 10px;" allowfullscreen></iframe>
                        <div class="grid__item large--one-half" style="padding-left: 0;">

                            <ul>
                                <li class="address"><i class="fa fa-street-view"></i> Address: 15550 Wheatfield Rd WoodBridge VA 22193</li>
                                <li class="open"><i class="fa fa-check"></i> Opening hours
                                    <ul>
                                        <li>Mon-Fri : 11.00 - 20.00</li>
                                        <li>Sat: 10.00 - 20.00</li>
                                        <li>Sun: 19.00 - 20.00</li>
                                    </ul>
                                </li>
                                <li class="email"><i class="fa fa-envelope-o"></i> Email: info@aamedsupplies.com</li>
                                <li class="phone"><i class="fa fa-phone"></i> Phone: (703) 498 6383</li>
                                <li class="phone"><i class="fa fa-phone"></i> Fax: (703) 651 5185</li>
                            </ul>
                        </div>
                        <div class="form-vertical grid__item large--one-half">
                            <form  enctype="multipart/form-data" class="form-horizontal form-label-left"  action='<?= base_url(); ?>index.php/home/mail'  method="post">

                                <input type="hidden" name="form_type" value="contact"><input type="hidden" name="utf8" value="?">
                                <div class="grid grid--small">
                                    <div class="grid__item large--one-half">
                                        <label for="ContactFormName" class="hidden-label">Name</label>
                                        <input type="text" id="ContactFormName" class="input-full" name="name" placeholder="Name" autocapitalize="words" value="">
                                    </div>
                                    <div class="grid__item large--one-half">
                                        <label for="ContactFormEmail" class="hidden-label">Email</label>
                                        <input type="email" id="ContactFormEmail" class="input-full" name="email" placeholder="Email" autocorrect="off" autocapitalize="off" value="">
                                    </div>
                                </div>
                                <label for="ContactFormPhone" class="hidden-label">Phone Number</label>
                                <input type="tel" id="ContactFormPhone" class="input-full" name="phone" placeholder="Phone Number" pattern="[0-9\-]*" value="">
                                <label for="ContactFormMessage" class="hidden-label">Message</label>
                                <textarea rows="5" id="ContactFormMessage" class="input-full" name="body" placeholder="Message"></textarea>
                                <input type="submit" class="btn right" value="Send">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div id="html-section-footer" class="html-section">
        <footer class="site-footer footer4" role="contentinfo">  
            <div class="footer-top">
                <div class="footer_information">
                    <div class="wrapper">
                        <div class="grid">
                            <div class="wrapper_information">
                                <div class="fi-links grid__item large--one-quarter small--one-whole medium--one-whole">
                                    <div class="fi-title">
                                        Who we are
                                    </div>
                                    <div class="fi-content">
                                        <ul class="grid__item">
                                            <li>
                                                <a href="#header"><span>Typography</span></a>
                                            </li>
                                            <li>
                                                <a href="#header"><span>Gallery</span></a>
                                            </li>
                                            <li>
                                                <a href="#header"><span>Store Location</span></a>
                                            </li>
                                            <li>
                                                <a href="#header"><span>Today's Deals</span></a>
                                            </li>
                                            <li>
                                                <a href="#header"><span>Contact</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="fi-links grid__item large--one-quarter small--one-whole medium--one-whole">
                                    <div class="fi-title">
                                        Information
                                    </div>
                                    <div class="fi-content">
                                        <ul class="grid__item">
                                            <li>
                                                <a href="#header"><span>Help</span></a>
                                            </li>
                                            <li>
                                                <a href="#header"><span>Free Shipping</span></a>
                                            </li>
                                            <li>
                                                <a href="#header"><span>FAQs</span></a>
                                            </li>
                                            <li>
                                                <a href="#header"><span>Return &amp; Exchange</span></a>
                                            </li>
                                            <li>
                                                <a href="#header"><span>Testimonials</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="fi-links grid__item large--one-quarter small--one-whole medium--one-whole">
                                    <div class="fi-title">
                                        My account
                                    </div>
                                    <div class="fi-content">
                                        <ul class="grid__item">
                                            <li>
                                                <a href="#header"><span>Wishlist</span></a>
                                            </li>
                                            <li>
                                                <a href="#header"><span>Blog</span></a>
                                            </li>
                                            <li>
                                                <a href="#header"><span>My account</span></a>
                                            </li>
                                            <li>
                                                <a href="#header"><span>About Us</span></a>
                                            </li>
                                            <li>
                                                <a href="#header"><span>Sitemap</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="fi-links grid__item large--one-quarter small--one-whole medium--one-whole">
                                    <div class="fi-title">
                                        Newsletter
                                    </div>
                                    <div class="fi-content">
                                        <div class="newsletter-extratext">
                                            Subscribe now and receive weekly newsletter
                                        </div>
                                        <form method="post" action="#" id="contact_form" accept-charset="UTF-8" class="contact-form">
                                            <input type="hidden" name="form_type" value="customer"><input type="hidden" name="utf8" value="Ã¢Å“â€œ">
                                            <div class="right-newsletter input-group">
                                                <input type="hidden" name="contact[tags]" value="newsletter">
                                                <input type="email" name="contact[email]" id="Email" class="input-group__field newsletter__input" value="" placeholder="Email address" autocorrect="off" autocapitalize="off">
                                                <span class="input-group__btn">
                                                    <button type="submit" class="btn newsletter__submit" name="commit" id="Subscribe">
                                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </form>
                                        <div class="footer-social">
                                            <a href="#" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                                            <a href="#" class="google" target="_blank"><i class="fa fa-google-plus"></i></a>
                                            <a href="#" class="linkedIn" target="_blank"><i class="fa fa-linkedin"></i></a>
                                            <a href="#" class="flickr" target="_blank"><i class="fa fa-flickr"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    

            <div class="site-footer__copyright--bottom">
                <div class="wrapper">
                    <div class="grid">
                        <div class="grid__item one-half small--one-whole">
                            <p class="copyright">

                                <small class="site-footer__copyright-content"><a target="_blank" rel="nofollow" href="omnierps.com">Powered by Omnierps</a></small>
                            </p>
                        </div>
                        <div class="grid__item one-half small--one-whole">
                            <ul class="payment-icons list--inline">
                                <li class="payment-icon">
                                </li>
                                <li class="payment-icon">
                                </li>
                                <li class="payment-icon">
                                </li>
                                <li class="payment-icon">
                                </li>
                                <li class="payment-icon">
                                </li>
                                <li class="payment-icon">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<script>
    var tada_newsletter = false;
    tada_newsletter = false;
</script>

<div id="scroll-to-top" title="Scroll to Top" class="off">
    <i class="fa fa-caret-up"></i>
</div>
<script src="<?= base_url(); ?>assets/js/jquery.cookies.min.js" type="text/javascript"></script>
<div id="newslettermodal" class="hide">
    <form action="product.html" method="post" name="mc-embedded-subscribe-form" target="_blank">
        <div class="newslettermodal-content">
            <div class="top-area">
                <span class="head-text1">Subscribe to our Newsletter &amp; receive a coupon for</span>
                <span class="head-text2">10% off</span>
            </div>
            <div class="bottom-explain">
                We will send you a discount code after you confirm your email address.
            </div>
            <div class="bottom-area">
                <div class="group_input">
                    <input class="form-control" type="email" name="EMAIL" placeholder="Your Email address">
                    <button class="btn" type="submit">Get 10% off</button>
                </div>
            </div>
            <div class="newsletter-social">
                <div class="inline-list social-icons">
                    <a href="#" title="Twitter" class="icon-social twitter" data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter-square"></i></a>
                    <a href="#" title="Facebook" class="icon-social facebook" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook-square"></i></a>
                    <a href="#" title="Google+" class="icon-social google" data-toggle="tooltip" data-placement="top"><i class="fa fa-google-plus-square"></i></a>
                    <a href="#" title="Pinterest" class="icon-social pinterest" data-toggle="tooltip" data-placement="top"><i class="fa fa-pinterest-square"></i></a>
                    <a href="#" title="Youtube" class="icon-social youtube" data-toggle="tooltip" data-placement="top"><i class="fa fa-youtube-square"></i></a>
                    <a href="#" title="Instagram" class="icon-social instagram" data-toggle="tooltip" data-placement="top"><i class="fa fa-instagram"></i></a>
                    <a href="#" title="translation missing: en.layout.footer.news" class="icon-social atom" data-toggle="tooltip" data-placement="top"><i class="fa fa-share-alt"></i></a>
                    <a href="#" title="Vimeo" class="icon-social vimeo" data-toggle="tooltip" data-placement="top"><i class="fa fa-vimeo-square"></i></a>
                    <a href="#" title="Tumblr" class="icon-social tumblr" data-toggle="tooltip" data-placement="top"><i class="fa fa-tumblr"></i></a>
                </div>
            </div>
        </div>
    </form>
</div>



</body>
</html>
</body>
</html>


