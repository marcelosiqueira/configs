<?php
class ImagesProduct extends AppModel {
	var $name = 'ImagesProduct'; // php4 
	var $belongsTo = array(
		'Franchise' => array(
			'className' => 'Franchise',
			'foreignKey' => 'franchise_id'
		)
	);
}
?>
