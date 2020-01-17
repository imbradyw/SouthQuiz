<?php

/**
 * @link              http://example.com
 * @since             1.0.0
 * @package           SouthQuiz
 *
 * @wordpress-plugin
 * Plugin Name:       SouthQuiz
 * Plugin URI:        http://bradyward.ca
 * Description:       A simple quiz plugin.
 * Version:           0.0.1
 * Author:            Frederic Brady Ward
 * Author URI:        http://bradyward.ca
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       southquiz
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'SOUTHQUIZ_VERSION', '0.0.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_southquiz() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-southquiz-activator.php';
	SouthQuiz_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_southquiz() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-southquiz-deactivator.php';
	SouthQuiz_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_southquiz' );
register_deactivation_hook( __FILE__, 'deactivate_southquiz' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-southquiz.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_southquiz() {

	$plugin = new SouthQuiz();
	$plugin->run();

}
run_southquiz();
