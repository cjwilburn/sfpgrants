<?php
/* Evaluation Test cases generated on: 2010-09-28 12:09:16 : 1285693096*/
App::import('Model', 'Evaluation');

class EvaluationTestCase extends CakeTestCase {
	var $fixtures = array('app.evaluation', 'app.users', 'app.proposals');

	function startTest() {
		$this->Evaluation =& ClassRegistry::init('Evaluation');
	}

	function endTest() {
		unset($this->Evaluation);
		ClassRegistry::flush();
	}

}
?>