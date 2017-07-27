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

function trips_preprocess_user_login(&$vars) {
  $vars['intro_text'] = t('This is my awesome login form');
}
/*
function yourtheme_preprocess_user_register_form(&$vars) {
  $vars['intro_text'] = t('This is my super awesome reg form');
}

function yourtheme_preprocess_user_pass(&$vars) {
  $vars['intro_text'] = t('This is my super awesome request new password form');
}
*/

function trips_theme() {
$items = array();
 $items['user_login'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'trips') . '/templates',
    'template' => 'user-login',
    'preprocess functions' => array(
    'trips_preprocess_user_login'
    ),
  );
  $items['user_register_form'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'trips') . '/templates',
    'template' => 'user-register-form',
  );
  $items['user_pass'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'trips') . '/templates',
    'template' => 'user-pass',
  );
  $items['user_profile_form'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'trips') . '/templates',
    'template' => 'user-profile-edit',
  );
    return $items;

 }
/* 
 function trips_form_alter(&$form, &$form_state, $form_id) {

	if ( TRUE === in_array( $form_id, array( 'user_login', 'user_login_block') ) ) {

		// Javascript placeholders for Username and Password (old browsers)
		// Almost all browsers support HTML5 nowadays
		// If you don't want it remove it : )
		$form['name']['#title_display']['onblur'] = "if (this.value == '') {this.value = 'Username';}";
		$form['name']['#title_display']['onfocus'] = "if (this.value == 'Username') {this.value = '';}";
		$form['pass']['#title_display']['onblur'] = "if (this.value == '') {this.value = 'Password';}";
		$form['pass']['#title_display']['onfocus'] = "if (this.value == 'Password') {this.value = '';}";

		// "Login" form (no label, no description and with HTML5 placeholder)
		$form['name']['#title_display'] = "invisible";
		$form['pass']['#title_display'] = "invisible";
		$form['name']['#attributes']['placeholder'] = t( 'Username' );
		$form['pass']['#attributes']['placeholder'] = t( 'Password' );
		$form['name']['#description'] = t('');
		$form['pass']['#description'] = t('');
	}

	if ($form_id == 'user_pass') {

		// Javascript placeholders for Request Password page (old browsers)
		// Almost all browsers support HTML5 nowadays
		// If you don't want it remove it : )
		$form['name']['#title_display']['onblur'] = "if (this.value == '') {this.value = 'Type your username or e-mail address';}";
		$form['name']['#title_display']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";

		// "Request new password" form (no label and with HTML5 placeholder)
		$form['name']['#title_display'] = "invisible";
		$form['name']['#attributes']['placeholder'] = t( 'Type your username or e-mail address' );
	}

}
*/