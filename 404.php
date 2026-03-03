
<?php get_header(); ?>

<!-- end of header -->
<!-- start page-title -->
<?php 
    $mainTitle='Error 404';
    $Title='Home';
    $Title2 = 'Error 404';
?>
<?php include './partials/page-header.php'?>

<!-- end page-title -->

<!-- start opps-404-section -->
<section class="opps-404-section ptb-120">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="content clearfix">
                    <div class="error">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/404.png" alt>
                    </div>
                    <div class="opps-message">
                        <h3>Ой! Страница не найдена</h3>
                        <p>Страница, которую вы ищете, может быть удалена, переименована или временно недоступна.</p>
                        <a href="<?php echo home_url(); ?>" class="ch-btn-style-2">На главную</a>
                    </div>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end opps-404-section -->

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
                <a href="<?php echo home_url(); ?>" class="ch-btn-style-3">На главную</a>
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
