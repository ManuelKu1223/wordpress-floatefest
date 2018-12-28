<div class="mobile-title mobile-title--purple">
  Parking
</div>


<section class="parking section-mf section-mf--border-pink" id="parking" style="background-image: url(https://floatfesttest.com/wp-content/themes/floatfest/resources/assets/images/parking-background.png);">
 	<div class="title__wrapper">
		<img src="https://floatfesttest.com/wp-content/themes/floatfest/resources/assets/icons/title_banner.png" class="title__image" style="margin-top: 133px;width: 524px;height: 160px;">
		<h1 class="title__content" style="margin-top: 149px;">parking</h1>
	</div>

<!--   <div class="container">
    <div class="parking__cards">

      @foreach(App::get_tickets_by_category('Parking') as $ticket)
        @php
          $ticket_options = get_field('ticket_options', $ticket['ID']);
          $ticket_sold_out = false;
          $ticket_new = false;
          if (is_array($ticket_options)) {
            $ticket_sold_out = in_array('sold', $ticket_options) ? true : false;
            $ticket_new = in_array('new', $ticket_options) ? true : false;
          }
        @endphp
        <div class="card card--medium">
          <div class="card__header card__header--parking {{ $ticket_new ? 'card__header--new' : '' }}">
            <div class="card__name">{{ get_field('ticket_name', $ticket['ID']) }}</div>
            <div class="card__price">{{ get_field('ticket_price', $ticket['ID']) }}</div>
            @if(!$ticket_sold_out)
              <a href="{{ get_field('buy_link', $ticket['ID']) }}" target="_blank" class="card__buy mobile-visible">Buy Now</a>
            @else
              <div class="card__buy card__buy--sold mobile-visible">Sold Out</div>
            @endif
          </div>
          <div class="card__body card__body--parking">
            @if(have_rows('parking_packages', $ticket['ID']))
              @while(have_rows('parking_packages', $ticket['ID']))
                @php(the_row())
                <div class="card__item">
                  <div class="card__item__content">
                    <div class="card__item__title">{{ the_sub_field('title') }}</div>
                    <div class="card__item__description card__item__description--flex">
                      {!! the_sub_field('content') !!}
                    </div>
                  </div>
                </div>
              @endwhile
            @endif
          </div>
          <div class="card__footnote card__footnote--parking">{{ get_field('parking_footnote', $ticket['ID']) }}</div>
          <div class="card__footer">
            <div class="card__more">
              <div class="card__more__content">Additional Info</div>
              <div class="card__more__arrow">
                <img src="{{ get_template_directory_uri() . '/assets/icons/arrow.svg'}}" alt="Learn more about parking">
              </div>
            </div>
            @if(!$ticket_sold_out)
              <a href="{{ get_field('buy_link', $ticket['ID']) }}" target="_blank" class="card__buy mobile-hidden">Buy Now</a>
            @else
              <div class="mobile-hidden card__buy card__buy--sold">Sold Out</div>
            @endif
          </div>
          <div class="card__additional card__additional--parking">
            <div class="card__additional__inner">
              {!! the_field('parking_additional_info', $ticket['ID']) !!}
            </div>
          </div>
        </div>
      @endforeach

    </div>
  </div> -->
</section>
