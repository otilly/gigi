$(function () {
	if ( /shop/.test(window.location) ) {
		$('nav').addClass('stick');
		$('body').addClass('unlock-screen');
	}
	if (window.location.hash) {
		$('nav').addClass('stick');
		$('body').addClass('unlock-screen');
		$('html,body').animate({scrollTop: $(window.location.hash).offset().top - 80},'slow');
	}

	$('nav .nav-link').on('click', function (e) {
		$('body').addClass('unlock-screen');
		$('html,body').animate({scrollTop: $($(e.target).attr('href')).offset().top - 80},'slow');
		$('nav').addClass('stick');
	})

	$('.logo-cta').on('click', function (e) {
		e.preventDefault();
		$('html, body').scrollTop('slow');
		$('nav').removeClass('stick');
		$('body').removeClass('unlock-screen');
	})

	
	var menu_open = false;
	$('.nav-band').on('click', function (e) {
		e.preventDefault();
		$('.menu').toggle();
		
		$('nav .nav-link').on('click', function () {
			menu_open = false;
			$('.menu').fadeOut(200);
		})
	})

	$('li.product').on('mouseenter', function (e) {
		$(this).find('.product-overlay').fadeIn(100);
	})

	$('li.product').on('mouseleave', function (e) {
		$(this).find('.product-overlay').fadeOut(100);
	})

	/*$('.press-slider').carousel({
		interval: 2000; ?>
	});
	$('.press-slider .item').each(function(){
	  var next = $(this).next();
	  if (!next.length) {
	    next = $(this).siblings(':first');
	  }
	  next.children(':first-child').clone().appendTo($(this));

	  if (next.next().length>0) {
	    next.next().children(':first-child').clone().appendTo($(this));
	  }
	  else {
	    $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
	  }
	});	*/
	/*var curr_slide = 1;
	$('.press-carousel .carousel .item').on('slid', function () {
		$('.current-slide-num').html(currslide++)
	})

	$('.slide-total-num').html($('.press-carousel .carousel .item').length)*/
})