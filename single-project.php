<?php $title='Pitomnik95 - Детали проекта'?>

<?php get_header(); ?>

<?php include 'partials/header.php'?>
<!-- end of header -->
<!-- start page-title -->
<?php 
    $mainTitle = get_the_title(get_queried_object_id()) ?: 'Детали проекта';
    $Title='Главная';
    $Title2 = 'Детали проекта';
?>

<?php include 'partials/page-header.php'?>
<!-- end page-title -->

<div class="service-single-page project-single ptb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="service-details">
                    <div class="details-img">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-single/single.jpg" alt="">
                        <?php endif; ?>                 
                    </div>
                    <h2>Описание проекта</h2>
                    <p><?php the_content(); ?></p>
                    <div class="details-text">
                        <div class="details-items">
                            <div class="row">
                                <!-- Using ACF to show image fields: before and after -->
                                <!-- Before Image -->
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h2>До</h2>
                                    <?php 
                                    $before = get_field('before'); 
                                    // var_dump($before); // Debugging

                                    if ($before) : 
                                        $before_url = is_array($before) ? $before['url'] : $before;
                                    ?>
                                        <a href="<?php echo esc_url($before_url); ?>" target="_blank"><img src="<?php echo esc_url($before_url); ?>" alt=""></a>
                                    <?php endif; ?>
                                </div>

                                <!-- After Image -->
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h2>После</h2>
                                    <?php 
                                    $after = get_field('after'); 
                                    //var_dump($after); // Debugging

                                    if ($after) : 
                                        $after_url = is_array($after) ? $after['url'] : $after;
                                    ?>
                                        <a href="<?php echo esc_url($after_url); ?>" target="_blank"><img src="<?php echo esc_url($after_url); ?>" alt=""></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="process">
                            <h3>Процесс нашей работы</h3>
                            <p>В рамках данного проекта была проведена комплексная работа по озеленению и благоустройству территории с учетом пожеланий клиента и особенностей местности. Мы разработали индивидуальный ландшафтный дизайн, подобрали оптимальные виды растений и декоративных элементов, а также организовали систему ухода за зелеными насаждениями.</p>
                            <ul>
                                <li>Разработку детального ландшафтного проекта, учитывающего специфику участка.</li>
                                <li>Выбор и посадку качественных саженцев от проверенных поставщиков.</li>
                                <li>Организацию эффективной системы полива и освещения.</li>
                                <li>Установку декоративных элементов и садовых аксессуаров.</li>
                                <li>Комплексный уход за зелеными насаждениями для их долгосрочного сохранения.</li>
                            </ul>
                        </div>
                        <div class="process">
                            <div class="contact-form-area home">
                                <div class="contact-form-area-inner">
                                    <div class="row">
                                        <div class="col-lg-12 col-12">
                                            <div class="contact-top-title">
                                                <h2>Оставьте заявку на консультацию</h2>
                                            </div>
                                        </div>
                                    </div>

                                    <form method="post" class="contact-activation" id="contact-form-mejor"
                                        novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-md-12 col-12 form-field">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Имя" autocomplete="name">
                                            </div>
                                            <div class="col-md-6 col-12 form-field">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                            </div>
                                            <div class="col-md-6 col-12 form-field">
                                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Телефон">
                                            </div>
                                            <div class="col-md-12 col-12 form-field">
                                                <textarea name="message" id="message" placeholder="Сообщение" placeholder="Message"></textarea>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="submit-area">
                                                    <button type="submit" class="ch-btn-style-2"><span>Оставить заявку</span></button>

                                                    <div id="loader">
                                                        <i class="ti-reload"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix error-handling-messages">
                                            <div id="success">Спасибо! Сообщение отправлено</div>
                                            <div id="error"> Ошибка при отправке сообщения. Попробуйте еще раз позже. </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-sidebar">
                    <div class="search-widget widget">
                        <h3>Поиск</h3>
                        <form>
                            <div>
                                <input type="text" class="form-control" placeholder="Поиск">

                                <button type="submit"><i class="ti-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="widget category-widget">
                        <h3>Категории</h3>
                        <ul>
                            <li><a href="#">Очистка территории</a></li>
                            <li><a href="#">Озеленение</a></li>
                            <li><a href="#">Благоустройство</a></li>
                            <li><a href="#">Садовое оборудование</a></li>
                            <li><a href="#">Садовые растения</a></li>
                            <li><a href="#">Садовые инструменты</a></li>
                            <li><a href="#">Садоводство</a></li>
                            <li><a href="#">Садовое оборудование</a></li>
                        </ul>
                    </div>

                    <div class="update-widget widget">
                        <h3>Новости и обновления</h3>
                        <form action="#">
                            <div class="form-group">

                                <input type="text" name="news" id="news" placeholder="Email Адрес*"
                                    required>
                                <button type="submit">Подписаться</button>
                            </div>
                        </form>

                    </div>
                    <div class="widget">
                        <h3>Использованные растения</h3>

                        <!-- carousel of products -->
                        <div class="owl-carousel owl-theme">
                            <?php 
                            $ids_of_plants  = get_field('products_used');
                            // var_dump($plants);

                            // Get WC products by ids
                            $products = get_posts(array(
                                'post_type' => 'product',
                                'post__in' => $ids_of_plants,
                            ));

                            if ($products) :
                                foreach ($products as $product) :
                                    echo '<p>' . $product->post_title . '</p>';
                                endforeach;
                            endif;
                            ?>
                        </div>
                    </div>
                    <div class="widget">
                        <h3>Использованные растения</h3>

                        <!-- carousel of products -->
                        <div class="owl-carousel owl-theme">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-single/gallery2.jpg" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-single/gallery2.jpg" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-single/gallery2.jpg" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
<!-- start ch-cta-area -->
<section class="ch-cta-area">
    <div class="container">
        <div class="cta-items">
            <div class="cta-text">
                <h2>Мы заботимся о вашем садовом ландшафте</h2>
            </div>
            <div class="cta-img wow fadeInUp" data-wow-duration="1600ms">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cta/woman.png" alt="">

            </div>
            <div class="cta-btn">
                <a href="contact.php" class="ch-btn-style-3">Связаться с нами</a>
            </div>
            <div class="shape wow fadeInLeftSlow" data-wow-duration="1600ms">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cta/leaf.png" alt="">
            </div>
            <div class="shape-2 wow fadeInRightSlow" data-wow-duration="1600ms">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cta/plane.png" alt="">
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end ch-cta-area -->

<!-- start of footer-section -->
<?php get_footer(); ?>
<!-- end of site-footer-section -->