document.addEventListener('DOMContentLoaded', () => {
  



  $('.header-slider').each(function(){
    var $status = $('.slides-num');
    var $slickElement = $(this);
    $slickElement.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
            var i = (currentSlide ? currentSlide : 0) + 1;			   
            $('.slides-num', slick.$slider.parent()).text(i + '/' + slick.slideCount);
        });
    });


    $('.header-slider').slick({
        dots: true,
        fade: true,
        speed: 500,
        arrows:true,
        autoplay: true,
        autoplaySpeed: 2000,
        appendArrows:'.custom-arrows',
        prevArrow: '<button type="button" class="slick-prev"><svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.38904 0.610962L1.5 4.5L5.38904 8.38904" stroke="white"/></svg></button>',
        nextArrow: '<button type="button" class="slick-next"><svg width="5" height="9" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.389038 8.38904L4.27808 4.5L0.389038 0.610962" stroke="white"/></svg></button>',
        appendDots: '.custom-dots'
    });
   
   
   
    $('.scroller a, .explore-box a, .menu-item a').on('click', function() {

      let href = $(this).attr('href');
  
      $('html, body').animate({
          scrollTop: $(href).offset().top - 100
      }, {
          duration: 470,  
          easing: "linear" 
      });
  
      return false;
  });



    $('.villas-slider').slick({
        rows: 2,
        slidesToShow: 2,

        responsive: [
          {
            breakpoint: 750,
            settings: {
              arrows: false,
             
              centerPadding: '40px',
              slidesToShow: 1
            }
          }
        ],
        nextArrow: '<button type="button" class="villa-slick-next">NEXT</button>',
        prevArrow: '',
        appendArrows: '.villas-slider__navigation'
    });


    $(".menu__btn").on('click', () => {
        $(".menu__list ").toggleClass("menu__list--active ");
        $(".menu__btn").toggleClass('menu__btn--active');
    })
    var slides = document.querySelectorAll('.villas-slider .slick-slide');
var nextbtn = document.querySelector('.villas-slider__navigation');
slides.forEach(item => {if(item.getAttribute('aria-hidden') === 'true') {
  item.querySelector('.villas-slider__item').classList.remove('villas-slider--active');
  item.style.opacity = 0.3;
} else {item.style.opacity = 1;
}});



    nextbtn.addEventListener('click', () => {
        slides.forEach(item => {
          if(item.getAttribute('aria-hidden') === 'true') {
            if(item.querySelector('.villas-slider__item').classList.contains('villas-slider--active')) {item.querySelector('.villas-slider__item').classList.remove('villas-slider--active');}
            
            item.style.opacity = 0.3;
          } else {
            if(!item.querySelector('.villas-slider__item').classList.contains('villas-slider--active')) {
              item.querySelector('.villas-slider__item').classList.add('villas-slider--active')
            }
            item.style.opacity = 1;
          }
        });
    });






})