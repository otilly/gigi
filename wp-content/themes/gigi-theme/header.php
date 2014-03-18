<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
			  elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
			  elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
			  elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); }
			  elseif (is_404()) {
		         echo 'Not Found - '; }
			  if (is_home()) {
		        wp_title('');}
			  if (is_page('Home')) {
		         bloginfo('name'); }
			  if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-theme.min.css" type="text/css" />
	<!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" /> -->

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/shop.css" type="text/css" />

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/gigi.css" type="text/css" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!-- Jquery lib -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

	<!-- Basic site scripts -->
	<script src="<?php bloginfo('template_directory'); ?>/js/es-script.js"></script>

	<!-- Instagram scripts -->
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.instagram.js"></script>

	<!-- Flexslider -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/flexslider.css" type="text/css" />
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider-min.js"></script>
	<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/gigi.js"></script>

	<?php wp_head(); ?>
    
    <?php if(is_page('home')) { ?>
    	<script>
			/* $(function(){
				document.getElementById('light').style.display='block';
				document.getElementById('fade').style.display='block';
				$('.black_overlay').height($(document).height());
			}); */
		</script>
    <?php } ?>

	<script>
		$(function(){
			var path = location.href;
			if ( path )
			$('nav#primary_nav a[href="' + path + '"]').attr('class', 'current');
		});
	</script>
	
    <!-- Quantcast Tag -->
	<script type="text/javascript">
		var _qevents = _qevents || [];
		
		(function() {
		var elem = document.createElement('script');
		elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
		elem.async = true;
		elem.type = "text/javascript";
		var scpt = document.getElementsByTagName('script')[0];
		scpt.parentNode.insertBefore(elem, scpt);
		})();
		
		_qevents.push({
		qacct:"p-SVL18w5Y9KLzW"
		});
    </script>

    <noscript>
        <div style="display:none;">
        <img src="//pixel.quantserve.com/pixel/p-SVL18w5Y9KLzW.gif" border="0" height="1" width="1" alt="Quantcast"/>
    </div>
    </noscript>
    
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-42003442-1', 'espadrillenewyork.com');
	  ga('send', 'pageview');
	
	</script>
<!-- End Quantcast tag -->

</head>

<body <?php body_class(); ?>>
	<!-- Facebook -->
	<!-- <div id="fb-root"></div>
	<script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <div id="mobile_header">
		<?php 
			$menuParameters = array(
			  'container'       => false,
			  'echo'            => false,
			  'items_wrap'      => '%3$s',
			  'depth'           => 0,
			  'theme_location' => 'mobile'
			);
			echo '<nav id="mobile_nav">'.strip_tags(wp_nav_menu( $menuParameters ), '<a>' ).'</nav>'; 
		?>
			<div id="mobile_bar">
				<div id="button">
					<span class="t_line"></span>
		            <span class="c_line"></span>
		            <span class="b_line"></span>
				</div>

				<?php global $woocommerce; ?>
				<div class="cart_btn">
					<a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>">
		              	<?php echo 'Cart items: '.$woocommerce->cart->get_cart_contents_count();?> - <?php echo $woocommerce->cart->get_cart_total(); ?>
		          	</a>
				</div>
			</div>
		
	</div> -->
	<!-- <div id="page-wrap">
		<header id="header">
			<div id="header_left">
				<?php $homePage = get_page_by_title('Home')->ID; ?>
				<p><?php echo(get_post_meta($homePage, '_es_header_message', true)); ?></p>
			</div>
			<div id="header_right">
				<div class="social_icons">
					<a class="s_icon g_plus" href="https://plus.google.com/113342162876525037387" rel="publisher"></a>
					<a class="s_icon twitter" href="http://twitter.com/espadrilleNY"></a>
					<a class="s_icon facebook" href="https://www.facebook.com/EspadrilleNewYork"></a>
                    <a class="s_icon insta_g" href="http://instagram.com/espadrillenewyork/#"></a>
					<a class="s_icon mailing" href="<?php bloginfo('url'); ?>/newsletter"></a>
				</div>
				<?php 
					$menuParameters = array(
					  'container'       => false,
					  'echo'            => false,
					  'items_wrap'      => '%3$s',
					  'depth'           => 0,
					  'theme_location' => 'topright'
					);
					echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' ); 
					
					if (function_exists('dynamic_sidebar') && dynamic_sidebar('Right Header')) : else : endif; ?>
				
			</div>
			<a id="home_logo" href="<?php bloginfo('url'); ?>"></a>
			<nav id="navigation">
	            <?php 
					$menuParameters = array(
					  'container'       => false,
					  'echo'            => false,
					  'items_wrap'      => '%3$s',
					  'depth'           => 0,
					  'theme_location' => 'primary'
					);
					echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' ); 
				?>
				<a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>">
	              	<?php echo 'Cart items: '.$woocommerce->cart->get_cart_contents_count();?> - <?php echo $woocommerce->cart->get_cart_total(); ?>
	          	</a>
			</nav>
		</header> -->

