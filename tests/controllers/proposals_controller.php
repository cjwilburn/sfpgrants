<?php
class ProposalsController extends AppController {

	var $name = 'Proposals';
        var $uses = array('Proposal', 'User', 'Evaluation', 'UsersProposal');

        function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allowedActions = array('index','edit', 'view', 'add', 'grant_submission', 'submission_confirm', 'delete', 'grantee_delete',);
}

function _sendEmail($id) {
    $Proposal = $this->Proposal->read(null,$id);
    $this->Email->to = $Proposal['Proposal']['inv_email'];
    $this->Email->bcc = array('admin@societyfp.org');
    $this->Email->cc = array('mpolonsky@societyfp.org');
    $this->Email->subject = 'SFP Proposal Submission Confirmation';
    $this->Email->replyTo = 'mpolonsky@societyfp.org';
    $this->Email->from = 'Marlo Polonsky <mpolonsky@societyfp.org>';
    $this->Email->template = 'grant_confirm'; // note no '.ctp'
    //Send as 'html', 'text' or 'both' (default is 'text')
    $this->Email->sendAs = 'html'; // because we like to send pretty mail
    //Set view variables as normal
    $this->set('Proposal', $Proposal);
    //Do not pass any args to send()
    $this->Email->send();
 }


//var $small = $this->Proposal->find('all', array('conditions'=> array('project_type_id'=> '1')));
//var $large = $this->Proposal->find('all', array('conditions'=> array('project_type_id'=> '2')));

	function index() {
		$this->Proposal->recursive = 0;
		//$this->set('proposals', $this->paginate());
                $this->paginate = array('conditions'=>array('Proposal.created_by' => ($this->Session->read('Auth.User.id'))));
                $this->set('proposals', $this->paginate('Proposal'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid proposal', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('proposal', $this->Proposal->read(null, $id));
	}

        function grant_submission() {
            if (!empty($this->data)) {
			$this->Proposal->create();
                        $this->Proposal->saveAll($this->data);
                        $this->_sendEmail($this->Proposal->id);
                        $this->redirect(array('action' => 'submission_confirm'));
			if ($this->Proposal->save($this->data)) {
                               $this->Session->setFlash(__('The proposal has been saved', true));
			} else {
				$this->Session->setFlash(__('The proposal could not be saved. Please, try again.', true));
			}
		}
                $files = $this->Proposal->Upload->find('list');
                $this->set('files', $files);
		$users = $this->Proposal->User->find('list');
		$this->set(compact('users'));
                $duration = $this->Proposal->Duration->find('list');
                $this->set('duration', $duration);
                $project = $this->Proposal->ProjectType->find('list');
                $this->set('project', $project);
                $upload = $this->Proposal->Upload->find('list');
                $this->set('upload', $upload);
        }


        function submission_confirm() {
           $duration = $this->Proposal->Duration->find('list');
                $this->set('duration', $duration);
                $project = $this->Proposal->ProjectType->find('list');
                $this->set('project', $project);
        }

       

	function add() {
		if (!empty($this->data)) {
			$this->Proposal->create();
			if ($this->Proposal->saveAll($this->data)) {
                            $this->_sendEmail($this->Proposal->id);
				$this->Session->setFlash(__('The proposal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proposal could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Proposal->User->find('list');
		$this->set(compact('users'));
                $users = $this->Proposal->User->find('list');
                //$files = $this->Proposal->Upload->find('list');
		$this->set(compact('users'));
                $duration = $this->Proposal->Duration->find('list');
                $this->set('duration', $duration);
                $project = $this->Proposal->ProjectType->find('list');
                $this->set('project', $project);
                $upload = $this->Proposal->Upload->find('list');
                $this->set('upload', $upload);
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid proposal', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Proposal->saveAll($this->data)) {
                            $this->_sendEmail($this->Proposal->id);
				$this->Session->setFlash(__('The proposal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proposal could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Proposal->read(null, $id);
		}
		$users = $this->Proposal->User->find('list');
		$this->set(compact('users'));
                $duration = $this->Proposal->Duration->find('list');
                $this->set('duration', $duration);
                $project = $this->Proposal->ProjectType->find('list');
                $this->set('project', $project);
                $upload = $this->Proposal->Upload->find('list');
                $this->set('upload', $upload);
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for proposal', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Proposal->delete($id)) {
			$this->Session->setFlash(__('Proposal deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Proposal was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

        function admin_add() {
            if (!empty($this->data)) {
			$this->Proposal->create();
			if ($this->Proposal->saveAll($this->data)) {
                            $this->_sendEmail($this->Proposal->id);
				$this->Session->setFlash(__('The proposal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proposal could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Proposal->User->find('list');
		$this->set(compact('users'));
        }

        function admin_edit($id = null) {
            if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid proposal', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Proposal->saveAll($this->data)) {
				$this->Session->setFlash(__('The proposal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proposal could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Proposal->read(null, $id);
		}
		$users = $this->Proposal->User->find('list');
		$this->set(compact('users'));
                $users = $this->Proposal->User->find('list');
		$this->set(compact('users'));
                $duration = $this->Proposal->Duration->find('list');
                $this->set('duration', $duration);
                $project = $this->Proposal->ProjectType->find('list');
                $this->set('project', $project);
                $upload = $this->Proposal->Upload->find('list');
                $this->set('upload', $upload);
        }

        function admin_delete($id = null){
            if (!$id) {
			$this->Session->setFlash(__('Invalid id for proposal', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Proposal->delete($id)) {
			$this->Session->setFlash(__('Proposal deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Proposal was not deleted', true));
		$this->redirect(array('action' => 'index'));
        }

        function admin_index() {
            $this->Proposal->recursive = 0;
             $this->paginate = array('conditions'=>array('OR'=> array('Proposal.date_submitted >='=>'2011-01-31 00:00:00', 'Proposal.created >='=>'2011-01-31 00:00:00' )));
             $this->set('proposals', $this->paginate('Proposal'));
             
        }

        function admin_large() {
          $this->Proposal->recursive = 0;
           $this->paginate = array('conditions'=>array('Proposal.project_type_id' => 2, array('OR'=> array('Proposal.date_submitted >='=>'2011-01-31 00:00:00', 'Proposal.created >='=>'2011-01-31 00:00:00' ))));
           $this->set('proposals', $this->paginate('Proposal'));
        }
        function admin_small() {
            $this->Proposal->recursive = 0;
            $this->paginate = array('conditions'=>array('Proposal.project_type_id' => 1, array('OR'=> array('Proposal.date_submitted >='=>'2011-01-31 00:00:00', 'Proposal.created >='=>'2011-01-31 00:00:00' ))));
            $this->set('proposals', $this->paginate('Proposal'));

        }

        function admin_view($id = null) {
            if (!$id) {
			$this->Session->setFlash(__('Invalid proposal', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('proposal', $this->Proposal->read(null, $id));
        }

        function board_add() {
            if (!empty($this->data)) {
			$this->Proposal->create();
			if ($this->Proposal->save($this->data)) {
				$this->Session->setFlash(__('The proposal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proposal could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Proposal->User->find('list');
		$this->set(compact('users'));
        }

        function board_edit($id = null) {
            if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid proposal', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Proposal->save($this->data)) {
				$this->Session->setFlash(__('The proposal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proposal could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Proposal->read(null, $id);
		}
		$users = $this->Proposal->User->find('list');
		$this->set(compact('users'));
        }

        function board_index() {
            $this->Proposal->recursive = 0;
		$this->set('proposals', $this->paginate());
        }

        function board_view($id = null) {
            if (!$id) {
			$this->Session->setFlash(__('Invalid proposal', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('proposal', $this->Proposal->read(null, $id));
        }

       function board_large(){
      $this->Proposal->recursive = 0;
      //$this->set('proposals', $this->paginate());
      //$large = $this->Proposal->find('all', array('conditions'=> array('project_type_id'=> '2')));
      $this->paginate = array('conditions'=>array('OR'=> array('Proposal.date_submitted >='=>'2011-01-31 00:00:00', 'Proposal.created >='=>'2011-01-31 00:00:00' ), 'Proposal.project_type_id' => '2'));
      $this->set('proposals', $this->paginate('Proposal'));
       }

       function board_small(){
        $this->Proposal->recursive = 0;
       //$this->set('proposals', $this->paginate());
        $this->paginate = array('conditions'=>array('OR'=> array('Proposal.date_submitted >='=>'2011-01-31 00:00:00', 'Proposal.created >='=>'2011-01-31 00:00:00' ), 'Proposal.project_type_id' => '1'));
        $this->set('proposals', $this->paginate('Proposal'));
       }

        function chair_add() {
            if (!empty($this->data)) {
			$this->Proposal->create();
			if ($this->Proposal->save($this->data)) {
				$this->Session->setFlash(__('The proposal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proposal could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Proposal->User->find('list');
		$this->set(compact('users'));
        }

        function chair_edit($id = null) {
            if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid proposal', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Proposal->save($this->data)) {
				$this->Session->setFlash(__('The proposal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proposal could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Proposal->read(null, $id);
		}
		$users = $this->Proposal->User->find('list');
		$this->set(compact('users'));
        }

        function chair_index() {
            $this->Proposal->recursive = 0;
		$this->set('proposals', $this->paginate());
        }

        function chair_view($id = null) {
            if (!$id) {
			$this->Session->setFlash(__('Invalid proposal', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('proposal', $this->Proposal->read(null, $id));
        }


        function general_add() {
            if (!empty($this->data)) {
			$this->Proposal->create();
			if ($this->Proposal->save($this->data)) {
				$this->Session->setFlash(__('The proposal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proposal could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Proposal->User->find('list');
		$this->set(compact('users'));
        }

        function general_edit($id = null) {
            if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid proposal', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Proposal->save($this->data)) {
				$this->Session->setFlash(__('The proposal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proposal could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Proposal->read(null, $id);
		}
		$users = $this->Proposal->User->find('list');
		$this->set(compact('users'));
        }

        function general_index() {
            $this->Proposal->recursive = 0;
		$this->set('proposals', $this->paginate());
        }

        function general_view($id = null) {
            if (!$id) {
			$this->Session->setFlash(__('Invalid proposal', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('proposal', $this->Proposal->read(null, $id));
        }

        function general_small($id = null){
             $this->Proposal->recursive = 0;
		//$this->set('proposals', $this->paginate());
             $this->paginate = array('conditions'=>array('project_type_id' => 1));
        $this->set('proposals', $this->paginate('Proposal'));

        }

    function  general_large($id = null){
         $this->Proposal->recursive = 0;
		//$this->set('proposals', $this->paginate());
         $this->paginate = array('conditions'=>array('project_type_id' => 2));
           $this->set('proposals', $this->paginate('Proposal'));
    }

    function grantee_index() {
        $this->Proposal->recursive = 0;
		//$this->set('proposals', $this->paginate());
                $this->paginate = array('conditions'=>array('created_by' => ($this->Session->read('Auth.User.id'))));
                $this->set('proposals', $this->paginate('Proposal'));
    }
    function grantee_view($id = null) {
        if (!$id) {
			$this->Session->setFlash(__('Invalid proposal', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('proposal', $this->Proposal->read(null, $id));
    }
    function grantee_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid proposal', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Proposal->saveAll($this->data)) {
                            $this->_sendEmail($this->Proposal->id);
				$this->Session->setFlash(__('The proposal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proposal could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Proposal->read(null, $id);
		}
		$users = $this->Proposal->User->find('list');
		$this->set(compact('users'));
                $duration = $this->Proposal->Duration->find('list');
                $this->set('duration', $duration);
                $project = $this->Proposal->ProjectType->find('list');
                $this->set('project', $project);
                $upload = $this->Proposal->Upload->find('list');
                $this->set('upload', $upload);
	}
    
    function grantee_add() {
     if (!empty($this->data)) {
			$this->Proposal->create();
			if ($this->Proposal->save($this->data)) {
				$this->Session->setFlash(__('The proposal has been saved', true));
				$this->redirect(array('action' => 'index', 'grantee'=>true));
			} else {
				$this->Session->setFlash(__('The proposal could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Proposal->User->find('list');
		$this->set(compact('users'));
    }

    function grantee_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for proposal', true));
			$this->redirect(array('action'=>'index', 'grantee'=> true));
		}
		if ($this->Proposal->delete($id)) {
			$this->Session->setFlash(__('Proposal deleted', true));
			$this->redirect(array('action'=>'index', 'grantee'=>true));
		}
		$this->Session->setFlash(__('Proposal was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

     function grantee_submission_confirm () {
             $duration = $this->Proposal->Duration->find('list');
                $this->set('duration', $duration);
                $project = $this->Proposal->ProjectType->find('list');
                $this->set('project', $project);
        }

        function grantee_grant_submission() {
           if (!empty($this->data)) {
			$this->Proposal->create();
                        $this->Proposal->saveAll($this->data);
                        $this->_sendEmail($this->Proposal->id);
                         $this->redirect(array('action' => 'submission_confirm', 'grantee'=> true));
			if ($this->Proposal->save($this->data)) {
                               $this->Session->setFlash(__('The proposal has been saved', true));
			} else {
				$this->Session->setFlash(__('The proposal could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Proposal->User->find('list');
                //$files = $this->Proposal->Upload->find('list');
		$this->set(compact('users'));
                $duration = $this->Proposal->Duration->find('list');
                $this->set('duration', $duration);
                $project = $this->Proposal->ProjectType->find('list');
                $this->set('project', $project);
                $upload = $this->Proposal->Upload->find('list');
                $this->set('upload', $upload);
        }


    function large_index() {
            $this->loadModel('User');
            $this->loadModel('UsersProposal');
            $this->loadModel('Evaluation');
            $this->Proposal->recursive = 0;
	    //$this->set('proposals', $this->paginate());
           //$large = $this->Proposal->find('list', array('conditions'=> array('Proposal.project_type_id'=> 2)));
           //$this->set('larges', $this->paginate());
           $this->paginate = array('conditions'=>array('Proposal.created_by <>' => ($this->Session->read('Auth.User.id')), 'Proposal.project_type_id' => 2, array('OR'=> array('Proposal.date_submitted >='=>'2011-01-31 00:00:00', 'Proposal.created >='=>'2011-01-31 00:00:00' ))));
           $this->set('proposals', $this->paginate('Proposal'));
           //$buttons = $this->Proposal->UsersProposal->query('select * from users_proposals as UsersProposal inner join users as User on UsersProposal.user_id = User.id inner join proposals as Proposal on UsersProposal.proposal_id = Proposal.id where User.group_id = 7');
           //$this->set(compact('buttons'));
        }

        function large_assignment() {
        $this->loadModel('User');
            $this->loadModel('UsersProposal');
            $this->loadModel('Evaluation');
            $this->Proposal->recursive = 0;
	    //$this->set('proposals', $this->paginate());
           //$large = $this->Proposal->find('list', array('conditions'=> array('Proposal.project_type_id'=> 2)));
           //$this->set('larges', $this->paginate());
           $this->paginate = array('conditions'=>array('Proposal.created_by <>' => ($this->Session->read('Auth.User.id')), 'Proposal.project_type_id' => 2, array('OR'=> array('Proposal.date_submitted >='=>'2011-01-31 00:00:00', 'Proposal.created >='=>'2011-01-31 00:00:00' ))));
           $this->set('proposals', $this->paginate('Proposal'));
           $buttons = $this->Proposal->UsersProposal->query('select * from users_proposals as UsersProposal inner join users as User on UsersProposal.user_id = User.id inner join proposals as Proposal on UsersProposal.proposal_id = Proposal.id where User.group_id = 7');
           $this->set(compact('buttons'));
        }

        function large_view($id = null) {
            if (!$id) {
			$this->Session->setFlash(__('Invalid proposal', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('proposal', $this->Proposal->read(null, $id));
        }

        function small_index() {
            $this->loadModel('User');
            $this->loadModel('UsersProposal');
            $this->loadModel('Evaluation');
            $this->Proposal->recursive = 0;
            $this->paginate = array('conditions'=>array('Proposal.created_by <>' => ($this->Session->read('Auth.User.id')), 'Proposal.project_type_id' => 1, array('OR'=> array('Proposal.date_submitted >='=>'2011-01-31 00:00:00', 'Proposal.created >='=>'2011-01-31 00:00:00' ))));
		$this->set('proposals', $this->paginate('Proposal'));
                //$buttons = $this->Proposal->UsersProposal->find('all', array('conditions'=>array('Proposal.id'=>'UsersProposal.proposal_id', 'UsersProposal.user_id'=>($this->Session->read('Auth.User.id')))));
                $buttons = $this->Proposal->UsersProposal->query('select * from users_proposals as UsersProposal inner join users as User on UsersProposal.user_id = User.id inner join proposals as Proposal on UsersProposal.proposal_id = Proposal.id where User.group_id = 6');
                $this->set(compact('buttons'));
        }

        function small_assignment() {
            $this->loadModel('User');
            $this->loadModel('UsersProposal');
            $this->loadModel('Evaluation');
            $this->Proposal->recursive = 0;
            $this->paginate = array('conditions'=>array('Proposal.created_by <>' => ($this->Session->read('Auth.User.id')), 'Proposal.project_type_id' => 1, array('OR'=> array('Proposal.date_submitted >='=>'2011-01-31 00:00:00', 'Proposal.created >='=>'2011-01-31 00:00:00' ))));
		$this->set('proposals', $this->paginate('Proposal'));
                //$buttons = $this->Proposal->UsersProposal->find('all', array('conditions'=>array('Proposal.id'=>'UsersProposal.proposal_id', 'UsersProposal.user_id'=>($this->Session->read('Auth.User.id')))));
                $buttons = $this->Proposal->UsersProposal->query('select * from users_proposals as UsersProposal inner join users as User on UsersProposal.user_id = User.id inner join proposals as Proposal on UsersProposal.proposal_id = Proposal.id where User.group_id = 6');
                $this->set(compact('buttons'));
        }

        function small_view($id = null) {
            if (!$id) {
			$this->Session->setFlash(__('Invalid proposal', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('proposal', $this->Proposal->read(null, $id));
        }
        
}
?>