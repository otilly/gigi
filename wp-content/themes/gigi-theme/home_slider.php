<ol id="slide_nav">
    <?php 
    $args = array( 'post_type' => 'slideshow', 'numberposts' => 4,  'offset' => 0, 'order'=> 'DESC', 'orderby' => 'post_date');
    $postslist = get_posts( $args );
    foreach ($postslist as $post) :  setup_postdata($post); ?>
        <li class="slide_nav_item">
            <a class=""><h3><?php the_title(); ?> »</h3>
            <span class="subtitle"><?php echo get_post_meta($post->ID, '_es_subtitle', true); ?></span>
            </a>
        </li>
    <?php endforeach; ?>
</ol>
<div id="slider" class="flexslider">
    <ul class="slides">
        <?php 
        $args = array( 'post_type' => 'slideshow', 'numberposts' => 4,  'offset' => 0, 'order'=> 'DESC', 'orderby' => 'post_date');
        $postslist = get_posts( $args );
        foreach ($postslist as $post) :  setup_postdata($post); 
        ?>
            <li>
                
                <?php if($post->post_content == "") { ?>

                    <a href="<?php echo get_post_meta($post->ID, '_es_link', true); ?>">
                        <?php the_post_thumbnail('slide-thumbnail'); ?>
                    </a>

                <?php } elseif(get_post_meta($post->ID, '_es_video', true)) { ?>

                    <div class="video_entry">
                        <?php the_content(); ?>
                    </div>

                <?php } else { ?>
                    
                    <?php the_post_thumbnail('slide-thumbnail'); ?>
                    <div class="slide_entry">
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                    </div>

                <?php } ?>

            </li>
        <?php endforeach; ?>
    </ul>
</div>