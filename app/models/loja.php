<?php
class Lojas extends AppModel {

	var $name = 'Loja'; // php4 
    var $hasAndBelongsToMany = array(
		'Product' => array('className' => 'Product',
			'joinTable' => 'franchises_products',
			'foreignKey' => 'product_id',
			'associationForeignKey' => 'franchise_id',
			'unique' => true
		)
    );
    
}
?>
