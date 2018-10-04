<?php get_header(); ?>

<main role="main" aria-label="Content">
	<!-- Masthead -->
	<!-- =================================== -->
	<?php get_template_part( 'includes/page-masthead' ); ?>

	<div class="container-fluid">
		<div class="row justify-content-between">
			<div class="col-lg-8">

					<?php if ( have_posts() ): the_post(); ?>

						<<?php esc_html_e( 'Author Archives for ', 'html5blank' ); echo get_the_author(); ?>

						<?php if ( get_the_author_meta( 'description' ) ) : ?>

							<div class="author-profile">
								<h4><?php esc_html_e( 'About ', 'html5blank' ); echo get_the_author(); ?></h4>
								<?php echo wpautop( get_the_author_meta( 'description' ) ); ?>
							</div>

						<?php endif; ?>

					<?php endif; ?>

					<?php rewind_posts(); ?>

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
