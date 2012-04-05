<?php
/* Product Test cases generated on: 2012-02-22 11:58:27 : 1329908307*/
App::uses('Product', 'Model');

/**
 * Product Test Case
 *
 */
class ProductTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.product');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Product = ClassRegistry::init('Product');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Product);

		parent::tearDown();
	}

}
