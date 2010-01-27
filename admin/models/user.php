<?php
class User extends AppModel {
	
	var $name = 'User';
	var $belongsTo = array(
		'Franchise' => array(
			'className' => 'Franchise',
			'foreignKey' => 'franchise_id'
		)
	);	
	var $validate = array(
		'name' => array(
			    'rule' => 'notEmpty',
			'required' => true
		),
		'username' => array(
			    'rule' => 'alphaNumeric',
			'required' => true
		),		
	    'password' => array(	
			    'rule' => 'notEmpty',
			'required' => true
		),
		'npassword' => array(
        		'rule' => array('identicalFieldValues', 'password'),  
			'required' => true
		),		
		'email' => array(
			    'rule' => 'email',
			'required' => true		
		),
		'type' => array(
			    'rule' => array('inList', array('1', '2', '3')),
			'required' => true		
		)	
	);
}
?>