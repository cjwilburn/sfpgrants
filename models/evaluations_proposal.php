<?php
class EvaluationsProposal extends AppModel {
	var $name = 'EvaluationsProposal';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Evaluation' => array(
			'className' => 'Evaluation',
			'foreignKey' => 'evaluation_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
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