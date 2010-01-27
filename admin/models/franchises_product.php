<?php
class FranchisesProduct extends AppModel {
	var $name = 'FranchisesProduct'; // php4 
	var $belongsTo = array(
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id'
		),
		'Franchise' => array(
			'className' => 'Franchise',
			'foreignKey' => 'franchise_id'
		)
	);
}
?>
