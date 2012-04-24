<?php
class UploadsController extends AppController {

	var $name = 'Uploads';
        //var $helpers = array('FileUpload.FileUpload');
       // var $components = array('FileUpload.FileUpload');
         function beforeFilter() {
         parent::beforeFilter();
        $this->Auth->allowedActions = array('add', 'edit', 'index', 'view', 'delete', 'grantee_delete');
         }
         
	function index() {
		$this->Upload->recursive = 0;
		//$this->set('uploads', $this->paginate());
                $this->paginate = array('conditions'=>array('Upload.created_by' => ($this->Session->read('Auth.User.id'))));
                $this->set('uploads', $this->paginate('Upload'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid upload', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('upload', $this->Upload->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Upload->create();
			if ($this->Upload->save($this->data)) {
				$this->Session->setFlash(__('The upload has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The upload could not be saved. Please, try again.', true));
			}
		}
		$proposals = $this->Upload->Proposal->find('list');
		$this->set(compact('proposals'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid upload', true));
			//$this->redirect(array('action' => 'index'));
                        $this->redirect(array('controller'=> 'proposals', 'action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Upload->save($this->data)) {
				$this->Session->setFlash(__('The upload has been saved', true));
				//$this->redirect(array('action' => 'index'));
                                $this->redirect(array('controller'=> 'proposals', 'action'=>'index'));
			} else {
				$this->Session->setFlash(__('The upload could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Upload->read(null, $id);
		}
		$proposals = $this->Upload->Proposal->find('list');
		$this->set(compact('proposals'));
	}

	function delete($id = null) {
            if (!$id) {
			$this->Session->setFlash(__('Invalid id for upload', true));
			$this->redirect(array('controller'=> 'proposals', 'action'=>'index'));
		}
		if ($this->Upload->delete($id)) {
			$this->Session->setFlash(__('Upload deleted', true));
			//$this->redirect(array('action'=>'index'));
                        $this->redirect(array('controller'=> 'proposals', 'action'=>'index'));
		}
		$this->Session->setFlash(__('Upload was not deleted', true));
                $this->redirect(array('controller'=> 'proposals', 'action'=>'index'));
		//$this->redirect(array('action' => 'index'));
        }
	function admin_index() {
		$this->Upload->recursive = 0;
		//$this->set('uploads', $this->paginate());
                $this->paginate = array('conditions'=>array('Upload.created_by' => ($this->Session->read('Auth.User.id'))));
                $this->set('uploads', $this->paginate('Upload'));
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid upload', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('upload', $this->Upload->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Upload->create();
			if ($this->Upload->save($this->data)) {
				$this->Session->setFlash(__('The upload has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The upload could not be saved. Please, try again.', true));
			}
		}
		$proposals = $this->Upload->Proposal->find('list');
		$this->set(compact('proposals'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid upload', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Upload->save($this->data)) {
				$this->Session->setFlash(__('The upload has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The upload could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Upload->read(null, $id);
		}
		$proposals = $this->Upload->Proposal->find('list');
		$this->set(compact('proposals'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for upload', true));
                         $this->redirect(array('controller'=> 'proposals', 'action'=>'index'));
			//$this->redirect(array('action'=>'index'));
		}
		if ($this->Upload->delete($id)) {
			$this->Session->setFlash(__('Upload deleted', true));
                         $this->redirect(array('controller'=> 'proposals', 'action'=>'index'));
			//$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Upload was not deleted', true));
                 $this->redirect(array('controller'=> 'proposals', 'action'=>'index'));
		//$this->redirect(array('action' => 'index'));
	}

        function grantee_add() {
            if (!empty($this->data)) {
			$this->Upload->create();
			if ($this->Upload->save($this->data)) {
				$this->Session->setFlash(__('The upload has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The upload could not be saved. Please, try again.', true));
			}
		}
		$proposals = $this->Upload->Proposal->find('list');
		$this->set(compact('proposals'));
        }
        function grantee_edit($id = null) {
            if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid upload', true));
			//$this->redirect(array('action' => 'index'));
                        $this->redirect(array('controller'=> 'proposals', 'action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Upload->save($this->data)) {
				$this->Session->setFlash(__('The upload has been saved', true));
				//$this->redirect(array('action' => 'index'));
                                $this->redirect(array('controller'=> 'proposals', 'action'=>'index'));
			} else {
				$this->Session->setFlash(__('The upload could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Upload->read(null, $id);
		}
		$proposals = $this->Upload->Proposal->find('list');
		$this->set(compact('proposals'));
        }
        function grantee_index() {
            $this->Upload->recursive = 0;
		//$this->set('uploads', $this->paginate());
            $this->paginate = array('conditions'=>array('Upload.created_by' => ($this->Session->read('Auth.User.id'))));
                $this->set('uploads', $this->paginate('Upload'));
        }
        function grantee_view($id = null) {
            if (!$id) {
			$this->Session->setFlash(__('Invalid upload', true));
			//$this->redirect(array('action' => 'index'));
		}
		$this->set('upload', $this->Upload->read(null, $id));
        }
        function grantee_delete($id = null) {
            if (!$id) {
			$this->Session->setFlash(__('Invalid id for upload', true));
			$this->redirect(array('controller'=> 'proposals', 'action'=>'index'));
		}
		if ($this->Upload->delete($id)) {
			$this->Session->setFlash(__('Upload deleted', true));
			//$this->redirect(array('action'=>'index'));
                        $this->redirect(array('controller'=> 'proposals', 'action'=>'index'));
		}
		$this->Session->setFlash(__('Upload was not deleted', true));
                $this->redirect(array('controller'=> 'proposals', 'action'=>'index'));
		//$this->redirect(array('action' => 'index'));
        }
}
?>