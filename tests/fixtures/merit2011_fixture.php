<?php
/* Merit2011 Fixture generated on: 2011-06-01 03:51:37 : 1306900297 */
class Merit2011Fixture extends CakeTestFixture {
	var $name = 'Merit2011';

	var $fields = array(
		'proposal_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 10),
		'evaluation_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 10),
		'merit' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '15,5'),
		'indexes' => array(),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'proposal_id' => 1,
			'evaluation_id' => 1,
			'merit' => 1
		),
	);
}
?>