<?php get_header(); ?>
<h1 class="hanging_title"><?php the_title(); ?></h1>
<section class="content <?php post_class() ?>">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">
			<?php the_post_thumbnail('slide-thumbnail'); ?>
			

			<div class="entry">

				<?php the_content(); ?>

			</div>

		</div>

		<?php endwhile; endif; ?>
</section>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
