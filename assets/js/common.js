(function($){
    // nav event 
    $(document).on('click', '#header > .btn-nav', function(){
        $('body').addClass('opened');
    });
    $(document).on('click', '#nav > .backdrop, #nav .nav-close', function(){
        $('body').removeClass('opened');
    });

    // gnb menu event
    $(document).on('click', '.gnb-menu > ul > li > a', function() {
        if ($(this).parent().hasClass('active')) {
            $(this).parent().removeClass('active');
        } else {
            $(this).parent().siblings('.active').removeClass('active');
            $(this).parent().addClass('active');
        }
    });
})(jQuery);