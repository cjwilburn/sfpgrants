<?php
/* AverageMerit2011s Test cases generated on: 2011-06-01 16:04:08 : 1306944248*/
App::import('Controller', 'AverageMerit2011s');

class TestAverageMerit2011sController extends AverageMerit2011sController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AverageMerit2011sControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.average_merit2011', 'app.proposal', 'app.duration', 'app.project_type', 'app.user', 'app.group', 'app.users_proposal', 'app.evaluation', 'app.evaluations_user', 'app.upload', 'app.evaluations_proposal', 'app.merit2011');

	function startTest() {
		$this->AverageMerit2011s =& new TestAverageMerit2011sController();
		$this->AverageMerit2011s->constructClasses();
	}

	function endTest() {
		unset($this->AverageMerit2011s);
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