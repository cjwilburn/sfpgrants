<?php
/* Proposal Test cases generated on: 2010-09-28 12:09:16 : 1285693096*/
App::import('Model', 'Proposal');

class ProposalTestCase extends CakeTestCase {
	var $fixtures = array('app.proposal', 'app.user', 'app.users_proposal');

	function startTest() {
		$this->Proposal =& ClassRegistry::init('Proposal');
	}

	function endTest() {
		unset($this->Proposal);
		ClassRegistry::flush();
	}

}
?>