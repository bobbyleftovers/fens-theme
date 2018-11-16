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

// start carbon fields
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

$fen_includes = [
  'lib/carbon/fields.php',        // Carbon Fields
  'lib/assets.php',               // Scripts and stylesheets
  'lib/extras.php',               // Custom functions
  'lib/titles.php',               // Page titles
  'lib/customizer.php',           // Theme customizer
  'lib/setup.php',                // Theme setup
  'lib/wrapper.php',              // Theme wrapper class
  'lib/rest-api/routes.php'       // Additions to wp-rest api from woocommerce
];
foreach ($fen_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'fen'), $file), E_USER_ERROR);
  }
  require_once $filepath;
}
unset($file, $filepath);