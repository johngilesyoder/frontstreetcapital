<?php /* Template Name: Portfolio */ get_header(); ?>

<main role="main">

	<!-- Masthead -->
	<!-- =================================== -->
	<?php get_template_part( 'includes/page-masthead' ); ?>

	<div class="container-fluid">
		<div class="companies">

			<?php while( have_rows('portfolio_company') ): the_row();

			// vars
		  $logo = get_sub_field('company_logo');
		  $name = get_sub_field('company_name');
		  $link = get_sub_field('company_link');
			?>

				<a href="<?php echo $link; ?>" target="_blank" class="company">
					<img class="site-logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $name; ?>" >
				</a>

      <?php endwhile; ?>

			<!-- clean up the grid with these spacers -->
			<span class="company"></span>
			<span class="company"></span>

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
