<?php get_header(); ?>

  <main role="main">

    <!-- Masthead -->
  	<!-- =================================== -->
  	<?php get_template_part( 'includes/page-masthead' ); ?>

    <?php get_template_part( 'includes/insights/filtering'); ?>

    <div class="container-fluid">
      <div class="type-info">
        <h2 class="type-title"><?php the_archive_title();?></h2>
        <?php the_archive_description( '<div class="type-subtext"', '</div>' ); ?>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
		    <?php get_template_part('loop-investor_insight'); ?>
      </div>
    </div>

		<?php get_template_part('pagination'); ?>

	</main>

<?php get_footer(); ?>
