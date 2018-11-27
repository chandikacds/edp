<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
<?php if(is_archive()){ ?>
  <style type="text/css">
   

.current-menu-item > a::after {
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid;
    border-right: 0.3em solid transparent;
    border-bottom: 0;
    border-left: 0.3em solid transparent;
}


.current-menu-item .sub-menu{
 display: block !important;   
}
.current-menu-parent .sub-menu{
 display: block !important;   
}
.current-menu-parent > a{
    color: #ed1552 !important;
    font-family: 'Gilroy-ExtraBold' !important;
}

.current-menu-parent > a::after {
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid;
    border-right: 0.3em solid transparent;
    border-bottom: 0;
    border-left: 0.3em solid transparent;
}
  </style>
<?php } ?>

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
    <?php if(is_page() || is_archive() || is_search()){ ?>
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
<?php }else{ ?> 
  
 <div class="container" role="document">
      <div class="row">
        <main class="col-md-9">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="col-md-3">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
  </section> <!-- start on header -->
<?php } ?>


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
