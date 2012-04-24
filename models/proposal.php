<?php
class Proposal extends AppModel {
	var $name = 'Proposal';
        var $actsAs = array('WhoDidIt');
        var $displayField = 'project_title';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

        //var $validate = array('inv_first_name' => array('rule' => 'notEmpty','message'=> 'This field cannot be left blank'),
                              //'inv_last_name'=> array('rule' => 'notEmpty','message'=> 'This field cannot be left blank'),
                              //'inv_email'=> array('rule' => 'notEmpty','message'=> 'This field cannot be left blank'),
                              //'project_title'=> array('rule' => 'notEmpty','message'=> 'This field cannot be left blank'),
                              //'project_budget'=> array('rule' => 'notEmpty','message'=> 'This field cannot be left blank'));

	var $hasMany = array(
		'Upload' => array(
			'className' => 'Upload',
			'foreignKey' => 'proposal_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
            'UsersProposal' => array(
			'className' => 'UsersProposal',
			'foreignKey' => 'proposal_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),

            'Evaluation' => array(
          'className' => 'Evaluation',
         'foreignKey' => 'proposal_id',
         'conditions' => '',
         'fields' => '',
         'order' => '',
         'limit' => '',
         'offset' => '',
	 'finderQuery' => '',
         'deleteQuery' => '',
	'insertQuery' => ''
            ),

		'Merit2011' => array(
      'className' => 'Merit2011',
     'foreignKey' => 'proposal_id',
     'conditions' => '',
     'fields' => '',
     'order' => '',
     'limit' => '',
     'offset' => '',
 'finderQuery' => '',
     'deleteQuery' => '',
'insertQuery' => ''
        ),
	'AverageMerit2011' => array(
  'className' => 'AverageMerit2011',
 'foreignKey' => 'proposal_id',
 'conditions' => '',
 'fields' => '',
 'order' => '',
 'limit' => '',
 'offset' => '',
'finderQuery' => '',
 'deleteQuery' => '',
'insertQuery' => ''
    )
	);


	var $hasAndBelongsToMany = array(
		'User' => array(
			'className' => 'User',
			'joinTable' => 'users_proposals',
			'foreignKey' => 'proposal_id',
			'associationForeignKey' => 'user_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),

            
		'Evaluation' => array(
			'className' => 'Evaluation',
                        'join_table' => 'evaluations_proposals',
			'foreignKey' => 'evaluation_id',
                        'associationForeignKey' => 'proposal_id',
                        'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

        var $belongsTo = array(
            'Duration' => array(
                'className' => 'Duration',
                'foreignKey' => 'duration_id'
            ),

            'ProjectType' => array(
              'className' => 'ProjectType',
              'foreignKey'=> 'project_type_id'
            )

        );

}
?>