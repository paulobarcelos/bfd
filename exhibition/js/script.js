/* Author:

*/


$(function(){
	if($('.slider').length){
		var firstItem;
		var previousItem;
		var lis = $('.slider').find('li');
		lis.each(function(i){
			$(this).hide();
			
			if(i==0){
				firstItem = $(this);
			}
			else{
				previousItem.data('next', $(this));
			}
			previousItem = $(this)
		});
		previousItem.data('next', firstItem);
		animateSlider(firstItem);
	}
});

function animateSlider(element){
	element.fadeIn().delay(5000).fadeOut(function(){
		animateSlider(element.data('next'));
	});
}
