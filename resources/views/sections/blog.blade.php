<div class="mobile-title mobile-title--purple-light" data-name="media">
  Media
</div>

<div class="section-mf section-mf--multiple section-mf--border-teal">
  <section class="media-blog lazy" id="blog" data-src="{{ get_template_directory_uri() . '/assets/icons/pattern.svg' }}">
    <section class="title title--orientation-right title--off-teal title--xs">
      <div class="title__wrapper title__wrapper--border-yellow title__wrapper--bg-purple">
        <h1 class="title__content">Media</h1>
      </div>
    </section>

    <section class="title title--orientation-left title--small">
      <div class="title__wrapper title__wrapper--bg-pink title__wrapper--small title__wrapper--shadow-left-purple">
        <h2 class="title__content title__content--small">Blog</h2>
      </div>
    </section>

    <div class="container container--contacts">
      <div class="media-blog__latest">
        <?php $latest_blog_posts = new WP_Query( array( 'posts_per_page' => 3 ) );
        if ( $latest_blog_posts->have_posts() ) :
          while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); ?>

            <a class="latest-article" href="<?php echo get_permalink(); ?>">
              <?php the_title( '', '' ); ?>
            </a>

        <?php endwhile; endif;
          // Do not delete - resets query for ACF fields!
          wp_reset_query(); ?>
        </div>

    </div>

    <div class="media-blog__triangle"></div>
    <div class="media-blog__more">
        <a href="<?php echo get_site_url();?>/blog">View more blog posts</a>
    </div>
  </section>
