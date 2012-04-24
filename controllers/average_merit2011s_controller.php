<?php
class AverageMerit2011sController extends AppController {

	var $name = 'AverageMerit2011s';
	var $uses = array('Proposal', 'Evaluation');

	function index() {
		$this->AverageMerit2011->recursive = 0;
		$this->set('averageMerit2011s', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid average merit2011', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('averageMerit2011', $this->AverageMerit2011->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AverageMerit2011->create();
			if ($this->AverageMerit2011->save($this->data)) {
				$this->Session->setFlash(__('The average merit2011 has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The average merit2011 could not be saved. Please, try again.', true));
			}
		}
		$proposals = $this->AverageMerit2011->Proposal->find('list');
		$this->set(compact('proposals'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid average merit2011', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->AverageMerit2011->save($this->data)) {
				$this->Session->setFlash(__('The average merit2011 has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The average merit2011 could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AverageMerit2011->read(null, $id);
		}
		$proposals = $this->AverageMerit2011->Proposal->find('list');
		$this->set(compact('proposals'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for average merit2011', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AverageMerit2011->delete($id)) {
			$this->Session->setFlash(__('Average merit2011 deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Average merit2011 was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->AverageMerit2011->recursive = 0;
		$this->set('averageMerit2011s', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid average merit2011', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('averageMerit2011', $this->AverageMerit2011->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->AverageMerit2011->create();
			if ($this->AverageMerit2011->save($this->data)) {
				$this->Session->setFlash(__('The average merit2011 has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The average merit2011 could not be saved. Please, try again.', true));
			}
		}
		$proposals = $this->AverageMerit2011->Proposal->find('list');
		$this->set(compact('proposals'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid average merit2011', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->AverageMerit2011->save($this->data)) {
				$this->Session->setFlash(__('The average merit2011 has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The average merit2011 could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AverageMerit2011->read(null, $id);
		}
		$proposals = $this->AverageMerit2011->Proposal->find('list');
		$this->set(compact('proposals'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for average merit2011', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AverageMerit2011->delete($id)) {
			$this->Session->setFlash(__('Average merit2011 deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Average merit2011 was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>