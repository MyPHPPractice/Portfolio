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
// 	$('#ff').click(function(){
// 		$('.slide').animate({
// 			'left': '+=200',
// 		}, 500 );
// 	});

// 	$('#rw').click(function(){
// 		$('.slide').animate({
// 			'left': '-=200',
// 		}, 500 );
// 	});

// });




// 		$( "#ff" ).click(function() {
//   		$( ".scroll" ).animate({ "left": "+=200px" }, "slow" );
// 	});
 
<<<<<<< HEAD
// 	$( "#rw" ).click(function(){
//   		$( ".scroll" ).animate({ "right": "+=200px" }, "slow" );
// 	});
=======
	$( "#rw" ).click(function(){
  		$( ".scroll" ).animate({ "right": "+=200px" }, "slow" );
	});
>>>>>>> master

// var $ = function (id){
// 	return document.getElementById(id);
// }
// var width = window.innerWidth;

// if (width <= 600) {
// 	$('nav').style.display = "none"
// }
