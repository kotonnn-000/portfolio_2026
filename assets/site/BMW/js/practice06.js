$(function(){
    $('.image').on('inview',function(event, isInView){
        if (isInView){
            $(this).addClass('inview');
        } else {
            $(this).removeClass('inview');
        }
    });
});