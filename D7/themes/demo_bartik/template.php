<?php

/**
* Implements hook_preprocess_html
*/
function demo_bartik_preprocess_html(&$variables) {
  if(drupal_is_front_page()){
    drupal_add_js(path_to_theme() . '/scripts/home-alert.js');
  }
}

/**
* Implements hook_preprocess_node
*/
function demo_bartik_preprocess_node(&$variables) {
  $variables['theme_hook_suggestions'][] = 'node__' . $variables['type'];
}
