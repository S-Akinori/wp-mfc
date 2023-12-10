import $ from './jquery'
import { fadeIn } from './modules/fadeIn';

$(function () {
  fadeIn();
  $('.hamburger').on('click', function() {
    $('.sp-nav-container').toggleClass('active');
  });
  $('.nav-close-icon').on('click', function() {
    $('.sp-nav-container').removeClass('active');
  });

  $('.js-accordion-title').on('click', function() {
    $(this).toggleClass('active');
    $(this).next('.c-accordion__content').slideToggle();
    $(this).parent('.c-accordion__item').siblings().find('.l-accordion__content').slideUp();
  });

  $(window).on('scroll', function () {
    if ($(window).scrollTop() > 200) {
      if($(window).width() > 768) {
        $('.header').css('position', 'fixed');
        $('.header').fadeIn(300)
      } else {
        $('.hamburger').addClass('following');
        $('.hamburger').fadeIn(300)
      }
    } else {
      if($(window).width() > 768) {
        $('.header').css('position', 'absolute');
      } else {
        $('.hamburger').removeClass('following');
      }
    }
  });

})