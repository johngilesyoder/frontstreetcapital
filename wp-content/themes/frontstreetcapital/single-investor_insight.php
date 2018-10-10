<?php
	get_header();
	$terms = get_the_terms( $post->ID , 'insight_type' );
?>

<main role="main">

	<!-- Masthead -->
	<!-- =================================== -->
	<?php get_template_part( 'includes/page-masthead' ); ?>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 col-lg-8">

				<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<h1 class="page-title"><?php the_title(); ?></h1>
						<span class="preheader"><?php foreach ( $terms as $term ) { echo $term->name; } ?></span>

						<div class="insight-excerpt">
							<?php the_excerpt(); ?>
						</div>

						<?php if ( get_field('amazon_link') ) : ?>
							<a class="amazon-product" target="_blank" href="<?php the_field('amazon_link'); ?>">
								<span class="view-on-amazon">
									View on <img class="amazon-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/amazon-logo.svg" alt="Amazon.com">
									<i class="material-icons">launch</i>
								</span>
								<?php the_post_thumbnail(); ?>
							</a>
						<?php endif; ?>

						<?php if ( get_field('insight_document') ) : ?>
							<?php $file = get_field('insight_document'); ?>
							<a href="<?php echo $file['url']; ?>" class="document">
								<div class="icon">
									<i class="material-icons">insert_drive_file</i>
								</div>
								<div class="details">
									<h4 class="document-title"><?php echo $file['filename']; ?></h4>
								</div>
								<div class="view">
									<span class="view-link">
										<i class="material-icons">chevron_right</i>
									</span>
								</div>
							</a>
						<?php endif; ?>

						<?php if ( get_field('insight_video') ) : ?>
							<div class="embed-container">
								<?php the_field('insight_video'); ?>
							</div>
						<?php endif; ?>

						<?php if ( the_field('insight_audio') ) : ?>
							<?php the_field('insight_audio'); ?>
						<?php endif; ?>

					</article>

				<?php endwhile; ?>

				<?php else : ?>

					<!-- article -->
					<article>

						<h1><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

					</article>
					<!-- /article -->

				<?php endif; ?>

			</div>
		</div>
	</div>

</main>

<?php get_footer(); ?>
