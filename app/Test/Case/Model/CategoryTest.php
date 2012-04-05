<?php
/* Category Test cases generated on: 2012-02-23 09:03:10 : 1329984190*/
App::uses('Category', 'Model');

/**
 * Category Test Case
 *
 */
class CategoryTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.category');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Category = ClassRegistry::init('Category');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Category);

		parent::tearDown();
	}

}
