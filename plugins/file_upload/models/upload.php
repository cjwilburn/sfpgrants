<?php
class Upload extends AppModel {
	var $name = 'Upload';
	var $displayField = 'name';
        var $actsAs = array('FileUpload.FileUpload');

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