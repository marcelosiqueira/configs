<?php
class UsersController extends AppController {  
	var $name = 'Users';
	var $uses = array('User', 'Franchise');
	var $helpers = array('Html', 'Javascript', 'Form', 'Session');
	var $title = 'Usuários';

	function login()  {
		$this->pageTitle = 'Login';
		$this->layout = 'login';

		if (!$this->Auth->user()) {  
			return;  
		}  
 
		if (empty($this->data)) {  
			$this->redirect($this->Auth->redirect());  
		}  
  
		if (empty($this->data['User']['remember_me'])) {  
			$this->RememberMe->delete();  
		} else {  
			$this->RememberMe->remember  
			(  
				$this->data['User']['username'],  
				$this->data['User']['password']  
			);  
		}  
   
		unset($this->data['User']['remember_me']);  
		$this->redirect($this->Auth->redirect());  
	}  
  
	function logout() {  
		$this->RememberMe->delete();  
		$this->redirect($this->Auth->logout());  
	}  

	function checkLogin($username, $passhash) {  
		$user = $this->find(array('username' => $username, 'password' => $passhash), array(), null, 0);  
		
		if ($user) {  
			$this->data = $user;  
			$this->id = $user['User']['id'];  
			return true;  
		}  
		return false;  
	}
	
	function beforeFilter () {
		// executa o beforeFilter do AppController
		parent::beforeFilter();
		// adicione ao método allow as actions que quer permitir sem o usuário estar logado
		$this->Auth->allow('login');
	}

	function index() {
		$this->pageTitle = 'Usuários';
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function view($id = null) {
		$this->pageTitle = 'Ver Usuários';
		if (!$id) {
			$this->Session->setFlash(__('Usuário inválido.', true), 'flash_error');
			$this->redirect(array('action'=>'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
		$this->pageTitle = 'Criar Usuários';
		$this->set("franchises", 
			$this->User->Franchise->find(
				"list", array(
					'fields' => array('Franchise.id', 'Franchise.name'), 
					'order' => 'Franchise.name ASC'
				)
			)
		);
		$this->set(compact('franchises'));

		if (!empty($this->data)) {
			$tmp = $this->User->findByUserName($this->data["User"]["username"]); 

			if(!empty($tmp)) { 
				$this->Session->setFlash(__('Usuário já existente. Por favor, tente novamente.', true), 'flash_error');
				$this->redirect(array('action'=>'add')); 
			} else {
				$this->User->create();
				if ($this->User->save($this->data)) {
					$this->Session->setFlash(__('O Usuário foi salvo.', true), 'flash_success');
					$this->redirect(array('action'=>'index'));
				} else {
					$this->Session->setFlash(__('O Usuário não pôde ser salvo. Por favor, tente novamente.', true), 'flash_error');
				}
			}
		}
	}

	function edit($id = null) {
		$this->pageTitle = 'Editar Usuários';
		$this->set("franchises", 
			$this->User->Franchise->find(
				"list", array(
					'fields' => array('Franchise.id', 'Franchise.name'), 
					'order' => 'Franchise.name ASC'
				)
			)
		);
		$this->set(compact('franchises'));	
				
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Usuário inválido.', true), 'flash_error');
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('O Usuário foi salvo.', true), 'flash_success');
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('O Usuário não pôde ser salvo. Por favor, tente novamente.', true), 'flash_error');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
	}

	function delete($id = null) {
		$this->pageTitle = 'Apagar Usuários.';
		if (!$id) {
			$this->Session->setFlash(__('ID do Usuário inválido.', true), 'flash_error');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->del($id)) {
			$this->Session->setFlash(__('O Usuário foi apagado.', true), 'flash_success');
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>