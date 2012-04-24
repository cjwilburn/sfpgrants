<?php
/* Evaluations Test cases generated on: 2010-09-28 12:09:39 : 1285693119*/
App::import('Controller', 'Evaluations');

class TestEvaluationsController extends EvaluationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EvaluationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.evaluation', 'app.users', 'app.proposals');

	function startTest() {
		$this->Evaluations =& new TestEvaluationsController();
		$this->Evaluations->constructClasses();
	}

	function endTest() {
		unset($this->Evaluations);
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