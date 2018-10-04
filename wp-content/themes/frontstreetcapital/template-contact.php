<?php
/* Template Name: Contact */
get_header();
$phone = get_field('phone_number', 'option');
$phone_unformatted = preg_replace('/\D+/', '', $phone);
?>

	<main role="main">
		<div class="container-fluid">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h1 class="page-title"><?php the_title(); ?></h1>
				<div class="subtext"><?php the_content(); ?></div>

				<div class="methods">
					<div class="row">
						<div class="col-lg-4">
							<div class="contact-card">
								<h4 class="method-title">Front Street Capital Management</h4>
								<address>
									<?php the_field('address', 'option'); ?>
								</address>
								<p><a href="tel:<?php echo $phone_unformatted; ?>"><?php echo $phone; ?></a></p>
								<p><a href="mailto:<?php the_field('email_address', 'option'); ?>"><?php the_field('email_address', 'option'); ?></a></p>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="contact-form">
								<h4 class="method-title">Send us a message or schedule a consultation</h4>
								<?php gravity_form( 1, false, false, false, '', true ); ?>
							</div>
						</div>
					</div>
				</div>
			</article>

		<?php endwhile; ?>

		<?php else: ?>

			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>

		<?php endif; ?>

	</main>

<?php get_footer(); ?>
