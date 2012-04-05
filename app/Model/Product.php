<?php
App::uses('AppModel', 'Model');
/**
 * Product Model
 *
 */
class Product extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'category_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
	);
}
