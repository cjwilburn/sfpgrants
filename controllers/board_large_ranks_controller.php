<?php
class BoardLargeRanksController extends AppController {

	var $name = 'BoardLargeRanks';

	function index() {
		$this->BoardLargeRank->recursive = 0;
		$this->set('boardLargeRanks', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid board large rank', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('boardLargeRank', $this->BoardLargeRank->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->BoardLargeRank->create();
			if ($this->BoardLargeRank->save($this->data)) {
				$this->Session->setFlash(__('The board large rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The board large rank could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid board large rank', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->BoardLargeRank->save($this->data)) {
				$this->Session->setFlash(__('The board large rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The board large rank could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BoardLargeRank->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for board large rank', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BoardLargeRank->delete($id)) {
			$this->Session->setFlash(__('Board large rank deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Board large rank was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function board_index() {
		$this->BoardLargeRank->recursive = 0;
		$this->set('boardLargeRanks', $this->paginate());
	}

	function board_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid board large rank', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('boardLargeRank', $this->BoardLargeRank->read(null, $id));
	}

	function board_add() {
		if (!empty($this->data)) {
			$this->BoardLargeRank->create();
			if ($this->BoardLargeRank->save($this->data)) {
				$this->Session->setFlash(__('The board large rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The board large rank could not be saved. Please, try again.', true));
			}
		}
	}

	function board_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid board large rank', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->BoardLargeRank->save($this->data)) {
				$this->Session->setFlash(__('The board large rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The board large rank could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BoardLargeRank->read(null, $id);
		}
	}

	function board_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for board large rank', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BoardLargeRank->delete($id)) {
			$this->Session->setFlash(__('Board large rank deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Board large rank was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>