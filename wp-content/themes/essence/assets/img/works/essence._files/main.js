$(document).ready(function(){
    $(".single-item").slick({
    dots: true,
    arrows: true,
    adaptiveHeight: true,
    fade: true,
    mobileFirst: true,
    cssEase: 'linear',
    lazyLoad: 'ondemand',
    adaptiveHeight: true,
    adaptiveWidth: true,
    arrows: true,
    centerMode: true,
    autoplay: false,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    centerPadding:false,
    });

  });

$(function(){
  $('#Container').mixItUp();
});