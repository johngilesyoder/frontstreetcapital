<?php if (is_front_page() || is_page_template( 'template-portfolio.php' )) : ?>
  <header class="site-header inverse">
<?php else: ?>
  <header class="site-header">
<?php endif; ?>
  <div class="container-fluid">
    <div class="flex-wrapper">
      <a href="/" class="site-logo">
        <?php if (is_front_page() || is_page_template( 'template-portfolio.php' )) : ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/site-logo-inverted.png" alt="Front Street Capital Management, Inc.">
        <?php else: ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/site-logo.png" alt="Front Street Capital Management, Inc.">
        <?php endif; ?>
      </a>
      <div class="site-navigation">
        <nav class="nav-quick-access">
          <a href="#">Contact us</a>
          <button type="button" class="btn btn-primary">Account access</button>
        </nav>
        <button type="button" class="btn-menu">
          <?php if (is_front_page() || is_page_template( 'template-portfolio.php' )) : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-menu-inverted.svg">
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-menu.svg">
          <?php endif; ?>
        </button>
      </div>
    </div>
  </div>
</header>
