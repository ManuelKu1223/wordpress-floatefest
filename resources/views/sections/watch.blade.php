<section class="watch" id="videos" style="background-image: url('{{ $videos_background }}')">
  <section class="title title--orientation-left title--small">
    <div class="title__wrapper title__wrapper--bg-pink title__wrapper--small title__wrapper--shadow-left-yellow">
      <h2 class="title__content title__content--small">Videos</h2>
    </div>
  </section>

  <div class="container container--contacts">
    <div class="videos">
      <div class="videos__current">
        @foreach($videos as $video)
          @if($video)
            @php
              $link = get_field('video_link', $video['ID']);
              $videoEmbed = 'https://www.youtube.com/embed/' . substr($link, -11);
              $img = 'test';
              if(has_post_thumbnail($video['ID'])) {
                $img = the_post_thumbnail_url('thumbnail');
              } else {
                $img = 'https://img.youtube.com/vi/' . substr($link, -11) . '/hqdefault.jpg';
              }
            @endphp
            <div class="video-box" data-video="{{ $videoEmbed }}"  style="background-image:url({{ $img }})">
              <img data-src="{{ get_template_directory_uri() }}/assets/images/owl-video-play.png" class="video-box__play lazy" alt="link to video">
              <div class="video-box__iframe"></div>
            </div>
          @endif
        @endforeach
      </div>
      <div class="videos__list">
        @foreach($videos as $video)
          @if($video)
            @php
              $link = get_field('video_link', $video['ID']);
              $videoEmbed = 'https://www.youtube.com/embed/' . substr($link, -11);
              $img = 'test';
              if(has_post_thumbnail($video['ID'])) {
                $img = the_post_thumbnail_url('thumbnail');
              } else {
                $img = 'https://img.youtube.com/vi/' . substr($link, -11) . '/0.jpg';
              }
            @endphp
            <div class="video__thumbnail" style="background-image: url('{{ $img }}')"></div>
          @endif
        @endforeach
      </div>
    </div>
  </div>

</section>

</div>
