<?php
/* ChairLargeRanks Test cases generated on: 2011-06-03 18:00:25 : 1307124025*/
App::import('Controller', 'ChairLargeRanks');

class TestChairLargeRanksController extends ChairLargeRanksController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ChairLargeRanksControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.chair_large_rank');

	function startTest() {
		$this->ChairLargeRanks =& new TestChairLargeRanksController();
		$this->ChairLargeRanks->constructClasses();
	}

	function endTest() {
		unset($this->ChairLargeRanks);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
?>