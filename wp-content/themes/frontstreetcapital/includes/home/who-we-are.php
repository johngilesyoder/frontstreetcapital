<section class="home-who-we-are section">
  <div class="container-fluid">
    <h2 class="section-title">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/site-logo-black.png">
      Who We Are
    </h2>
    <p class="section-summary">Front Street Capital Management, Inc. is a registered investment adviser serving clients with a long term investment focus.  We are the portfolio manager to the Tarkio Fund, a no-load mutual fund (TARKX), and provide professional management of individual accounts, IRA and retirement assets, 401(k)s, trusts and foundations on a fee only basis.</p>
    <div class="personnel">
	    <?php while( have_rows('team_member') ): the_row(); ?>

        <!-- Person -->
        <!-- =================================== -->
        <?php get_template_part( 'includes/person' ); ?>

      <?php endwhile; ?>

    </div>
  </div>
</section>
