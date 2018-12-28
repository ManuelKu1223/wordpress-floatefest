<section class="single-article">
	<div class="single-article__title lazy" data-src="<?php echo the_post_thumbnail_URL('full'); ?>">
		<h1>{{ get_the_title() }}</h1>
	</div>
	<div class="container">
		<div class="single-article__wrapper">
			<div class="single-article__date">
				<?php the_time('F j, Y'); ?>
			</div>
			<div class="single-article__content">
				{{ the_content() }}
			</div>
		</div>
	</div>

	<div class="single-article__updates">
		<form class="single-article__updates__form" action="https://sendy.floatfest.net/subscribe" method="POST" accept-charset="utf-8">
			<label>E-mail Updates</label>
			<div class="single-article__updates__form__inputs">
				<input class="input" type="email" name="email" id="email" required/>
				<input type="hidden" name="list" value="CPossXGlS0J77q4QdPgNBQ"/>
				<button role="submit" class="contact-card__link contact-card__link--small">
					<img src="{{ get_template_directory_uri() . '/assets/icons/alt-arrow.svg' }}" alt="">
				</button>
			</div>
		</form>
	</div>
</section>
