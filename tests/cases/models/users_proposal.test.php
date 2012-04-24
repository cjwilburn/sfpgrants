<?php
/* UsersProposal Test cases generated on: 2010-11-07 21:11:17 : 1289166257*/
App::import('Model', 'UsersProposal');

class UsersProposalTestCase extends CakeTestCase {
	var $fixtures = array('app.users_proposal', 'app.users', 'app.proposals');

	function startTest() {
		$this->UsersProposal =& ClassRegistry::init('UsersProposal');
	}

	function endTest() {
		unset($this->UsersProposal);
		ClassRegistry::flush();
	}

}
?>