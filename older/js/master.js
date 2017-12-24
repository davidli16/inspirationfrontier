$(function() {

	var toolbar = $('#toolbar');
		 
	// Toolbar collapsing
	$('.collapse').click(function() {
		toolbar.slideToggle("fast");
		if(toolbar.hasClass('hidden')) {
			$('#menu #left .collapse').attr('src','/img/menu-left.jpg');
			$('#menu #right .collapse').attr('src','/img/menu-right.jpg');
			$('#body').css('padding-bottom', '117px');
		} else {
			$('#menu #left .collapse').attr('src','/img/menu-left-up.jpg');
			$('#menu #right .collapse').attr('src','/img/menu-right-up.jpg');
			$('#body').css('padding-bottom', '45px');
		}
		toolbar.toggleClass('hidden');
	});

	// Menu fading
	$('#mainBox ul li a span').hide();	
	$('#mainBox ul li a').removeClass('hover');
	
	$('#mainBox ul li a').hover(
		function() {
			$(this).children('span').fadeIn("fast");
		},
		function() {
			$(this).children('span').fadeOut("fast");	
		}
	);
		
});