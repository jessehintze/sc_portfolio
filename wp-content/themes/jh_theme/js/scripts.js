(function($) {
    $('#nav-icon3').on('click', function () {
        $('.side-nav').toggleClass('active');
        $('body').toggleClass('open');
    });
    $('#nav-icon3').click(function(){
        $(this).toggleClass('open');
    });
})(jQuery);