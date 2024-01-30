<?php

  /*
   Plugin Name: Chaperone
   Plugin URI: https://www.ambrite.ca
   Description: Hide admin menus
   Version: 1.2
   Author: Ambrite Web Services
   Author URI: https://www.ambrite.ca
   License: GPL12
   */

add_action('wp_head', 'hide_menus');
add_action('admin_head', 'hide_menus');

function hide_menus() {
	if ( is_user_logged_in() ) {
	  echo '<style>
		#menu-posts-portfolio, #toplevel_page_activity_log_page, #menu-posts-header, #menu-posts-pricing,
		#menu-posts-team, #menu-posts-myclients, #menu-posts-essential_grid, #menu-plugins, #menu-users,
		#toplevel_page_vc-general, #menu-settings, #toplevel_page_wpseo_dashboard, #toplevel_page_optimisationio-dashboard,
		#toplevel_page_monsterinsights_settings, #toplevel_page_cms-superheroes, #toplevel_page_w3tc_dashboard,
		#toplevel_page_Wordfence, #toplevel_page_essential-grid, #toplevel_page__options, #menu-dashboard > ul > li:nth-child(3),
		#menu-appearance > ul > li:nth-child(9), #wp-admin-bar-w3tc_settings_general, #wp-admin-bar-w3tc_settings_extensions,
		#wp-admin-bar-_options, #wp-admin-bar-autoptimize, #wp-admin-bar-wpseo-menu, #wp-admin-bar-updates, #menu-appearance > ul > li:nth-child(6),
		#wp-admin-bar-new-user, .update-plugins {
			display: none !important;
		} 
	  </style>';
	}
}