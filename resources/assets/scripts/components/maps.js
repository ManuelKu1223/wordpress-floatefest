var mapImg = $('.maps__item')
var closeMap = $('.maps__overlay__close')

mapImg.on('click', function () {
  let _this = $(this)
  let large = _this.attr('data-img')
  toggleLargeMap(large)
})

closeMap.on('click', function () {
  toggleLargeMap('img')
})


function toggleLargeMap(img) {
  console.log(img) //eslint-disable-line
  $('body').toggleClass('mobile-nav-activated')
  $('.maps__overlay').toggleClass('maps__overlay--active')
  $('.maps__overlay img').attr('src', img)
}
