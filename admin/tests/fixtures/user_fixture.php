<?php 
/* SVN FILE: $Id$ */
/* User Fixture generated on: 2009-11-23 16:11:57 : 1259000517*/

class UserFixture extends CakeTestFixture {
	var $name = 'User';
	var $table = 'users';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'name' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'username' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'password' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 32),
		'email' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'type' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 1),
		'reset' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 64),
		'lastlogin' => array('type'=>'timestamp', 'null' => true, 'default' => 'CURRENT_TIMESTAMP'),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'name'  => 'Lorem ipsum dolor sit amet',
		'username'  => 'Lorem ipsum dolor sit amet',
		'password'  => 'Lorem ipsum dolor sit amet',
		'email'  => 'Lorem ipsum dolor sit amet',
		'type'  => 'Lorem ipsum dolor sit ame',
		'reset'  => 'Lorem ipsum dolor sit amet',
		'lastlogin'  => 'Lorem ipsum dolor sit amet',
		'created'  => '2009-11-23 16:21:57',
		'modified'  => '2009-11-23 16:21:57'
	));
}
?>