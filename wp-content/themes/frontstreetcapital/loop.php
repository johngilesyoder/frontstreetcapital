<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="row">
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="col-md-3 col-lg-2">
					<!-- post thumbnail -->
						<a href="<?php the_permalink(); ?>" class="post-thumbnail" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail( array( 600, 600 ) ); // Declare pixel size you need inside the array. ?>
						</a>
					<!-- /post thumbnail -->
				</div>
			<?php endif; ?>
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="col-md-9 col-lg-10">
			<?php else : ?>
				<div class="col-12">
			<?php endif; ?>
				<!-- post title -->
				<h2>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				</h2>
				<!-- /post title -->

				<?php html5wp_excerpt( 'html5wp_index' ); // Build your custom callback length in functions.php. ?>

				<!-- post details -->
				<div class="post-meta">
					<span class="read-time">
						<?php echo do_shortcode('[rt_reading_time label="" postfix_singular="min read" postfix="min read"]'); ?>
					</span>
					<span class="author"><?php esc_html_e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
				</div>
				<!-- /post details -->
			</div>
		</div>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else : ?>

	<!-- article -->
	<article>
		<h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
