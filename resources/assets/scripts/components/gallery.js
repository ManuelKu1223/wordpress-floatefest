if ($(window).width() > 640 ) {
  initializePhotos()
}

function initializePhotos() {
  $('.photos__main').slick({
    slidesToShow: 1,
    adaptiveHeight: true,
    prevArrow: '<div type="button" class="slick-prev"></div>',
    nextArrow: '<div type="button" class="slick-next"></div>',
    slidesToScroll: 1,
    lazyLoad: 'ondemand',
    arrows: true,
    fade: true,
    asNavFor: '.photos__side',
  });
  $('.photos__side').slick({
    vertical: true,
    verticalSwiping: true,
    lazyLoad: 'ondemand',
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.photos__main',
    dots: false,
    centerMode: false,
    focusOnSelect: true,
  });
  $('.vip-exp__gallery').slick({
    slidesToShow: 1,
    adaptiveHeight: true,
    prevArrow: '<div type="button" class="slick-prev"></div>',
    nextArrow: '<div type="button" class="slick-next"></div>',
    slidesToScroll: 1,
    lazyLoad: 'ondemand',
    arrows: true,
    fade: true,
  });
}
