<?php
class ImagesProduct extends AppModel {
	var $name = 'ImagesProduct'; // php4 
	var $belongsTo = array(
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id'
		)
	);
}
?>
