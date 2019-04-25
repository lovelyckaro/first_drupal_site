<?php
function mytheme_preprocess_image_style(&$vars) {
    $vars['attributes']['class'][] = 'img-fluid';
}

function mytheme_preprocess_field(&$variables) {
    $field_name = $variables['element']['#field_name'];
    if($field_name == 'field_event_image' || $field_name == "field_info_image"){
        foreach($variables['items'] as $key => $item){
            $variables['items'][ $key ]['#item']['attributes']['class'][] = 'img-fluid'; // http://getbootstrap.com/css/#overview-responsive-images
        }
    }
}

?>