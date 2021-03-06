<?php
class AdminLargeRanksController extends AppController {

	var $name = 'AdminLargeRanks';

	function index() {
		$this->AdminLargeRank->recursive = 0;
		$this->set('adminLargeRanks', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid admin large rank', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('adminLargeRank', $this->AdminLargeRank->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AdminLargeRank->create();
			if ($this->AdminLargeRank->save($this->data)) {
				$this->Session->setFlash(__('The admin large rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The admin large rank could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid admin large rank', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->AdminLargeRank->save($this->data)) {
				$this->Session->setFlash(__('The admin large rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The admin large rank could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AdminLargeRank->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for admin large rank', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AdminLargeRank->delete($id)) {
			$this->Session->setFlash(__('Admin large rank deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Admin large rank was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->AdminLargeRank->recursive = 1;
		$this->set('adminLargeRanks', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid admin large rank', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('adminLargeRank', $this->AdminLargeRank->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->AdminLargeRank->create();
			if ($this->AdminLargeRank->save($this->data)) {
				$this->Session->setFlash(__('The admin large rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The admin large rank could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid admin large rank', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->AdminLargeRank->save($this->data)) {
				$this->Session->setFlash(__('The admin large rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The admin large rank could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AdminLargeRank->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for admin large rank', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AdminLargeRank->delete($id)) {
			$this->Session->setFlash(__('Admin large rank deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Admin large rank was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>