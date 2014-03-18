<?php get_header(); ?>
	<?php if(is_shop()) { ?>
		<div class="filter_content" style="float:left;">
			<?php get_sidebar(); ?>
		</div>
		<div class="product_content" style="float:right;">
			<?php woocommerce_content(); ?>
		</div>
	<?php } else { ?>
	<div class="product_content">
		<?php woocommerce_content(); ?>
	</div>
<?php }
get_footer(); ?>