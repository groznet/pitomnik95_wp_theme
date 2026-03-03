<?php $title='Pitomnik95 - Новость'?>

<?php get_header(); ?>

<?php include 'partials/header.php'?>
<!-- end of header -->
<!-- start page-title -->
<?php 
    $mainTitle = get_the_title(get_queried_object_id()) ?: 'Статьи';
    $Title='Главная';
    $Title2 = 'Статьи';
?>
<?php include 'partials/page-header.php'?>
<!-- end page-title -->

<!-- start blog-single-page-area -->
<section class="blog-single-page-area ptb-120">
    <div class="container">
        <div class="row">
            <div class="col col-lg-8 col-md-12 col-12">
                <div class="blog-single-wrap">
                    <div class="blog-single-text">
                        <div class="blog-img middle-shade">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-single/img-1.jpg" alt="">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="blog-single-text-wrap">
                        <ul>
                        <li><strong>Автор: Керим</strong></li>
                            <li><i class="icon-price-tag-1"></i> <?php the_category(', '); ?></li>
                            <li><i class="ti-comments"></i> Комментариев: <?php comments_number('0', '1', '%'); ?></li>
                        </ul>
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                    </div>

                    <div class="tag-share clearfix">
                        <div class="name">
                            <strong>Автор: Керим</strong>
                        </div>
                        <div class="tag">
                            <ul>
                            <?php 
                                $tags = get_the_tags();
                                if ($tags) {
                                    foreach ($tags as $tag) {
                                        echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="share">
                            <ul>
                                <!-- Share buttons -->
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-youtube"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-telegram"></i></a></li>
                            </ul>

                        </div>
                    </div>

                    <?php include 'partials/comments.php'; ?>
                    <?php include 'partials/comment-form.php'; ?>

                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-12">
                <div class="blog-sidebar">
                    <div class="search-widget widget">
                        <h3>Поиск</h3>
                        <form>
                            <div>
                                <input type="text" class="form-control" placeholder="Поиск по сайту">

                                <button type="submit"><i class="ti-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="widget category-widget">
                        <h3>Категории</h3>
                        <ul>
                            <li><a href="#">Садоводство</a></li>
                            <li><a href="#">Ландшафтный дизайн</a></li>
                            <li><a href="#">Посадка и размножение</a></li>
                            <li><a href="#">Уход за садом</a></li>
                            <li><a href="#">Сезонные работы</a></li>
                            <li><a href="#">Новинки питомника</a></li>
                            <li><a href="#">Полезные советы</a></li>
                        </ul>
                    </div>
                    <div class="recent-post widget">
                        <h3>Последние статьи</h3>
                        <div class="post">
                            <div class="post-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recent-post/img-1.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <h4><a href="blog-single.php">Весенний уход за садом: основные шаги для подготовки к сезону.</a></h4>
                                <ul>
                                    <li>Август 05, 2024</li>
                                </ul>
                            </div>
                        </div>
                        <div class="post">
                            <div class="post-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recent-post/img-2.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <h4><a href="blog-single.php">Как выбрать саженцы для ландшафтного дизайна и озеленения участка.</a></h4>
                                <ul>
                                    <li>Март 19, 2022</li>
                                </ul>
                            </div>

                        </div>
                        <div class="post">
                            <div class="post-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recent-post/img-3.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <h4><a href="blog-single.php">Советы по удобрению почвы для здорового роста растений и цветов.</a></h4>
                                <ul>
                                    <li>Сентябрь 21, 2021</li>
                                </ul>
                            </div>
                        </div>
                        <div class="post">
                            <div class="post-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recent-post/img-4.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <h4><a href="blog-single.php">Автоматические системы полива: преимущества и особенности использования.</a></h4>
                                <ul>
                                    <li>Декабрь 22, 2019</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tag-widget widget">
                        <h3>Популярные теги</h3>
                        <ul>
                            <li><a href="blog-single.php">Садоводство</a></li>
                            <li><a href="blog-single.php">Растения</a></li>
                            <li><a href="blog-single.php">Ландшафт</a></li>
                            <li><a href="blog-single.php">Саженцы</a></li>
                            <li><a href="blog-single.php">Уход</a></li>
                            <li><a href="blog-single.php">Цветы</a></li>
                            <li><a href="blog-single.php">Декоративные</a></li>
                            <li><a href="blog-single.php">Растения</a></li>
                            <li><a href="blog-single.php">Озеленение</a></li>
                            <li><a href="blog-single.php">Питомник</a></li>
                            <li><a href="blog-single.php">Полив</a></li>
                            <li><a href="blog-single.php">Почва</a></li>
                            <li><a href="blog-single.php">Удобрения</a></li>
                            <li><a href="blog-single.php">Садовые работы</a></li>
                        </ul>
                    </div>
                    <div class="update-widget widget">
                        <h3>Новости и обновления</h3>
                        <form action="#">
                            <div class="form-group">
                                <input type="text" name="news" id="news" placeholder="Email Адрес*" required>
                                <button type="submit">Подписаться</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end blog-section -->

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
            <div class="shape wow fadeInLeftSlow" data-wow-duration="1600ms"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/cta/leaf.png" alt=""></div>

            <div class="shape-2 wow fadeInRightSlow" data-wow-duration="1600ms"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/cta/plane.png" alt=""></div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end ch-cta-area -->


<!-- start of footer-section -->
<?php get_footer(); ?>
<!-- end of site-footer-section -->