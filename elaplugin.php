<?php
  /*
  Plugin Name: Smith College Translation Studies Concentration
  Description: European Language Portfolio and standardized categories for Translation Studies Concentration. Requires ACF Pro.
  Version:     0.1
  Author:      Joe Bacal, Smith College
  License:     GPL2
  License URI: https://www.gnu.org/licenses/gpl-2.0.html
  */

include 'elp_class.php';
include 'elp_fields.php';

function add_elp($content) {
  global $post;
  if ( has_category('Assessing Language Skills') ) {

    $elp = new EuropeanLanguagePortfolio($post);
    $elp->build_scoreset();

    return $content . $elp->elp_title() . $elp->render_graph_divs() . $elp->elp_content();
    //return $content . $elp->elp_title() . $elp->elp_content();

  } else { return $content; }
}
add_filter('the_content', 'add_elp');

//add the js and styles
function elp_styles_scripts(){
  wp_enqueue_style('elp_plugin_styles', plugins_url('elp_styles.css', __FILE__));
  wp_enqueue_script( 'elp-graph', plugins_url( 'elp-graph.js' , __FILE__ ), array('jquery'), '', true );
}
add_action('wp_enqueue_scripts', 'elp_styles_scripts');

//add translation studies categories and tag on plugin activation
function elaplugin_activate() {

  $terms_to_add = array(
    "Learning a Language",
    "Studying Abroad",
    "Practicing",
    "Translating",
    "Assessing Language Skills"
  );

  //create those categories if they don't already exist
  foreach ($terms_to_add as $trm) {
    if (term_exists($trm) == 0 ){
      wp_create_category($trm);
    }
  }

  //add the translation studies tag
  if (term_exists("Translation Studies") == 0 ){
    wp_create_tag("Translation Studies");
  }
}
register_activation_hook( __FILE__, 'elaplugin_activate' );
