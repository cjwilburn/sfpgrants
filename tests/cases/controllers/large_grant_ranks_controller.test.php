<?php
/* LargeGrantRanks Test cases generated on: 2011-06-03 18:03:57 : 1307124237*/
App::import('Controller', 'LargeGrantRanks');

class TestLargeGrantRanksController extends LargeGrantRanksController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class LargeGrantRanksControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.large_grant_rank');

	function startTest() {
		$this->LargeGrantRanks =& new TestLargeGrantRanksController();
		$this->LargeGrantRanks->constructClasses();
	}

	function endTest() {
		unset($this->LargeGrantRanks);
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

	function testLargeIndex() {

	}

	function testLargeView() {

	}

	function testLargeAdd() {

	}

	function testLargeEdit() {

	}

	function testLargeDelete() {

	}

}
?>