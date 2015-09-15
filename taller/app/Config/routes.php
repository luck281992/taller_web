<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	
	Router::connect('/', array('controller' => 'posts', 'action' =>  'index'));
	Router::connect('/servicios', array('controller' => 'posts', 'action' =>  'index_servicios'));
	Router::connect('/herreria', array('controller' => 'posts', 'action' =>  'index_herreria'));
	Router::connect('/soldadura', array('controller' => 'posts', 'action' =>  'index_soldadura'));
	Router::connect('/torno', array('controller' => 'posts', 'action' =>  'index_torno'));
	Router::connect('/localizanos', array('controller' => 'pages', 'action' => 'display', 'localizanos'));
	Router::connect('/conocenos', array('controller'=> 'pages', 'action' => 'display', 'conocenos'));
	Router::connect('/contactos', array('controller' => 'Contactos', 'action' =>  'add'));
	Router::connect('/contactos/admin', array('controller' => 'Contactos','action' => 'admin_index'));
    Router::connect('/servicios/admin', array('controller' => 'posts', 'action' =>  'admin_index'));
	
	
	//Router::connect('/agregar', array('controller' => 'posts', 'action' => 'admin_add'));
	//Router::connect('/editar', array('controller' => 'posts', 'action' => 'edit', ));
	//Router::connect('/index', array('controller' => 'posts', 'action' => 'view'));
    //Router::connect('/:editar/:id',array('action' => 'edit'),array('id' => '[0-9]+'));
    //Router::connect('/:mostrar/:id',array('action' => 'view'),array('id' => '[0-9]+'));
	
	
	/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	//Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
