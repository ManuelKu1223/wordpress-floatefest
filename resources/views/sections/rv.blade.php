<section class="rv" id="rv" style="background-image: url(https://floatfesttest.com/wp-content/themes/floatfest/resources/assets/images/rv-background.png);">
	  <div class="title__wrapper">
		<img src="https://floatfesttest.com/wp-content/themes/floatfest/resources/assets/icons/title_banner.png" class="title__image" style="margin-top: -180px;margin-left: 38px;width: 586px;height: 	154px;">
		  <h1 class="title__content"style="margin-top: -141px;margin-left: 18px;">Rv Passes</h1>
	</div>
<!--   <div class="container">

    @foreach(App::get_tickets_by_category('RV') as $ticket)
      @php
        $ticket_options = get_field('ticket_options', $ticket['ID']);
        $ticket_sold_out = false;
        $ticket_title = get_field('ticket_title', $ticket['ID']);
        $ticket_new = false;
        if (is_array($ticket_options)) {
          $ticket_sold_out = in_array('sold', $ticket_options) ? true : false;
          $ticket_new = in_array('new', $ticket_options) ? true : false;
        }
      @endphp
      <div class="card card--small">
        <div class="card__header {{ $ticket_new ? 'ticket-box__header--new' : '' }}">
          <div class="card__name">{{ get_field('ticket_name', $ticket['ID']) }}</div>
          <div class="card__price card__price--small">{{ get_field('ticket_price', $ticket['ID']) }}</div>
          @if(!$ticket_sold_out)
            <a href="{{ get_field('buy_link', $ticket['ID']) }}" target="_blank" class="card__buy mobile-visible">Buy Now</a>
          @else
            <div class="card__buy card__buy--sold mobile-visible">Sold Out</div>
          @endif
        </div>
        <div class="card__body">
          @if(have_rows('ticket_content', $ticket['ID']))
            @while(have_rows('ticket_content', $ticket['ID']))
              @php(the_row())

              <div class="card__item">
                <div class="card__item__content">
                  <div class="card__item__title">{{ the_sub_field('title') }}</div>
                  <div class="card__item__description card__item__description--flex">
                    {{ the_sub_field('content') }}
                  </div>
                </div>
              </div>

              @endwhile
            @endif
        </div>
        @if(!$ticket_sold_out)
          <a href="{{ get_field('buy_link', $ticket['ID']) }}" target="_blank" class="card__buy mobile-hidden">Buy Now</a>
        @else
          <div class="card__buy card__buy--sold mobile-hidden">Sold Out</div>
        @endif

      </div>
    @endforeach

    <div class="rv__sponsor">
      For all your RV needs <br> please <a href="https://www.woodyrvrentals.com/" target="_blank">visit our RV sponsor!</a>
    </div>
  </div> -->
</section>

</div>
