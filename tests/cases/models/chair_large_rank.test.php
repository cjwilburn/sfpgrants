<?php
/* ChairLargeRank Test cases generated on: 2011-06-03 17:53:03 : 1307123583*/
App::import('Model', 'ChairLargeRank');

class ChairLargeRankTestCase extends CakeTestCase {
	var $fixtures = array('app.chair_large_rank');

	function startTest() {
		$this->ChairLargeRank =& ClassRegistry::init('ChairLargeRank');
	}

	function endTest() {
		unset($this->ChairLargeRank);
		ClassRegistry::flush();
	}

}
?>