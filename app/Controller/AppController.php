<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * This is a placeholder class.
 * Create the same file in app/Controller/AppController.php
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       Cake.Controller
 * @link http://book.cakephp.org/view/957/The-App-Controller
 */
class AppController extends Controller {
	function beforeFilter() {
		// Find the module
		$controller = $this->request->params['controller'];
		if (isset($this->request->params['pass'][0])) $pass = $this->request->params['pass'][0];
		
		$this->loadModel('Module');
		if (isset($pass)&&$controller=='pages') {
			$module = $this->Module->find('first',array(
				'conditions' => array(
					'controller' => $controller,
					'pass'		 => $pass,
				),
			));			
		} else {
			$module = $this->Module->find('first',array('conditions'=>array('controller'=>$controller)));
		}
		// Set title, keywords, descriptions,stylesheets and scripts
		$this->set('title_for_layout',$module['Module']['meta_title']);
		$this->set('meta_keywords',$module['Module']['meta_keywords']);
		$this->set('meta_description',$module['Module']['meta_description']);
		$this->set('stylesheets',explode(", ",$module['Module']['stylesheets']));
		$this->set('scripts',explode(", ",$module['Module']['scripts']));
		// Set navigation elements
		$nav_modules = $this->Module->findAllByOnNav(1);
		$navs = array();
		foreach ($nav_modules as $nav_module) {
			if ($this->request->params['controller']==$nav_module['Module']['controller']) continue;
			$url = $this->webroot . $nav_module['Module']['controller'];
			if ($nav_module['Module']['pass']!='') $url .= '/' . $nav_module['Module']['pass'];
			$navs[$nav_module['Module']['meta_title']] = $url;
			
		}
		$this->set('navs',$navs);
	}
}
