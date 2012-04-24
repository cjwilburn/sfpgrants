<?php
/* AverageMerit2011 Test cases generated on: 2011-06-01 16:02:01 : 1306944121*/
App::import('Model', 'AverageMerit2011');

class AverageMerit2011TestCase extends CakeTestCase {
	var $fixtures = array('app.average_merit2011', 'app.proposal', 'app.duration', 'app.project_type', 'app.user', 'app.group', 'app.users_proposal', 'app.evaluation', 'app.evaluations_user', 'app.upload', 'app.evaluations_proposal', 'app.merit2011');

	function startTest() {
		$this->AverageMerit2011 =& ClassRegistry::init('AverageMerit2011');
	}

	function endTest() {
		unset($this->AverageMerit2011);
		ClassRegistry::flush();
	}

}
?>