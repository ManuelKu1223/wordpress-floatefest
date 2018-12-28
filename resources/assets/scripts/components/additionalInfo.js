$('.card__more').on('click', function () {
  let _this = $(this)
  _this.parents('.card').find('.card__additional').slideToggle(() => {
    _this.find('.card__more__arrow').toggleClass('card__more__arrow--active')
  })
})

$('.ticket-box__more').on('click', function () {
  let _this = $(this)
  _this.parents('.ticket-box').find('.ticket-box__body').slideToggle()
})
