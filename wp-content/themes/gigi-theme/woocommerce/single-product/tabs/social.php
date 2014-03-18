<?php 
	$thumbID = get_post_thumbnail_id($post->ID);
	$thumbURL = wp_get_attachment_url( $thumbID );
?>              
	<ul class="social">
        <li>
            <a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo $thumbURL; ?>&description=Espadrille%20New%20York" class="pin-it-button" count-layout="horizontal"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a>
        </li>
    	<li>
        	<div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="90" data-show-faces="false"></div>
        </li>
        <li>
        	<div class="g-plus" data-action="share" data-annotation="bubble"></div>
        </li>
        <li>
        	<a href="https://twitter.com/share" class="twitter-share-button" count="vertical">Tweet</a>
        </li>
        
    </ul>