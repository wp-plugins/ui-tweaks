<?php
/*
Plugin Name: UI Tweaks
Description: Adds various tweaks the WordPress Admin UI. Special thanks to John O'Nolan's UI Labs plugin which gave me the inspiration to tinker with the UI and started me off.
Version: 1.0.1
License: GPL
Author: James Morrison
Author URI: http://www.jamesmorrison.me/
*/


/**
 * Load CSS file
 * @since 1.0
 */

function ui_tweaks_css() {
	$url = plugins_url('/ui-tweaks.css', __FILE__);
	echo '
		<link rel="stylesheet" type="text/css" href="' . $url . '" />
	';	
}

add_action('admin_head','ui_tweaks_css', 1000);