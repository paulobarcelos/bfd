$(function(){
    $('input[placeholder], textarea[placeholder]').placeholder();
    $('.flexslider').flexslider({
        directionNav: false,
        controlNav: false, 
    });
    $('.nivoSlider').nivoSlider({
    	effect:"fade",
    	slices: 1, // For slice animations
        boxCols: 1, // For box animations
        boxRows: 1, // For box animations
        directionNav: false, // Next & Prev navigation
        directionNavHide: true, // Only show on hover
        controlNav: true, // 1,2,3... navigation
        controlNavThumbs: true, // Use thumbnails for Control Nav
        controlNavThumbsFromRel: true, // Use image rel for thumbs
        keyboardNav: false, // Use left & right arrows
        pauseOnHover: true, // Stop animation while hovering
    });
 });