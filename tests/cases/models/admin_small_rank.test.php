<?php
/* AdminSmallRank Test cases generated on: 2011-06-03 17:50:26 : 1307123426*/
App::import('Model', 'AdminSmallRank');

class AdminSmallRankTestCase extends CakeTestCase {
	var $fixtures = array('app.admin_small_rank');

	function startTest() {
		$this->AdminSmallRank =& ClassRegistry::init('AdminSmallRank');
	}

	function endTest() {
		unset($this->AdminSmallRank);
		ClassRegistry::flush();
	}

}
?>