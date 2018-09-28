<section class="home-contact">
  <div class="container-fluid">
    <div class="row">
      <div class="col-8">
        <div class="card-contact">
          <h2 class="section-title">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/site-logo-black.png">
            Contact Us
          </h2>
          <?php gravity_form( 1, false, false, false, '', true ); ?>
        </div>
      </div>
    </div>
  </div>
  <address>
    <?php the_field('address', 'option'); ?>
  </address>
  <iframe
    scrolling="no"
    width="600"
    height="450"
    frameborder="0"
    style="border:0"
    marginheight="0"
    marginwidth="0"
    src="https://www.google.com/maps/embed/v1/view?key=AIzaSyAJf_8xNXJ5i_tMER6tGu4muxSka7xfLrU&center=46.870018,-113.993016&zoom=16"
    allowfullscreen></iframe>
  </section>
