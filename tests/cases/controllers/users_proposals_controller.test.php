<?php
/* UsersProposals Test cases generated on: 2010-09-28 12:09:39 : 1285693119*/
App::import('Controller', 'UsersProposals');

class TestUsersProposalsController extends UsersProposalsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UsersProposalsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.users_proposal');

	function startTest() {
		$this->UsersProposals =& new TestUsersProposalsController();
		$this->UsersProposals->constructClasses();
	}

	function endTest() {
		unset($this->UsersProposals);
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

}
?>