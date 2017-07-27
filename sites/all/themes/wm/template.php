<?php

/**
 * @file
 * template.php
 */

/**
 * Implements template_preprocess_image_style().
 */
function wm_preprocess_image_style(&$vars) {
        $vars['attributes']['class'][] = 'img-responsive'; //responsive-images
}

/**
 * Preprocess node
 */
function wm_preprocess_node(&$vars) {
  $node = $vars['node'];
  if ($vars['view_mode'] == 'teaser') {
    $vars['theme_hook_suggestions'][] = 'node__' . $node->type . '__teaser';
  }else{
	$vars['theme_hook_suggestions'][] = 'node__' . $node->type . '__content';
 
  }
}