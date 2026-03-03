<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<!-- start page-title -->
<?php 
	$mainTitle 	= 'Товар';
	$Title 		= 'Главная';
	$Title2		= 'Товар';
?>
<!-- Fix path to page-header.php -->
<?php include get_template_directory() . '/partials/page-header.php'?>
<!-- end page-title -->

<div class="shop-page">
	<!-- start dc-product-details-section -->
	<section class="dc-product-details-section section-padding">
		<div class="container">
			<div class="row">
				<!-- woocommerce product loop -->
				<?php woocommerce_product_loop_start(); ?>
				<?php while ( have_posts() ) : the_post(); ?>				
				<div class="col col-md-6">
					<div class="dc-product-single-slider">
						<div class="slider-for">
							<div><?php woocommerce_template_loop_product_thumbnail(); ?></div>
							<?php 
								$gallery_images = get_post_meta(get_the_ID(), '_product_image_gallery', true);
								if ($gallery_images) {
									$gallery_images = explode(',', $gallery_images);
									foreach ($gallery_images as $image_id) {
										echo wp_get_attachment_image($image_id, 'shop_thumbnail');
									}
								}
							?>
						</div>
						<div class="slider-nav">
							<?php 
								// Main thumbnail
								$main_thumb_id = get_post_thumbnail_id();
								if ( $main_thumb_id ) {
									echo wp_get_attachment_image( $main_thumb_id, 'shop_thumbnail' );
								}

								// Gallery thumbnails (if exists)
								$gallery_images = get_post_meta( get_the_ID(), '_product_image_gallery', true );
								if ( $gallery_images ) {
									$gallery_images = explode( ',', $gallery_images );
									foreach ( $gallery_images as $image_id ) {
										echo wp_get_attachment_image( $image_id, 'shop_thumbnail' );
									}
								}
							?>
						</div>

					</div>
				</div>

				<div class="col col-md-6">
					<div class="product-details">
						<h2><?php the_title(); ?></h2>
						<div class="price">
							<!-- Regular and sale price -->
							<?php woocommerce_template_loop_price(); ?>
						</div>
						<div class="rating">
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<span>(5 отзывов)</span>
						</div>
						<!-- Excerpt -->
						<div class="excerpt">
							<?php the_excerpt(); ?>
						</div>
						<div class="pro-single-btn">
							<b>Количество : </b>
							<div class="quantity cart-plus-minus">
								<input type="text" value="1">
							</div>
							<a href="#" class="ch-btn-style-2">Добавить в корзину</a>
							<a href="wishlist.php"><i class="icon icon-heart"></i></a>
						</div>
						<div class="stock">
							<ul>
								<li>В наличии</li>
								<li>Артикул: 218967</li>
							</ul>
						</div>
						<div class="category">
							<ul>
								<li><b>Категории:</b></li>
								<li>Садовое оборудование</li>
							</ul>
						</div>
					</div>
				</div> <!-- end col -->
				<?php endwhile; ?>
				<?php woocommerce_product_loop_end(); ?>
			</div> <!-- end row -->

			<div class="product-tab-area">
				<ul class="nav nav-mb-3 main-tab" id="tab" role="tablist">
					<li class="nav-item" role="presentation">
						<button class="nav-link active" id="descripton-tab" data-bs-toggle="pill"
							data-bs-target="#descripton" type="button" role="tab" aria-controls="descripton"
							aria-selected="true">Описание</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="Specification-tab" data-bs-toggle="pill" data-bs-target="#Specification"
							type="button" role="tab" aria-controls="Specification" aria-selected="false">Свойства</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="Review-tab" data-bs-toggle="pill" data-bs-target="#Review"
							type="button" role="tab" aria-controls="Review" aria-selected="false">Отзывы</button>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade show active" id="descripton" role="tabpanel"
						aria-labelledby="descripton-tab">
						<div class="container">
							<div class="row">
								<div class="col-lg-12">
									<div class="Descriptions-item">
										<?php the_content(); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Specification tab -->
					<div class="tab-pane fade" id="Specification" role="tabpanel" aria-labelledby="Specification-tab">
						<div class="container">
							<div class="comments-area">
								<div class="comments-section">
									<!-- Характеристики в таблице -->
									<!-- Make dynamic from WooCommerce Product Attributes	 -->
									<?php 
										$attributes = get_post_meta( get_the_ID(), '_product_attributes', true );
										if ( $attributes ) {
											echo '<table class="table table-bordered">';
											echo '<thead><tr><th>Характеристика</th><th>Значение</th></tr></thead>';
											echo '<tbody>';
											foreach ( $attributes as $attribute ) {
												echo '<tr><td>' . esc_html( $attribute['name'] ) . '</td><td>' . esc_html( $attribute['value'] ) . '</td></tr>';
											}
											echo '</tbody>';
											echo '</table>';
										}
									?>
								</div>
							</div>
						</div>
					</div>
					<!-- Specification tab -->
					<div class="tab-pane fade" id="Review" role="tabpanel" aria-labelledby="Review-tab">
						<div class="container">
							<div class="comments-area">
								<div class="comments-section">
									<h3 class="comments-title">3 отзыва</h3>
									<ol class="comments">
										<!-- New Top-Level Review (no reply) -->
										<li class="comment even thread-even">
											<div id="div-comment-0">
												<div class="comment-theme">
													<div class="comment-image">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-single/author1.png" alt>
													</div>
												</div>
												<div class="comment-main-area">
													<div class="comment-wrapper">
														<div class="comments-meta">
															<h4>🌿Марина, Грозный<span class="comments-date">18 Сентябрь 2024</span></h4>
														</div>
														<div class="comment-area">
															<p>Очень довольна покупкой! Растение пришло в отличном состоянии, хорошо упаковано. Уже высадили — прижилось без проблем. Цены приятно удивили, буду заказывать ещё.</p>
															<div class="comments-reply">
																<a class="comment-reply-link" href="#"><span>Ответить</span></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>

										<!-- Марина's Review -->
										<li class="comment even thread-even">
											<div id="div-comment-1">
												<div class="comment-theme">
													<div class="comment-image">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-single/author2.png" alt>
													</div>
												</div>
												<div class="comment-main-area">
													<div class="comment-wrapper">
														<div class="comments-meta">
															<h4>🌱Ибрагим, Аргун<span class="comments-date">28 Апрел  2025</span></h4>
														</div>
														<div class="comment-area">
															<p>Прекрасный выбор и быстрая доставка. Питомник действительно заботится о качестве растений. Заказал декоративный кустарник — выглядит даже лучше, чем на фото!</p>
															<div class="comments-reply">
																<a class="comment-reply-link" href="#"><span>Ответить</span></a>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!-- Reply to Марина from Court Henry -->
											<ul class="children">
												<li class="comment">
													<div>
														<div class="comment-theme">
															<div class="comment-image">
																<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-single/author1.png" alt>
															</div>
														</div>
														<div class="comment-main-area">
															<div class="comment-wrapper">
																<div class="comments-meta">
																	<h4>🌼Администрация Pitomnik95 <span class="comments-date">29 Апрель 2025</span></h4>
																</div>
																<div class="comment-area">
																	<p>Ибрагим, спасибо за доверие и добрые слова! Рады, что вы остались довольны. Если понадобятся советы по уходу — всегда на связи!</p>
																	<div class="comments-reply">
																		<a class="comment-reply-link" href="#"><span>Ответить</span></a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</li>
									</ol>

								</div> <!-- end comments-section -->
							</div> <!-- end comments-area -->
						</div>
					</div>
				</div>
			</div>

		</div> <!-- end of container -->
	</section>
	<!-- end of dc-product-details-section -->
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
                src="<?php echo get_template_directory_uri(); ?>/assets/images/cta/leaf.png" alt="">
            </div>
            <div class="shape-2 wow fadeInRightSlow" data-wow-duration="1600ms">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cta/plane.png" alt="">
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end ch-cta-area -->

<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
