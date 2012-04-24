<?php
class LargeGrantRanksController extends AppController {

	var $name = 'LargeGrantRanks';

	function index() {
		$this->LargeGrantRank->recursive = 0;
		$this->set('largeGrantRanks', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid large grant rank', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('largeGrantRank', $this->LargeGrantRank->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->LargeGrantRank->create();
			if ($this->LargeGrantRank->save($this->data)) {
				$this->Session->setFlash(__('The large grant rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The large grant rank could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid large grant rank', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->LargeGrantRank->save($this->data)) {
				$this->Session->setFlash(__('The large grant rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The large grant rank could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->LargeGrantRank->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for large grant rank', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->LargeGrantRank->delete($id)) {
			$this->Session->setFlash(__('Large grant rank deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Large grant rank was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function large_index() {
		$this->LargeGrantRank->recursive = 0;
		$this->set('largeGrantRanks', $this->paginate());
	}

	function large_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid large grant rank', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('largeGrantRank', $this->LargeGrantRank->read(null, $id));
	}

	function large_add() {
		if (!empty($this->data)) {
			$this->LargeGrantRank->create();
			if ($this->LargeGrantRank->save($this->data)) {
				$this->Session->setFlash(__('The large grant rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The large grant rank could not be saved. Please, try again.', true));
			}
		}
	}

	function large_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid large grant rank', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->LargeGrantRank->save($this->data)) {
				$this->Session->setFlash(__('The large grant rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The large grant rank could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->LargeGrantRank->read(null, $id);
		}
	}

	function large_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for large grant rank', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->LargeGrantRank->delete($id)) {
			$this->Session->setFlash(__('Large grant rank deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Large grant rank was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>