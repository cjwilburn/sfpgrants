<?php
class DashboardsController extends AppController {

	var $name = 'Dashboards';
	var $components = array('Auth', 'Security', 'Cookie');
	var $helpers = array('Html', 'Time');

	function isAuthorized() {
    	switch($this->action) {
    		//case 'admin_reports':
    		case 'admin_index':
	            if ($this->Auth->user('type') == 'admin') {
	                return true;
	            } else {
	                return false;
	            }
	    	break;
	    	default:
	    		return true;
	    	break;
        }
        	switch($this->action) {
    		//case 'board_reports':
    		case 'board_index':
	            if ($this->Auth->user('type') == 'board') {
	                return true;
	            } else {
	                return false;
	            }
	    	break;
	    	default:
	    		return true;
	    	break;
        }

        	switch($this->action) {
    		//case 'chair_reports':
    		case 'chair_index':
	            if ($this->Auth->user('type') == 'chair') {
	                return true;
	            } else {
	                return false;
	            }
	    	break;
	    	default:
	    		return true;
	    	break;
        }

        	switch($this->action) {
    		//case 'general_reports':
    		case 'general_index':
	            if ($this->Auth->user('type') == 'general') {
	                return true;
	            } else {
	                return false;
	            }
	    	break;
	    	default:
	    		return true;
	    	break;
        }
        	switch($this->action) {
    		//case 'grantee_reports':
    		case 'grantee_index':
	            if ($this->Auth->user('type') == 'grantee') {
	                return true;
	            } else {
	                return false;
	            }
	    	break;
	    	default:
	    		return true;
	    	break;
        }
        	switch($this->action) {
    		//case 'large_reports':
    		case 'large_index':
	            if ($this->Auth->user('type') == 'large') {
	                return true;
	            } else {
	                return false;
	            }
	    	break;
	    	default:
	    		return true;
	    	break;
        }
        	switch($this->action) {
    		//case 'small_reports':
    		case 'small_index':
	            if ($this->Auth->user('type') == 'small') {
	                return true;
	            } else {
	                return false;
	            }
	    	break;
	    	default:
	    		return true;
	    	break;
        }
    }
        function index() {
            $this->set('first_name', $this->Auth->user('first_name'));
		$last_login = $this->Cookie->read('User.last_login');		
         $this->set('last_login', $this->Auth->user('last_login'));
        }


	function admin_index() {		
		$this->set('first_name', $this->Auth->user('first_name'));
		$last_login = $this->Cookie->read('User.last_login');		
		$this->set('last_login', $this->Auth->user('last_login'));
	}
		
	function admin_reports() {
	}

        function board_index() {
                $this->set('first_name', $this->Auth->user('first_name'));
		$last_login = $this->Cookie->read('User.last_login');
		$this->set('last_login', $this->Auth->user('last_login'));
        }

        function chair_index() {
                $this->set('first_name', $this->Auth->user('first_name'));
		$last_login = $this->Cookie->read('User.last_login');
		$this->set('last_login', $this->Auth->user('last_login'));
        }

        function general_index() {
                $this->set('first_name', $this->Auth->user('first_name'));
		$last_login = $this->Cookie->read('User.last_login');
		$this->set('last_login', $this->Auth->user('last_login'));
        }

        function grantee_index() {
                $this->set('first_name', $this->Auth->user('first_name'));
		$last_login = $this->Cookie->read('User.last_login');
		$this->set('last_login', $this->Auth->user('last_login'));
        }

        function large_index() {
                $this->set('first_name', $this->Auth->user('first_name'));
		$last_login = $this->Cookie->read('User.last_login');
		$this->set('last_login', $this->Auth->user('last_login'));
        }

        function small_index() {
                $this->set('first_name', $this->Auth->user('first_name'));
		$last_login = $this->Cookie->read('User.last_login');
		$this->set('last_login', $this->Auth->user('last_login'));
        }
}

?>
