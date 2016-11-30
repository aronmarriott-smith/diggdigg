<?php
/**
 * Tests for our plugin.
 *
 * @package Digg_Digg_Plugin
 */

/**
 * Digg_Digg_Base_Test
 */
class Digg_Digg_Base_Test extends Digg_Digg_Plugin_UnitTestCase {

	/**
	 * Holds an instance of our plugin class.
	 *
	 * @var DDBase $instance
	 */
	private $instance;

	/**
	* This method is called before every single test is run.
	*/
	public function setUp() {
		parent::setUp();

		$base_url = '<a href="://api.example.com/share">example.com</a>';
		$this->instance = new DDBase( 'Example', 'example.com', 'api.example.com', $base_url );
	}

	/**
	 * This method is called after every single test is run.
	 */
	public function tearDown() {
		parent::tearDown();
	}

	/**
	* @Covers BaseDD::getButtonDesignLazy()
	*/
	public function test_button_design_is_returned() {
		$this->assertEquals( $this->instance->getButtonDesignLazy( 'Normal' ), 'Normal' );
		$this->assertEquals( $this->instance->getButtonDesignLazy( 'Compact' ), 'Compact' );
	}
}
