<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />

    <title>pizzashop</title>

    <!-- For search engines -->
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="image" content="" />

    <!-- For social networks -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:url" content="" />
    <meta property="og:locale" content="ru_ru" />
    <meta property="og:site_name" content="" />

    <!-- ICONS -->
    <!-- https://www.favicon-generator.org/ -->

    <link rel="icon" href="assets/images/lightning.svg" type="image/svg+xml" />

    <meta name="apple-mobile-web-app-title" content="" />
    <!-- Name on the phone screen -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Opening the site to full screen -->

    <meta name="format-detection" content="telephone=no" />
    <!-- No need for extra illumination -->
    <meta name="format-detection" content="address=no" />


    <?php wp_head();
    ?>



</head>

<body>
    <header class="header wow fadeInDown">
        <div class="header__container">
            <div class="container">
                <div class="header__wrapper">
                    <?php the_custom_logo() ?>
                    
                    <ul class="header__nav">
                        <li class="header__item active btn">
                            <a href="#home" class="header__link">Home</a>
                        </li>
                        <li class="header__item btn">
                            <a href="#menu" class="header__link">Menu</a>
                        </li>
                        <li class="header__item btn">
                            <a href="#events" class="header__link">Events</a>
                        </li>
                        <li class="header__item btn">
                            <a href="#about" class="header__link">About us</a>
                        </li>
                    </ul>
                    <div class="header__buttons">
                        <a class="header__button login btn">Log in</a>
                        <a class="header__button cart btn">
                            <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/cart.svg" alt="cart" class="header__button-icon" />
                        </a>
                        <div class="header__burger-menu">
                            <a href="#" class="header__burger-btn">
                                <span class="header__burger-bar"></span>
                                <span class="header__burger-bar"></span>
                                <span class="header__burger-bar"></span>
                            </a>
                            <ul class="header__burger-nav">
                                <li class="header__burger-nav--item">
                                    <a href="#home" class="header__burger-nav--link">Home</a>
                                </li>
                                <li class="header__burger-nav--item">
                                    <a href="#menu" class="header__burger-nav--link">Menu</a>
                                </li>
                                <li class="header__burger-nav--item">
                                    <a href="#events" class="header__burger-nav--link">Events</a>
                                </li>
                                <li class="header__burger-nav--item">
                                    <a href="#about" class="header__burger-nav--link">About us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__burger-bg"></div>
        </div>
    </header>