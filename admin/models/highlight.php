<?php
class Highlight extends AppModel {
	var $name = "Highlight"; // php4
	var $validate = array(
		'name' => array(
			'rule' => 'notEmpty',
			'required' => true
	    ),
		'type' => array(
			'rule' => 'notEmpty',
			'required' => true
		)
	);
}
?>
