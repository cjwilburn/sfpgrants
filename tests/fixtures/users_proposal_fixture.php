<?php
/* UsersProposal Fixture generated on: 2010-11-07 21:11:14 : 1289166254 */
class UsersProposalFixture extends CakeTestFixture {
	var $name = 'UsersProposal';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'users_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'proposals_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'users_id' => 1,
			'proposals_id' => 1
		),
	);
}
?>