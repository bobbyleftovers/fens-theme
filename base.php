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

    <?php do_action('get_header');?>
    
    <div id="app" class="container" role="document">
        <main id="main"><?php
            /* if(is_home() || is_page('details') || is_page('thanks')){
              // use vue ?>
              <div id="main-header">
                  <img src="<?= get_template_directory_uri() ?>/assets/images/bpc-logo.svg" alt="BPC Logo">
              </div>
              
              <router-view /><?php
            // } else {*/
              // use standard sage wp
              include Wrapper\template_path();
            // }?>
        </main>

        
      
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
