$(document).ready(function() {
	$('#loadingIndicator').fadeIn("slow");	
	$.getJSON("https://api.instagram.com/v1/users/241612932/media/recent/?access_token=241612932.b0643fc.9dd92d9276834476bc558331c8c6dee6&count=8&callback=?", function(data) {
		
		$.each(data["data"], function () {
		
			//Append fullsize image to slider area
			$('.instagram').append('<li class="slideItem"></li>');
			var $slideItem = $('.slideItem:last-child');
			instaImage = this.images["standard_resolution"]["url"];
			$slideItem.append('<img class="resultImage" src="'+instaImage+'" alt="image" />');
			
		}); // Each		
		
	}); // JSON
	$('#loadingIndicator').fadeOut("slow");
}); // Ready-function