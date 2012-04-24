<?php
class SmallGrantRanksController extends AppController {

	var $name = 'SmallGrantRanks';

	function index() {
		$this->SmallGrantRank->recursive = 0;
		$this->set('smallGrantRanks', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid small grant rank', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('smallGrantRank', $this->SmallGrantRank->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SmallGrantRank->create();
			if ($this->SmallGrantRank->save($this->data)) {
				$this->Session->setFlash(__('The small grant rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The small grant rank could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid small grant rank', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SmallGrantRank->save($this->data)) {
				$this->Session->setFlash(__('The small grant rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The small grant rank could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SmallGrantRank->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for small grant rank', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SmallGrantRank->delete($id)) {
			$this->Session->setFlash(__('Small grant rank deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Small grant rank was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function small_index() {
		$this->SmallGrantRank->recursive = 0;
		$this->set('smallGrantRanks', $this->paginate());
	}

	function small_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid small grant rank', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('smallGrantRank', $this->SmallGrantRank->read(null, $id));
	}

	function small_add() {
		if (!empty($this->data)) {
			$this->SmallGrantRank->create();
			if ($this->SmallGrantRank->save($this->data)) {
				$this->Session->setFlash(__('The small grant rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The small grant rank could not be saved. Please, try again.', true));
			}
		}
	}

	function small_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid small grant rank', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SmallGrantRank->save($this->data)) {
				$this->Session->setFlash(__('The small grant rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The small grant rank could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SmallGrantRank->read(null, $id);
		}
	}

	function small_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for small grant rank', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SmallGrantRank->delete($id)) {
			$this->Session->setFlash(__('Small grant rank deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Small grant rank was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>