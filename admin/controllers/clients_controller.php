<?php
class ClientsController extends AppController {
	var $name = 'Clients';
	var $helpers = array("Html", "Javascript", "Form");
	var $title = "Clientes";	

	function index() {
		$this->pageTitle = "Clientes";	
		$this->Client->recursive = 0;
		$this->set('clients', $this->paginate());
	}

	function add() {
		$this->pageTitle = 'Criar Clientes';
		if (!empty($this->data)) {
			$this->Client->create();
			if ($this->Client->save($this->data)) {
				$this->Session->setFlash(__('O Cliente foi salvo', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('O Cliente não pôde ser salvo. Por favor, tente novamente.', true), 'flash_error');
			}
		}
	}

	function edit($id = null) {
		$this->pageTitle = 'Editar Clientes';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Cliente inválido', true), 'flash_error');
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Client->save($this->data)) {
				$this->Session->setFlash(__('O Cliente foi salvo', true), 'flash_success');
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('O Cliente não pôde ser salvo. Por favor, tente novamente.', true), 'flash_error');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Client->read(null, $id);
		}
	}

	function delete($id = null) {
		$this->pageTitle = 'Apagar Clientes';
		if (!$id) {
			$this->Session->setFlash(__('ID do Cliente inválido', true), 'flash_error');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Client->del($id)) {
			$this->Session->setFlash(__('O Cliente foi apagado', true), 'flash_success');
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>