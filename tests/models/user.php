<?php
class User extends AppModel {
	var $name = 'User';
        var $displayField = 'username';

        var $belongsTo = array('Group');
        var $actsAs = array('Acl' => array('type' => 'requester'));

    function parentNode() {
    if (!$this->id && empty($this->data)) {
        return null;
    }
    if (isset($this->data['User']['group_id'])) {
	$groupId = $this->data['User']['group_id'];
    } else {
    	$groupId = $this->field('group_id');
    }
    if (!$groupId) {
	return null;
    } else {
        return array('Group' => array('id' => $groupId));
    }
}

function bindNode($user) {
    return array('Group' => array('id' => $user['User']['group_id']));
}

var $hasMany = array(
            'UsersProposal' => array(
			'className' => 'UsersProposal',
			'foreignKey' => 'user_id',
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
         'foreignKey' => 'user_id',
         'conditions' => '',
         'fields' => '',
         'order' => '',
         'limit' => '',
         'offset' => '',
	 'finderQuery' => '',
         'deleteQuery' => '',
	'insertQuery' => ''
     ),

);

	var $hasAndBelongsToMany = array(
		'Proposal' => array(
			'className' => 'Proposal',
			'joinTable' => 'users_proposals',
			'foreignKey' => 'user_id',
			'associationForeignKey' => 'proposal_id',
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
			'joinTable' => 'evaluations_users',
			'foreignKey' => 'user_id',
			'associationForeignKey' => 'evaluation_id',
			'unique' => true,
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

}
?>