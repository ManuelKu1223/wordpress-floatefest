<section class="soon">
  @if(get_field('video'))
    <video autoplay muted loop class="soon__video" poster="{{ get_field('video_poster') }}">
      <source src="{{ the_field('video') }}" type="video/mp4">
    </video>
  @endif
  <div class="soon__content">
    <img src="{{ get_template_directory_uri() . '/assets/icons/logo-dark.svg' }}" alt="Float Fest Logo" class="soon__logo">
    <div class="soon__description">
      <h1 class="soon__description__date">Coming Soon <br> July 21 & 22, 2018  <br> San Marcos, TX</h1>
    </div>
  </div>
</section>
