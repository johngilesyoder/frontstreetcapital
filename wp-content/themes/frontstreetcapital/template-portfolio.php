<?php /* Template Name: Portfolio */ get_header(); ?>

<main role="main">
	
	<!-- Masthead -->
	<!-- =================================== -->
	<?php get_template_part( 'includes/page-masthead' ); ?>

	<div class="container-fluid">
		<div class="companies">
			<a href="#" class="company">
				<img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/company-costco.jpg" alt="Costco">
			</a>
			<a href="#" class="company">
				<img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/company-costco.jpg" alt="Costco">
			</a>
			<a href="#" class="company">
				<img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/company-costco.jpg" alt="Costco">
			</a>
			<a href="#" class="company">
				<img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/company-costco.jpg" alt="Costco">
			</a>
			<a href="#" class="company">
				<img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/company-costco.jpg" alt="Costco">
			</a>
			<a href="#" class="company">
				<img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/company-costco.jpg" alt="Costco">
			</a>
			<a href="#" class="company">
				<img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/company-costco.jpg" alt="Costco">
			</a>
			<a href="#" class="company">
				<img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/company-costco.jpg" alt="Costco">
			</a>
			<a href="#" class="company">
				<img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/company-costco.jpg" alt="Costco">
			</a>
			<a href="#" class="company">
				<img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/company-costco.jpg" alt="Costco">
			</a>
		</div>
	</div>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php the_content(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

		</article>
		<!-- /article -->

	<?php endif; ?>
</section>
</main>

<?php get_footer(); ?>
