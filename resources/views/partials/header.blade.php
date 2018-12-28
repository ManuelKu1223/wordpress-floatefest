<nav class="navbar navbar-float" id="navbar">
  <div class="navbar__inner">
    <div class="navbar__inner__left">
      <div class="navbar__logo">
        <a class="navbar__logo__link" href="{{ home_url('/') }}" rel="canonical">
          <img src="{{ get_template_directory_uri() . '/assets/icons/float-fest-2018-logo-yellow.svg' }}" class="navbar__logo__image" alt="Float Fest 2018 Logo">
        </a>
      </div>

      <div class="navbar__date">
        {{ $festival_date }}
      </div>

      <a href="https://www.eventbrite.com/e/float-fest-2018-tickets-41197844863" class="navbar__buy" target="_blank">
        <span>Buy Now</span>
      </a>
    </div>

    {!! wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '.hide-on-small', 'menu_class' => 'navbar__navigation') ) !!}

    <div class="navbar__mobile">
      <div class="navbar__mobile__bar"></div>
      <div class="navbar__mobile__bar"></div>
      <div class="navbar__mobile__bar"></div>
    </div>
  </div>
</nav>
<div class="navbar__ghost"></div>

<nav class="mobile__nav">
  <div class="mobile__nav__top">
    <img src="{{ get_template_directory_uri() . '/assets/icons/float-fest-2018-logo-yellow.svg' }}" class="mobile__nav__logo" alt="Float Fest 2018 Logo">
    <div class="mobile__nav__close">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </div>
  </div>
  <div class="mobile__nav__main">
    {!! wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'menu_class' => '') ) !!}
  </div>
</nav>
