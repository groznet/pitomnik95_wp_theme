<?php /* Template Name: Contact Page */ ?>

<?php $title='Pitomnik95 - Связаться с нами'?>

<?php get_header(); ?>

<!-- start page-title -->
<?php 
    $mainTitle='Контакты';
    $Title='Главная';
    $Title2 = 'Контакты';
?>
<?php include 'partials/page-header.php'?>

<!-- end page-title -->

<!-- start faq-section -->
<div class="contact-page ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="ch-top-title-s2">
                    <span>Контакты</span>
                    <h2>Свяжитесь с нами</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-info">
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="icon-pin"></i>
                        </div>
                        <div class="info-text">
                            <h3>Адрес</h3>
                            <p>Чеченскоя Республика, трасса Грозный-Аргун 7км</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="icon-call-2"></i>
                        </div>
                        <div class="info-text">
                            <h3>Свяжитесь с нами</h3>
                            <p>Телефон: 8 (928) 393-33-33<br>
                                WhatsApp: 8 (928) 393-33-33</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="icon-email-1"></i>
                        </div>
                        <div class="info-text">
                            <h3>Email</h3>
                            <p>Напишите нам: pitomnik95@mail.ru</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="process">
                    <div class="contact-form-area home">
                        <div class="contact-form-area-inner">
                            <form method="post" class="contact-activation" id="contact-form-mejor"
                                novalidate="novalidate">
                                <div class="row">
                                    <div class="col-md-6 col-12 form-field">
                                        <input disable type="text" class="form-control" name="name" id="name"
                                            placeholder="Ваше имя*" autocomplete="name">
                                    </div>
                                    <div class="col-md-6 col-12 form-field">
                                        <input disable type="email" class="form-control" name="email" id="email"
                                            placeholder="Ваш Email*">
                                    </div>
                                    <div class="col-md-6 col-12 form-field">
                                        <input disable type="text" class="form-control" name="phone" id="phone"
                                            placeholder="Ваш телефон*">
                                    </div>
                                    <div class="col-md-6 col-12 form-field">
                                        <input disable type="text" class="form-control" name="website" id="website"
                                            placeholder="Ваш сайт*">
                                    </div>
                                    <div class="col-md-12 col-12 form-field">
                                        <textarea name="message" id="message"
                                            placeholder="Ваше сообщение*"></textarea>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="submit-area">
                                            <button type="submit" class="ch-btn-style-2"><span>Отправить</span></button>
                                            <div id="loader">
                                                <i class="ti-reload"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix error-handling-messages">
                                    <div id="success">Спасибо! Ваше сообщение отправлено</div>
                                    <div id="error"> Ошибка при отправке сообщения. Попробуйте позже. </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-lg-2">
                <div class="social">
                    <ul>
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-youtube"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-vk"></i></a></li>
                        <li><a href="https://www.instagram.com/pitomnik95/"><i class="ti-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="map ptb-120 pb-0">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26684.786513144463!2d45.832320822553655!3d43.29736800599115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4051d7cca126e025%3A0xfbc63e603a0ea51c!2sSadovyy%20Dekorativnyy%20Pitomnik!5e0!3m2!1sen!2sru!4v1738366311542!5m2!1sen!2sru" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<!-- end faq-section -->

<div class="container">
    <?php
    // content
    the_content();
    ?>
</div>

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
                <a href="#" class="ch-btn-style-3">Свяжитесь с нами</a>
            </div>
            <div class="shape wow fadeInLeftSlow" data-wow-duration="1600ms"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/cta/leaf.png" alt=""></div>
            <div class="shape-2 wow fadeInRightSlow" data-wow-duration="1600ms"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/cta/plane.png" alt=""></div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end ch-cta-area -->


<!-- start of footer-section -->
<?php get_footer(); ?>
<!-- end of site-footer-section -->
