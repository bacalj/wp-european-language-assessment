<?php

class EuropeanLanguagePortfolio {
  public function __construct($post){
    $this->post = $post;
    $this->elp_categories = array(
      'Listening',
      'Reading',
      'Spoken Interaction',
      'Spoken Production',
      'Writing'
    );
  }

  public function build_scoreset(){
    $this->elp_content = '<section class="elp-content">';
    $this->elp_content .= '<div class="elp-top">'. get_field('name') . ' | ' . get_field('language') . '</div>';
    foreach ($this->elp_categories as $category) {
      //we'll need these strings to call fields from within loops
      $field_base_name = strtolower(preg_replace('/\s+/', '', $category));
      $repeater_field_title = $field_base_name . '_scores';
      $score_field_title = $field_base_name . '_score';
      $note_field_title = $field_base_name . '_score_additional_text_and_images';
      $date_field_title = $field_base_name . '_score_date';

      //catgory heading for each category
      $this->elp_content .= '<div class="elp-category cat-' . $field_base_name . '">';
      $this->elp_content .= '<h3>' . $category . '</h3>';

      //for each repeater row, three fields
      while( have_rows($repeater_field_title) ){
        the_row();
        if( get_sub_field('show_on_front') == true ) {
          $this->elp_content .= '<div class="elp-date">' . get_sub_field($date_field_title) . '</div>';
          $this->elp_content .= '<div class="elp-score">' . get_sub_field($score_field_title) . '</div>';
          $this->elp_content .= '<div class="elp-score-notes">' . get_sub_field($note_field_title) . '</div>';
        }
      } //end repeater instance(s)

      $this->elp_content .= '</div>';
    }
    $this->elp_content .= '</section>';
  }

  public function elp_content(){
    return $this->elp_content;
  }

  public function render_graph(){
    return '[graph]';
  }
}
