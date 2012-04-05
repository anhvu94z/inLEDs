<?php
App::uses('AppController', 'Controller');

class ProductsController extends AppController {
	
	function beforeFilter() {
		parent::beforeFilter();
		
	}
	
	public function index() {
		# List categories
		$this->loadModel('Category');
		$raw_categories = $this->Category->find('all',array(
			'order' => 'Category.order',
			));
		$categories = array();
		foreach ($raw_categories as $category) {
			array_push($categories,array(
				'name'  => $category['Category']['name'],
				'alias' => $category['Category']['alias'],
				'image' => (trim($category['Category']['image'])!="")?$category['Category']['id'] . "/" . $category['Category']['image']:"",
				));
		}
		$this->set('categories',$categories);
		# Find this page
		$category_id = 1;
		$args = func_get_args();
		if (isset($args[0])) {
			$arg = $args[0];
			if (is_numeric($arg))  { 
				$category_id = $arg;
			} else {
				$this_category = $this->Category->find('first',array(
					'conditions' => array('alias' => $arg),
					));
				if ($this_category['Category']['id']>0) $category_id = $this_category['Category']['id'];
			}
		}
		
		$category = $this->Category->find('first',array(
			'conditions' => array('id' => $category_id),
			));
			
		$this->set('category_name',$category['Category']['name']);		
		$this->set('category_description',$category['Category']['description']);
		$this->set('title_for_layout',"Products :: " . $category['Category']['name']);
		# Paginate products
		$this->Product->recursive = 0;
		/*$this->Paginator->settings = array(
			'limit' => 5,
			'maxLimit' => 100
		);*/
		$this->set('products', $this->Product->find('all',array(
			'conditions' => array('category_id' => $category_id),
			)));
	}
}
?>