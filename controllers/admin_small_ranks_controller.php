<?php
class AdminSmallRanksController extends AppController {

	var $name = 'AdminSmallRanks';

	function index() {
		$this->AdminSmallRank->recursive = 0;
		$this->set('adminSmallRanks', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid admin small rank', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('adminSmallRank', $this->AdminSmallRank->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AdminSmallRank->create();
			if ($this->AdminSmallRank->save($this->data)) {
				$this->Session->setFlash(__('The admin small rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The admin small rank could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid admin small rank', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->AdminSmallRank->save($this->data)) {
				$this->Session->setFlash(__('The admin small rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The admin small rank could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AdminSmallRank->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for admin small rank', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AdminSmallRank->delete($id)) {
			$this->Session->setFlash(__('Admin small rank deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Admin small rank was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->AdminSmallRank->recursive = 0;
		$this->set('adminSmallRanks', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid admin small rank', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('adminSmallRank', $this->AdminSmallRank->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->AdminSmallRank->create();
			if ($this->AdminSmallRank->save($this->data)) {
				$this->Session->setFlash(__('The admin small rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The admin small rank could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid admin small rank', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->AdminSmallRank->save($this->data)) {
				$this->Session->setFlash(__('The admin small rank has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The admin small rank could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AdminSmallRank->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for admin small rank', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AdminSmallRank->delete($id)) {
			$this->Session->setFlash(__('Admin small rank deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Admin small rank was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>