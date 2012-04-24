<?php
class EvaluationsProposalsController extends AppController {

	var $name = 'EvaluationsProposals';

	function index() {
		$this->EvaluationsProposal->recursive = 0;
		$this->set('evaluationsProposals', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid evaluations proposal', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('evaluationsProposal', $this->EvaluationsProposal->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->EvaluationsProposal->create();
			if ($this->EvaluationsProposal->save($this->data)) {
				$this->Session->setFlash(__('The evaluations proposal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluations proposal could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid evaluations proposal', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->EvaluationsProposal->save($this->data)) {
				$this->Session->setFlash(__('The evaluations proposal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluations proposal could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EvaluationsProposal->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for evaluations proposal', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EvaluationsProposal->delete($id)) {
			$this->Session->setFlash(__('Evaluations proposal deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Evaluations proposal was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->EvaluationsProposal->recursive = 0;
		$this->set('evaluationsProposals', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid evaluations proposal', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('evaluationsProposal', $this->EvaluationsProposal->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->EvaluationsProposal->create();
			if ($this->EvaluationsProposal->save($this->data)) {
				$this->Session->setFlash(__('The evaluations proposal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluations proposal could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid evaluations proposal', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->EvaluationsProposal->save($this->data)) {
				$this->Session->setFlash(__('The evaluations proposal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluations proposal could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EvaluationsProposal->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for evaluations proposal', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EvaluationsProposal->delete($id)) {
			$this->Session->setFlash(__('Evaluations proposal deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Evaluations proposal was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>