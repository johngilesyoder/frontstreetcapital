<?php
	get_header();
	$terms = get_the_terms( $post->ID , 'insight_type' );
?>

<main role="main">

	<!-- Masthead -->
	<!-- =================================== -->
	<?php get_template_part( 'includes/page-masthead' ); ?>

	<?php get_template_part( 'includes/insights/filtering'); ?>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-8">

				<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<h1 class="insight-title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</h1>
						<span class="preheader"><?php foreach ( $terms as $term ) { echo $term->name; } ?></span>

						<div class="insight-excerpt">
							<?php the_excerpt(); ?>
						</div>

						<!-- post thumbnail -->
						<?php if ( has_post_thumbnail() ) : // Check if Thumbnail exists. ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<?php the_post_thumbnail(); // Fullsize image for the single post. ?>
							</a>
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
