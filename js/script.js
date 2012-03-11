$(function(){
    $('input[placeholder], textarea[placeholder]').placeholder();
    $('.flexslider').flexslider({
        directionNav: false,
        controlNav: false, 
    });
    $('.smallimages img').click(function(){
        $('#bigimage').attr( 'src', $(this).data('big') );
    });
 });