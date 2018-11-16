<?php
/**
 * Fen includes
 *
 * The $fen_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 */

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// start carbon fields
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

$fen_includes = [
  'lib/assets.php',               // Scripts and stylesheets
  'lib/carbon_fields.php',        // Carbon Fields
  'lib/setup.php',                // Theme setup
  'lib/wrapper.php',              // Theme wrapper class
  'lib/rest-api/woocommerce.php'  // Additions to wp-rest api from woocommerce
];
foreach ($fen_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'fen'), $file), E_USER_ERROR);
  }
  require_once $filepath;
}
unset($file, $filepath);

/*------------------------------------ TESTING ------------------------------------*/

function my_awesome_func( $data ) {
  $posts = get_posts( array(
    'author' => $data['id'],
  ) );
 
  if ( empty( $posts ) ) {
    return 'no posts';
  }
 
  return $posts[0]->post_title;
}

add_action( 'rest_api_init', function () {
  register_rest_route( 'myplugin/v1', '/author/(?P<id>\d+)', array(
    'methods' => 'GET',
    'callback' => 'my_awesome_func',
  ) );
} );