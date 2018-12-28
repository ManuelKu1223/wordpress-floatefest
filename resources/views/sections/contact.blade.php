<section class="contact" id="contact">
  <div class="overlays">
    <div class="dots"></div>
  </div>
  <div class="container-fluid title-container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="title">Contact</h1>
      </div>
    </div>
  </div>

  <div class="img-bcg">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="contact-row">
            <h2 class="contact-name">ARTIST BOOKING</h2>
            <h4 class="contact-info"> {{ the_field('contact-artist') }}</h4>
          </div>
          <div class="contact-row">
            <h2 class="contact-name">VENDORS</h2>
            <h4 class="contact-info">{{ the_field('contact-vendors') }}</h4>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon">
            @svg('float-fest-icon-empty', '')
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-row">
            <h2 class="contact-name">Sponsors</h2>
            <h4 class="contact-info">{{ the_field('contact-sponsors') }}</h4>
          </div>
          <div class="contact-row">
            <h2 class="contact-name">Ticket info</h2>
            <h4 class="contact-info">{{ the_field('contact-ticket') }}</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="top-layer">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="contact-row">
            <h2 class="contact-name">Press</h2>
            <h4 class="contact-info">{{ the_field('contact-press') }}</h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 social-media">
          <ul class="media-icons">
            {{ dynamic_sidebar('social-media-footer') }}
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="blue-strip hide-on-small"></div>
