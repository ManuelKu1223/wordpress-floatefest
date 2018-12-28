@php
  $contact_name = get_sub_field('email_name');
  $contact_mail = get_sub_field('email_address');
@endphp

@if($i == 0 || $i == 2)
  <div class="contact__list__col">
@endif

<div class="contact-card">
  <div class="contact-card__title">{{ $contact_name }}</div>
  <div class="contact-card__body">
    <div class="contact-card__address">{{ $contact_mail }}</div>
    <a href="mailto:{{ $contact_mail }}" class="contact-card__link">
      <img src="{{ get_template_directory_uri() . '/assets/icons/alt-arrow.svg' }}" alt="{{ $contact_name }}">
    </a>
  </div>
</div>
@if($i == 1 || $i === 4)
  </div>
@endif
