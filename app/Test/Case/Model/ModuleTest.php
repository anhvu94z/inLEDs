<?php
/* Module Test cases generated on: 2012-01-20 15:41:58 : 1327070518*/
App::uses('Module', 'Model');

/**
 * Module Test Case
 *
 */
class ModuleTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.module');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Module = ClassRegistry::init('Module');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Module);

		parent::tearDown();
	}

}
