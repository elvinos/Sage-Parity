<?php

namespace Roots\Sage\Utils;

/**
 * Tell WordPress to use searchform.php from the templates/ directory
 */


function get_search_form() {
  $form = '';
  locate_template('/templates/searchform.php', true, false);
  return $form;
}
add_filter('get_search_form', __NAMESPACE__ . '\\get_search_form');

add_theme_support('menus');


function register_theme_menus() {

	register_nav_menus(
		array (
			'header-menu' => __( 'Header Menu' )
			)
		);
}
add_action('init','register_theme_menus');
