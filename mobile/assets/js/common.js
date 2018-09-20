(function($){
    // header scroll
    $(window).on('scroll', function(){
        if ($(this).scrollTop() > 0) {
            $('body').addClass('scrolled');
        } else {
            $('body').removeClass('scrolled');
        }
    });

    // gnb 관련
    $(document).on('click','#header .nav-open', function(){
        $('body').addClass('opened');
    });
    $(document).on('click','#gnb .nav-close, .backdrop', function(){
        $('body').removeClass('opened');
    });
    $(document).on('click', '#gnb .gnb-body > ul > li > a', function() {
        if ($(this).parent().hasClass('active')) {
            $(this).parent().removeClass('active');
        } else {
            $(this).parent().siblings('.active').removeClass('active');
            $(this).parent().addClass('active');
        }
    });
})(jQuery);