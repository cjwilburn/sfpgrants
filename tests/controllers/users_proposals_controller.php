<?php
class UsersProposalsController extends AppController {

	var $name = 'UsersProposals';

	function index() {
		$this->UsersProposal->recursive = 0;
		$this->set('usersProposals', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid users proposal', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('usersProposal', $this->UsersProposal->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->UsersProposal->create();
			if ($this->UsersProposal->saveAll($this->data)) {
				$this->Session->setFlash(__('The users proposal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users proposal could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid users proposal', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->UsersProposal->save($this->data)) {
				$this->Session->setFlash(__('The users proposal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users proposal could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->UsersProposal->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for users proposal', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->UsersProposal->delete($id)) {
			$this->Session->setFlash(__('Users proposal deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Users proposal was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

        function admin_add() {
            $this->loadModel('User');
            $this->loadModel('Proposal');
            $up = $this->UsersProposal->id;
            $u_id = $this->UsersProposal->User->id;
            $p_id = $this->UsersProposal->Proposal->id;
            //$small_users = $this->UsersProposal->User->find('list', array('fields' => array('User.id', 'User.username'), 'conditions' => array('User.group_id'=>6)));
            $small_users = $this->UsersProposal->User->find('list', array('conditions' => array('User.group_id'=>6)));
            $large_users = $this->UsersProposal->User->find('list', array('conditions' => array('User.group_id'=>7)));
            //$large_users = $this->UsersProposal->User->find('list', array('fields' => array('User.id', 'User.username'), 'conditions' => array('User.group_id'=>7)));
            $large_proposals = $this->UsersProposal->Proposal->find('list', array('conditions'=>array('OR'=> array('Proposal.date_submitted >='=>'2011-01-31 00:00:00', 'Proposal.created >='=>'2011-01-31 00:00:00'),'Proposal.project_type_id'=>'2')));
            $small_proposals = $this->UsersProposal->Proposal->find('list', array('conditions'=>array('OR'=> array('Proposal.date_submitted >='=>'2011-01-31 00:00:00', 'Proposal.created >='=>'2011-01-31 00:00:00'),'Proposal.project_type_id'=>'1')));
            //$small_proposals = $this->UsersProposal->Proposal->find('list', array('fields' => array('Proposal.id','Proposal.project_title'), 'conditions' => array('Proposal.project_type_id'=>1)));
            //$large_proposals = $this->UsersProposal->Proposal->find('list', array('fields' => array('Proposal.id','Proposal.project_title'), 'conditions' => array('Proposal.project_type_id'=>2)));
            $gutters = $this->UsersProposal->query('select UsersProposal.id, User.username, Proposal.project_title from users_proposals as UsersProposal join users as User on User.id = UsersProposal.user_id join proposals as Proposal on Proposal.id = UsersProposal.proposal_id');
            $this->set(compact('u_id','p_id','up','small_users','large_users','small_proposals','large_proposals', 'gutters'));
            if (!empty($this->data)) {
                        $this->UsersProposal->saveAll($this->data);
			$this->UsersProposal->create();
			if ($this->UsersProposal->saveAll($this->data)) {
				$this->Session->setFlash(__('The users proposal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users proposal could not be saved. Please, try again.', true));
			}
		}
                

        }
        function admin_edit($id = null){
            $this->loadModel('User');
            $this->loadModel('Proposal');
            $up = $this->UsersProposal->id;
            $u_id = $this->UsersProposal->User->id;
            $p_id = $this->UsersProposal->Proposal->id;
            $large_proposals = $this->UsersProposal->Proposal->find('list', array('Proposal.project_type_id'=>1));
            $small_proposals = $this->UsersProposal->Proposal->find('list', array('Proposal.project_type_id'=>2));
            $small_users = $this->UsersProposal->User->find('list', array('conditions' => array('User.group_id'=>6)));
            $large_users = $this->UsersProposal->User->find('list', array('conditions' => array('User.group_id'=>7)));
            //$small_users = $this->UsersProposal->User->find('list', array('fields' => array('User.id', 'User.username'), 'conditions' => array('User.group_id'=>6)));
            //$large_users = $this->UsersProposal->User->find('list', array('fields' => array('User.id', 'User.username'), 'conditions' => array('User.group_id'=>7)));
            //$small_proposals = $this->UsersProposal->Proposal->find('list', array('fields' => array('Proposal.id','Proposal.project_title'), 'conditions' => array('Proposal.project_type_id'=>1)));
            //$large_proposals = $this->UsersProposal->Proposal->find('list', array('fields' => array('Proposal.id','Proposal.project_title'), 'conditions' => array('Proposal.project_type_id'=>2)));
            $gutters = $this->UsersProposal->query('select UsersProposal.id, User.username, Proposal.project_title from users_proposals as UsersProposal join users as User on User.id = UsersProposal.user_id join proposals as Proposal on Proposal.id = UsersProposal.proposal_id');
            $this->set(compact('u_id','p_id','up','small_users','large_users','small_proposals','large_proposals', 'gutters'));
            if (!$id) {
			$this->Session->setFlash(__('Invalid users proposal', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->UsersProposal->saveAll($this->data)) {
				$this->Session->setFlash(__('The users proposal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users proposal could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->UsersProposal->read(null, $id);
		}
        }
        function admin_index() {
            $this->UsersProposal->recursive = 0;
            $this->paginate(array('conditions'=> array('UsersProposal.created >='=>'2011-01-31 00:00:00')));
		$this->set('usersProposals', $this->paginate());
               //$gutters = $this->UsersProposal->query('select UsersProposal.id, User.username, Proposal.project_title from users_proposals as UsersProposal join users as User on User.id = UsersProposal.user_id join proposals as Proposal on Proposal.id = UsersProposal.proposal_id');
               //$this->set('gutters', $this->paginate('UsersProposal'));
               //$this->set(compact('gutters'));
        }
        function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid users proposal', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('usersProposal', $this->UsersProposal->read(null, $id));
        }
        function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for users proposal', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->UsersProposal->delete($id)) {
			$this->Session->setFlash(__('Users proposal deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Users proposal was not deleted', true));
		$this->redirect(array('action' => 'index'));
                
                }
}
?>