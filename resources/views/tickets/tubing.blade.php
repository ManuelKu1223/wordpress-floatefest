<div class="card__body--tubing">
  @if(have_rows('tubing_passes'))
    @while(have_rows('tubing_passes'))
      @php(the_row())
      <div class="card__item card__item--tubing">
        <div class="card__item__title card__item__title--tubing">{{ the_sub_field('title')}}</div>
        <div class="card__item__content card__item__content--tubing" style="background-image: url('{{ App::get_image_by_id(get_sub_field('background'), 'large')  }}')">
          {{ the_sub_field('content') }}
        </div>
      </div>
    @endwhile
  @endif
</div>
