<!doctype html>
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" <?php language_attributes(); ?>>
  <head <?php do_action( 'add_head_attributes' ); ?>>

    <!-- Google Analytics -->
    <!-- =================================== -->
    <?php get_template_part( 'includes/analytics' ); ?>
    
    <!-- Title -->
    <!-- =================================== -->
    <title><?php wp_title(''); ?></title>

    <!-- Styles -->
    <!-- =================================== -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon.png" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/icons/touch.png" rel="apple-touch-icon-precomposed">

    <!-- Meta -->
    <!-- =================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <!-- Wordpress Generated -->
    <!-- =================================== -->
    <?php wp_head(); ?>

  </head>

  <?php if (is_home()) : ?>
    <body class="page-blog">
  <?php else: ?>
    <body <?php body_class(); ?>>
  <?php endif; ?>


    <?php if ( !is_404() ) : ?>
      <!-- Quick Access -->
      <!-- =================================== -->
      <?php get_template_part( 'includes/header-nav' ); ?>

      <!-- Nav -->
      <!-- =================================== -->
      <?php get_template_part( 'includes/off-canvas-menu'); ?>
    <?php endif; ?>
