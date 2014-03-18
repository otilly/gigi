<?php get_header(); ?>
<h1 class="hanging_title">Blog</h1>
<section class="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php the_post_thumbnail('slide-thumbnail'); ?>
			<h2><?php the_title(); ?></h2>
			
			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">
				
				<?php the_content(); ?>
				<?php the_tags( 'Tags: ', ', ', ''); ?>

			</div>
		</div>

	<?php endwhile; endif; ?>
</section>	
<?php get_sidebar(); ?>

<?php get_footer(); ?>