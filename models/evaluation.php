<?php
class Evaluation extends AppModel {
	var $name = 'Evaluation';
        var $actsAs = array('WhoDidIt');
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),

              'Proposal' =>array(
                  'className'=>'Proposal',
                  'foreignKey' => 'proposal_id',
                  'conditions' => '',
	          'fields' => '',
	          'order' => ''
              )
            );
         var $hasMany = array(
             'UsersProposal' => array(
                 'className' => 'UsersProposal',
                 'foreignKey'=> 'user_id'
             )

         );
        /*var $hasAndBelongsToMany = array(
		'Proposals' => array(
			'className' => 'Proposals',
                        'join_table' => 'evaluations_proposals',
			'foreignKey' => 'proposals_id',
                        'associationForeignKey' => 'evaluation_id',
                        'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);*/
}
?>