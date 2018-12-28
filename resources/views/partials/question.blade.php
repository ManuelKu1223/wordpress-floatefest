<div class="question question--active">
  <div class="question__header">
    <div class="question__name">
      {{ $question['post_title'] }}
    </div>
    <div class="question__arrow">
      <img src="{{ get_template_directory_uri() . '/assets/icons/arrow-purple.svg' }}" alt="Show answer">
    </div>
  </div>
  <div class="question__body">
    {{ $question['post_content']}}
  </div>
</div>
