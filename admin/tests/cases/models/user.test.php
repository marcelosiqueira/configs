<?php 
/* SVN FILE: $Id$ */
/* User Test cases generated on: 2009-11-23 16:11:57 : 1259000517*/
App::import('Model', 'User');

class UserTestCase extends CakeTestCase {
	var $User = null;
	var $fixtures = array('app.user');

	function startTest() {
		$this->User =& ClassRegistry::init('User');
	}

	function testUserInstance() {
		$this->assertTrue(is_a($this->User, 'User'));
	}

	function testUserFind() {
		$this->User->recursive = -1;
		$results = $this->User->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('User' => array(
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
		$this->assertEqual($results, $expected);
	}
}
?>