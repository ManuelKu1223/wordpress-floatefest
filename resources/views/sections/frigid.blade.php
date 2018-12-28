<div class="mobile-title mobile-title--purple-light">
  Frigid <br> Float Lounge
</div>

<section class="frigid section-mf" id="frigid" style="background-image: url(https://floatfesttest.com/wp-content/themes/floatfest/resources/assets/images/fgrid-background.png);">

    <div class="title__wrapper">
		<img src="https://floatfesttest.com/wp-content/themes/floatfest/resources/assets/icons/title_banner.png" class="title__image">
		<h1 class="title__content">Lineup</h1>
	</div>
 
<!--   <div class="container">
    <div class="frigid__cards">
      @foreach(App::get_tickets_by_category('Frigid') as $ticket)
        @php
          $ticket_options = get_field('ticket_options', $ticket['ID']);
          $ticket_sold_out = false;
          $ticket_new = false;
          if (is_array($ticket_options)) {
            $ticket_sold_out = in_array('sold', $ticket_options) ? true : false;
            $ticket_new = in_array('new', $ticket_options) ? true : false;
          }
        @endphp
        <div class="card card--medium {{ $ticket_new ? 'card--new' : '' }}">
          <div class="card__header {{ $ticket_new ? 'card__header--new' : '' }}">
            <div class="card__name card__name--frigid">{{ get_field('ticket_name', $ticket['ID']) }}</div>
            <div class="card__price">{{ get_field('ticket_price', $ticket['ID']) }}</div>
            @if(!$ticket_sold_out)
              <a href="{{ get_field('buy_link', $ticket['ID']) }}" target="_blank" class="card__buy card__buy--header">Buy Now</a>
            @else
              <div class="card__buy card__buy--header card__buy--sold">Sold Out</div>
            @endif
          </div>
          <div class="card__subtitle card__subtitle--long">
            {!! get_field('frigid_details', $ticket['ID']) !!}
          </div>
          <div class="card__body card__body--frigid">
            @if(have_rows('frigid_packages', $ticket['ID']))
              @while(have_rows('frigid_packages', $ticket['ID']))
                @php(the_row())
                <div class="card__item">
                  <div class="card__item__content card__item__content--frigid">
                    <div class="card__item__title">{{ the_sub_field('title') }}</div>
                    <div class="card__item__description card__item__description--flex">
                      {!! the_sub_field('content') !!}
                    </div>
                  </div>
                </div>
              @endwhile
            @endif
          </div>
        </div>
      @endforeach
    </div>
  </div> -->
</section>
