<?php /* Template Name: FAQ Page */ ?>

<?php $title='Pitomnik95 - Часто задаваемые вопросы'?>

<?php get_header(); ?>
<!-- end of header -->
<!-- start page-title -->
<?php 
    $mainTitle='Часто задаваемые вопросы';
    $Title='Часто задаваемые вопросы';
    $Title2 = 'Часто задаваемые вопросы';
?>
<?php include 'partials/page-header.php'?>

<!-- end page-title -->

<!-- start faq-section -->
<div class="faq-section style-3 ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="ch-top-title-s2">
                    <span>Часто задаваемые вопросы</span>
                    <h2>Что наши клиенты хотят знать?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="faq-section-left">
                    <div class="faq-item">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        1. Как оформить заказ на растение или товар?
                                    </button>
                                </h3>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Оформить заказ можно прямо на сайте через каталог — выберите нужный товар, добавьте в корзину и заполните форму заказа. Также вы можете оформить заказ через WhatsApp или Telegram, указав интересующие позиции.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                        aria-expanded="true" aria-controls="collapseTwo">
                                        2. Как происходит доставка и сколько она стоит? 
                                    </button>
                                </h3>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Мы предлагаем доставку по Чеченской Республике и в соседние регионы. Стоимость зависит от объёма заказа и расстояния. Также возможен бесплатный самовывоз с нашего питомника по трассе Грозный–Аргун (7 км). Подробности уточняйте по телефону.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="true" aria-controls="collapseThree">
                                        3. Можно ли вернуть или обменять растение?  
                                    </button>
                                </h3>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Да, возврат или обмен возможен в течение 3 дней при наличии чека и в случае, если растение не повреждено. Мы всегда идём навстречу клиентам — если возникла проблема, свяжитесь с нами.</p>  
                                    </div>
                                </div>
                            </div>  
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingFour">
                                    <button class="accordion-button" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                        aria-expanded="true" aria-controls="collapseFour">
                                        4. Как ухаживать за купленным растением?    
                                    </button>
                                </h3>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>К каждому растению прилагается краткая инструкция по уходу. Также вы можете обратиться к нашим специалистам за индивидуальной консультацией по посадке и уходу.</p>  
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingFive">
                                    <button class="accordion-button" type="button"  
                                        data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                        aria-expanded="true" aria-controls="collapseFive">
                                        5. Делаете ли вы ландшафтный дизайн и озеленение?
                                    </button>
                                </h3>
                                <div id="collapseFive" class="accordion-collapse collapse"  
                                    aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Да! У нас работает команда дизайнеров, которые могут выехать на участок, составить проект озеленения и реализовать его под ключ. Выезд дизайнера — бесплатно.</p>
                                    </div>
                                </div>
                            </div>  
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingSix">
                                    <button class="accordion-button" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                        aria-expanded="true" aria-controls="collapseSix">
                                        6. Есть ли скидки при оптовом заказе?   
                                    </button>
                                </h3>
                                <div id="collapseSix" class="accordion-collapse collapse"
                                    aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Да, при больших заказах мы предоставляем индивидуальные условия и скидки. Просто свяжитесь с нами для обсуждения оптового сотрудничества.</p>    
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button" type="button"  
                                        data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                        aria-expanded="true" aria-controls="collapseSeven">
                                        7. Какие растения у вас в наличии?
                                    </button>
                                </h3>
                                <div id="collapseSeven" class="accordion-collapse collapse" 
                                    aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>На складе более 1400 наименований: декоративные и плодовые деревья, кустарники, хвойные, цветущие, комнатные растения, газонные травы, а также садовая техника и инвентарь.</p>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
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
