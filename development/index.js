$(document).ready(function () {
    $('.bg-img').each(function() {
        $(this).css('background-image', 'url(' + $(this).find('> img').attr('src') + ')').find('> img').hide();
    });

    $('.open-menu').click(function(){
        $('body').toggleClass('menu-opened');
        return false;
    });//btn-open-manu
    $('.btn-scroll').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
    });
    /*btn-scroll*/

    $('.top-nav .btn-lang').on('click', function(){
        $(this).parent('li').toggleClass('opened');
        return false;
    }); /*dropdown-language*/


    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 1,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        loop: true
    });
});
