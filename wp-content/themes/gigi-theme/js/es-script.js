$(document).ready(
    function mobileNav(){
        $('#mobile_nav').css('display', 'none');
        $('#button').click(
            function(){
                if($(this).hasClass('close')) {
                    $(this).removeClass('close');
                    $('#mobile_nav').slideUp();
                    return false;
                } else {
                    $(this).addClass('close')
                    $('#mobile_nav').slideDown();
                    return false;
                }
            }
        );
    });
$(document).ready(
	function showBox(){
		$('.chart_btn').click(
			function(){
				document.getElementById('light').style.display='block';
				document.getElementById('fade').style.display='block';
				$('.black_overlay').height($(document).height());
				return false;
			}
		);
});
$(document).ready(
	function hideBox(){
		$('.close_chart').click(
			function(){
				document.getElementById('light').style.display='none';
				document.getElementById('fade').style.display='none';
				return false;
			}
		);
	}
);
