<?php
/* ChairSmallRank Test cases generated on: 2011-06-03 17:53:38 : 1307123618*/
App::import('Model', 'ChairSmallRank');

class ChairSmallRankTestCase extends CakeTestCase {
	var $fixtures = array('app.chair_small_rank');

	function startTest() {
		$this->ChairSmallRank =& ClassRegistry::init('ChairSmallRank');
	}

	function endTest() {
		unset($this->ChairSmallRank);
		ClassRegistry::flush();
	}

}
?>