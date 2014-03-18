<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<img src="<?php echo get_template_directory_uri(); ?>/images/gigi-logo.png" alt="gigiClozeau" class="logo img-responsive">
		</div>
	</div>
	<div class="row about" id="brand-story">
		<div class="col-lg-12">
			<img src="<?php echo get_template_directory_uri(); ?>/images/gigis-world.png" alt="" class="gigis-world img-responsive">
			<img src="<?php echo get_template_directory_uri(); ?>/images/about-share.png" alt="" class="img-responsive">
			<p class="first-p">The daughter of Marie and Alain, born in a universe of design and fashion. She inherited her values from her parents. Beauty is simplicity &amp; la joie de vivre is a feeling born and nour&ndash; ished in love. </p>
			<p>What inspires Gigi most? Marie's wardrobe has always been avant-garde. An inexhaustible source of colors, prints and joy in beauty that taught her originality and the joy of self expression. Alain's bench, where he sculpts delicacy from an unformed mass of wax and metal taught her respect for hand-made work mixed with soul and spirit. Since the beginning, Gigi travelled the world, but finally it's in New York that she feels at home. </p>
			<p>Today Gigi wants to share all of that with the rest of the world through her own creations. Enjoy!!!</p>
			<img src="<?php echo get_template_directory_uri(); ?>/images/hr.png" alt="" class="hr img-responsive">
		</div>
	</div>
</div>
<div class="full-span first-slider">
	<?php echo do_shortcode('[image-carousel category="collection-carousel"]'); ?>
</div>
<div class="full-span second-slider">
	<?php echo do_shortcode('[image-carousel category="press"]'); ?>
</div>
<div class="full-span locations" id="locations">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>WHERE TO BUY</h2>
				<div class="locator-wrap">
					<h3>Find out where to shop</h3>
					<form action="">
						<input type="text" placeholder="ADDRESS" class="form-control">
						<select name="country" id="country" class="form-control">
							<option value="0">COUNTRY</option>
							<option value="1">United States</option>
							<option value="2">France</option>
						</select>
						<input type="submit" val="SEARCH">
					</form>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<img src="<?php echo get_template_directory_uri(); ?>/images/results.png" alt="" class="img-responsive">
			</div>
		</div>
		<div class="row location-results">
			<div class="col-lg-3 col-sm-1 col-xs-1">
				<h3>Bregdorf Goodman<br>New York</h3>
				<hr>
				<p>754 5th Avenue</p>
				<p>New York, NY 10019</p>
				<p>Distance: 0.75miles</p>
				<a href="#">GOOGLE MAPS DIRECTIONS</a>
			</div>
			<div class="col-lg-3 col-sm-1 col-xs-1">
				<h3>Barney's<br>New York</h3>
				<hr>
				<p>660 Madison Avenue</p>
				<p>New York, NY 10065</p>
				<p>Distance: 1.0miles</p>
				<a href="#">GOOGLE MAPS DIRECTIONS</a>
			</div>
			<div class="col-lg-3 col-sm-1 col-xs-1">
				<h3>Bregdorf Goodman<br>New York</h3>
				<hr>
				<p>754 5th Avenue</p>
				<p>New York, NY 10019</p>
				<p>Distance: 0.75miles</p>
				<a href="#">GOOGLE MAPS DIRECTIONS</a>
			</div>
			<div class="col-lg-3 col-sm-1 col-xs-1">
				<h3>Barney's<br>New York</h3>
				<hr>
				<p>660 Madison Avenue</p>
				<p>New York, NY 10065</p>
				<p>Distance: 1.0miles</p>
				<a href="#">GOOGLE MAPS DIRECTIONS</a>
			</div>
		</div>
	</div>
</div>
<div class="full-span contact" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h3>GET IN TOUCH</h3>
				<h4>Have questions? Contact us, and we will be in touch shortly.</h4>
			</div>
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<img src="<?php echo get_template_directory_uri(); ?>/images/follow-us.png" alt="" class="follow-us img-responsive">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<!-- <div class="get-in-touch" id="contact"> -->
				<form action="">
					<div class="row">
						<div class="col-lg-4 col-sm-1 col-xs-1">
							<div class="form-group">
								<label for="first-name" class="hidden-sm hidden-xs">First name</label>
								<input type="text" id="first-name" class="form-control">
							</div>
							<div class="form-group">
								<label for="last-name" class="hidden-sm hidden-xs">Last name</label>
								<input type="text" id="last-name" class="form-control">
							</div>		
						</div>
						<div class="col-lg-4 col-sm-1 col-xs-1">
							<div class="form-group">
								<label for="email" class="hidden-sm hidden-xs">Email Address</label>
								<input type="email" id="email" class="form-control">
							</div>
							<div class="form-group">
								<label for="confirm-email" class="hidden-sm hidden-xs">Confirm Email Address</label>
								<input type="email" id="confirm-email" class="form-control">
							</div>	
						</div>
						<div class="col-lg-3">
							<div class="form-group">
								<label for="message" class="hidden-sm hidden-xs">Your Message</label>
								<textarea name="" id="message" class="form-control" rows="10"></textarea>
							</div>
						</div>
						<div class="col-lg-1">
							<input type="submit" val="SUBMIT">
						</div>
					</div>
				</form>
				<!-- </div>		 -->
			</div>
		</div>
		<div class="row">
			<hr>
			<p class="copyright">&copy; 2014 GIGI CLOZEAU ALL RIGHTS RESEVERED.</p>
		</div>
	</div>
</div>
<nav id="nav">
	<img src="<?php echo get_template_directory_uri(); ?>/images/gigi-logo-sm.jpg" alt="Gigi" class="nav-logo">
	<ul>
		<li><a href="#brand-story">Brand Story</a></li>
		<li><a href="#">The Collection</a></li>
		<li><a href="#">Locations</a></li>
		<li><a href="#">Press</a></li>
		<li><a href="#">Contact</a></li>
		<li><a href="#">En / Fr</a></li>
	</ul>
</nav>
<script>
var nav = document.getElementById("nav");
var stop = (nav.offsetTop);

window.onscroll = function (e) {
    var scrollTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
    // console.log(scrollTop, nav.offsetTop);
    // nav.offsetTop;

    if (scrollTop >= stop) {
        nav.className = 'stick';
    } else {
        nav.className = '';
    }

}
</script>
<?php get_footer(); ?>
