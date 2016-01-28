<?php
  /*
  Plugin Name: European Language Assessment
  Description: Set up and track your progress on the European Language Assessment. Requires Eliot Condon's Advanced Custom Fields plugin.
  Version:     0.1
  Author:      Joe Bacal, Smith College
  License:     GPL2
  License URI: https://www.gnu.org/licenses/gpl-2.0.html
  */

include 'elp_page.php';
//include 'elp_fields.php';

function add_elp($content) {
  //TO DO change this to test for if the page title has European Language Portfolio in it, so a person could have more than one if needed
  //TO DO lets also hide the content and replace it with a name date updated, and language fields
  $page = get_page_by_title( 'European Language Portfolio' );
  global $post;
  if ( is_page($page->ID) ) {

      //set up the sections
      //$elp_graph .= '<section class="elp-graph">';
      $elp_content .= '<section class="elp-content">';

      $elp_categories = array(
        'Listening',
        'Reading',
        'Spoken Interaction',
        'Spoken Production',
        'Writing'
      );

      // $elp_score_options = array(
      //   'A1' => 50,
      //   'A2' => 100,
      //   'B1' => 150,
      //   'B2' => 200,
      //   'C1' => 250,
      //   'C2' => 300
      // );

      //write out entered data
      foreach ($elp_categories as $category) {
        //we'll need these strings to call fields from within loops
        $field_base_name = strtolower(preg_replace('/\s+/', '', $category));
        $repeater_field_title = $field_base_name . '_scores';
        $score_field_title = $field_base_name . '_score';
        $note_field_title = $field_base_name . '_score_additional_text_and_images';

        //catgory heading for each category
        $elp_content .= '<div class="elp-category cat-' . $field_base_name . '">';
        $elp_content .= '<h2>' . $category . '</h2>';

        //a div for the graph for each category
        //$elp_graph .= '<div class="graph-for-">' . $category . 'graph div</div>';

        //for each repeater row, two fields
        while( have_rows($repeater_field_title) ){
          the_row();
          if( get_sub_field('show_on_front') == true ) {
            $elp_content .= '<div class="elp-score">' . get_sub_field($score_field_title) . '</div>';
            $elp_content .= '<div class="elp-score-notes" style="padding-top: 20px;">' . get_sub_field($note_field_title) . '</div>';
          }
        } //end repeater instance(s)
        $elp_content .= '</div>';
      }//end category

      $elp_content .= '</section>';
      //$elp_graph .= '</section>';

      return $content . $elp_graph . $elp_content;

  } else { return $content; }
}

add_filter('the_content', 'add_elp');

//add the styles
function elp_styles(){
  wp_enqueue_style('elp_plugin_styles', plugins_url('elp_styles.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'elp_styles');
