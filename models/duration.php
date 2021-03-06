<?php
class Duration extends AppModel {
	var $name = 'Duration';
	var $displayField = 'duration';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Proposal' => array(
			'className' => 'Proposal',
			'foreignKey' => 'duration_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>