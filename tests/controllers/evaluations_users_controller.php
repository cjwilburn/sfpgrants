<?php
class EvaluationsUsersController extends AppController {

	var $name = 'EvaluationsUsers';

	function index() {
		$this->EvaluationsUser->recursive = 0;
		$this->set('evaluationsUsers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid evaluations user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('evaluationsUser', $this->EvaluationsUser->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->EvaluationsUser->create();
			if ($this->EvaluationsUser->save($this->data)) {
				$this->Session->setFlash(__('The evaluations user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluations user could not be saved. Please, try again.', true));
			}
		}
		$evaluations = $this->EvaluationsUser->Evaluation->find('list');
		$users = $this->EvaluationsUser->User->find('list');
		$this->set(compact('evaluations', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid evaluations user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->EvaluationsUser->save($this->data)) {
				$this->Session->setFlash(__('The evaluations user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluations user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EvaluationsUser->read(null, $id);
		}
		$evaluations = $this->EvaluationsUser->Evaluation->find('list');
		$users = $this->EvaluationsUser->User->find('list');
		$this->set(compact('evaluations', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for evaluations user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EvaluationsUser->delete($id)) {
			$this->Session->setFlash(__('Evaluations user deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Evaluations user was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->EvaluationsUser->recursive = 0;
		$this->set('evaluationsUsers', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid evaluations user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('evaluationsUser', $this->EvaluationsUser->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->EvaluationsUser->create();
			if ($this->EvaluationsUser->save($this->data)) {
				$this->Session->setFlash(__('The evaluations user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluations user could not be saved. Please, try again.', true));
			}
		}
		$evaluations = $this->EvaluationsUser->Evaluation->find('list');
		$users = $this->EvaluationsUser->User->find('list');
		$this->set(compact('evaluations', 'users'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid evaluations user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->EvaluationsUser->save($this->data)) {
				$this->Session->setFlash(__('The evaluations user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluations user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EvaluationsUser->read(null, $id);
		}
		$evaluations = $this->EvaluationsUser->Evaluation->find('list');
		$users = $this->EvaluationsUser->User->find('list');
		$this->set(compact('evaluations', 'users'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for evaluations user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EvaluationsUser->delete($id)) {
			$this->Session->setFlash(__('Evaluations user deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Evaluations user was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>