<?php get_header(); ?>
<section class="shop_content">
	<h1 class="hanging_title"><a href="<?php bloginfo('url'); ?>/shop">Products</a></h1>
    <p>shop template</p>
	<ul class="products">
		<?php get_sidebar( ); ?>
		<?php
			$args = array(
			'post_type' => 'product',
			'posts_per_page' => 8
			);
			$loop = new WP_Query( $args );
			if ( $loop->have_posts() ) {
				while ( $loop->have_posts() ) : $loop->the_post();
					woocommerce_get_template_part( 'content', 'product' );
				endwhile;
			} else {
				echo __( 'No products found' );
			}
			wp_reset_postdata();
		?>
	</ul>
	<div class="clear"></div>
    <a href="<?php bloginfo('url'); ?>/shop" class="more_btn">More Products</a>
</section>
<section class="shop_content">
	<h1 class="hanging_title"></h1>
	<div class="insta_feed">
	</div>
</section>
<?php get_footer(); ?>
