<section id="hero-carousel" class="home-hero">

  <?php while( have_rows('hero_panel') ): the_row(); ?>

    <?php
      // vars
      $background = get_sub_field('background_image');
      $headline = get_sub_field('headline');
      $subtext = get_sub_field('subtext');
      $action_text = get_sub_field('primary_action_text');
      $action_link = get_sub_field('primary_action_link');
      $video = get_sub_field('video_id');
    ?>

    <div class="hero-panel" style="background-image:url('<?php echo $background['url']; ?>')">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10 col-lg-8">
            <div class="hero-content">
              <h2 class="title"><?php echo $headline; ?></h2>
              <p class="subtext"><?php echo $subtext; ?></p>
              <div class="actions">
                <a href="<?php echo $action_link; ?>" class="btn btn-lg btn-primary"><?php echo $action_text; ?></a>
                <?php if( $video ): ?>
                  <button type="button" class="btn btn-lg btn-outline-light js-modal-btn" data-video-id="<?php echo $video; ?>"><i class="material-icons">play_arrow</i> Watch our video</button>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <?php endwhile; ?>

</section>
