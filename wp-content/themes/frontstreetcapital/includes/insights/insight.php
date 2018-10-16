<?php $terms = get_the_terms( $post->ID , 'insight_type' ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <!-- post thumbnail -->
  <?php if ( has_post_thumbnail() ) : // Check if thumbnail exists. ?>
    <!-- /post thumbnail -->
    <a href="<?php the_permalink(); ?>" class="feature-img" title="<?php the_title_attribute(); ?>" style="background-image:url('<?php the_post_thumbnail_url( 'full' ); ?>')">
      <?php if( get_field('insight_video') ) : ?>
        <span class="has-media video"><i class="material-icons">play_arrow</i></span>
      <?php elseif( get_field('insight_audio') ) : ?>
        <span class="has-media audio"><i class="material-icons">volume_up</i></span>
      <?php elseif( get_field('insight_document') ) : ?>
        <span class="has-media document"><i class="material-icons">insert_drive_file</i></span>
      <?php endif; ?>
    </a>
  <?php else : ?>
    <!-- /post thumbnail -->
    <a href="<?php the_permalink(); ?>" class="feature-img" title="<?php the_title_attribute(); ?>" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/default-insight.jpg')"></a>
  <?php endif; ?>
  <span class="preheader"><?php foreach ( $terms as $term ) { echo $term->name; } ?></span>
  <h3 class="insight-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  <div class="insight-excerpt"><?php html5wp_excerpt( 'html5wp_insight_post' ); ?></div>
</article>
