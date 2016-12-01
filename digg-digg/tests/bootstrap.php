<?php
/**
 * Bootstrap the plugin unit testing environment.
 *
 * Edit 'active_plugins' setting below to point to your main plugin file.
 *
 * @package wordpress-plugin-tests
 */

// Disable xdebug backtrace.
// if ( function_exists( 'xdebug_disable' ) ) {
// 	xdebug_disable();
// }

echo 'Welcome to the Digg Digg Plugin Test Suite' . PHP_EOL . PHP_EOL;

// Activates this plugin in WordPress so it can be tested.
$plugin_path = 'digg-digg/digg-digg/digg-digg.php';
if ( false === strstr( dirname( __FILE__ ), 'digg-digg/digg-digg' ) ) {
	$plugin_path = 'digg-digg/digg-digg.php';
}
$GLOBALS['wp_tests_options'] = array(
	'active_plugins' => array( $plugin_path ),
);

// If the develop repo location is defined (as WP_DEVELOP_DIR), use that
// location. Otherwise, we'll just assume that this plugin is installed in a
// WordPress develop SVN checkout.
if ( false !== getenv( 'WP_DEVELOP_DIR' ) ) {
	require getenv( 'WP_DEVELOP_DIR' ) . '/tests/phpunit/includes/bootstrap.php';
} else {
	require '../../../../tests/phpunit/includes/bootstrap.php';
}

// Include unit test base class.
require_once dirname( __FILE__ ) . '/framework/class-digg-digg-plugin-test-case.php';

