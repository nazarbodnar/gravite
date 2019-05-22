$(document).ready(function () {
    $('.bg-img').each(function() {
        $(this).css('background-image', 'url(' + $(this).find('> img').attr('src') + ')').find('> img').hide();
    });
    $('<a href="#" class="open-menu"><span></span>Open Menu</a>').appendTo('#header');
    $('<span class="fader"/>').appendTo('#header');
    $('.open-menu').click(function(){
        $('body').toggleClass('menu-opened');
        return false;
    });//btn-open-manu
    $('.btn-scroll').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
    });
    /*btn-scroll*/
});

$(window).on('scroll', function(){
    if ($(window).scrollTop() >= $( window ).height()) {
        $('#header').addClass('fixed-header');
    }
    else {
        $('#header').removeClass('fixed-header');
    }
});