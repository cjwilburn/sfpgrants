<?php
/* Proposals Test cases generated on: 2010-09-28 12:09:39 : 1285693119*/
App::import('Controller', 'Proposals');

class TestProposalsController extends ProposalsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProposalsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.proposal', 'app.user', 'app.users_proposal');

	function startTest() {
		$this->Proposals =& new TestProposalsController();
		$this->Proposals->constructClasses();
	}

	function endTest() {
		unset($this->Proposals);
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