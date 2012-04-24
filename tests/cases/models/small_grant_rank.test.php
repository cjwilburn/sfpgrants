<?php
/* SmallGrantRank Test cases generated on: 2011-06-03 17:54:53 : 1307123693*/
App::import('Model', 'SmallGrantRank');

class SmallGrantRankTestCase extends CakeTestCase {
	var $fixtures = array('app.small_grant_rank');

	function startTest() {
		$this->SmallGrantRank =& ClassRegistry::init('SmallGrantRank');
	}

	function endTest() {
		unset($this->SmallGrantRank);
		ClassRegistry::flush();
	}

}
?>