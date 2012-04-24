<?php
/* BoardLargeRanks Test cases generated on: 2011-06-03 17:57:09 : 1307123829*/
App::import('Controller', 'BoardLargeRanks');

class TestBoardLargeRanksController extends BoardLargeRanksController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class BoardLargeRanksControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.board_large_rank');

	function startTest() {
		$this->BoardLargeRanks =& new TestBoardLargeRanksController();
		$this->BoardLargeRanks->constructClasses();
	}

	function endTest() {
		unset($this->BoardLargeRanks);
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