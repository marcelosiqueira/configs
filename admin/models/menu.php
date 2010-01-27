<?php
class Menu extends AppModel {
	var $name = 'Menu'; // php4
	var $validate = array(
		'title' => array(
			'rule' => 'notEmpty',
			'required' => true
		),		
		'body' => array(
			'rule' => 'notEmpty',
			'required' => true
		),
		'locate' => array(
			'rule' => 'notEmpty',
			'required' => true
		)		
	);
}
?>