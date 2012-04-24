<?php
/**
 * Routes Configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
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
 * @subpackage    cake.app.config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/views/pages/home.ctp)...
 */
	//Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'index'));

/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

        Router::connect('/user/:controller/:action/*', array('action' => null, 'prefix' => 'user', 'user' => true));
        Router::connect('/small/:controller/:action/*', array('action' => null, 'prefix' => 'small', 'small' => true));
        Router::connect('/large/:controller/:action/*', array('action' => null, 'prefix' => 'large', 'large' => true));
        Router::connect('/general/:controller/:action/*', array('action' => null, 'prefix' => 'general', 'general' => true));
        Router::connect('/board/:controller/:action/*', array('action' => null, 'prefix' => 'board', 'board' => true));
        Router::connect('/grantee/:controller/:action/*', array('action' => null, 'prefix' => 'grantee', 'grantee' => true));
        Router::connect('/chair/:controller/:action/*', array('action' => null, 'prefix' => 'chair', 'chair' => true));
