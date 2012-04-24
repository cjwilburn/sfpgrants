<?php
/* Merit2011 Test cases generated on: 2011-06-01 03:51:38 : 1306900298*/
App::import('Model', 'Merit2011');

class Merit2011TestCase extends CakeTestCase {
	var $fixtures = array('app.merit2011', 'app.proposal', 'app.duration', 'app.project_type', 'app.user', 'app.group', 'app.users_proposal', 'app.evaluation', 'app.evaluations_user', 'app.upload', 'app.evaluations_proposal');

	function startTest() {
		$this->Merit2011 =& ClassRegistry::init('Merit2011');
	}

	function endTest() {
		unset($this->Merit2011);
		ClassRegistry::flush();
	}

}
?>