<article class="article__wrapper">
  <a href="<?php echo get_permalink(); ?>" class="article">
    <div class="article__thumbnail lazy" data-src="<?php echo the_post_thumbnail_URL('medium'); ?>"></div>
    <div class="article__details">
      <?php the_title( '<h1 class="article__title">', '</h1>' ); ?>
      <h3 class="article__date"><?php the_time('F j, Y'); ?></h3>
    </div>
  </a>
</article>
