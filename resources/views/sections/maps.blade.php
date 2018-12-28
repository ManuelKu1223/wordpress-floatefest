<section class="maps lazy" id="maps" data-src="{{ $maps_background }}">

  <section class="title title--orientation-right title--off-teal title--xs">
    <div class="title__wrapper title__wrapper--border-yellow title__wrapper--bg-purple">
      <h1 class="title__content">Maps</h1>
    </div>
  </section>

  <section class="title title--orientation-left title--small desktop-invisible">
    <div class="title__wrapper title__wrapper--bg-pink title__wrapper--small title__wrapper--plant title__wrapper--shadow-left-purple">
      <img src="{{ get_template_directory_uri() . '/assets/icons/plant-3.svg'}}" alt="Plant" class="title__plant title__plant--third">
      <h2 class="title__content title__content--small">Maps</h2>
    </div>
  </section>

  <div class="container container--contacts">
    <div class="maps__list">
      @if(have_rows('site_maps', 'options'))
        @while(have_rows('site_maps', 'options'))
          @php(the_row())
          <div data-img="{{ App::get_image_by_id(get_sub_field('map')) }}" class="maps__item" taget="_blank">
            <img src="{{ App::get_image_by_id(get_sub_field('map'), 'medium') }}" alt="Float Fest Site Map">
          </div>
        @endwhile
      @endif
    </div>
  </div>
</section>

<div class="maps__overlay">
  <div class="maps__overlay__close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></div>
  <img src="" alt="">
</div>
