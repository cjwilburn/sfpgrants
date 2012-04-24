<?php
/* AdminSmallRanks Test cases generated on: 2011-06-03 17:56:19 : 1307123779*/
App::import('Controller', 'AdminSmallRanks');

class TestAdminSmallRanksController extends AdminSmallRanksController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AdminSmallRanksControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.admin_small_rank');

	function startTest() {
		$this->AdminSmallRanks =& new TestAdminSmallRanksController();
		$this->AdminSmallRanks->constructClasses();
	}

	function endTest() {
		unset($this->AdminSmallRanks);
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