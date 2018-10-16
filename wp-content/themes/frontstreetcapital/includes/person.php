<?php

  // vars
  $photo = get_sub_field('member_photo');
  $content = get_sub_field('member_description');
  $name = get_sub_field('member_name');
  $title = get_sub_field('member_title');
?>
<div class="person">
  <div class="person-photo" style="background-image:url('<?php echo $photo['url']; ?>');" alt="<?php echo $photo['alt'] ?>"></div>
  <div class="person-content">
    <h4 class="person-name"><?php echo $name; ?></h4>
    <span class="person-title"><?php echo $title; ?></span>
    <div class="person-description">
      <?php echo $content; ?>
    </div>
  </div>
</div>
