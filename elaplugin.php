<?php
  /*
  Plugin Name: European Language Assessment
  Description: Set up and track your progress on the European Language Assessment. Requires Eliot Condon's Advanced Custom Fields plugin.
  Version:     0.1
  Author:      Joe Bacal, Smith College
  License:     GPL2
  License URI: https://www.gnu.org/licenses/gpl-2.0.html
  */

include 'elp_class.php';
//include 'elp_fields.php';

function add_elp($content) {
  global $post;
  if ( has_category('European Language Portfolio') ) {
    $elp = new EuropeanLanguagePortfolio($post);
    $elp->build_scoreset();
    return $content . $elp->elp_content();
  } else { return $content; }
}
add_filter('the_content', 'add_elp');

//add the styles
function elp_styles(){
  wp_enqueue_style('elp_plugin_styles', plugins_url('elp_styles.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'elp_styles');

//add translation studies categories and tag on plugin activation
function elaplugin_activate() {

  $terms_to_add = array(
    "European Language Portfolio",
    "Category_A",
    "Category_B"
  );

  foreach ($terms_to_add as $trm) {
    if (term_exists($trm) == 0 ){
      wp_create_category($trm);
    }
  }

  //wp_insert_term();
  if (term_exists("Translation Studies") == 0 ){
    wp_create_tag("Translation Studies");
  }
}
register_activation_hook( __FILE__, 'elaplugin_activate' );
