<?php if (
  is_front_page() ||
  is_page_template( 'template-portfolio.php' ) ||
  is_page_template( 'template-masthead.php' ) ||
  is_post_type_archive('investor_insight') ||
  (is_tax() && is_taxonomy('insight_type')) ||
  is_singular('investor_insight') ||
  is_home() ||
  is_singular('post') ||
  is_date() ||
  is_tag() ||
  is_author()
) : ?>
  <header class="site-header inverse">
<?php else: ?>
  <header class="site-header">
<?php endif; ?>
  <div class="container-fluid">
    <div class="flex-wrapper">
      <a href="/" class="site-logo">
        <?php if (
          is_front_page() ||
          is_page_template( 'template-portfolio.php' ) ||
          is_page_template( 'template-masthead.php' ) ||
          is_post_type_archive('investor_insight') ||
          (is_tax() && is_taxonomy('insight_type')) ||
          is_singular('investor_insight') ||
          is_home() ||
          is_singular('post') ||
          is_date() ||
          is_tag() ||
          is_author()
        ) : ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/site-logo-inverted.png" alt="Front Street Capital Management, Inc.">
        <?php else: ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/site-logo.png" alt="Front Street Capital Management, Inc.">
        <?php endif; ?>
      </a>
      <div class="site-navigation">
        <nav class="nav-quick-access">
          <a href="/contact-us/">Contact us</a>
          <button type="button" class="btn btn-primary" data-type="open-account-access">Account access</button>
        </nav>
        <button type="button" class="btn-menu" data-type="open-header-menu">
          <?php if (
            is_front_page() ||
            is_page_template( 'template-portfolio.php' ) ||
            is_page_template( 'template-masthead.php' ) ||
            is_post_type_archive('investor_insight') ||
            (is_tax() && is_taxonomy('insight_type')) ||
            is_singular('investor_insight') ||
            is_home() ||
            is_singular('post') ||
            is_date() ||
            is_tag() ||
            is_author()
          ) : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-menu-inverted.svg">
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-menu.svg">
          <?php endif; ?>
        </button>
      </div>
    </div>
  </div>
</header>
