<?php
/* AdminLargeRanks Test cases generated on: 2011-06-03 17:55:35 : 1307123735*/
App::import('Controller', 'AdminLargeRanks');

class TestAdminLargeRanksController extends AdminLargeRanksController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AdminLargeRanksControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.admin_large_rank');

	function startTest() {
		$this->AdminLargeRanks =& new TestAdminLargeRanksController();
		$this->AdminLargeRanks->constructClasses();
	}

	function endTest() {
		unset($this->AdminLargeRanks);
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