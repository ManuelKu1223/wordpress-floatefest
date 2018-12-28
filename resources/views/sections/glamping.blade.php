@if(App::get_tickets_by_category('Glamping'))
  <section class="glamping lazy" id="glamping" data-src="{{ $glamping_background }}">

    <div class="container container--glamping">

      @foreach(App::get_tickets_by_category('Glamping') as $ticket)
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
          <div class="card__body">
            @if(have_rows('ticket_content', $ticket['ID']))
              @while(have_rows('ticket_content', $ticket['ID']))
                @php(the_row())

                  @if(have_rows('glamping_packages'))
                    @while(have_rows('glamping_packages'))
                      @php(the_row())
                      <div class="card__item card__item--glamping">
                        <div class="card__item__content card__item__content--half">
                          <div class="card__item__title">{{ the_sub_field('title') }}</div>
                          <div class="card__item__description">
                            {{ the_sub_field('content') }}
                          </div>
                        </div>
                        <div class="card__item__background" style="background-image: url('{{ App::get_image_by_id(the_sub_field('background'), 'large') }}')"></div>
                      </div>
                    @endwhile
                  @endif

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

    </div>

  <img data-src="{{ get_template_directory_uri() . '/assets/icons/tree.svg' }}" alt="Float Fest Tree" class="lazy glamping__tree">
  </section>
@endif
