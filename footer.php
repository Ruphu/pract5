<footer class="footer">
  <div class="container">
    <div class="footer__links">
      <?php the_custom_logo() ?>

      <div class="footer__lists">
        <div class="footer__list-wrapper wow fadeInUp" data-wow-delay=".2s">
          <h5 class="footer__list-title">Home</h5>
          <a href="#" class="footer__list-link">To Order</a>
          <a href="#" class="footer__list-link">About us</a>
          <a href="#" class="footer__list-link">Events</a>
          <a href="#" class="footer__list-link">Menu</a>
        </div>
        <div class="footer__list-wrapper wow fadeInUp" data-wow-delay=".4s">
          <h5 class="footer__list-title">Events</h5>
          <a href="#" class="footer__list-link">3 Pizza 1 Free Coffee</a>
          <a href="#" class="footer__list-link">2 Pizza for 1 Price</a>
          <a href="#" class="footer__list-link">Kitchen Tour</a>
        </div>

        <div class="footer__list-wrapper wow fadeInUp" data-wow-delay=".6s">
          <h5 class="footer__list-title">Menu</h5>
          <a href="#" class="footer__list-link">Show All</a>
          <a href="#" class="footer__list-link">Seaproducts</a>
          <a href="#" class="footer__list-link">Vegan</a>
          <a href="#" class="footer__list-link">Meat</a>
        </div>
        <div class="footer__list-wrapper wow fadeInUp" data-wow-delay=".8s">
          <h5 class="footer__list-title">About Us</h5>
          <a href="#" class="footer__list-link">Our History</a>
          <a href="#" class="footer__list-link">Why We?</a>
        </div>
      </div>
    </div>
    <div class="footer__bottom">
      <a href="tel:<?php the_field('phone_number'); ?>" class="footer__phone"><?php the_field('phone'); ?>
      </a>
      <div class="footer__socials">

        <a href="<?php the_field('inst_link');?> " class="footer__social"><img
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/inst.svg" alt="logo"
            class="footer__img" /></a>

            <a href="<?php the_field('twit_link');?> " class="footer__social">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/twit.svg" alt="logo"
            class="footer__img" /></a>

            <a href="<?php the_field('facebook_link');?> " class="footer__social">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/face.svg" alt="logo"
            class="footer__img" /></a>
      </div>
    </div>
  </div>
</footer>


<?php wp_footer(); ?>



</body>

</html>