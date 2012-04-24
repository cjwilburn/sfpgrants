<?php
/* SmallGrantRanks Test cases generated on: 2011-06-03 18:04:56 : 1307124296*/
App::import('Controller', 'SmallGrantRanks');

class TestSmallGrantRanksController extends SmallGrantRanksController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SmallGrantRanksControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.small_grant_rank');

	function startTest() {
		$this->SmallGrantRanks =& new TestSmallGrantRanksController();
		$this->SmallGrantRanks->constructClasses();
	}

	function endTest() {
		unset($this->SmallGrantRanks);
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

	function testSmallIndex() {

	}

	function testSmallView() {

	}

	function testSmallAdd() {

	}

	function testSmallEdit() {

	}

	function testSmallDelete() {

	}

}
?>