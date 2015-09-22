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
});