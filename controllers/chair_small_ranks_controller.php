<?php
class ChairSmallRanksController extends AppController {

	var $name = 'ChairSmallRanks';

	function index() {
		$this->ChairSmallRank->recursive = 0;
		$this->set('chairSmallRanks', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid chair small rank', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('chairSmallRank', $this->ChairSmallRank->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ChairSmallRank->create();
			if ($this->ChairSmallRank->save($this->data)) {
				$this->Session->setFlash(__('The chair small rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The chair small rank could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid chair small rank', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ChairSmallRank->save($this->data)) {
				$this->Session->setFlash(__('The chair small rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The chair small rank could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ChairSmallRank->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for chair small rank', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ChairSmallRank->delete($id)) {
			$this->Session->setFlash(__('Chair small rank deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Chair small rank was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->ChairSmallRank->recursive = 0;
		$this->set('chairSmallRanks', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid chair small rank', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('chairSmallRank', $this->ChairSmallRank->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->ChairSmallRank->create();
			if ($this->ChairSmallRank->save($this->data)) {
				$this->Session->setFlash(__('The chair small rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The chair small rank could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid chair small rank', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ChairSmallRank->save($this->data)) {
				$this->Session->setFlash(__('The chair small rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The chair small rank could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ChairSmallRank->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for chair small rank', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ChairSmallRank->delete($id)) {
			$this->Session->setFlash(__('Chair small rank deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Chair small rank was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function chair_index() {
		$this->ChairSmallRank->recursive = 0;
		$this->set('chairSmallRanks', $this->paginate());
	}
	
}
?>