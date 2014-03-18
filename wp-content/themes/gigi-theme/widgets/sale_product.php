<?php

	class sale_product_widget extends WP_Widget {

		function sale_product_widget() {
			parent::WP_Widget(false, $name = 'Sale Item');
		}

		function widget($args, $instance) {

			extract( $args );

			global $post;

			$featured_recipe_args = array(
			    'numberposts'     => 1,
			    'orderby'         => 'post_date',
			    'order'           => 'DESC',
			    'post_type'       => 'product',
				'product_cat'     => 'sale'
			);
			$featured_recipes = get_posts( $featured_recipe_args );

			echo $before_widget;
			foreach ($featured_recipes as $post) :  setup_postdata($post);
?>
			<div class="featured_post">
            	<div class="tile_inner">
                    
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('sidebar-thumbnail'); ?></a>
                    <h2 class="hanging-title">
                        <a href="<?php the_permalink(); ?>"><h2><span class="onsale">On sale:</span> <?php the_title(); ?></h2></a>
                    </h2>
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

	add_action('widgets_init', create_function('', 'return register_widget("sale_product_widget");'));

?>