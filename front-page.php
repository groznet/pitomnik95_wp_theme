<?php /* Template Name: Home Page */ ?>

<?php get_header(); ?>    

<!-- Header area end here -->
    
<!-- start of dc-hero-area -->
<!-- Random slide from 1 to 4 -->
<?php $randomSlide = rand(1, 4); ?>
<?php include "slides/slide-$randomSlide.php"; ?>
<!-- end of dc-hero-area slider -->

<!-- start of about-area -->
<!-- Random welcome section from 1 to 4 -->
<?php $randomWelcome = rand(1, 4); ?>
<?php include "about-section/about-$randomWelcome.php"; ?>
<!-- end of about-area  -->

<!-- start of service-area -->
<section class="service-area ptb-120">
    <div class="container">
        <div class="service-wrap">
            <div class="row">
                <div class="col col-lg-3 col-md-12 col-12">
                    <div class="ch-top-title">
                        <span>Наши услуги</span>
                        <h2 class="site-split-text ch-split-in-right">Почему мы лидируем на рынке садоводства?</h2>
                    </div>
                </div>

                <div class="col col-lg-3 col-md-6 col-12">
                    <div class="service-item wow fadeInUp" data-wow-duration="1000ms">
                        <div class="service-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/service-1.jpg" alt="">
                        </div>
                        <div class="service-text">
                            <div class="icon">
                                <i class="icon-gardening-1"></i>
                            </div>
                            <h3><a href="service-single.php">Ландшафт и дизайн</a></h3>
                            <p>Создание стильных и функциональных садовых пространств</p>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 col-12">
                    <div class="service-item wow fadeInUp" data-wow-duration="1200ms">
                        <div class="service-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/service-2.jpg" alt="">
                        </div>
                        <div class="service-text">
                            <div class="icon">
                                <i class="icon-growth-1"></i>
                            </div>
                            <h3><a href="service-single.php">Посадка растений</a></h3>
                            <p>Профессиональный подбор и высадка деревьев, кустарников и цветов.</p>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 col-12">
                    <div class="service-item wow fadeInUp" data-wow-duration="1400ms">
                        <div class="service-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/service-3.jpg" alt="">
                        </div>
                        <div class="service-text">
                            <div class="icon">
                                <i class="icon-gardening-tools-1"></i>
                            </div>
                            <h3><a href="service-single.php">Уход за садом</a></h3>
                            <p>Комплексные работы по поддержанию здоровья и красоты растений.</p>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 col-12">
                    <div class="service-item wow fadeInUp" data-wow-duration="1600ms">
                        <div class="service-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/service-4.jpg" alt="">
                        </div>
                        <div class="service-text">
                            <div class="icon">
                                <i class="icon-watering-can-1"></i>
                            </div>
                            <h3><a href="service-single.php">Сезонные работы</a></h3>
                            <p>Подготовка сада к разным временам года для его процветания.</p>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 col-12">
                    <div class="service-item wow fadeInUp" data-wow-duration="1800ms">
                        <div class="service-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/service-5.jpg" alt="">
                        </div>
                        <div class="service-text">
                            <div class="icon">
                                <i class="icon-spider-plant-1"></i>
                            </div>
                            <h3><a href="service-single.php">Системы полива</a></h3>
                            <p>Установка и настройка автоматизированных систем орошения.</p>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-12 bg-service">
                    <div class="service-item wow fadeInUp" data-wow-duration="2000ms">
                        <div class="service-text">
                            <small>Почему мы лучшие</small>
                            <h3>Мы оказываем полный спектр услуг по садоводству и ландшафтному дизайну</h3>
                            <div class="author-wrap">
                                <div class="author-left">
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/author1.png" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/author2.png" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/author3.png" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/author4.png" alt=""></li>
                                    </ul>
                                </div>
                                <div class="author-right">
                                    <ul>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                    </ul>
                                    <span>Оценка довольных клиентов</span>
                                </div>
                            </div>
                        </div>

                        <div class="shape"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/leaf.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of service-area  -->

<!-- start of work-area -->
<section class="work-area ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-lg-5 col-md-12 col-12">
                <div class="ch-top-title-s2">
                    <span>Наши работы</span>
                    <h2 class="site-split-text ch-split-in-up">Почему мы лучшие Компания</h2>
                </div>
            </div>

        </div>
        <div class="work-wrap wow fadeInUp" data-wow-duration="1000ms">
            <div class="row">
                <div class="col col-lg-4 col-md-6 col-12">
                    <div class="work-item">
                        <div class="icon-main-wrap">
                            <div class="icon">
                                <i class="icon-gardening-tools-1"></i>
                                <div class="count"><span>01</span></div>
                            </div>
                            <div class="shape"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/work/image-1.png" alt=""></div>
                        </div>
                        <div class="work-text">
                            <h3>Экологичный уход за садом</h3>
                            <p>Как заботиться о растениях, используя только удобрения.</p>
                            <div class="shape">
                                <svg xmlns="http://www.w3.org/2000/svg" width="420" height="338"
                                    viewBox="0 0 420 338" fill="none">
                                    <g filter="url(#filter0_d_1048_797)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M223.333 68.3192L210 50L196.667 68.3192H60V268H360V68.3192H223.333Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_d_1048_797" x="0" y="0" width="420"
                                            height="338" filterUnits="userSpaceOnUse"
                                            color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feOffset dy="10" />
                                            <feGaussianBlur stdDeviation="30" />
                                            <feComposite in2="hardAlpha" operator="out" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.670833 0 0 0 0 0.670833 0 0 0 0 0.670833 0 0 0 0.25 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow_1048_797" />
                                            <feBlend mode="normal" in="SourceGraphic"
                                                in2="effect1_dropShadow_1048_797" result="shape" />
                                        </filter>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4 col-md-6 col-12">
                    <div class="work-item active">
                        <div class="icon-main-wrap">
                            <div class="icon">
                                <i class="icon-pruning-shears-1"></i>
                                <div class="count"><span>02</span></div>
                            </div>
                            <div class="shape"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/work/image-2.png" alt=""></div>
                        </div>
                        <div class="work-text">
                            <h3>Советы по сезонной обрезке</h3>
                            <p>Как правильно ухаживать за деревьями и кустарниками в разное время года.</p>
                            <div class="shape">
                                <svg xmlns="http://www.w3.org/2000/svg" width="420" height="338"
                                    viewBox="0 0 420 338" fill="none">
                                    <g filter="url(#filter0_d_1048_797)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M223.333 68.3192L210 50L196.667 68.3192H60V268H360V68.3192H223.333Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_d_1048_797" x="0" y="0" width="420"
                                            height="338" filterUnits="userSpaceOnUse"
                                            color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feOffset dy="10" />
                                            <feGaussianBlur stdDeviation="30" />
                                            <feComposite in2="hardAlpha" operator="out" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.670833 0 0 0 0 0.670833 0 0 0 0 0.670833 0 0 0 0.25 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow_1048_797" />
                                            <feBlend mode="normal" in="SourceGraphic"
                                                in2="effect1_dropShadow_1048_797" result="shape" />
                                        </filter>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4 col-md-6 col-12">
                    <div class="work-item">
                        <div class="icon-main-wrap">
                            <div class="icon">
                                <i class="icon-gardening-tools-2-1"></i>
                                <div class="count"><span>03</span></div>
                            </div>
                            <div class="shape"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/work/image-3.png" alt=""></div>
                        </div>
                        <div class="work-text">
                            <h3>Оптимальный выбор удобрений</h3>
                            <p>Разбираемся, какие удобрения подходят для вашего сада.</p>
                            <div class="shape">
                                <svg xmlns="http://www.w3.org/2000/svg" width="420" height="338"
                                    viewBox="0 0 420 338" fill="none">
                                    <g filter="url(#filter0_d_1048_797)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M223.333 68.3192L210 50L196.667 68.3192H60V268H360V68.3192H223.333Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_d_1048_797" x="0" y="0" width="420"
                                            height="338" filterUnits="userSpaceOnUse"
                                            color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feOffset dy="10" />
                                            <feGaussianBlur stdDeviation="30" />
                                            <feComposite in2="hardAlpha" operator="out" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.670833 0 0 0 0 0.670833 0 0 0 0 0.670833 0 0 0 0.25 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow_1048_797" />
                                            <feBlend mode="normal" in="SourceGraphic"
                                                in2="effect1_dropShadow_1048_797" result="shape" />
                                        </filter>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line-1"></div>
            <div class="line-2"></div>
        </div>
    </div>
    <div class="shape-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/choose/shape-1.png" alt=""></div>
    <div class="shape-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/choose/shape-2.png" alt=""></div>
</section>
<!-- end of work-area  -->

<!-- start text-moving -->
<div class="text-moving-sec">
    <div class="text-moving">
        <div class="marquee">
            <div class="track">
                <div class="content">
                    <h1>
                        <span>Садоводство и</span>
                        <span>ландшафтный дизайн</span>
                        <span>Услуги</span>
                        <span>Садоводство и</span>
                        <span>ландшафтный дизайн</span>
                        <span>Услуги</span>
                        <span>Садоводство и</span>
                        <span>ландшафтный дизайн</span>
                        <span>Услуги</span>
                    </h1>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- end of text-moving -->

<!-- start of ch-choose-area -->
<section class="ch-choose-area ptb-120">
    <div class="pattern" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/images/choose/pattern.png);"></div>
    <div class="container">
        <div class="ch-choose-wrap">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-12 col-12 order-lg-1 order-2">
                    <div class="ch-choose-img wow fadeInUp" data-wow-duration="1000ms">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/choose/man.jpg" alt="">
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-12 col-12 order-lg-2 order-1">
                    <div class="ch-choose-text">
                        <div class="ch-top-title-s3">
                            <span>Преимущества</span>
                            <h2 class="site-split-text ch-split-in-right">Почему клиенты выбирают нас для ухода за садом и благоустройства территории.</h2>
                            <p>Мы используем передовые технологии, безопасные для природы материалы и индивидуальный подход к каждому проекту. Наша цель – сделать ваш сад здоровым, ухоженным и красивым в любое время года.</p>
                        </div>
                        <div class="funfact-area">
                            <div class="row align-items-center">
                                <div class="col col-lg-4 col-sm-4 col-6">
                                    <div class="info wow fadeInUp" data-wow-duration="1000ms">
                                        <h3><span class="odometer" data-count="2500">00</span>+</h3>
                                        <p>Успешно выполненных проектов</p>
                                    </div>
                                </div>
                                <div class="col col-lg-4 col-sm-4 col-6">
                                    <div class="info wow fadeInUp" data-wow-duration="1200ms">
                                        <h3><span class="odometer" data-count="20">00</span>лет</h3>
                                        <p>Опыт в сфере садоводства</p>
                                    </div>
                                </div>
                                <div class="col col-lg-4 col-sm-4 col-6">
                                    <div class="info wow fadeInUp" data-wow-duration="1400ms">
                                        <h3><span class="odometer" data-count="900">00</span>+</h3>
                                        <p>Довольных клиентов</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of ch-choose-area  -->

<!-- start of ch-project-area  -->
<section class="ch-project-area ptb-120 pt-0">
    <div class="container-fluid">
        <div class="project-wrap">
            <div class="project-active owl-carousel">
                <div class="project-item wow fadeInUp" data-wow-duration="1000ms">
                    <div class="project-item-inner">
                        <div class="project-img middle-shade">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project/project-1.jpg" alt="">
                        </div>
                        <div class="project-text">
                            <span>ул. Примерная 12, Грозный</span>
                            <h2>Уход за садом</h2>
                            <a href="project-single.php"><i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="project-item wow fadeInUp" data-wow-duration="1200ms">
                    <div class="project-item-inner">
                        <div class="project-img middle-shade">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project/project-2.jpg" alt="">
                        </div>
                        <div class="project-text">
                            <span>ул. Примерная 13, Грозный</span>
                            <h2>Уход за садом</h2>
                            <a href="project-single.php"><i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="project-item wow fadeInUp" data-wow-duration="1400ms">
                    <div class="project-item-inner">
                        <div class="project-img middle-shade">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project/project-3.jpg" alt="">
                        </div>
                        <div class="project-text">
                            <span>ул. Примерная 14, Грозный</span>
                            <h2>Уход за садом</h2>
                            <a href="project-single.php"><i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="project-item wow fadeInUp" data-wow-duration="1600ms">
                    <div class="project-item-inner">
                        <div class="project-img middle-shade">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project/project-4.jpg" alt="">
                        </div>
                        <div class="project-text">
                            <span>ул. Примерная 15, Грозный</span>
                            <h2>Уход за садом</h2>
                            <a href="project-single.php"><i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="project-item wow fadeInUp" data-wow-duration="1000ms">
                    <div class="project-item-inner">
                        <div class="project-img middle-shade">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project/project-5.jpg" alt="">
                        </div>
                        <div class="project-text">
                            <span>ул. Примерная 16, Грозный</span>
                            <h2>Уход за садом</h2>
                            <a href="project-single.php"><i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of ch-project-area  -->

<!-- start of pricing-section -->
<div class="pricing-section ptb-120 pt-0">
    <div class="container">
        <div class="pricing-items">
            <div class="row">
                <div class="col col-lg-4 col-md-12 col-12">
                    <div class="ch-top-title">
                        <span>Проверьте наш прайс</span>
                        <h2 class="site-split-text ch-split-in-right">Лучшие цены на уход за садом</h2>
                        <p>Сэкономьте <small>30%</small> на годовых пакетах</p>
                        <ul>
                            <li>Ежемесячно</li>
                            <li class="tab-btn"><input type="checkbox" id="toggleButton"><label
                                    for="toggleButton">Toggle</label></li>
                            <li>Ежегодно</li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-wrap">
                        <div id="tab1" class="price-tab-content active">
                            <div class="row">
                                <div class="col col-lg-6 col-md-6 col-12">
                                    <div class="pricing-item wow fadeInLeftSlow"
                                        data-wow-duration="1000ms">
                                        <div class="pricing-item-inner"
                                            style="background: url(<?php echo get_template_directory_uri(); ?>/assets/images/pricing-bg.jpg) no-repeat center top; background-size: cover;">
                                            <div class="price-wrap">
                                                <div class="price-plan">
                                                    <span>Базовый план</span>
                                                    <p>Испытайте удобство профессионального ухода</p>
                                                </div>
                                                <div class="prices">

                                                    <h3>25 000 руб<span>/ месяц</span></h3>
                                                </div>
                                            </div>
                                            <ul>
                                                <li>Сезонная посадка растений</li>
                                                <li>Осенняя уборка и план полива</li>
                                                <li>Подбор растений под участок</li>
                                                <li>Установка систем полива</li>
                                            </ul>
                                            <a href="contact.php">Выбрать план</a>
                                            <div class="badge">
                                                <span>Самый популярный</span>
                                            </div>
                                        </div>
                                        <div class="shape"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/price-shape.png"alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-6 col-md-6 col-12">
                                    <div class="pricing-item wow fadeInRightSlow"
                                        data-wow-duration="1000ms">
                                        <div class="pricing-item-inner"
                                            style="background: url(<?php echo get_template_directory_uri(); ?>/assets/images/pricing-bg.jpg) no-repeat center top; background-size: cover;">
                                            <div class="price-wrap">
                                                <div class="price-plan">
                                                    <span>Премиум план</span>
                                                    <p>Максимальный уход и индивидуальный подход</p>
                                                </div>
                                                <div class="prices">
                                                    <h3>35 000 руб<span>/ месяц</span></h3>

                                                </div>
                                            </div>
                                            <ul>
                                                <li>Сезонная посадка растений</li>
                                                <li>Осенняя уборка и план полива</li>
                                                <li>Подбор растений под участок</li>
                                                <li>Установка систем полива</li>
                                            </ul>
                                            <a href="contact.php">Выбрать план</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab2" class="price-tab-content">
                            <div class="row">
                                <div class="col col-lg-6 col-md-6 col-12">
                                    <div class="pricing-item wow fadeInLeftSlow"
                                        data-wow-duration="1000ms">
                                        <div class="pricing-item-inner"
                                            style="background: url(<?php echo get_template_directory_uri(); ?>/assets/images/pricing-bg.jpg) no-repeat center top; background-size: cover;">
                                            <div class="price-wrap">
                                                <div class="price-plan">
                                                    <span>Базовый план</span>
                                                    <p>Испытайте удобство профессионального ухода.</p>
                                                </div>
                                                <div class="prices">
                                                    <h3>250 000 руб<span>/ год</span></h3>
                                                </div>
                                            </div>
                                            <ul>
                                                <li>Сезонная посадка растений</li>
                                                <li>Осенняя уборка и план полива</li>
                                                <li>Подбор растений под участок</li>
                                                <li>Установка систем полива</li>
                                            </ul>
                                            <a href="contact.php">Выбрать план</a>
                                        </div>
                                        <div class="shape"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/price-shape.png"alt=""></div>
                                    </div>
                                </div>
                                <div class="col col-lg-6 col-md-6 col-12">
                                    <div class="pricing-item wow fadeInRightSlow"
                                        data-wow-duration="1000ms">
                                        <div class="pricing-item-inner" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/images/pricing-bg.jpg) no-repeat center top; background-size: cover;">
                                            <div class="price-wrap">
                                                <div class="price-plan">
                                                    <span>Премиум план</span>
                                                    <p>Максимальный уход и индивидуальный подход.</p>
                                                </div>
                                                <div class="prices">
                                                    <h3>350 000 руб<span>/ год</span></h3>
                                                </div>
                                            </div>
                                            <ul>
                                                <li>Сезонная посадка растений</li>
                                                <li>Осенняя уборка и план полива</li>
                                                <li>Подбор растений под участок</li>
                                                <li>Установка систем полива</li>
                                            </ul>
                                            <a href="contact.php">Выбрать план</a>
                                            <div class="badge">
                                                <span>Самый популярный</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-shape"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pricing-shape.png" alt=""></div>
</div>
<!-- end of pricing-section -->

<!-- start of video-area -->
<div class="video-area"
    style="background: url(<?php echo get_template_directory_uri(); ?>/assets/images/vedio-bg.jpg) no-repeat center top; background-size: cover;">
    <div class="container">
        <div class="video-wrap">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="video-right-img">
                        <div class="v-btn">
                            <a href="https://www.youtube.com/embed/A6rRn9jN-bw" data-type="iframe"
                                class="open-video"><i class="icon-video"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of video-area  -->

<!--Start testimonial-section-->
<section class="testimonial-section ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="ch-top-title-s2">
                    <span>Отзывы наших клиентов</span>
                    <h2 class="site-split-text ch-split-in-up">Что клиенты говорят о нас</h2>
                </div>
            </div>

        </div>
        <div class="row align-items-center">
            <div class="testimonial-items testimonial-active owl-carousel">
                <div class="testimonial-item">
                    <div class="testimonial-item-inner">
                        <div class="testimonial-text">
                            <ul class="ratting">
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                            </ul>
                            <p>Уход просто отличный! Мой сад никогда не выглядел так ухоженно. Спасибо за качественный подход!</p>
                            <div class="info-text-bio">
                                <h4>Адам Арсанов</h4>
                                <span>Директор компании</span>
                            </div>
                        </div>
                        <div class="info-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial/img-1.jpg" alt="">
                            <div class="quote"><i class="icon-quote-right-1"></i></div>
                            <div class="t-shape"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial/shape.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-item-inner">
                        <div class="testimonial-text">
                            <ul class="ratting">
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                            </ul>
                            <p>Очень довольна результатом! Быстрая работа, качественный уход и приятное общение. Рекомендую их!</p>
                            <div class="info-text-bio">
                                <h4>Лиза Русланова</h4>
                                <span>Клиника "Здоровье"</span>
                            </div>
                        </div>

                        <div class="info-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial/img-2.jpg" alt="">
                            <div class="quote"><i class="icon-quote-right-1"></i></div>
                            <div class="t-shape"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial/shape.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial/shape2.png" alt=""></div>
    <div class="shape-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial/shape3.png" alt=""></div>
</section>
<!--End testimonial-section-->

<!--Start brand-section-->
<div class="brand-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="brand-slider owl-carousel">
                    <div class="brand-item"><i><img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand/brand-1.png" alt=""></i>
                    </div>
                    <div class="brand-item"><i><img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand/brand-2.png" alt=""></i>
                    </div>
                    <div class="brand-item"><i><img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand/brand-3.png" alt=""></i>
                    </div>
                    <div class="brand-item"><i><img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand/brand-4.png" alt=""></i>
                    </div>
                    <div class="brand-item"><i><img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand/brand-5.png" alt=""></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End brand-section-->

<!-- start faq-section -->
<div class="faq-section">
    <div class="faq-top-bg"
        style="background: url(<?php echo get_template_directory_uri(); ?>/assets/images/faq/faq-bg.jpg) no-repeat center top; background-size: cover;">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-lg-1 order-2">
                <div class="faq-section-left">
                    <div class="ch-top-title">
                        <span>Часто задаваемые вопросы</span>
                        <h2>Ответы на популярные вопросы</h2>
                    </div>
                    <div class="faq-item">
                        <div class="accordion" id="accordionExample">

                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        Как часто нужно поливать растения?
                                    </button>
                                </h3>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Частота полива зависит от типа растений, сезона и климата. В среднем, поливать стоит 2–3 раза в неделю, избегая пересыхания или избыточной влаги.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        Какие удобрения самые эффективные?
                                    </button>
                                </h3>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Компост, перегной, зола и настои трав помогают питать растения без химии, улучшая их рост и здоровье.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        Как защитить растения от вредителей?
                                    </button>
                                </h3>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Используйте натуральные методы — высаживайте защитные растения, применяйте настои чеснока и лука, а также привлекайте полезных насекомых, таких как божьи коровки.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1">
                <div class="contact-form-area">
                    <div class="shape"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/faq/top-shape.png" alt=""></div>
                    <div class="contact-form-area-inner">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="contact-top-title">
                                    <span>Свяжитесь с нами</span>
                                    <h2>Отправьте сообщение</h2>
                                </div>
                            </div>
                        </div>

                        <form method="post" class="contact-activation" id="contact-form-mejor"
                            novalidate="novalidate">
                            <div class="row">
                                <div class="col-md-12 col-12 form-field">
                                    <input disable type="text" class="form-control" name="name" id="name"
                                        placeholder="Ваше имя" autocomplete="name">
                                </div>
                                <div class="col-md-12 col-12 form-field">
                                    <input disable type="email" class="form-control" name="email" id="email"
                                        placeholder="Ваш email">
                                </div>
                                <div class="col-md-12 col-12 form-field">

                                    <input disable type="text" class="form-control" name="phone" id="phone"
                                        placeholder="Ваш номер телефона">
                                </div>
                                <div class="col-md-12 col-12 form-field">

                                    <textarea disable name="message" id="message"
                                        placeholder="Ваше сообщение"></textarea>
                                </div>
                                <div class="col-md-12 col-12">

                                    <div class="submit-area">
                                        <button type="submit" class="ch-btn-style-1"><span>Отправить сообщение</span></button>
                                        <div id="loader">
                                            <i class="ti-reload"></i>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix error-handling-messages">
                                <div id="success">Спасибо! Сообщение отправлено</div>
                                <div id="error"> Ошибка при отправке сообщения. Пожалуйста, попробуйте снова позже. </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
    <div class="left-man wow fadeInLeft" data-wow-duration="1600ms"><img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/faq/left-man.png" alt=""></div>
    <div class="right-shape wow fadeInRight" data-wow-duration="1600ms"><img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/faq/right.png" alt=""></div>
</div>
<!-- end faq-section -->

<!-- start ch-blog-area -->
<section class="ch-blog-area ptb-120">
    <div class="container">
        <div class="ch-top-title-s2">
            <span>БЛОГ</span>
            <h2 class="site-split-text ch-split-in-up">Новости & Статьи</h2>
        </div>
        <div class="blog-items">
            <div class="row">

                <div class="col col-lg-4 col-md-6 col-12">
                    <div class="blog-item wow fadeInUp" data-wow-duration="1200ms">
                        <div class="blog-img middle-shade">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog-1.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="blog-content-top">
                                <ul>
                                    <li><i class="icon-user"></i> Автор: Керим</li>
                                    <li><i class="icon-price-tag-1"></i> Уход за растениями</li>
                                </ul>
                                <div class="date">
                                    <span>12 Окт</span>
                                </div>
                            </div>
                            <h2><a href="blog-single.php">Выбор растений для экономии воды в саду</a></h2>
                            <div class="blog-bottom-btn">
                                <a href="blog-single.php" class="ch-btn-style-1">Читать далее</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4 col-md-6 col-12">
                    <div class="blog-item wow fadeInUp" data-wow-duration="1400ms">
                        <div class="blog-img middle-shade">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog-2.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="blog-content-top">
                                <ul>
                                    <li><i class="icon-user"></i> Автор: Керим</li>
                                    <li><i class="icon-price-tag-1"></i> Урожай</li>
                                </ul>
                                <div class="date">
                                    <span>20 Окт</span>
                                </div>
                            </div>
                            <h2><a href="blog-single.php">Как выбрать растения с минимальным поливом</a></h2>
                            <div class="blog-bottom-btn">
                                <a href="blog-single.php" class="ch-btn-style-1">Читать далее</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col col-lg-4 col-md-6 col-12">
                    <div class="blog-item wow fadeInUp" data-wow-duration="1600ms">
                        <div class="blog-img middle-shade">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog-3.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="blog-content-top">
                                <ul>
                                    <li><i class="icon-user"></i> Автор: Керим</li>
                                    <li><i class="icon-price-tag-1"></i> Садоводство</li>
                                </ul>
                                <div class="date">
                                    <span>10 Окт</span>
                                </div>

                            </div>
                            <h2><a href="blog-single.php">Оптимальный выбор растений для водных садов</a></h2>
                            <div class="blog-bottom-btn">
                                <a href="blog-single.php" class="ch-btn-style-1">Читать далее</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end ch-blog-area -->

<!-- start ch-cta-area -->
<section class="ch-cta-area">
    <div class="container">
        <div class="cta-items">
            <div class="cta-text">
                <h2>Мы заботимся о вашем саду</h2>
            </div>
            <div class="cta-img wow fadeInUp" data-wow-duration="1600ms">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cta/woman.png" alt="">
            </div>
            <div class="cta-btn">
                <a href="contact.php" class="ch-btn-style-3">Связаться с нами</a>
            </div>
            <div class="shape wow fadeInLeftSlow" data-wow-duration="1600ms"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/cta/leaf.png" alt=""></div>
            <div class="shape-2 wow fadeInRightSlow" data-wow-duration="1600ms"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/cta/plane.png" alt=""></div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end ch-cta-area -->

<!-- start of footer-section -->
<?php get_footer(); ?>
