$(function(){
    $('#header-nav').affix({
        offset: {
            top: 600,
        }
    }); 

    $('[data-spy="scroll"]').each(function () {
        var $spy = $(this).scrollspy('refresh')
    });
});
