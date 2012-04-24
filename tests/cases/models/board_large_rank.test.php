<?php
/* BoardLargeRank Test cases generated on: 2011-06-03 17:51:07 : 1307123467*/
App::import('Model', 'BoardLargeRank');

class BoardLargeRankTestCase extends CakeTestCase {
	var $fixtures = array('app.board_large_rank');

	function startTest() {
		$this->BoardLargeRank =& ClassRegistry::init('BoardLargeRank');
	}

	function endTest() {
		unset($this->BoardLargeRank);
		ClassRegistry::flush();
	}

}
?>