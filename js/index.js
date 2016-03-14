$(document).ready(function() {
var stickyNavTop = $('nav').offset().top;

	var stickyNav = function(){
	var scrollTop = $(window).scrollTop();
		if (scrollTop > stickyNavTop){
			$('nav').addClass('sticky');
		} else {
			$('nav').removeClass('sticky')
		}
		var width = $(window).width()
		if ( width <= 600) {
			$('nav').removeClass('sticky');
		}
	};

	stickyNav();

$(window).scroll(function() {
	stickyNav();
	});
});
