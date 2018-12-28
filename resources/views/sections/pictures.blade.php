<section class="pictures" id="pictures"  style="background-image: url('{{ $photos_background }}')">
  <section class="title title--orientation-right title--small">
    <div class="title__wrapper title__wrapper--bg-pink title__wrapper--small title__wrapper--shadow-right-purple">
      <h2 class="title__content title__content--small">Photos</h2>
    </div>
  </section>


  @php
    $images = get_field('pictures')
  @endphp
  @if($images)
    <div class="container container--contacts">
      <div class="photos">
        <div class="photos__main">
          @foreach($images as $image)
            @php
              $title = $image['title'];
              $full_image_url = $image['url'];
            @endphp
            <div class="photo__wrapper photo__wrapper--large">
              <img class="photo photo--large" data-lazy="{{ $full_image_url }}" alt="{{ $title }}" title="{{ $title }}">
            </div>
          @endforeach
        </div>
        <div class="photos__side">
          @foreach($images as $image)
            @php
              $title = $image['title'];
              $small_image_url = $image['sizes']['medium'];
              $thumb_image_url = $image['sizes']['thumbnail'];
            @endphp
            <div><img class="photo photo--small" data-lazy="{{ $small_image_url }}" alt="{{ $title }}"></div>
          @endforeach
        </div>
      </div>
    </div>
  @endif
</section>
