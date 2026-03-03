<?php /* Template Name: Project Archive */ ?>

<?php $title='Pitomnik95 - Наши проекты'?>

<?php get_header(); ?>

<!-- end of header -->
<!-- start page-title -->
<?php 
    $mainTitle='Наши проекты';
    $Title='Главная';
    $Title2 = 'Наши проекты';
?>

<?php include 'partials/page-header.php'?>

<!-- end page-title -->

<!-- start of ch-project-area  -->
<section class="ch-project-area style-2 ptb-120 mt-0">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="ch-top-title-s2">
                    <span>Последние проекты</span>
                    <h2 class="site-split-text ch-split-in-up">Посмотрите наши последние проекты</h2>
                </div>
            </div>

        </div>
        <div class="project-wrap">
            <div class="project-active owl-carousel">
                <?php
                $projects = get_posts(array(
                    'post_type' => 'project',
                    'posts_per_page' => -1
                ));
                foreach ($projects as $project) :
                ?>
                    <div class="project-item wow fadeInUp" data-wow-duration="1000ms">
                        <div class="project-item-inner">
                            <div class="project-img middle-shade">
                                <img src="<?php echo get_the_post_thumbnail_url($project->ID, 'full'); ?>" alt="">
                            </div>
                            <div class="project-text">
                                <span><?php echo get_field('project_cat', $project->ID); ?></span>
                                <h2><?php echo get_the_title($project->ID); ?></h2>
                                <a href="<?php echo get_permalink($project->ID); ?>"><i class="icon-arrow-right"></i></a>
                                <span><i class="fa fa-location-dot"></i> <?php echo get_field('location', $project->ID); ?></span><br>
                                <small><i>Клиент: <?php echo get_field('client', $project->ID); ?></i></small>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- end of ch-project-area  -->

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