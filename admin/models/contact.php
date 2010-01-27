<?php
class Contact extends AppModel {
	var $name = 'Contact'; // php4
	var $belongsTo = array(
		'Franchise' => array(
			'className' => 'Franchise',
			'foreignKey' => 'franchise_id_to'
		),
		'Franchise' => array(
			'className' => 'Franchise',
			'foreignKey' => 'franchise_id_from'
		)
	);
	var $validate = array(
		'subject' => array(
			'rule' => 'notEmpty',
			'required' => true		
		),	
		'body' => array(
			'rule' => 'notEmpty',
			'required' => true
		)		
	);
}
?>
