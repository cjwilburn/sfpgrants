<?php
/* LargeGrantRank Test cases generated on: 2011-06-03 17:54:19 : 1307123659*/
App::import('Model', 'LargeGrantRank');

class LargeGrantRankTestCase extends CakeTestCase {
	var $fixtures = array('app.large_grant_rank');

	function startTest() {
		$this->LargeGrantRank =& ClassRegistry::init('LargeGrantRank');
	}

	function endTest() {
		unset($this->LargeGrantRank);
		ClassRegistry::flush();
	}

}
?>