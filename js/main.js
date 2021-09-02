/* eslint-disable no-console */
/* global */
/* exported */

'use strict';

jQuery('.slider-block').slick({
  infinite: true,
  autoplay: false,
  dots: true,
});

jQuery('.mobile-slider-block').slick({
  infinite: true,
  autoplay: false,
  dots: true,
})

jQuery('.menu-slider').slick({
  infinite: true,
  autoplay: false,
  dots: false,
  arrows: true,
  slidesToShow: 3,
  prevArrow: '<a href="javascript:void(0)" class="menu-prev"></a>',
  nextArrow: '<a href="javascript:void(0)" class="menu-next"></a>',
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});

jQuery('.mobile-show-menu').on('click', function(){
  jQuery('.mobile-menu-block').addClass('active')
  jQuery('body').addClass('lock')
})

jQuery('.mobile-close-menu, .mobile-backdrop').on('click', function(e){
  jQuery('.mobile-menu-block').removeClass('active')
  jQuery('body').removeClass('lock')
})

