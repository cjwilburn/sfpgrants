<?php
/* BoardSmallRank Test cases generated on: 2011-06-03 17:52:17 : 1307123537*/
App::import('Model', 'BoardSmallRank');

class BoardSmallRankTestCase extends CakeTestCase {
	var $fixtures = array('app.board_small_rank');

	function startTest() {
		$this->BoardSmallRank =& ClassRegistry::init('BoardSmallRank');
	}

	function endTest() {
		unset($this->BoardSmallRank);
		ClassRegistry::flush();
	}

}
?>