<?php /* Template Name: About Page */ ?>

<?php $title='Pitomnik95 - О Компании'?>

<?php get_header(); ?>
<!-- end of header -->
<!-- start page-title -->
<?php 
    $mainTitle = get_the_title();
    $Title='Главная';
    $Title2 = $mainTitle;
?>
<?php include 'partials/page-header.php'?>
<!-- end page-title -->

<!-- start faq-section -->
<div class="faq-section">
    <div class="container mt-5">
        <?php
        // content
        the_content();
        ?>
    </div>
</div>
<!-- end faq-section -->

<?php get_footer(); ?>