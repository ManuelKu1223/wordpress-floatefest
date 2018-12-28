@php
  $tier_name = get_sub_field('tier_name');
  $tier_price = get_sub_field('tier_price');
  $tier_options = get_sub_field('tier_options');
  $tier_sold = '';
  $tier_active = '';

  if (is_array($tier_options)) {
    $tier_sold = in_array('sold-out', $tier_options) ? true : false;
    $tier_active = in_array('active', $tier_options) ? true : false;
  }
@endphp

<div class="card__tier {{ $tier_sold ? 'card__tier--sold' : '' }} {{ $tier_active ? 'card__tier--active' : '' }}">
  <div class="card__tier__name">{{ $tier_name }}</div>
  <div class="card__tier__price">{{ $tier_price }}</div>
</div>
