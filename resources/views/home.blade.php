@extends('layouts.blog')

@section('content')
  <section class="home-page"  style="background-image: url('{{ $blog_background }}')">
    <div class="container">
      <div class="home-page__articles">
        @while(have_posts()) @php(the_post())
          @include('partials/content-home')
        @endwhile
      </div>
    </div>
  </section>
@endsection
