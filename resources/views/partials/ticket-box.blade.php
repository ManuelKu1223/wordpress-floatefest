@php
  $ticket_name = get_field('ticket_name', $ticket['ID']);
  $ticket_price = get_field('ticket_price', $ticket['ID']);
  $ticket_title = get_field('ticket_title', $ticket['ID']);
  $ticket_buy_url = get_field('buy_link', $ticket['ID']);
  $ticket_info = get_field('more_info', $ticket['ID']);
  $ticket_options = get_field('ticket_options', $ticket['ID']);
  $ticket_rows = have_rows('ticket_content', $ticket['ID']);
  $ticket_tiers = have_rows('ticket_tiers', $ticket['ID']);
  $ticket_sold_out = false;
  $ticket_new = false;

  if (is_array($ticket_options)) {
    $ticket_sold_out = in_array('sold', $ticket_options) ? true : false;
    $ticket_new = in_array('new', $ticket_options) ? true : false;
  }
@endphp

<article class="ticket-box {{ $ticket_new ? 'ticket-box--new' : '' }}">
  <div class="ticket-box__header {{ $ticket_new ? 'ticket-box__header--new' : '' }}">
    <div class="ticket-box__name">{{ $ticket_name}}</div>
    @if(have_rows('ticket_tiers', $ticket['ID']))
      <div class="card__tiers">
      @while(have_rows('ticket_tiers', $ticket['ID']))
        @php(the_row())
          @include('tickets.tiers')
      @endwhile
      </div>
    @else
      <div class="ticket-box__price">{{ $ticket_price }}</div>
    @endif
    @if(!$ticket_sold_out)
      <a href="{{ $ticket_buy_url }}" target="_blank" class="ticket-box__buy {{ $ticket_tiers ? 'card__buy--tiers' : '' }}">Buy Now</a>
    @else
      <div class="ticket-box__buy {{ $ticket_tiers ? 'card__buy--tiers' : '' }}">Sold Out</div>
    @endif
  </div>
  @if(get_field('ticket_disclaimer', $ticket['ID']))
    @include('tickets.disclaimer')
  @endif
  <div class="ticket-box__body">
    @if($ticket_title)
      <div class="ticket-box__title">{{ $ticket_title }}</div>
    @endif
    <div class="ticket-box__content">
      @if(have_rows('ticket_content', $ticket['ID']))
        @while(have_rows('ticket_content', $ticket['ID']))
          @php(the_row())

          @include('tickets.' . get_row_layout())

        @endwhile
      @endif
    </div>
  </div>
  @if($ticket_rows)
    <div class="ticket-box__more">
      More Info
    </div>
  @endif
</article>
