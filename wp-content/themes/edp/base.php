<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="" role="document">
      <div class="">
        <main class="">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
    <?php if(is_front_page()){ ?>
      <!-- <script src="assets/js/main.js"></script> -->
      <!-- <script src="assets/js/vendor/jquery.flexslider.js"></script> -->
          <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/flexslider.css">
          <script src="<?php echo get_template_directory_uri(); ?>/assets/scripts/vendor/jquery.flexslider.js"></script>
    <?php } ?>
  </body>
</html>
