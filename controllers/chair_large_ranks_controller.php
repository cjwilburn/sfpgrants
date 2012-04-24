<?php
class ChairLargeRanksController extends AppController {

	var $name = 'ChairLargeRanks';

	function index() {
		$this->ChairLargeRank->recursive = 0;
		$this->set('chairLargeRanks', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid chair large rank', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('chairLargeRank', $this->ChairLargeRank->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ChairLargeRank->create();
			if ($this->ChairLargeRank->save($this->data)) {
				$this->Session->setFlash(__('The chair large rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The chair large rank could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid chair large rank', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ChairLargeRank->save($this->data)) {
				$this->Session->setFlash(__('The chair large rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The chair large rank could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ChairLargeRank->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for chair large rank', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ChairLargeRank->delete($id)) {
			$this->Session->setFlash(__('Chair large rank deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Chair large rank was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->ChairLargeRank->recursive = 0;
		$this->set('chairLargeRanks', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid chair large rank', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('chairLargeRank', $this->ChairLargeRank->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->ChairLargeRank->create();
			if ($this->ChairLargeRank->save($this->data)) {
				$this->Session->setFlash(__('The chair large rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The chair large rank could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid chair large rank', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ChairLargeRank->save($this->data)) {
				$this->Session->setFlash(__('The chair large rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The chair large rank could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ChairLargeRank->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for chair large rank', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ChairLargeRank->delete($id)) {
			$this->Session->setFlash(__('Chair large rank deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Chair large rank was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function chair_index() {
		$this->ChairLargeRank->recursive = 0;
		$this->set('chairLargeRanks', $this->paginate());
	}
}
?>