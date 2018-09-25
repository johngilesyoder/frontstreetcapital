<div class="page-masthead" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/masthead-insights.jpg');">
  <div class="container-fluid">
    <div class="row">
      <div class="col-6">
        <div class="masthead-content">

          <!-- Archive Title -->
          <?php if ( is_post_type_archive('investor_insight') ) : ?>
            <h1 class="page-title"><?php the_archive_title();?></h1>
            <?php the_archive_description( '<div class="subtext"', '</div>' ); ?>

          <!-- Insight Title -->
          <?php elseif ( (is_tax() && is_taxonomy('insight_type')) || is_singular('investor_insight') ) : ?>
            <?php $parent_type = get_post_type_object( 'investor_insight' ); ?>
            <h1 class="page-title"><?php echo $parent_type->labels->name; ?></h1>
            <div class="subtext"><?php echo $parent_type->description; ?></div>

          <!-- Page Title -->
          <?php else : ?>
            <h1 class="page-title"><?php the_title(); ?></h1>
            <div class="subtext"><?php the_excerpt(); ?></div>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
</div>
