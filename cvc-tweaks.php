<?php
/*
Plugin Name: CiviCRM Tweaks
Description: CiviCRM modifications to dashboard and nav menu
Version 1.0
Author: Andy Burns
Author URI: https://civicopilot.com
Text Domain: cvc-tweaks
Domain Path: /languages
*/
/* Start Adding Functions Below this Line */

add_action('admin_enqueue_scripts', 'cvc_admin_theme_style', 999);

function cvc_admin_theme_style() {
    wp_enqueue_style('cvc-admin-theme', plugins_url('cvc-admin.css', __FILE__));
}
