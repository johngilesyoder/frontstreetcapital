<section class="home-mission section">
  <div class="container-fluid">
    <div class="mission-card">
      <span class="preheader"><?php the_field('mission_statement_preheader'); ?></span>
      <h3 class="card-title"><?php the_field('mission_statement_headline'); ?></h3>
      <div class="row">
        <div class="col">
          <?php the_field('mission_statement_left_content'); ?>
        </div>
        <div class="col">
          <?php the_field('mission_statement_right_content'); ?>
        </div>
      </div>
    </div>
  </div>
</section>
