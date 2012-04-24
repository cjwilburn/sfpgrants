<?php
/* AdminLargeRank Test cases generated on: 2011-06-03 17:50:05 : 1307123405*/
App::import('Model', 'AdminLargeRank');

class AdminLargeRankTestCase extends CakeTestCase {
	var $fixtures = array('app.admin_large_rank');

	function startTest() {
		$this->AdminLargeRank =& ClassRegistry::init('AdminLargeRank');
	}

	function endTest() {
		unset($this->AdminLargeRank);
		ClassRegistry::flush();
	}

}
?>