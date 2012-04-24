<?php
class EvaluationsController extends AppController {

	var $name = 'Evaluations';
        var $uses = array('Evaluation', 'Proposal', 'User');

        function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allowedActions = array('index', 'view', 'add', 'edit');
}


	function index() {
		$this->Evaluation->recursive = 0;
		$this->set('evaluations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid evaluation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('evaluation', $this->Evaluation->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Evaluation->create();
			if ($this->Evaluation->save($this->data)) {
				$this->Session->setFlash(__('The evaluation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluation could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Evaluation->User->find('list');
		$proposals = $this->Evaluation->Proposal->find('list');
		$this->set(compact('users', 'proposals'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid evaluation', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Evaluation->save($this->data)) {
				$this->Session->setFlash(__('The evaluation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluation could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Evaluation->read(null, $id);
		}
		$users = $this->Evaluation->User->find('list');
		$proposals = $this->Evaluation->Proposal->find('list');
		$this->set(compact('users', 'proposals'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for evaluation', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Evaluation->delete($id)) {
			$this->Session->setFlash(__('Evaluation deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Evaluation was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

        function admin_add(){
            if (!empty($this->data)) {
			$this->Evaluation->create();
			if ($this->Evaluation->save($this->data)) {
				$this->Session->setFlash(__('The evaluation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluation could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Evaluation->User->find('list');
		$proposals = $this->Evaluation->Proposal->find('list');
		$this->set(compact('users', 'proposals'));
        }
        function admin_edit($id = null){
            if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid evaluation', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Evaluation->save($this->data)) {
				$this->Session->setFlash(__('The evaluation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluation could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Evaluation->read(null, $id);
		}
		$users = $this->Evaluation->User->find('list');
		$proposals = $this->Evaluation->Proposal->find('list');
		$this->set(compact('users', 'proposals'));
        }
        function admin_index(){
            $this->Evaluation->recursive = 0;
		$this->set('evaluations', $this->paginate());
        }
        function admin_view($id = null){
            if (!$id) {
			$this->Session->setFlash(__('Invalid evaluation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('evaluation', $this->Evaluation->read(null, $id));
        }

        function grantee_view($id = null){
            if (!$id) {
			$this->Session->setFlash(__('Invalid evaluation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('evaluation', $this->Evaluation->read(null, $id));
        }

        function large_add(){
         $this->loadModel('User');
            $this->loadModel('Proposal');
            $large_users = $this->Evaluation->User->find('list', array('conditions'=>array('User.group_id'=>'7')));
		$large_proposals = $this->Evaluation->Proposal->find('list', array('conditions'=>array('OR'=> array('Proposal.date_submitted >='=>'2011-01-31 00:00:00', 'Proposal.created >='=>'2011-01-31 00:00:00'),'Proposal.project_type_id'=>'2')));
		$this->set(compact('large_users', 'large_proposals'));
            if (!empty($this->data)) {
                 $this->Evaluation->saveAll($this->data);
			$this->Evaluation->create();
			if ($this->Evaluation->saveAll($this->data)) {
				$this->Session->setFlash(__('The evaluation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluation could not be saved. Please, try again.', true));
			}
		}
		
        }
        function large_edit($id = null){
            $this->loadModel('User');
            $this->loadModel('Proposal');
            if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid evaluation', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Evaluation->saveAll($this->data)) {
				$this->Session->setFlash(__('The evaluation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluation could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Evaluation->read(null, $id);
		}
		$large_users = $this->Evaluation->User->find('list', array('conditions'=>array('User.group_id'=>'7')));
		$large_proposals = $this->Evaluation->Proposal->find('list', array('conditions'=>array('Proposal.project_type_id'=>'2')));
		$this->set(compact('large_users', 'large_proposals'));
        }
        function large_index(){
            $this->Evaluation->recursive = 0;
            $this->paginate = array('conditions'=> array('Evaluation.user_id'=> ($this->Session->read('Auth.User.id')), 'Evaluation.date_submitted >='=>'2011-01-31 00:00:00'));
		$this->set('evaluations', $this->paginate('Evaluation'));
        }
        function large_view($id = null){
            if (!$id) {
			$this->Session->setFlash(__('Invalid evaluation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('evaluation', $this->Evaluation->read(null, $id));
        }

        function large_delete($id = null) {
           if (!$id) {
			$this->Session->setFlash(__('Invalid id for evaluation', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Evaluation->delete($id)) {
			$this->Session->setFlash(__('Evaluation deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Evaluation was not deleted', true));
		$this->redirect(array('action' => 'index'));
        }


        function manager_add(){
            if (!empty($this->data)) {
			$this->Evaluation->create();
			if ($this->Evaluation->save($this->data)) {
				$this->Session->setFlash(__('The evaluation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluation could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Evaluation->User->find('list');
		$proposals = $this->Evaluation->Proposal->find('list');
		$this->set(compact('users', 'proposals'));
        }
        function manager_edit($id = null){
              if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid evaluation', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Evaluation->save($this->data)) {
				$this->Session->setFlash(__('The evaluation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluation could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Evaluation->read(null, $id);
		}
		$users = $this->Evaluation->User->find('list');
		$proposals = $this->Evaluation->Proposal->find('list');
		$this->set(compact('users', 'proposals'));
        }
        function manager_index(){
            $this->Evaluation->recursive = 0;
		$this->set('evaluations', $this->paginate());
        }
        function manager_view($id = null){
            if (!$id) {
			$this->Session->setFlash(__('Invalid evaluation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('evaluation', $this->Evaluation->read(null, $id));
        }

        function proposal_status($id = null){
            if (!$id) {
			$this->Session->setFlash(__('Invalid evaluation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('evaluation', $this->Evaluation->read(null, $id));
        }

        function small_add(){
            $this->loadModel('User');
            $this->loadModel('Proposal');
            $small_users = $this->Evaluation->User->find('list', array('conditions'=>array('User.group_id'=>'6')));
		$small_proposals = $this->Evaluation->Proposal->find('list', array('conditions'=>array('OR'=> array('Proposal.date_submitted >='=>'2011-01-31 00:00:00', 'Proposal.created >='=>'2011-01-31 00:00:00'), 'Proposal.project_type_id'=>'1')));
		$this->set(compact('small_users', 'small_proposals'));
            if (!empty($this->data)) {
                        $this->Evaluation->saveAll($this->data);
			$this->Evaluation->create();
			if ($this->Evaluation->saveAll($this->data)) {
				$this->Session->setFlash(__('The evaluation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluation could not be saved. Please, try again.', true));
			}
		}
		
        }
        function small_edit($id = null){
            $this->loadModel('User');
            $this->loadModel('Proposal');
            if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid evaluation', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Evaluation->saveAll($this->data)) {
				$this->Session->setFlash(__('The evaluation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluation could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Evaluation->read(null, $id);
		}
		$small_users = $this->Evaluation->User->find('list', array('conditions'=>array('User.group_id'=>'6')));
		$small_proposals = $this->Evaluation->Proposal->find('list', array('conditions'=>array('Proposal.project_type_id'=>'1')));
		$this->set(compact('small_users', 'small_proposals'));
        }
        function small_index(){
            $this->Evaluation->recursive = 0;
            $this->paginate = array('conditions'=> array('Evaluation.user_id'=> ($this->Session->read('Auth.User.id')), 'Evaluation.date_submitted >='=>'2011-01-31 00:00:00'));
            $this->set('evaluations', $this->paginate('Evaluation'));
        }
        function small_view($id = null){
            if (!$id) {
			$this->Session->setFlash(__('Invalid evaluation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('evaluation', $this->Evaluation->read(null, $id));
        }

        function small_delete($id = null) {
           if (!$id) {
			$this->Session->setFlash(__('Invalid id for evaluation', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Evaluation->delete($id)) {
			$this->Session->setFlash(__('Evaluation deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Evaluation was not deleted', true));
		$this->redirect(array('action' => 'index'));
        }

        function general_index(){
            $this->Evaluation->recursive = 0;
		$this->set('evaluations', $this->paginate());
        }

        function general_view($id = null){
            if (!$id) {
			$this->Session->setFlash(__('Invalid evaluation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('evaluation', $this->Evaluation->read(null, $id));
        }

        function board_index(){
         $this->Evaluation->recursive = 0;
         $this->paginate = array('conditions'=> array('Evaluation.date_submitted >='=>'2011-01-31 00:00:00'));
         $this->set('evaluations', $this->paginate('Evaluation'));
        }


        function board_view($id = null){
         if (!$id) {
			$this->Session->setFlash(__('Invalid evaluation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('evaluation', $this->Evaluation->read(null, $id));
        }
}
?>