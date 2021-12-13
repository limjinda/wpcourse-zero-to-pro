/* eslint-disable no-console */
/* global */
/* exported */

'use strict';

// https://stackoverflow.com/questions/4068373/center-a-popup-window-on-screen
function popupWindow(url, windowName, win, w, h) {
  const y = win.top.outerHeight / 2 + win.top.screenY - ( h / 2);
  const x = win.top.outerWidth / 2 + win.top.screenX - ( w / 2);
  return win.open(url, windowName, `toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=${w}, height=${h}, top=${y}, left=${x}`);
}

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

jQuery(document).on('click', '.social-facebook', function(){
  let url = `https://www.facebook.com/sharer.php?u=${window.location.href}`
  popupWindow(url, 'Share on Facebook', window, 600, 300);
})

jQuery(document).on('click', '.social-twitter', function(){
  let url = `https://twitter.com/intent/tweet?url=${window.location.href}`
  popupWindow(url, 'Share on Twitter', window, 600, 300);
})

jQuery(document).on('click', '.social-line', function(){
  let url = `https://lineit.line.me/share/ui?url=${window.location.href}`
  popupWindow(url, 'Share on Line', window, 600, 300);
})

jQuery('.sidebar-wrapper').stickySidebar({
  topSpacing: 48,
  bottomSpacing: 48,
  minWidth: 1000,
});