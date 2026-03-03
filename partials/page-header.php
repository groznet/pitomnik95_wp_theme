<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="breadcumb-wrap">
                    <?php if (!empty($mainTitle)) : ?>
                        <h2><?php echo $mainTitle;?></h2>
                    <?php endif; ?>
                    <ol>
                        <?php if (!empty($Title)) : ?>
                            <li><a href="<?php echo home_url(); ?>"><i class="icon-36"></i> <?php echo $Title;?></a></li>
                        <?php endif; ?>
                        <?php if (!empty($Title2)) : ?>
                        <li><?php echo $Title2;?></li>
                        <?php endif; ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="shape wow fadeInDown" data-wow-duration="1400ms"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-shape.png" alt=""></div>
</section>
