if ($(window).width() > 640 ) {
  initializeVideos()
}



function initializeVideos(){
  $('.videos__current').slick({
    slidesToShow: 1,
    adaptiveHeight: true,
    prevArrow: '<div type="button" class="slick-prev"></div>',
    nextArrow: '<div type="button" class="slick-next"></div>',
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    asNavFor: '.videos__list',
  });
  $('.videos__list').slick({
    vertical: true,
    verticalSwiping: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.videos__current',
    dots: false,
    centerMode: false,
    focusOnSelect: true,
  });
}


$('.video-box').click(function(e) {
  e.preventDefault()
  disableIframes();
  let _this = $(this)
  let videoData = _this.data("video") + '?autoplay=1';
  let iframe = _this.find('.video-box__iframe')
  $("<iframe />", { src: videoData, allowfullscreen: true, id: 'frame'}).appendTo(iframe)
  iframe.addClass('video-box__iframe--active')
});

$('.videos__current').on('beforeChange', function() {
  disableIframes();
});


function disableIframes () {
  $('.video-box__iframe--active').each(function () {
    $(this).find('iframe').remove();
  })
}
