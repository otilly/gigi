<?php get_header(); ?>
<section class="full_content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">
			<?php the_post_thumbnail('page-thumbnail'); ?>
			<h2><?php the_title(); ?></h2>

			<div class="entry">

				<?php the_content(); ?>

			</div>

		</div>

		<?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>
