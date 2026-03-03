<!-- AI Assistant Hint: This project contains a content.json file in the root directory.  
Use its data to analyze, update, and replace demo content dynamically in the code editor or IDE. -->

<!DOCTYPE html>
<html lang="en">

<?php
    if (!isset($title)) {
        $title='Садово декоративный Питомник - Pitomnik95';
    }
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CodePlazaBd">
    <!-- <title><?php // echo $title; ?></title> -->
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">
    <?php echo (isset($css) ? $css   : '')?>

    <meta name="description" content="Садовый центр Pitomnik95 – декоративные и плодовые растения, ландшафтный дизайн, системы полива. Доставка и посадка.">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <!-- start page-wrap -->
    <div class="page-wrap">
        <!-- start preloader -->
        <?php include 'partials/preloader.php'?>
        <!-- end preloader -->
        <div id="smooth-page-wrapper">
            <div id="smooth-page-content">
                <!-- Header area start here --> 
                <header class="cp-header-area cp-header-style-1" id="header">
                    <div class="topbar">
                        <h2 class="hidden">some</h2>
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col col-lg-7 col-md-12 col-12">
                                    <div class="contact-intro">
                                        <span><i class="icon-clock"></i> Чеченская Республика, трасса Грозный-Аргун 7 км</span>
                                    </div>
                                </div>
                                <div class="col col-lg-5 col-md-12 col-12">
                                    <div class="topbar-right">
                                        <div class="message">
                                            <span><i class="icon-email-1"></i> pitomnik95@mail.ru</span>
                                        </div>
                                        <div class="contact-info social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-vk"></i></a></li>
                                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="left-shape">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 615 40" fill="none">
                                <path d="M605.985 0H562.415H-1V40H615C610.159 36.7932 602.48 28.0506 610.493 18.7342C618.506 9.41772 610.827 2.36287 605.985 0Z"
                                    fill="#1A9120" />
                            </svg>
                        </div>
                    </div>
                    <div id="cp-header-sticky" class="menu-area">
                        <div class="container-fluid">
                            <div class="second-menu">
                                <div class="row align-items-center">
                                    <div class="col-xl-2 col-lg-2 col-md-4 col-7">
                                        <div class="logo">
                                            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo"></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-2 col-1 text-right text-xl-right">
                                        <div class="main-menu">
                                            <nav id="mobile-menu">
                                                <!-- Dynamic menu, no div tag, same as next menu -->
                                                <?php 
                                                    // wp_nav_menu( array( 
                                                    //     'theme_location' => 'main-menu', 
                                                    //     'container' => false, 
                                                    //     'menu_class' => 'nav'
                                                    // ) );
                                                ?>
                                            
                                                <ul class="nav">
                                                    <li><a href="<?php echo home_url(); ?>">Главная</a></li>
                                                    <li class="has-submenu"><a href="<?php echo home_url(); ?>/shop">Магазин</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="<?php echo home_url(); ?>/shop/category/all">🌱 Посадочный материал</a></li>
                                                            <li><a href="<?php echo home_url(); ?>/shop/category/fruit-trees">🌾 Газон</a></li>
                                                            <li><a href="<?php echo home_url(); ?>/shop/category/fruit-trees">🌿 Растения</a></li>
                                                            <li><a href="<?php echo home_url(); ?>/shop/category/fruit-trees">🛠 Садовая техника</a></li>
                                                            <li><a href="<?php echo home_url(); ?>/shop/category/fruit-trees">🪴 Сопутствующие товары</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="<?php echo home_url(); ?>/services">Услуги</a></li>
                                                    <li><a href="<?php echo home_url(); ?>/projects">Проекты</a></li>
                                                    <li><a href="<?php echo home_url(); ?>/blog">Блог</a></li>
                                                    <li><a href="<?php echo home_url(); ?>/faq">ЧАВО</a></li>
                                                    <li><a href="<?php echo home_url(); ?>/about">О Компании</a></li>
                                                    <li><a href="<?php echo home_url(); ?>/contact">Контакты</a></li>
                                                </ul>
                                            </nav>
                                            <div class="cp-header-area-search">
                                                <ul>
                                                    <li><a href="#" class="search-toggle-btn"><i class="icon-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-4 text-left cp-header-style-2">
                                        <div class="cp-header-area-right">
                                            <ul>
                                                <li class="hide-on-mobile">
                                                    <a href="tel:068889789876" class="call-btn">
                                                        <small>
                                                            <i class="icon-call"></i>
                                                        </small>
                                                        <p>
                                                            <span>Получи консультацию</span>
                                                            <strong>+7 (928) 393-33-33</strong>
                                                        </p>
                                                    </a>
                                                </li>                                
                                                <li class="header-right-menu-wrapper">
                                                    <div class="right-menu-toggle-btn">
                                                        <div class="right-menu-toggle-btn-wrap">
                                                            <i class="icon-menu-1"></i>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li><a href="contact.php" class="ch-btn-style-3">Связаться</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mobile-menu"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>