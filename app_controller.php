<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppController extends Controller {
     var $components = array('Acl', 'Auth', 'Session', 'RequestHandler', 'Email', 'Otp', 'Cookie', 'Ticketmaster','DebugKit.Toolbar');
     var $helpers = array('Html', 'Form', 'Session', 'Js', 'Time', 'FileUpload.FileUpload');

    //function beforeFilter() {
        //Configure AuthComponent
        //$this->Auth->authorize = 'actions';
        //$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        //$this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
        //$this->Auth->loginRedirect = array('controller' => 'dashboards', 'action' => 'index');
        //$this->Auth->actionPath = 'controllers/';
        //$this->Auth->allowedActions = array('display');

    //}

     function beforeFilter() {
        //tell Auth to call the isAuthorized function before allowing access
        $this->Auth->authorize = 'actions';
        $this->Auth->authorize = 'controller';
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
        //$this->Auth->loginRedirect = array('controller' => 'dashboards', 'action' => 'index');
        $this->Auth->autoRedirect  = false;
        $this->Auth->actionPath = 'controllers/';
        $this->Auth->allowedActions = array('display');
        //$this->FileUpload->massSave = true;

        //allow all non-logged in users access to items without a prefix
        //if( !isset($this->params['prefix'])) $this->Auth->allow('*');
    }

    function isAuthorized() {
        //if the prefix is setup, make sure the prefix matches their role
        if( isset($this->params['prefix']))
            return (strcasecmp($this->params['prefix'],$this->Auth->user('type'))===0);

        //shouldn't get here, better be safe than sorry
        return false;
    }
//}
}
