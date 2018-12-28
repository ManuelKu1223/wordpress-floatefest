@extends('layouts.app')

@section('content')
  <div class="container" id="mainBlog">
    <div class="articles">
      <?php $latest_blog_posts = new WP_Query( array( 'posts_per_page' => -1 ) );
      if ( $latest_blog_posts->have_posts() ) :
        $i = 0;
        while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); ?>
        <?php the_field("what-to-bring"); ?>
          <?php if ($i == 0) : ?>
            <div class="row articles-row">
          <?php endif; ?>

          <div class="col-md-4">
            <article class="main-article">
              <div class="article-thumbnail lazy" data-src="<?php echo the_post_thumbnail_URL('medium'); ?>">
              </div>
              <?php the_title( '<h1 class="article-title">', '</h1>' ); ?>
              <h3 class="date-published"><?php the_time('F j, Y'); ?></h3>
              <a href="<?php echo get_permalink(); ?>">read more..</a>
              </article>
          </div>
          <?php $i++; ?>

          <?php if ($i == 3) : ?>
            </div>
          <?php $i = 0; endif; ?>
      <?php endwhile; endif;
        // Do not delete - resets query for ACF fields!
        wp_reset_query(); ?>
      </div>
  </div>


  {{-- @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php(the_post())
    @include('partials.content-'.get_post_type())
  @endwhile

  {!! get_the_posts_navigation() !!} --}}
@endsection
