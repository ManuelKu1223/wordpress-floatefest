<div class="mobile-title mobile-title--purple">
  Floating
</div>

<section class="tubing section-mf lazy" id="tubing" style="background-image: url(https://floatfesttest.com/wp-content/themes/floatfest/resources/assets/images/turbing-background.png);">
	<div class="title__wrapper">
		<img src="https://floatfesttest.com/wp-content/themes/floatfest/resources/assets/icons/title_banner.png" class="title__image">
		<h1 class="title__content">Tubing</h1>
	</div>
<!--   <div class="tubing__content">
    <div class="container">

      @foreach(App::get_tickets_by_category('Tubing') as $ticket)
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
        <div class="card">
          <div class="card__header {{ $ticket_new ? 'ticket-box__header--new' : '' }}">
            <div class="card__name">{{ get_field('ticket_name', $ticket['ID']) }}</div>
            <div class="card__price">{{ get_field('ticket_price', $ticket['ID']) }}</div>
            @if(!$ticket_sold_out)
              <a href="{{ get_field('buy_link', $ticket['ID']) }}" target="_blank" class="card__buy mobile-visible">Buy Now</a>
            @else
              <div class="card__buy card__buy--sold mobile-visible">Sold Out</div>
            @endif
          </div>
          <div class="card__body card__body--tubing">
            @if(have_rows('ticket_content', $ticket['ID']))
              @while(have_rows('ticket_content', $ticket['ID']))
                @php(the_row())
                  @if(have_rows('tubing_passes'))
                    @while(have_rows('tubing_passes'))
                      @php(the_row())
                      <div class="card__item card__item--tubing">
                        <div class="card__item__title card__item__title--tubing" >{{ the_sub_field('title')}}</div>
                        <div class="card__item__content card__item__content--tubing" style="background-image: url('{{ App::get_image_by_id(get_sub_field('background'), 'large') }}')">
                          {{ the_sub_field('content') }}
                        </div>
                      </div>
                    @endwhile
                  @endif
                @endwhile
              @endif
          </div>
          <div class="card__footer">
            <div class="card__more">
              <div class="card__more__content">Additional Info</div>
              <div class="card__more__arrow">
                <img src="{{ get_template_directory_uri() . '/assets/icons/arrow.svg'}}" alt="Learn more about tubing">
              </div>
            </div>
            @if(!$ticket_sold_out)
              <a href="{{ get_field('buy_link', $ticket['ID']) }}" target="_blank" class="card__buy mobile-hidden">Buy Now</a>
            @else
              <div class="card__buy card__buy--sold mobile-hidden">Sold Out</div>
            @endif
          </div>
          <div class="card__additional card__additional--parking">
            <div class="card__additional__inner">
              {{ the_field('additional_info', $ticket['ID'])}}
            </div>
          </div>
        </div>
      @endforeach

    </div>
  </div>
  <div class="tubing__bottom">
    <img src="{{ get_template_directory_uri() . '/assets/icons/rings-tubing.svg' }}" alt="Float Fest Skull" class="tubing__rings">
    <b class="tubing__bar"></b>
  </div> -->
</section>
