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
      <div class="card__item__background" style="background-image: url('{{ App::get_image_by_id(get_sub_field('background'), 'large') }}')"></div>
    </div>
  @endwhile
@endif
