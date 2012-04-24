<?php
/* Group Test cases generated on: 2010-11-07 21:11:05 : 1289166305*/
App::import('Model', 'Group');

class GroupTestCase extends CakeTestCase {
	var $fixtures = array('app.group', 'app.user', 'app.proposal', 'app.users_proposal');

	function startTest() {
		$this->Group =& ClassRegistry::init('Group');
	}

	function endTest() {
		unset($this->Group);
		ClassRegistry::flush();
	}

}
?>