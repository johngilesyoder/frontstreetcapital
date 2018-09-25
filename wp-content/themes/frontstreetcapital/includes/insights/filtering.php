<div class="category-filtering">
  <div class="container-fluid">
    <?php if (is_singular( 'investor_insight' )) : ?>
      <a href="/investor-insights/" class="back-link"><i class="material-icons">chevron_left</i>Investor Insights</a>
    <?php else : ?>
      <ul class="categories">
        <?php if(is_post_type_archive($post_type)) : ?>
          <li class="cat-item current-cat"><a href="/investor-insights/">All</a></li>
        <?php else : ?>
          <li class="cat-item"><a href="/investor-insights/">All</a></li>
        <?php endif; ?>
        <?php wp_list_categories( array(
          'orderby'            => 'name',
          'hide_empty'         => 0,
          'title_li'           => '',
          'taxonomy'            => 'insight_type',
        ) ); ?>
      </ul>
    <?php endif; ?>
  </div>
</div>
