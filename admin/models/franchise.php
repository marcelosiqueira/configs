<?php
class Franchise extends AppModel {
	var $name = 'Franchise'; // php4 
    var $hasAndBelongsToMany = array(
		'Product' => array('className' => 'Product',
			'joinTable' => 'franchises_products',
			'foreignKey' => 'product_id',
			'associationForeignKey' => 'franchise_id',
			'unique' => true
		)
    );
	var $validate = array(
		'name' => array(
			'rule' => 'notEmpty',
			'required' => true
		),
		'contact' => array(
			'rule' => 'notEmpty',
			'required' => true
		),
		'description' => array(
			'rule' => 'notEmpty',
			'required' => true
		),
		'phone' => array(
			'rule' => array('custom', '/^\(\d{2}\) ?\d{4}-\d{4}$/'),
			'required' => true	
		),
		'celphone' => array(
			'rule' => array('custom', '/^\(\d{2}\) ?\d{4}-\d{4}$/'),
			'required' => true		
		),
		'email' => array(
			'rule' => 'email',
			'required' => true		
		),
		'andress' => array(
			'rule' => 'notEmpty',
			'required' => true	
		),
		'number' => array(
			'rule' => 'notEmpty',
			'required' => true	
		),
		'district' => array(
			'rule' => 'notEmpty',
			'required' => true	
		),
		'city' => array(
			'rule' => 'notEmpty',
			'required' => true	
		),
		'state' => array(
			'rule' => array('inList', array('AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','SC','RR','SP','SE','TO')),
			'required' => true	
		),
		'postcodstart' => array(
			'rule' => array('custom', '/^\d{5}-\d{3}$/'),
			'required' => true		
		),
		'postcodend' => array(
			'rule' => array('custom', '/^\d{5}-\d{3}$/'),
			'required' => true		
		)		
	);
    

}
?>
