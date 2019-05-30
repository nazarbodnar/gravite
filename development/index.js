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

    $('.main-nav li a').on('click', function(){
        $('body').removeClass('menu-opened');
        return false;
    }); /*dropdown-language*/

    var swiper = new Swiper('.team .swiper-container', {
        slidesPerView: 1,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        loop: true,
    });

    var testimonialSwiper = new Swiper('.testimonial .swiper-container', {
        slidesPerView: 1,
        loop: true,
        pagination: '.swiper-pagination'
    });


   AOS.init({
 
  duration: 600, // values from 0 to 3000, with step 50ms

});


function scrollTrigger() {
 var counter = document.getElementById('counter');
 var counterPosition = counter.getBoundingClientRect().top;
 var counterPositionPercent = (counterPosition / window.innerHeight) * 100;

 if (counterPositionPercent <= 100) {
    $('.counter-string').each(function() {
      var $this = $(this),
          countTo = $this.attr('data-count');

      $({ countNum: $this.text()}).animate({
            countNum: countTo
        }, 

        {

            duration: 3000,
            easing:'linear',
            step: function() {
              $this.text(Math.floor(this.countNum));
            },
            complete: function() {
              $this.text(this.countNum);
              //alert('finished');
        }
      });  
    });
  }
}
 
window.addEventListener("DOMContentLoaded", scrollTrigger);
window.addEventListener("scroll", scrollTrigger);    
});



