<?php /* Template Name: About Page */ ?>

<?php $title='Pitomnik95 - О Компании'?>

<?php get_header(); ?>
<!-- end of header -->
<!-- start page-title -->
<?php 
    $mainTitle='О Компании';
    $Title='Главная';
    $Title2 = 'О нас';
?>
<?php include 'partials/page-header.php'?>
<!-- end page-title -->

<!-- start of about-area -->
<section class="about-area ptb-120">
    <div class="container">
        <div class="about-wrap">
            <div class="row">
                <div class="col col-lg-6 col-md-12 col-12">
                    <div class="about-left-item  wow fadeInLeftSlow" data-wow-duration="1400ms">
                        <div class="left-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/abou-bg-2.jpg" alt="">
                            <div class="man-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/about.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-6 col-md-12 col-12">
                    <div class="about-right-item wow fadeInRightSlow" data-wow-duration="1400ms">
                        <div class="about-right-text">
                            <span>О компании</span>
                            <h2 class="site-split-text ch-split-in-right">Добро пожаловать в<br> Садовый Центр - Питомник95</h2>
                            <p>Садовый Центр «Питомник95» — это место, где природа и профессионализм объединяются для создания идеального ландшафта. Мы предлагаем широкий выбор растений, садовых инструментов и удобрений, а также помогаем в озеленении участков любой сложности</p>

                            <div class="about-features-wrap">
                                <div class="row">
                                    <div class="col-lg-7 col-sm-6 col-12">
                                        <div class="about-features-item">
                                            <ul>
                                                <li>Садовое оборудование</li>
                                                <li>Садовые инструменты</li>
                                                <li>Садовые растения</li>
                                                <li>Садовые удобрения</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="about-features-right">
                                            <div class="about-features-inner">
                                                <small>У нас</small>
                                                <h3>15+</h3>
                                                <p>лет опыта</p>
                                            </div>
                                            <div class="shape-1">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/shape-1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="about-bottom">
                                    <div class="ab-btn">
                                        <a href="about.php" class="ch-btn-style-1">Узнать больше</a>
                                    </div>
                                    <div class="author-wrap">
                                        <div class="author-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/author.png" alt="">
                                        </div>
                                        <div class="author-text">
                                            <h4>Аслан</h4>
                                            <small>Основатель</small>
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
    <div class="left-shape"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/shape-2.png" alt=""></div>
</section>
<!-- end of about-area  -->

<!-- start of features-area -->
<div class="features-area ptb-120 pt-0">
    <div class="container">
        <div class="features-wrap">
            <div class="row">
                <div class="col col-lg-4 col-md-6 col-12">
                    <div class="features-item wow fadeInUp" data-wow-duration="1000ms">
                        <div class="features-img">
                            <img class="imageParallax" src="<?php echo get_template_directory_uri(); ?>/assets/images/features/img-1.jpg" alt="">
                            <div class="features-icon">
                                <i class="icon-money"></i>
                            </div>
                            <div class="shape"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/features/leaf.png" alt=""></div>
                        </div>
                        <div class="features-text">
                            <span>Оптимизация затрат</span>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4 col-md-6 col-12">
                    <div class="features-item wow fadeInUp" data-wow-duration="1200ms">
                        <div class="features-img">
                            <img class="imageParallax4" src="<?php echo get_template_directory_uri(); ?>/assets/images/features/img-2.jpg" alt="">
                            <div class="features-icon">
                                <i class="icon-badge"></i>
                            </div>
                            <div class="shape"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/features/leaf.png" alt=""></div>
                        </div>
                        <div class="features-text">
                            <span>Заслуженная репутация</span>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4 col-md-6 col-12">
                    <div class="features-item wow fadeInUp" data-wow-duration="1400ms">
                        <div class="features-img">
                            <img class="imageParallax" src="<?php echo get_template_directory_uri(); ?>/assets/images/features/img-3.jpg" alt="">
                            <div class="features-icon">
                                <i class="icon-users"></i>
                            </div>
                            <div class="shape"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/features/leaf.png" alt=""></div>
                        </div>
                        <div class="features-text">
                            <span>Эксперты в садоводстве</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of features-area  -->

<!-- start of ch-choose-area -->
<section class="ch-choose-area ptb-120">
    <div class="pattern" style="background: url(assets/images/choose/pattern.png);"></div>
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
                                        <h3><span class="odometer" data-count="15">00</span>лет</h3>
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
    <div class="left-man wow fadeInLeft" data-wow-duration="1600ms">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/faq/left-man.png" alt="">
    </div>
    <div class="right-shape wow fadeInRight" data-wow-duration="1600ms">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/faq/right.png" alt="">
    </div>
    <div class="container mt-5">
        <?php
        // content
        the_content();
        ?>
    </div>
</div>
<!-- end faq-section -->

<?php get_footer(); ?>