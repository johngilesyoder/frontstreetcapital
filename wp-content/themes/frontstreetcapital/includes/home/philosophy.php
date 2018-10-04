<?php
$image1 = get_field('philosophy_image_card');
$image2 = get_field('philosophy_auxiliary_card_1_image');
?>
<section class="home-philosophy section">
  <div class="container-fluid">
    <h2 class="section-title">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/site-logo-black.png">
      <?php the_field('philosophy_section_title'); ?>
    </h2>
    <div class="grid-row">
      <div class="grid-column">
        <div class="grid-block grid-block-lg">
          <span class="preheader"><?php the_field('philosophy_card_1_preheader'); ?></span>
          <h3 class="card-title"><?php the_field('philosophy_card_1_headline'); ?></h3>
          <?php the_field('philosophy_card_1_content'); ?>
        </div>
      </div>
      <div class="grid-column">
        <div class="grid-block grid-block-quote">
          <i class="material-icons">format_quote</i>
          <blockquote class="blockquote">
            <p>&ldquo;<?php the_field('philosophy_quote'); ?>&rdquo;</p>
            <footer class="blockquote-footer"><?php the_field('philosophy_quote_author'); ?></footer>
          </blockquote>
        </div>
        <div class="grid-block grid-block-photo" style="background-image:url('<?php echo $image1['url']; ?>')"> </div>
      </div>
    </div>
    <div class="grid-row">
      <div class="grid-block grid-block-long-term">
        <div class="text-wrapper">
          <h4 class="card-title-sm"><?php the_field('philosophy_auxiliary_card_1_headline'); ?></h4>
          <?php the_field('philosophy_auxiliary_card_1_content'); ?>
        </div>
        <div class="block-photo" style="background-image:url('<?php echo $image2['url']; ?>');"></div>
      </div>
      <div class="grid-block grid-block-eating">
        <h4 class="card-title-sm"><?php the_field('philosophy_auxiliary_card_2_headline'); ?></h4>
        <?php the_field('philosophy_auxiliary_card_2_content'); ?>
      </div>
    </div>
  </div>
  <div class="section-follow-up">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <?php the_field('philosophy_section_follow_up'); ?>
        </div>
      </div>
    </div>
  </div>
</section>
