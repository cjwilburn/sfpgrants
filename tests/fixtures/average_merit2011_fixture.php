<?php
/* AverageMerit2011 Fixture generated on: 2011-06-01 16:02:01 : 1306944121 */
class AverageMerit2011Fixture extends CakeTestFixture {
	var $name = 'AverageMerit2011';

	var $fields = array(
		'proposal_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 10),
		'avg_merit' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '19,9'),
		'indexes' => array(),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'proposal_id' => 1,
			'avg_merit' => 1
		),
	);
}
?>