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
		console.log(wScroll);

		// $('.homeMain').css({
		// 	'transform' : 'translate(0px, '+ wScroll /2 +'%)'
		// });
	});
});