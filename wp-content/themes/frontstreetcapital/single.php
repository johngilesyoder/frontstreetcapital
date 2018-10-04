<?php get_header(); ?>

<main role="main" aria-label="Content">

	<!-- Masthead -->
	<!-- =================================== -->
	<?php get_template_part( 'includes/page-masthead' ); ?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-8 col-xl-6 offset-xl-1">

			<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<h1><?php the_title(); ?></h1>

					<div class="post-meta">
						<span class="read-time">
							<?php echo do_shortcode('[rt_reading_time label="" postfix_singular="min read" postfix="min read"]'); ?>
						</span>
						<span class="author"><?php esc_html_e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
						<span class="date">
							<time datetime="<?php the_time( 'Y-m-d' ); ?> <?php the_time( 'H:i' ); ?>">
								<?php the_date(); ?> <?php the_time(); ?>
							</time>
						</span>
					</div>

					<?php if ( has_post_thumbnail() ) : ?>
						<a href="<?php the_permalink(); ?>" class="feature-image" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail(); ?>
						</a>
					<?php endif; ?>

					<div class="post-content">
						<?php the_content(); ?>
					</div>

					<div class="post-share">
						<h4>Share this article</h4>
						<?php echo do_shortcode( '[addthis tool="addthis_inline_share_toolbox_rwbc"]' ); ?>
					</div>

					<div class="post-tags">
						<h4>Tags</h4>
						<?php the_tags( '', '', '' ); ?>
					</div>

					<div class="post-author">
						<h4>About the Author (<?php the_author(); ?>)</h4>
						<?php the_author_description(); ?>
					</div>

				</article>

			<?php endwhile; ?>

			<?php else : ?>

				<article>

					<h1><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

				</article>

			<?php endif; ?>

			</div>
			<div class="col-lg-4 col-xl-4 offset-xl-1">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

</main>

<?php get_footer(); ?>
