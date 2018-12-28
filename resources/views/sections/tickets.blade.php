<div class="mobile-title mobile-title--purple-light" data-target="tickets">
  Buy Tickets
</div>
<section id="tickets" class="tickets section-mf lazy" style="background-image: url(https://floatfesttest.com/wp-content/themes/floatfest/resources/assets/images/tickets-backgroud.png);">
<!--   <section class="title title--orientation-left title--off-teal">
    <div class="title__wrapper title__wrapper--border-yellow title__wrapper--bg-purple">
      <h1 class="title__content">Buy Tickets</h1>
    </div> -->
 
<!-- <section id="tickets" class="tickets section-mf lazy" style="background-image: url(https://floatfesttest.com/wp-content/themes/floatfest/resources/assets/images/main-background.png);"> -->

<!--   <section class="title title--orientation-left title--off-teal"> -->
<!--     <div class="title__wrapper title__wrapper--border-yellow title__wrapper--bg-purple">
      <h1 class="title__content">Buy Tickets</h1>
    </div> -->
	<div class="title__wrapper">
		<img src="https://floatfesttest.com/wp-content/themes/floatfest/resources/assets/icons/title_banner.png" class="title__image" style="margin-top: 151px;">
		<h1 class="title__content" style="margin-top: 151px; margin-left: -14px;">Tickets</h1>
	</div>
<!--   </section>  -->

	  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="tickets__list">

          @foreach($tickets as $ticket)
            @include('partials.ticket-box')
          @endforeach


        </div>
      </div>
    </div>
  </div>
<!-- 	<div>
		<img src="https://floatfesttest.com/wp-content/themes/floatfest/resources/assets/images/lineup-pink-dark.png" alt="Float Fest Lineup" class="hero__lineup mobile-hidden">	
    </div> -->
<!--   <img src="{{ get_template_directory_uri() . '/assets/icons/rings-tickets.svg' }}" alt="Floating Rings" class="tickets__rings"> -->

<!-- </section>
 -->
<!-- <section class="schedule__wrapper section-mf" id="schedule" style="background-image: url(https://floatfesttest.com/wp-content/themes/floatfest/resources/assets/images/tickets-backgroud.png);">
	<!--   <section class="title title--orientation-right title--off-pink title--md">
    <div class="title__wrapper title__wrapper--border-blue title__wrapper--bg-purple">
      <h1 class="title__content">Schedule</h1>
    </div> 
  </section> -->
</section> 
