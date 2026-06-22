<?php
/**
 * Bootstrap file for PHPUnit tests.
 *
 * @package Bcgov\Theme\BcewTiCorp
 */

// Find WordPress.
$_tests_root = getenv( 'WP_TESTS_DIR' );

if ( ! $_tests_root ) {
	$_tests_root = rtrim( sys_get_temp_dir(), '/\\' ) . '/wordpress-tests-lib';
}

if ( ! file_exists( "$_tests_root/includes/functions.php" ) ) {
	echo "Could not find wordpress-tests-lib/includes/functions.php\n";
	exit( 1 );
}

// Give access to tests_add_filter() function.
require_once "$_tests_root/includes/functions.php";

/**
 * Manually load the plugin/theme being tested.
 */
function _manually_load_theme() {
	// Load our theme's functions.
	require dirname( dirname( __FILE__ ) ) . '/functions.php';
}

tests_add_filter( 'muplugins_loaded', '_manually_load_theme' );

// Start up the WP testing environment.
require "$_tests_root/includes/bootstrap.php";
