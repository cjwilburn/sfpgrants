<?php
class Merit2011sController extends AppController {

	var $name = 'Merit2011s';
	var $uses = array('Proposal', 'Evaluation');

	function index() {
		$this->Merit2011->recursive = 0;
		$this->set('merit2011s', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid merit2011', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('merit2011', $this->Merit2011->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Merit2011->create();
			if ($this->Merit2011->save($this->data)) {
				$this->Session->setFlash(__('The merit2011 has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The merit2011 could not be saved. Please, try again.', true));
			}
		}
		$proposals = $this->Merit2011->Proposal->find('list');
		$evaluations = $this->Merit2011->Evaluation->find('list');
		$this->set(compact('proposals', 'evaluations'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid merit2011', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Merit2011->save($this->data)) {
				$this->Session->setFlash(__('The merit2011 has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The merit2011 could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Merit2011->read(null, $id);
		}
		$proposals = $this->Merit2011->Proposal->find('list');
		$evaluations = $this->Merit2011->Evaluation->find('list');
		$this->set(compact('proposals', 'evaluations'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for merit2011', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Merit2011->delete($id)) {
			$this->Session->setFlash(__('Merit2011 deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Merit2011 was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Merit2011->recursive = 0;
		$this->set('merit2011s', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid merit2011', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('merit2011', $this->Merit2011->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Merit2011->create();
			if ($this->Merit2011->save($this->data)) {
				$this->Session->setFlash(__('The merit2011 has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The merit2011 could not be saved. Please, try again.', true));
			}
		}
		$proposals = $this->Merit2011->Proposal->find('list');
		$evaluations = $this->Merit2011->Evaluation->find('list');
		$this->set(compact('proposals', 'evaluations'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid merit2011', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Merit2011->save($this->data)) {
				$this->Session->setFlash(__('The merit2011 has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The merit2011 could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Merit2011->read(null, $id);
		}
		$proposals = $this->Merit2011->Proposal->find('list');
		$evaluations = $this->Merit2011->Evaluation->find('list');
		$this->set(compact('proposals', 'evaluations'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for merit2011', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Merit2011->delete($id)) {
			$this->Session->setFlash(__('Merit2011 deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Merit2011 was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>