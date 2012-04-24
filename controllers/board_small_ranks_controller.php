<?php
class BoardSmallRanksController extends AppController {

	var $name = 'BoardSmallRanks';

	function index() {
		$this->BoardSmallRank->recursive = 0;
		$this->set('boardSmallRanks', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid board small rank', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('boardSmallRank', $this->BoardSmallRank->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->BoardSmallRank->create();
			if ($this->BoardSmallRank->save($this->data)) {
				$this->Session->setFlash(__('The board small rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The board small rank could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid board small rank', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->BoardSmallRank->save($this->data)) {
				$this->Session->setFlash(__('The board small rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The board small rank could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BoardSmallRank->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for board small rank', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BoardSmallRank->delete($id)) {
			$this->Session->setFlash(__('Board small rank deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Board small rank was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function board_index() {
		$this->BoardSmallRank->recursive = 0;
		$this->set('boardSmallRanks', $this->paginate());
	}

	function board_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid board small rank', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('boardSmallRank', $this->BoardSmallRank->read(null, $id));
	}

	function board_add() {
		if (!empty($this->data)) {
			$this->BoardSmallRank->create();
			if ($this->BoardSmallRank->save($this->data)) {
				$this->Session->setFlash(__('The board small rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The board small rank could not be saved. Please, try again.', true));
			}
		}
	}

	function board_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid board small rank', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->BoardSmallRank->save($this->data)) {
				$this->Session->setFlash(__('The board small rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The board small rank could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BoardSmallRank->read(null, $id);
		}
	}

	function board_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for board small rank', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BoardSmallRank->delete($id)) {
			$this->Session->setFlash(__('Board small rank deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Board small rank was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>