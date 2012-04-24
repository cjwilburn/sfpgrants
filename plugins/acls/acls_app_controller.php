<?php
/**
 * ACL Management Plugin
 *
 * @copyright     Copyright 2010, Joseph B Crawford II
 * @link          http://www.jbcrawford.net
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
class AclsAppController extends AppController {
    var $helpers = array(
        'Html',
        'Form',
        'Session',
    );
    
    function beforeFilter() {
        foreach($this->components as $key => $value) {
            if (is_numeric($key)) {
                $components[] = $value;
            } else {
                $components[] = $key;
            }
        }
        if (!in_array('Auth', $components)) {
            die('The AuthComponent is not enabled in your AppController.');
        }
        if (!isset($this->Auth->actionPath)) {
            die('The AuthComponent actionPath variable is not set in your AppController.');
        }
        if (!in_array('Acl', $components)) {
            die('The AclComponent is not enabled in your AppController.');
        }
        if (!in_array('Session', $components)) {
            die('The SessionComponent is not enabled in your AppController.');
        }
        parent::beforeFilter();
        $rootNode = $this->Acl->Aco->find('first', array('conditions' => array('parent_id' => null, 'alias' => $this->Auth->actionPath)));
        if (empty($rootNode)) {
            $this->Acl->Aco->create(array('parent_id' => null, 'alias' => $this->Auth->actionPath));
            $this->Acl->Aco->save();
        }
    }
}
?>
