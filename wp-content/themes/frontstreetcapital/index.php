<?php get_header(); ?>

<main role="main" aria-label="Content">
	<!-- Masthead -->
	<!-- =================================== -->
	<?php get_template_part( 'includes/page-masthead' ); ?>

	<div class="container-fluid">
		<div class="row justify-content-between">
			<div class="col-lg-8">

				<div class="article-loop">
					<?php get_template_part( 'loop' ); ?>
				</div>

				<?php bootstrap_pagination(); ?>

			</div>
			<div class="col-lg-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

</main>

<?php get_footer(); ?>
