import "../autoload/_slick"

$(document).ready(function () {

  $('.mobile-title').on('click', function() {
    console.log('Clicked') // eslint-disable-line
    let _this = $(this)
    let mobileActive = 'mobile-title--active'

    _this.toggleClass(mobileActive)

    _this.next('.section-mf').slideToggle()

    if (_this.attr('data-name') == 'media') {
      setTimeout( function () {
        initializeSliders()
      }, 300)
    }
  })


  $('.navbar__mobile').on('click', () => {
    toggleNavigation()
  })

  $('.mobile__nav__close').on('click', () => {
    toggleNavigation()
  })

})

function initializeSliders() {
  // $('.photos__main').unslick()
  // $('.videos__current').unslick()
  $('.photos__main').slick({
    slidesToShow: 1,
    adaptiveHeight: false,
    prevArrow: '<div type="button" class="slick-prev"></div>',
    nextArrow: '<div type="button" class="slick-next"></div>',
    slidesToScroll: 1,
    lazyLoad: 'ondemand',
    arrows: true,
    fade: true,
  });
  $('.videos__current').slick({
    slidesToShow: 1,
    adaptiveHeight: false,
    prevArrow: '<div type="button" class="slick-prev"></div>',
    nextArrow: '<div type="button" class="slick-next"></div>',
    slidesToScroll: 1,
    arrows: true,
    fade: true,
  });
}




function toggleNavigation() {
  let nav = $('.mobile__nav')
  let activeClass = 'mobile__nav--active'
  nav.toggleClass(activeClass)
  $('body').toggleClass('mobile-nav-activated')
}
