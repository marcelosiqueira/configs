<?php
/* SVN FILE: $Id: app_controller.php 7945 2008-12-19 02:16:01Z gwoo $ */
/**
 * Short description for file.
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app
 * @since         CakePHP(tm) v 0.2.9
 * @version       $Revision: 7945 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2008-12-18 18:16:01 -0800 (Thu, 18 Dec 2008) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/**
 * Short description for class.
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppController extends Controller {

    public $helpers = array('Html', 'Javascript', 'Ajax');
	
	public $components = array('Auth', 'Cookie', 'RememberMe');
	
	var $uses = array('User');
 
	public function beforeFilter() {
		//Security::setHash('md5');
		$this->Auth->userModel 		= 'User'; // nome do seu modelo de usuario
		$this->Auth->fields 		= array('username' => 'username', 'password' => 'password');
		$this->Auth->loginAction    = array('controller' => 'users', 'action' => 'login');  
		$this->Auth->logoutRedirect = array('controller' => 'pages', 'action' => 'home');
		$this->Auth->userScope 		= array('User.status' => 1); // Somente user ativo  
		$this->Auth->loginError     = 'Login inválido.';  
		$this->Auth->authError      = 'Área restrita, por favor faça login.';  
		$this->Auth->authorize      = 'controller';  
		$this->Auth->autoRedirect   = false;
		$this->set('my_id', $this->Auth->user('id'));
		

		$this->RememberMe->check();   
	}
	function isAuthorized() {
		if (isset($this->params[Configure::read('Routing.admin')])) {
			if ($this->Auth->user('admin') == 0) {
				return false;
			}
		}
		return true;
   }	

}
?>