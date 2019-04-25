<?php
function mytheme_preprocess_field(&$variables) {
    $field_name = $variables['element']['#field_name'];
    if($field_name == 'field_event_image' || $field_name == "field_info_image" || $field_name == "field_news_image"){
        foreach($variables['items'] as $key => $item){
            $variables['items'][ $key ]['#item']['attributes']['class'][] = 'img-fluid'; // http://getbootstrap.com/css/#overview-responsive-images
        }
    }
}

function mytheme_preprocess_node(&$vars) {
    if($vars['view_mode'] == 'teaser') {
      $vars['theme_hook_suggestions'][] = 'node__' . $vars['node']->type . '__teaser';   
      $vars['theme_hook_suggestions'][] = 'node__' . $vars['node']->nid . '__teaser';
    }
  }



?>