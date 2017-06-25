<?php

/**
 * Add body classes if certain regions have content.
 */

function opencharity_preprocess_page(&$vars) {
  $meta_viewport = [
  '#tag' => 'meta',
  '#attributes' => [
    'name' => 'viewport', 
    'content' => 'width=device-width, initial-scale=1',
  ],
];
drupal_add_html_head($meta_viewport, 'meta-viewport');

  if($vars['is_front'] == true){
    drupal_add_css(path_to_theme() . '/vendors/owl/css/owl.carousel.min.css', ['group'=>'100']);
    drupal_add_css(path_to_theme() . '/vendors/owl/css/owl.theme.default.min.css', ['group'=>'100']);
    drupal_add_css(path_to_theme() . '/css/animate.css', ['group'=>'100']);
  }
}


function opencharity_preprocess_node(&$vars) {
  if($vars['view_mode'] == 'teaser') {
    $vars['theme_hook_suggestions'][] = 'node__' . $vars['node']->type . '__teaser';   
    $vars['theme_hook_suggestions'][] = 'node__' . $vars['node']->nid . '__teaser';
  }

  if (node_access("update", $vars['node']) === true) {
    $vars['edit_link']['#markup'] = l(t('Edit'), 'node/' . $vars['nid'] . '/edit');
  }
}


function opencharity_preprocess_views_view(&$variables){
  
    // include javascript
    
  if ($variables['name'] == 'members') {
    drupal_add_js(drupal_get_path('theme', 'opencharity') . '/js/owl-scripts.js', array( 
      'scope' => 'footer', 
      'weight' => '15' 
    ));

    drupal_add_js(drupal_get_path('theme', 'opencharity') . '/vendors/owl/js/owl.carousel.min.js', array( 
      'scope' => 'footer', 
      'weight' => '14' 
    ));
  }
}