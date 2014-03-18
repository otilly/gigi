<?php

	class instagram_widget extends WP_Widget {

		function instagram_widget() {
			parent::WP_Widget(false, $name = 'instagram');
		}

		function widget($args, $instance) {

			extract( $args );

			echo $before_widget;
			
?>
        <!-- Displayed image -->
        <div class="widget">
            <a class="insta_widget" href="<?php bloginfo('url'); ?>/the-espadrille-life">
            </a>
        </div>
            <script type="text/javascript">
                $(".insta_widget").instagram({
                    userId: '241612932',
                    accessToken: '241612932.b0643fc.9dd92d9276834476bc558331c8c6dee6',
                    image_size:'standard_resolution',
                    show: 1,
                    photoLink: false
                });
                $('.insta_feed').append('<div class="clear"></div>');
            </script>
           <h2 class="hanging_title">The Espadrille Life</h2>
<?php 

			echo $after_widget;
			
		}

		function update($new_instance, $old_instance) {
			$instance = $old_instance;
			return $instance;
		}

		function form($instance) {	
?>
			<p>Display the most recent instagram photo</p>
<?php	
		}

	}

	add_action('widgets_init', create_function('', 'return register_widget("instagram_widget");'));

?>