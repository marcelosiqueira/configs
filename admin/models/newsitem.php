<?php
class NewsItem extends AppModel {
	var $name = 'NewsItem'; // php4
	var $validate = array(
		'title' => array(
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