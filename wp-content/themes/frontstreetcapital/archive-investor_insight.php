<?php get_header(); ?>

  <main role="main">

    <!-- Masthead -->
  	<!-- =================================== -->
  	<?php get_template_part( 'includes/page-masthead' ); ?>

    <?php get_template_part( 'includes/insights/filtering'); ?>

    <div class="container-fluid">
		   <div class="article-loop">
         <div class="row">
          <?php get_template_part('loop-investor_insight'); ?>
        </div>
        <?php bootstrap_pagination(); ?>
      </div>
    </div>
	</main>

<?php get_footer(); ?>
