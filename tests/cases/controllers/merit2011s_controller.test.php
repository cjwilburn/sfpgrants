<?php
/* Merit2011s Test cases generated on: 2011-06-01 03:56:53 : 1306900613*/
App::import('Controller', 'Merit2011s');

class TestMerit2011sController extends Merit2011sController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class Merit2011sControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.merit2011', 'app.proposal', 'app.duration', 'app.project_type', 'app.user', 'app.group', 'app.users_proposal', 'app.evaluation', 'app.evaluations_user', 'app.upload', 'app.evaluations_proposal');

	function startTest() {
		$this->Merit2011s =& new TestMerit2011sController();
		$this->Merit2011s->constructClasses();
	}

	function endTest() {
		unset($this->Merit2011s);
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