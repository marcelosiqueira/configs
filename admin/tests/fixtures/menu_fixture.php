<?php 
/* SVN FILE: $Id$ */
/* Menu Fixture generated on: 2010-01-24 19:01:55 : 1264373155*/

class MenuFixture extends CakeTestFixture {
	var $name = 'Menu';
	var $table = 'menus';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'title' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'body' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'localte' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 1),
		'active' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 1),
		'file' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'title'  => 'Lorem ipsum dolor sit amet',
		'body'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'localte'  => 1,
		'active'  => 1,
		'file'  => 'Lorem ipsum dolor sit amet',
		'created'  => '2010-01-24 19:45:55',
		'modified'  => '2010-01-24 19:45:55'
	));
}
?>