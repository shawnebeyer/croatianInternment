$(function(){
	//your jQuery here
	var $grid = $('.grid').imagesLoaded( function() {
	    $grid.masonry({
	    	columnWidth: 0,
	    	itemSelector: '.grid-item',
	      	percentPosition: true
	      // columnWidth: 1000
	    }); 
	});

	$(window).scroll(function() {
		
		var wScroll = $(this).scrollTop();
		// console.log(wScroll);
		// $('.navContainer').css({
		// 	'position' : 'fixed'
		// });
		// $('.homeMain').css({
		// 	'transform' : 'translate(0px, '+ wScroll /2 +'%)'
		// });
		// console.log($(window).scrollTop())
		  // if ($(wScroll).scrollTop() < 1280) {
		  //   $('.navContainer').addClass('.navFixed');
		  //   console.log('hi');
		  // }
		  // if ($(wScroll).scrollTop() < 281) {
		  //   $('.navContainer').removeClass('.navFixed');
		  // }
	});

	$(".navContainer").stick_in_parent();
});