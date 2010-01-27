<?php 
/* SVN FILE: $Id$ */
/* Menu Test cases generated on: 2010-01-24 19:01:55 : 1264373155*/
App::import('Model', 'Menu');

class MenuTestCase extends CakeTestCase {
	var $Menu = null;
	var $fixtures = array('app.menu');

	function startTest() {
		$this->Menu =& ClassRegistry::init('Menu');
	}

	function testMenuInstance() {
		$this->assertTrue(is_a($this->Menu, 'Menu'));
	}

	function testMenuFind() {
		$this->Menu->recursive = -1;
		$results = $this->Menu->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Menu' => array(
			'id'  => 1,
			'title'  => 'Lorem ipsum dolor sit amet',
			'body'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'localte'  => 1,
			'active'  => 1,
			'file'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2010-01-24 19:45:55',
			'modified'  => '2010-01-24 19:45:55'
		));
		$this->assertEqual($results, $expected);
	}
}
?>