<?php
/* BoardSmallRanks Test cases generated on: 2011-06-03 17:58:22 : 1307123902*/
App::import('Controller', 'BoardSmallRanks');

class TestBoardSmallRanksController extends BoardSmallRanksController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class BoardSmallRanksControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.board_small_rank');

	function startTest() {
		$this->BoardSmallRanks =& new TestBoardSmallRanksController();
		$this->BoardSmallRanks->constructClasses();
	}

	function endTest() {
		unset($this->BoardSmallRanks);
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

	function testBoardIndex() {

	}

	function testBoardView() {

	}

	function testBoardAdd() {

	}

	function testBoardEdit() {

	}

	function testBoardDelete() {

	}

}
?>