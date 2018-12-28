<section class="faq" id="faq" style="background-image: url('{{ get_template_directory_uri() . '/assets/icons/faq-background.svg' }}')">
  <section class="title title--orientation-left title--small">
    <div class="title__wrapper title__wrapper--bg-pink title__wrapper--small title__wrapper--shadow-left-yellow">
      <img src="{{ get_template_directory_uri() . '/assets/icons/plant-1.svg'}}" alt="Plant" class="title__plant">
      <h2 class="title__content title__content--small">F.A.Q.'s</h2>
    </div>
  </section>

  <div class="container">
    <div class="faq__cards">
        @foreach($faq as $column)
          <div class="faq__column">
            @foreach($column as $question)
              @include('partials.question')
            @endforeach
          </div>
        @endforeach
    </div>
  </div>
</section>
