<?php /* Template Name: Blog Page */ ?>

<?php $title='Pitomnik95 - Новости и статьи'?>

<?php get_header(); ?>

<!-- end of header -->
<!-- start page-title -->
<?php 
    $mainTitle='Наш блог';
    $Title='Главная';
    $Title2 = 'Наш блог';
?>
<?php include 'partials/page-header.php'?>
<!-- end page-title -->

<!-- start blog-page-area -->
<section class="blog-page-area ptb-120">
    <div class="container">
        <div class="row">
            <div class="col col-lg-8 col-md-12 col-12">
                <div class="blog-page-left">
                    <!-- Display 3 posts and pagination -->
                    <div class="blog-items">
                        <?php

                        // Get current page number
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                        $args = array(
                            'post_type' => 'post',               // Query for blog posts
                            'posts_per_page' => 3,                // Number of posts per page
                            'paged' => $paged  // Dynamically get the current page number, default to 1
                        );

                        $query = new WP_Query($args);

                        if ( $query->have_posts() ) :
                            while ( $query->have_posts() ) : $query->the_post();
                        ?>
                            <div class="blog-item">
                                <div class="blog-img middle-shade">
                                    <?php
                                    // Display post thumbnail (featured image)
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('full');
                                    } else {
                                        // Default image if no thumbnail exists
                                        echo '<img src="' . get_template_directory_uri() . '/assets/images/blog/default-image.jpg" alt="">';
                                    }
                                    ?>
                                </div>
                                <div class="blog-content">
                                    <ul>
                                        <!-- short month name and day and year -->
                                        <li><i class="icon-calender"></i> <?php echo get_the_date('j M Y'); ?></li>
                                        <li><i class="icon-users"></i> <?php the_author(); ?></li>
                                        <li><i class="ti-comments"></i> <?php comments_number( '0 комментариев', '1 комментарий', '% комментариев' ); ?></li>
                                    </ul>
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <p><?php echo wp_trim_words( get_the_excerpt(), 40 ); ?></p>
                                    <a class="ch-btn-style-2" href="<?php the_permalink(); ?>">Читать далее</a>
                                </div>
                            </div>
                        <?php
                            endwhile;
                        else :
                            echo '<p>No posts found.</p>';
                        endif;
                        ?>
                    </div>

                    <!-- Pagination -->
                    <div class="pagination-wrapper">
                        <ul class="pg-pagination">
                            <?php
                            $pagination_links = paginate_links(array(
                                'total'     => $query->max_num_pages,
                                'current'   => $paged,
                                'prev_text' => '<i class="ti-arrow-left"></i>',
                                'next_text' => '<i class="ti-arrow-right"></i>',
                                'end_size'  => 1,
                                'mid_size'  => 2,
                                'type'      => 'array' // Ensures proper formatting
                            ));

                            if (!empty($pagination_links)) :
                                foreach ($pagination_links as $link) :
                                    // Convert the <span> for current page into <a> for consistency
                                    $link = preg_replace('/<a class="active"/', '<a class="active"', $link);
                                    $link = str_replace('</a>', '</a>', $link);
                                    
                                    echo '<li>' . $link . '</li>';
                                endforeach;
                            endif;
                            ?>
                        </ul>
                    </div>


                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-12">
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
                            <li><a href="#">Уборка территории</a></li>
                            <li><a href="#">Дизайн сада</a></li>
                            <li><a href="#">Тестирование почвы</a></li>
                            <li><a href="#">Орошение сада</a></li>
                            <li><a href="#">Растения для ландшафта</a></li>
                            <li><a href="#">Садоводство</a></li>
                            <li><a href="#">Ландшафтный дизайн</a></li>
                        </ul>
                    </div>
                    <div class="recent-post widget">
                        <h3>Последние статьи</h3>
                        <div class="post">
                            <div class="post-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recent-post/img-1.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <h4><a href="blog-single.php">Огородные культуры, которые сами себя опыляют.</a></h4>
                                <ul>
                                    <li>25 сентября 2024</li>
                                </ul>
                            </div>
                        </div>
                        <div class="post">
                            <div class="post-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recent-post/img-2.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <h4><a href="blog-single.php">Успешно выращивать цветы, даже в ограниченных пространствах.</a></h4>
                                <ul>
                                    <li>28 сентября 2024</li>
                                </ul>
                            </div>
                        </div>
                        <div class="post">
                            <div class="post-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recent-post/img-3.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <h4><a href="blog-single.php">В наших садах, растения, подходящие для теневых зон.</a></h4>
                                <ul>
                                    <li>30 сентября 2024</li>
                                </ul>
                            </div>
                        </div>
                        <div class="post">
                            <div class="post-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recent-post/img-4.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <h4><a href="blog-single.php">Время создать ваш мечты о внешнем пространстве</a></h4>
                                <ul>
                                    <li>21 сентября 2024</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tag-widget widget">
                        <h3>Популярные теги</h3>
                        <ul>
                            <li><a href="blog-single.php">Дизайн</a></li>
                            <li><a href="blog-single.php">Дневное вдохновение</a></li>
                            <li><a href="blog-single.php">Ландшафтный дизайн</a></li>
                            <li><a href="blog-single.php">Тренд</a></li>
                            <li><a href="blog-single.php">Огородные культуры</a></li>
                            <li><a href="blog-single.php">Садоводство</a></li>
                        </ul>
                    </div>
                    <div class="update-widget widget">
                        <h3>Новости и обновления</h3>
                        <p>Подпишись на нашу новостную рассылку, чтобы получать последние новости и обновления.</p>
                        <form>
                            <div class="form-group">
                                <input disabled type="text" name="news" id="news" placeholder="Email адрес*" required>
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
                src="<?php echo get_template_directory_uri(); ?>/assets/images/cta/leaf.png" alt="">
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
