<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<div class="col-3">

		<!-- Insight -->
		<!-- =================================== -->
		<?php get_template_part( 'includes/insights/insight' ); ?>

	</div>

<?php endwhile; ?>

<?php else : ?>

	<!-- article -->
	<article>
		<h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
