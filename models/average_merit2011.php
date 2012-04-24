<?php
class AverageMerit2011 extends AppModel {
	var $name = 'AverageMerit2011';
	var $primaryKey = 'proposal_id';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Proposal' => array(
			'className' => 'Proposal',
			'foreignKey' => 'proposal_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>