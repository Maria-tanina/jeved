document.addEventListener('DOMContentLoaded', () => {
  



  $('.gallery-slider').each(function(){
    var $status = $('.slides-num');
    var $slickElement = $(this);
    $slickElement.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
            var i = (currentSlide ? currentSlide : 0) + 1;			   
            $('.slides-num', slick.$slider.parent()).text(i + '/' + slick.slideCount);
        });
    });


    $('.gallery-slider').slick({
        dots: true,
        fade: true,
        speed: 500,
        arrows:true,
        appendArrows:'.custom-arrows',
        prevArrow: '<button type="button" class="slick-prev"><svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.38904 0.610962L1.5 4.5L5.38904 8.38904" stroke="white"/></svg></button>',
        nextArrow: '<button type="button" class="slick-next"><svg width="5" height="9" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.389038 8.38904L4.27808 4.5L0.389038 0.610962" stroke="white"/></svg></button>',
        appendDots: '.custom-dots'
    });
   
   
   
    $('.scroller a, .explore-box a').on('click', function() {

      let href = $(this).attr('href');
  
      $('html, body').animate({
          scrollTop: $(href).offset().top
      }, {
          duration: 470,  
          easing: "linear" 
      });
  
      return false;
  });



    $(".menu__btn, .menu__list-item").on('click', () => {
        $(".menu__list ").toggleClass("menu__list--active ");
        $(".menu__btn").toggleClass('menu__btn--active');
    })
    const swiper = new Swiper('.swiper', {
      // Optional parameters
      rewind: true,
      watchSlidesProgress: true,
      grid: {
        fill: 'row',
        rows: 2,
      },
      direction: 'horizontal',
      spaceBetween: 48,
      slidesPerView: 2,
    
      // Navigation arrows
      navigation: {
        nextEl: '.villa-next',
        prevEl: '.villa-prev'
      },
      breakpoints: {
        // when window width is >= 320px
        280: {
          grid: {
            fill: 'row',
            rows: 1,
          },
          slidesPerView: 1,
          spaceBetween: 30,
        },
        750: {
          grid: {
            fill: 'row',
            rows: 1,
          },
          slidesPerView: 2,
          spaceBetween: 35,
        },
        850: {
          grid: {
            fill: 'row',
            rows: 2,
          },
          slidesPerView: 2,
          spaceBetween: 48,
        },
      }
    
    });



    window.addEventListener('resize', () => {
      if(window.innerWidth < 850) {
        document.querySelector('.swiper').style.paddingRight = '';
        document.querySelector('.swiper').style.paddingLeft = '';
      }
    });

    swiper.on('reachEnd', function () {
      if(window.innerWidth > 850) {
      document.querySelector('.swiper').style.paddingRight = 30 + 'px';
      document.querySelector('.swiper').style.paddingLeft = 20 + '%';
      
      }
    });
    
    swiper.on('reachBeginning', function() {
      if(window.innerWidth > 850) {
        document.querySelector('.swiper').style.paddingRight = 20 + '%';
      document.querySelector('.swiper').style.paddingLeft = 30 + 'px';

   
       }
      
    });
    
    let width = document.querySelector('.swiper-slide__img').clientWidth;
    if(window.innerWidth > 1200) { 
      document.querySelector('.villas__content').style.width =  document.querySelector('.swiper-slide__img').clientWidth + 'px';
      document.querySelector('.villas__text').style.width =  document.querySelector('.swiper-slide__img').clientWidth + 'px';
      document.querySelector('.villas__info').style.width = '';
    } else if(window.innerWidth < 1200 && window.innerWidth > 850) {
      document.querySelector('.villas__info').style.width = 2 *document.querySelector('.swiper-slide__img').clientWidth + 48 + 'px';
      document.querySelector('.villas__content').style.width =  '';
      document.querySelector('.villas__text').style.width =  '';
    } else {
      document.querySelector('.villas__content').style.width =  '';
      document.querySelector('.villas__text').style.width =  '';
      document.querySelector('.villas__info').style.width = '';
    }

    window.addEventListener('resize', () => {
      if(window.innerWidth > 1200) { 
        document.querySelector('.villas__content').style.width =  document.querySelector('.swiper-slide__img').clientWidth + 'px';
        document.querySelector('.villas__text').style.width =  document.querySelector('.swiper-slide__img').clientWidth + 'px';
        document.querySelector('.villas__info').style.width = '';
      } else if(window.innerWidth < 1200 && window.innerWidth > 850) {
        document.querySelector('.villas__info').style.width = 2 *document.querySelector('.swiper-slide__img').clientWidth + 48 + 'px';
        document.querySelector('.villas__content').style.width =  '';
        document.querySelector('.villas__text').style.width =  '';
      } else {
        document.querySelector('.villas__content').style.width =  '';
        document.querySelector('.villas__text').style.width =  '';
        document.querySelector('.villas__info').style.width = '';
      }
    }, true);



})