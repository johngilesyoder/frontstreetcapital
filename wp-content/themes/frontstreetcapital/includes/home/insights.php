<section class="home-insights section">
  <div class="container-fluid">
    <h2 class="section-title">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/site-logo-black.png">
      Investor Insights
    </h2>
  </div>
  <div class="carousel-wrapper">
    <div id="insights-carousel" class="insights-carousel">
      <?php

			$args = array(
				'post_type' => 'investor_insight',
        'posts_per_page' => 12
			);

			// The Query
			$the_query = new WP_Query( $args );

			// The Loop
			if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
          $the_query->the_post();
          // Insight -->
          get_template_part( 'includes/insights/insight' );
			  }
			} else {
				// no posts found
				echo '<p>Sorry, there is not any open positions.</p>';
			}

			/* Restore original Post Data */
			wp_reset_postdata();

		?>

    </div>
    <button type="button" id="carousel-prev" class="slick-arrow slick-prev">
      <span><i class="material-icons">chevron_left</i></span>
    </button>
    <button type="button" id="carousel-next" class="slick-arrow slick-next">
      <span><i class="material-icons">chevron_right</i></span>
    </button>
  </div>
  <div class="section-follow-up">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <?php the_field('investor_insights_follow_up'); ?>
          <a href="/investor-insights/" class="btn btn-lg btn-primary">Explore Investor Insights</a>
        </div>
      </div>
    </div>
  </div>
</section>
