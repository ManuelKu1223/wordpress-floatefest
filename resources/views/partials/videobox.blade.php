@if($video)
  <?php
    $link = get_field('video_link', $video['ID']);
    $videoEmbed = 'https://www.youtube.com/embed/' . substr($link, -11);
    $img = 'test';
    if(has_post_thumbnail($video['ID'])) {
      $img = the_post_thumbnail_url('thumbnail');
    } else {
      $img = 'https://img.youtube.com/vi/' . substr($link, -11) . '/0.jpg';
    }
  ?>

  <div class="video-box">
    <a class="video-box__container" href="{{ $link }}" data-video="{{ $videoEmbed }}" style="background-image:url({{ $img }})">
      <img data-src="{{ get_template_directory_uri() }}/assets/images/owl-video-play.png" class="video-box__play lazy" alt="link to video">
    </a>
  </div>

@endif
