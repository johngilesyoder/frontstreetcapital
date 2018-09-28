<div id="account-access" class="account-access">
  <div class="close-wrapper">
    <button type="button" class="btn-close-account-access" data-type="close-account-access"><i class="material-icons">close</i></button>
  </div>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-6">
        <?php the_field('account_access_content', 'option'); ?>
        <div class="brokers">

          <?php while( have_rows('broker', 'option') ): the_row(); ?>

            <?php
              // vars
              $logo = get_sub_field('broker_logo');
              $name = get_sub_field('broker_name');
              $link = get_sub_field('broker_link');
            ?>

            <a href="<?php echo $link; ?>" target="_blank" class="broker">
              <img class="broker-logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $name; ?> Logo">
              <span class="broker-name"><?php echo $name; ?><i class="material-icons">launch</i></span>
            </a>

          <?php endwhile; ?>

        </div>
      </div>
    </div>
  </div>
</div>
