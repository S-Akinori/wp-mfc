(()=>{"use strict";const e=$=jQuery;e((function(){((e=".c-fade-in")=>{const o=new IntersectionObserver(((e,o)=>{e.forEach(((e,o)=>{e.isIntersecting&&$(e.target).addClass("active")}))}),{rootMargin:"0px",threshold:0});document.querySelectorAll(e).forEach((e=>{o.observe(e)}))})(),e(".hamburger").on("click",(function(){e(".sp-nav-container").toggleClass("active")})),e(".nav-close-icon").on("click",(function(){e(".sp-nav-container").removeClass("active")})),e(window).on("scroll",(function(){e(window).scrollTop()>200?e(window).width()>768?(e(".header").css("position","fixed"),e(".header").fadeIn(300)):(e(".hamburger").addClass("following"),e(".hamburger").fadeIn(300)):e(window).width()>768?e(".header").css("position","absolute"):e(".hamburger").removeClass("following")}))}))})();