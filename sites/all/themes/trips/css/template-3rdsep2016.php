<?php

/**
 * @file
 * template.php
 */

/**
 * Implements template_preprocess_image_style().
 */
/*function trips_preprocess_image_style(&$vars) {
        $vars['attributes']['class'][] = 'img-responsive'; //responsive-images
}/*

/**
 * Preprocess node
 */
function trips_preprocess_node(&$vars) {
  $node = $vars['node'];
  if ($vars['view_mode'] == 'teaser') {
    $vars['theme_hook_suggestions'][] = 'node__' . $node->type . '__teaser';
  }else{
	$vars['theme_hook_suggestions'][] = 'node__' . $node->type . '__content';
 
  }
}

function trips_preprocess_page(&$variables) {
  if (isset($variables['node']->type)) {
    $variables['theme_hook_suggestions'][] = 'page__' . $variables['node']->type;
  }
}

function trips_preprocess_image(&$variables) {
  foreach (array('width', 'height') as $key) {
    unset($variables[$key]);
  }
}