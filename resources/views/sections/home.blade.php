<section id="hero" class="hero" style="background-image: url('{{ $hero_background }}')">
  @if(get_field('video'))
    <video autoplay muted loop class="hero__video" poster="{{ get_field('video_poster') }}">
      <source src="{{ the_field('video') }}" type="video/mp4">
    </video>
  @endif
  <div class="hero__content">
    <div class="logo-wrapper">
      <img src="{{ get_template_directory_uri() . '/assets/icons/logo-dark.svg' }}" alt="Float Fest Logo" class="hero__logo mobile-hidden">
      <img src="{{ get_template_directory_uri() . '/assets/images/grounded.png'}}" alt="Supporting Grounded in Music " class="hero__grounded mobile-hidden">
    </div>
    <img src="{{ get_template_directory_uri() . '/assets/icons/float-fest-2018-logo-purple.svg' }}" alt="Float Fest Logo" class="hero__logo mobile-visible">
    <img src="{{ get_template_directory_uri() . '/assets/images/lineup-pink-dark.png' }}" alt="Float Fest Lineup" class="hero__lineup mobile-hidden">
    <img src="{{ get_template_directory_uri() . '/assets/images/lineup-white.png' }}" alt="Float Fest Lineup" class="hero__lineup mobile-visible">
    <div class="hero__description">
      <h1>July 21 & 22, 2018  <br> San Marcos, TX</h1>
      <img src="{{ get_template_directory_uri() . '/assets/images/grounded-white.png'}}" alt="Supporting Grounded in Music " class="hero__grounded mobile-visible">
    </div>
  </div>

</section>
@include('partials.header')
