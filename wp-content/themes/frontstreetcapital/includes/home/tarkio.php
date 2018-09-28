<?php
$logo = get_field('tarkio_fund_logo');
$background = get_field('tarkio_fund_background');
?>

<section class="home-tarkio section" style="background-image:url('<?php echo $background['url']; ?>')">
  <div class="container-fluid">
    <div class="flex-wrapper">
      <div class="tarkio-logo">
        <img src="<?php echo $logo['url']; ?>" alt="Tarkio Fund">
      </div>
      <div class="tarkio-card">
        <span class="preheader"><?php the_field('tarkio_fund_preheader'); ?></span>
        <h3 class="card-title"><?php the_field('tarkio_fund_headline'); ?></h3>
        <p>The Tarkio Fund, is a no load mutual fund with a 1.00% management fee and an initial investment minimum as low as $1,000. Detailed information on the fund's performance is available from any of the major fund rating platforms.</p>
        <a href="<?php the_field('tarkio_fund_link'); ?>" target="_blank" class="btn btn-lg btn-primary"><?php the_field('tarkio_fund_button_text'); ?> <i class="material-icons">launch</i></a>
        <small><?php the_field('tarkio_fund_disclaimer'); ?></small>
      </div>
    </div>
  </div>
</section>
