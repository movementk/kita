(function($){
    // full page 사용
    $(document).ready(function(){
        $('#fullpage').fullpage({
            autoScrolling: true,
            scrollHorizontally: true
        });
    });
    // location-guide event
    $(document).on('mouseenter focus', '.guide-list > li > a', function() {
        $(this).parent().siblings().removeClass('active');
        $(this).parent().addClass('active');
    });
    $(document).on('mouseleave', '.guide-list', function() {
        $('.guide-list > li').removeClass('active');
    });
    
    // scroll event
    $(window).load(function(){
        setInterval(function(){
            $('.intro .ico-scroll').toggleClass('on');
        }, 500);
    });
    
    function changeUrl(title, url){
        if(typeof(history.pushState) != "undefined"){
            var obj = { Title: title, ChangeUrl: url };
            history.pushState(obj, obj.Title, obj.ChangeUrl);
        }
    }

    $(document).on("click", ".moveBtn", function(){
        var lang = $(this).attr("data-type");

        jQuery.ajax({
            url: "./ajax_nav.php",
            type : "POST",
            data: "lang="+lang,

            error: function(xhr,textStatus,errorThrown){
            },

            beforeSend: function() {
            },
            success: function(data){
                $('#nav').html(data); 
            },
            complete: function(){
                changeUrl('test',"<?php echo $_SERVER['PHP_SELF']; ?>?lang="+lang);
            }
        });

        var e = $.Event("keydown");
        e.which = 40;
        e.keyCode = 40;
        $(document).trigger(e); 
    });
})(jQuery);