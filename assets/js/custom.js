
jQuery(function($) {

    // Scroll to top button
    var ascendoor_fse_scroll_btn = $('.scroll-to-top');
    
    $(window).scroll(function() {
    if ($(window).scrollTop() > 400) {
        ascendoor_fse_scroll_btn.addClass('show');
    } else {
        ascendoor_fse_scroll_btn.removeClass('show');
    }
    });

    ascendoor_fse_scroll_btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop:0
    }, '300');
    });

});
