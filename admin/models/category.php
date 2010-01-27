<?php
class Category extends AppModel {
	var $name = "Category"; // php4
	var $actsAs = array('Tree');
	var $hasMany = array(
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'category_id'
		)
	);	       
	var $validate = array(
		'name' => array(
			'rule' => array('maxLength', 255),
			'required' => true,
			'allowEmpty' => false,
			'message' => 'Entre com a Categoria do Produto',
	    ),
	);
}
?>
