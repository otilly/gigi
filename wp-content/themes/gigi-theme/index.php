<?php get_header(); ?>
<h1 class="hanging_title">Blog</h1>
<section class="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="archive_blogpost">

			<?php the_post_thumbnail('page-thumbnail'); ?>
			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<div class="entry">
				<?php the_excerpt(); ?>
			
				<p><?php the_tags('Tags: ', ', ', '<br />'); ?>
				Posted in <?php the_category(', ') ?> | <?php the_time('F jS, Y') ?></p>

				<a href="<?php the_permalink() ?>">Read more...</a>
			</div>

		</div>

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
</section>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
