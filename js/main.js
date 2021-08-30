/* eslint-disable no-console */
/* global */
/* exported */

'use strict';

jQuery('.slider-block').slick({
  infinite: true,
  autoplay: true,
  dots: true,
});

jQuery('.menu-slider').slick({
  infinite: true,
  autoplay: false,
  dots: false,
  arrows: true,
  slidesToShow: 3,
  prevArrow: '<a href="javascript:void(0)" class="menu-prev"></a>',
  nextArrow: '<a href="javascript:void(0)" class="menu-next"></a>'
});
