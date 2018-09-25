      <footer class="site-footer" role="contentinfo">
        <div class="container-fluid">
          <div class="row">
            <div class="col">
              <div class="footer-message">
                <img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/site-logo-white.png" alt="Front Street Capital Management, Inc.">
                <small>Investing in the fund involves risk. Investors should carefully review the risks associated with an investment in the fund by reading the prospectus which can be found here, and understand those risks before investing.</small>
                <!-- <p>&copy; Front Street Capital Management, Inc <?php echo date('Y'); ?>. All rights reserved.</p> -->
              </div>
            </div>
            <div class="col">
              <h4>Our Offices</h4>
              <address>
                218 East Front Street, Suite 205<br>
                Missoula MT  59802
              </address>
            </div>
            <div class="col">
              <h4>Contact</h4>
              <a class="contact-link" href="">(406) 541-0130</a><br>
              <a class="contact-link" href="">info@frontstreetcap.com</a>
            </div>
            <div class="col">
              <h4>Newsletter</h4>
              <form class="mailchimp-form">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Your email">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="button">OK</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </footer>

      <!-- Account Access -->
      <!-- =================================== -->
      <?php get_template_part( 'includes/account-access'); ?>

		<?php wp_footer(); ?>

	</body>
</html>
