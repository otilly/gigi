<?php

	class featured_recipe_widget extends WP_Widget {

		function featured_recipe_widget() {
			parent::WP_Widget(false, $name = 'Featured Recipe');
		}

		function widget($args, $instance) {

			extract( $args );

			global $post;

			$featured_recipe_args = array(
			    'numberposts'     => 1,
			    'orderby'         => 'post_date',
			    'order'           => 'DESC',
			    'post_type'       => 'recipes',
				'meta_key'        => '_as_featured'
			);
			$featured_recipes = get_posts( $featured_recipe_args );

			echo $before_widget;
			foreach ($featured_recipes as $post) :  setup_postdata($post);
?>
			<div class="featured_post">
            	<div class="tile_inner">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('tile-thumbnail'); ?></a>
                    <?php if(get_post_meta($post->ID, '_as_by_aaron', true)) { ?><span class="by_aaron red">Recipe by Aarón</span><?php } ?>
                    <div class="entry">
                        <a href="<?php the_permalink(); ?>"><h2>Featured Recipe: <?php the_title(); ?></h2></a>
                        <span class="recipe_meta"><?php echo get_the_term_list( $post->ID, 'recipetypes', '', ', ', '' ); ?> - <?php the_time('M j, Y') ?></span>
                    </div>
                </div>
            </div>
<?php 
			endforeach;
			echo $after_widget;
			
		}

		function update($new_instance, $old_instance) {
			$instance = $old_instance;
			return $instance;
		}

		function form($instance) {	
?>
			<p>Display the featured recipe</p>
<?php	
		}

	}

	add_action('widgets_init', create_function('', 'return register_widget("featured_recipe_widget");'));

?>