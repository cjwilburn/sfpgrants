<?php
class UsersProposal extends AppModel {
	var $name = 'UsersProposal';
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
		'Proposal' => array(
			'className' => 'Proposal',
			'foreignKey' => 'proposal_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

       /* var $hasMany  = array(
            'User' => array(
              'className' => 'User',
	      'foreignKey' => 'user_id'
            ),

            'Proposal'=> array(
              'className' => 'Proposal',
	      'foreignKey' => 'proposal_id'
            )
        );*/
}
?>