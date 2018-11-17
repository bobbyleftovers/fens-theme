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
    <![endif]--><?php
    
    do_action('get_header');
    get_template_part('templates/header');?>
    
    <div id="app" role="document">
        <main id="main"><?php
              // use standard sage wp
              include Wrapper\template_path();?>
        </main>
        <div class="columns">
            <div class="column">
              n ligula, quis tempor urna cursus lobortis. Mauris ut ullamcorper mi, vel iaculis neque. Fusce lobortis tellus purus, non molestie odio mollis ac. Duis ut metus in quam tincidunt malesuada et sed ligula. Donec pharetra nisi vel odio rutrum convallis. Sed id nulla eget felis convallis interdum. Nam ut ornare enim, ut pellentesque nibh. Nunc a commodo quam. Fusce nec dapibus erat. Donec vitae ipsum vel urna placerat porttitor sit amet at urna. Duis sit amet laoreet elit. Fusce bibendum eleifend tristique. Nunc ex turpis, condimentum a ullamcorper ut, vehicula nec arcu. Curabitur sed eros condimentum, molestie odio sed, semper leo.
              </div>
              <div class="column">
              n ligula, quis tempor urna cursus lobortis. Mauris ut ullamcorper mi, vel iaculis neque. Fusce lobortis tellus purus, non molestie odio mollis ac. Duis ut metus in quam tincidunt malesuada et sed ligula. Donec pharetra nisi vel odio rutrum convallis. Sed id nulla eget felis convallis interdum. Nam ut ornare enim, ut pellentesque nibh. Nunc a commodo quam. Fusce nec dapibus erat. Donec vitae ipsum vel urna placerat porttitor sit amet at urna. Duis sit amet laoreet elit. Fusce bibendum eleifend tristique. Nunc ex turpis, condimentum a ullamcorper ut, vehicula nec arcu. Curabitur sed eros condimentum, molestie odio sed, semper leo.
              </div>
              <div class="column">
              n ligula, quis tempor urna cursus lobortis. Mauris ut ullamcorper mi, vel iaculis neque. Fusce lobortis tellus purus, non molestie odio mollis ac. Duis ut metus in quam tincidunt malesuada et sed ligula. Donec pharetra nisi vel odio rutrum convallis. Sed id nulla eget felis convallis interdum. Nam ut ornare enim, ut pellentesque nibh. Nunc a commodo quam. Fusce nec dapibus erat. Donec vitae ipsum vel urna placerat porttitor sit amet at urna. Duis sit amet laoreet elit. Fusce bibendum eleifend tristique. Nunc ex turpis, condimentum a ullamcorper ut, vehicula nec arcu. Curabitur sed eros condimentum, molestie odio sed, semper leo.
              </div>
        </div>
        <div class="columns">
            <div class="column">
              n ligula, quis tempor urna cursus lobortis. Mauris ut ullamcorper mi, vel iaculis neque. Fusce lobortis tellus purus, non molestie odio mollis ac. Duis ut metus in quam tincidunt malesuada et sed ligula. Donec pharetra nisi vel odio rutrum convallis. Sed id nulla eget felis convallis interdum. Nam ut ornare enim, ut pellentesque nibh. Nunc a commodo quam. Fusce nec dapibus erat. Donec vitae ipsum vel urna placerat porttitor sit amet at urna. Duis sit amet laoreet elit. Fusce bibendum eleifend tristique. Nunc ex turpis, condimentum a ullamcorper ut, vehicula nec arcu. Curabitur sed eros condimentum, molestie odio sed, semper leo.
              </div>
              <div class="column">
              n ligula, quis tempor urna cursus lobortis. Mauris ut ullamcorper mi, vel iaculis neque. Fusce lobortis tellus purus, non molestie odio mollis ac. Duis ut metus in quam tincidunt malesuada et sed ligula. Donec pharetra nisi vel odio rutrum convallis. Sed id nulla eget felis convallis interdum. Nam ut ornare enim, ut pellentesque nibh. Nunc a commodo quam. Fusce nec dapibus erat. Donec vitae ipsum vel urna placerat porttitor sit amet at urna. Duis sit amet laoreet elit. Fusce bibendum eleifend tristique. Nunc ex turpis, condimentum a ullamcorper ut, vehicula nec arcu. Curabitur sed eros condimentum, molestie odio sed, semper leo.
              </div>
              <div class="column">
              n ligula, quis tempor urna cursus lobortis. Mauris ut ullamcorper mi, vel iaculis neque. Fusce lobortis tellus purus, non molestie odio mollis ac. Duis ut metus in quam tincidunt malesuada et sed ligula. Donec pharetra nisi vel odio rutrum convallis. Sed id nulla eget felis convallis interdum. Nam ut ornare enim, ut pellentesque nibh. Nunc a commodo quam. Fusce nec dapibus erat. Donec vitae ipsum vel urna placerat porttitor sit amet at urna. Duis sit amet laoreet elit. Fusce bibendum eleifend tristique. Nunc ex turpis, condimentum a ullamcorper ut, vehicula nec arcu. Curabitur sed eros condimentum, molestie odio sed, semper leo.
              </div>
              <div class="column">
              n ligula, quis tempor urna cursus lobortis. Mauris ut ullamcorper mi, vel iaculis neque. Fusce lobortis tellus purus, non molestie odio mollis ac. Duis ut metus in quam tincidunt malesuada et sed ligula. Donec pharetra nisi vel odio rutrum convallis. Sed id nulla eget felis convallis interdum. Nam ut ornare enim, ut pellentesque nibh. Nunc a commodo quam. Fusce nec dapibus erat. Donec vitae ipsum vel urna placerat porttitor sit amet at urna. Duis sit amet laoreet elit. Fusce bibendum eleifend tristique. Nunc ex turpis, condimentum a ullamcorper ut, vehicula nec arcu. Curabitur sed eros condimentum, molestie odio sed, semper leo.
              </div>
        </div>
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
