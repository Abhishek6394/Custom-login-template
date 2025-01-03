<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.wellgotrip.com
 * @since             1.0.0
 * @package           Custom_Login_Template
 *
 * @wordpress-plugin
 * Plugin Name:       Custom Login Template
 * Plugin URI:        https://www.wellgotrip.com
 * Description:       This plugin allows users to select from various pre-existing login page templates directly within the WordPress dashboard. Choose a template from a list of options, and easily customize the look and feel of your site's login page without the need for custom coding.
 * Version:           1.0.0
 * Author:            abhishek6394
 * Author URI:        https://www.wellgotrip.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       custom-login-template
 * Email:             abhisheksaini62358@gmail.com 
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'CUSTOM_LOGIN_TEMPLATE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-custom-login-template-activator.php
 */
function activate_custom_login_template() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-custom-login-template-activator.php';
	Custom_Login_Template_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-custom-login-template-deactivator.php
 */
function deactivate_custom_login_template() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-custom-login-template-deactivator.php';
	Custom_Login_Template_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_custom_login_template' );
register_deactivation_hook( __FILE__, 'deactivate_custom_login_template' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-custom-login-template.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_custom_login_template() {

	$plugin = new Custom_Login_Template();
	$plugin->run();

}
run_custom_login_template();
