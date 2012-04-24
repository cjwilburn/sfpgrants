<?php
/* ChairSmallRanks Test cases generated on: 2011-06-03 18:03:04 : 1307124184*/
App::import('Controller', 'ChairSmallRanks');

class TestChairSmallRanksController extends ChairSmallRanksController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ChairSmallRanksControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.chair_small_rank');

	function startTest() {
		$this->ChairSmallRanks =& new TestChairSmallRanksController();
		$this->ChairSmallRanks->constructClasses();
	}

	function endTest() {
		unset($this->ChairSmallRanks);
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