<section class="dc-hero-area dc-hero-area-style-4"
    style="background: url(<?php echo get_template_directory_uri(); ?>/assets/images/hero/hero-5.jpg) no-repeat center top; background-size: cover;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col col-lg-7 col-md-12 col-12">
                <div class="hero-content wow fadeInLeftSlow" data-wow-duration="1200ms">
                    <div class="hero-top-title">
                        <div class="hero-top-title-inner">
                            <i><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tea-leaf2.png"alt=""></i>
                            <span>ЗАБРОНИРОВАТЬ УСЛУГИ С СКИДКОЙ 25%</span>
                        </div>
                    </div>
                    <div class="hero-title">
                        <h2>Создаём идеальный сад с доставкой растений</h2>
                    </div>
                    <p>Мы подберём растения и привезём их к вам — просто, удобно и с заботой о результате.</p>
                    <div class="btns">
                        <a href="services.php" class="ch-btn-style-1">НАШИ УСЛУГИ</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-5">
                <div class="contact-form-area home wow fadeInRightSlow" data-wow-duration="1200ms">
                    <div class="shape"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/faq/top-shape.png" alt=""></div>
                    <div class="contact-form-area-inner">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="contact-top-title">
                                    <h2>Задать вопрос?</h2>
                                </div>
                            </div>

                        </div>
                        <form method="post" class="contact-activation" id="contact-form-mejor"
                            novalidate="novalidate">
                            <div class="row">
                                <div class="col-md-12 col-12 form-field">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Имя" autocomplete="name">
                                </div>
                                <div class="col-md-6 col-12 form-field">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                </div>
                                <div class="col-md-6 col-12 form-field">
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Телефон">      
                                </div>
                                <div class="col-md-12 col-12 form-field">
                                    <textarea name="message" id="message" placeholder="Сообщение"></textarea>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="submit-area">
                                        <button type="submit" class="ch-btn-style-2"><span>ОТПРАВИТЬ</span></button>
                                        <div id="loader">
                                            <i class="ti-reload"></i>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix error-handling-messages">
                                <div id="success">Спасибо! Сообщение отправлено</div>
                                <div id="error"> Ошибка при отправке сообщения. Пожалуйста, попробуйте еще раз
                                    позже. </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="left-shape"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/tools.png" alt=""></div>
</section>