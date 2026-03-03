<!-- Shop page: This page shows all products - working -->  

<?php $title='Pitomnik95 - Каталог товаров'?>

<?php get_header(); ?>

<?php 
    $mainTitle='Каталог товаров';
    $Title='Главная';
    $Title2 = 'Каталог товаров';
?>

<?php include 'partials/page-header.php'?>

<!-- end page-title -->

<div class="shop-page">
    <!-- start of product-area -->
    <div class="product-area ptb-120">
        <div class="container">
            <div class="product-wrap">
                <div class="row">
                    <!-- woocommerce product loop -->
                    <?php woocommerce_product_loop_start(); ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                    <div class="col col-lg-4 col-sm-6 col-12">

                        <div class="product-item wow fadeInUp" data-wow-duration="1600ms">
                            <div class="product-img">
                                <a href="<?php the_permalink(); ?>">
                                    <?php echo woocommerce_get_product_thumbnail(); ?>
                                </a>
                                <div class="product-cart">
                                    <?php woocommerce_template_loop_add_to_cart(); ?>
                                </div>
                            </div>

                            <div class="product-text">
                                
                                <!-- Make rating dynamic using -->
                                <?php $rating = woocommerce_template_loop_rating(); ?>
                                <ul>
                                    <?php for ($i = 0; $i < 5; $i++) : ?>
                                        <li><i class="icon-star"></i></li>
                                    <?php endfor; ?>
                                </ul>
                                
                                <a href="<?php the_permalink(); ?>">
                                    <?php woocommerce_template_loop_product_title(); ?>
                                </a>
                                <?php woocommerce_template_loop_price(); ?>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>

                    <div class="pagination-wrapper">
                        <ul class="pg-pagination">
                            <?php woocommerce_pagination(); ?>
                        </ul>
                    </div>
                    <?php woocommerce_product_loop_end(); ?>
                </div>
                <!-- row end -->
            </div>
        </div>
    </div>
    <!-- end of product-area  -->
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

<?php get_footer(); ?>
