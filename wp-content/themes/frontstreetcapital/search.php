<?php get_header(); ?>

<main role="main" aria-label="Content">

	<div class="container-fluid">
		<div class="row justify-content-between">
			<div class="col-8">

				<h1 class="page-title"><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); ?>'<?php echo get_search_query(); ?>'</h1>

				<div class="article-loop">
					<?php get_template_part( 'loop' ); ?>
				</div>

				<?php bootstrap_pagination(); ?>

			</div>
			<div class="col-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

</main>

<?php get_footer(); ?>
