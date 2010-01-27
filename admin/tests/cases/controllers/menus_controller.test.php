<?php 
/* SVN FILE: $Id$ */
/* MenusController Test cases generated on: 2010-01-24 19:01:10 : 1264373170*/
App::import('Controller', 'Menus');

class TestMenus extends MenusController {
	var $autoRender = false;
}

class MenusControllerTest extends CakeTestCase {
	var $Menus = null;

	function startTest() {
		$this->Menus = new TestMenus();
		$this->Menus->constructClasses();
	}

	function testMenusControllerInstance() {
		$this->assertTrue(is_a($this->Menus, 'MenusController'));
	}

	function endTest() {
		unset($this->Menus);
	}
}
?>