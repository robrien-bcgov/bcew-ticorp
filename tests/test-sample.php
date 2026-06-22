<?php
/**
 * Sample test file.
 *
 * @package Bcgov\Theme\BcewTiCorp\Tests
 */

namespace Bcgov\Theme\BcewTiCorp\Tests;

/**
 * Sample test case.
 */
class SampleTest extends \WP_UnitTestCase {
	/**
	 * Test that the theme is active.
	 */
	public function test_theme_constants() {
		// Verify that functions.php loaded successfully.
		$this->assertTrue( function_exists( 'wp_body_open' ) );
	}
}
