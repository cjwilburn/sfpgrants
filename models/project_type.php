<?php
class ProjectType extends AppModel {
	var $name = 'ProjectType';
	var $displayField = 'project_type';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Proposal' => array(
			'className' => 'Proposal',
			'foreignKey' => 'project_type_id',
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