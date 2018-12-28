<div class="mobile-title mobile-title--purple">
  Sponsors
</div>

<section class="sponsors section-mf section-mf--border-blue" id="sponsors" style="background-image: url(https://floatfesttest.com/wp-content/themes/floatfest/resources/assets/images/sponsor-background.png)">
<!--   <section class="title title--orientation-right title--off-pink">
    <div class="title__wrapper title__wrapper--border-blue title__wrapper--bg-purple">
      <h1 class="title__content">Sponsors</h1>
    </div>
  </section> -->
	<div class="title__wrapper">
		<img src="https://floatfesttest.com/wp-content/themes/floatfest/resources/assets/icons/title_banner.png" class="title__image" style="width: 631px;height: 152px;">
		<h1 class="title__content" style="margin-top: 10px;">Sponsors</h1>
	</div>

  <div class="sponsors__wrapper">
    <div class="sponsors__content">
      @foreach($sponsors as $sponsor)
        <div class="sponsor">
          <img class="lazy" src="{{ get_the_post_thumbnail_url($sponsor->ID, 'medium') }}" alt="{{ $sponsor->post_title }} ">
        </div>
      @endforeach
    </div>
  </div>
</section>
