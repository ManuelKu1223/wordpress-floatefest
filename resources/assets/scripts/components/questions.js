
$('.question__header').on('click', function () {
  handleHeaderClick($(this));
})

function handleHeaderClick(question) {
  let $box = question.parents('.question')
  let $boxBody = $box.find('.question__body')
  let active = 'question--active'
  let isActive = $box.hasClass(active)

  isActive ? $box.removeClass(active) : $box.addClass(active)

  if (isActive) {
    $box.removeClass(active)
    $boxBody.stop().slideToggle()
  } else {
    $box.addClass(active)
    $boxBody.stop().slideToggle()
  }
}
