<div class="mobile-title mobile-title--purple">
  Contact
</div>

<footer class="footer section-mf lazy" id="contact" data-src="{{ get_template_directory_uri() . '/assets/icons/pattern.svg' }}">
  <section class="title title--orientation-left title--off-pink title--xs">
    <div class="title__wrapper title__wrapper--border-yellow title__wrapper--bg-purple">
      <h1 class="title__content">Contact</h1>
    </div>
  </section>

  <div class="footer__content">
    <div class="container container--contacts">
      <div class="contact__list">
        @php($i = 0)
        @if(have_rows('emails', 'options'))
          @while(have_rows('emails', 'options'))
            @php(the_row())
            @include('partials.contact')
            @php($i++)
          @endwhile
        @endif
      </div>
      <div class="contact__form">
        <a href="https://goo.gl/forms/COjCu3bcGuUBBie32 " target="_blank">Click here to fill out a <br> <span>press application</span></a>
      </div>
    </div>

    <div class="footer__bottom">
      <img src="{{ get_template_directory_uri() . '/assets/icons/skull.svg' }}" alt="Float Fest Skull" class="footer__skull">
      <b class="footer__bar"></b>
    </div>
  </div>
</footer>
