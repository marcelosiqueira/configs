<?php
class ContactsController extends AppController {
	var $name = 'Contacts';
	var $uses = array( 'Contact', 'Franchise' );
	var $helpers = array( 'Html', 'Javascript', 'Form', 'Session' );
	var $title = 'Contatos';

	function index() {
		$this->redirect( array( 'action'=>'inbox' ) );
	}

	function inbox() {
		$this->pageTitle = "Contatos Recebidos";
		$this->Contact->recursive = 0;
    	$this->paginate = array( 'conditions' => array( 'Contact.franchise_id_from =' => $_SESSION['Auth']['User']['franchise_id'] ) );
    	$contacts = $this->paginate( 'Contact' );
    	$this->set( compact( 'contacts' ) );
	}
	
	function sendbox() {
		$this->pageTitle = "Contatos Enviados";
		$this->Contact->recursive = 0;
    	$this->paginate = array( 'conditions' => array( 'Contact.franchise_id_to =' => $_SESSION['Auth']['User']['franchise_id'] ) );
    	$contacts = $this->paginate( 'Contact' );
    	$this->set( compact( 'contacts' ) );
	}
	
	function add() {
		$this->pageTitle = 'Criar Contatos';
		$this->set("franchises", 
			$this->Contact->Franchise->find(
				"list", array(
					'fields' => array('Franchise.id', 'Franchise.name'), 
					'order' => 'Franchise.name ASC'
				)
			)
		);
		$this->set( compact( 'franchises' ) );
		if (!empty($this->data)) {
			$franchises = $this->Contact->Franchise->read('name', $_SESSION['Auth']['User']['franchise_id']);
			$this->data['Contact']['name'] = $franchises['Franchise']['name'];
			$this->data['Contact']['franchise_id_from'] = $_SESSION['Auth']['User']['franchise_id'];
			$this->Contact->create();
			if ($this->Contact->save($this->data)) {
				$this->Session->setFlash(__('A Contato foi salvo', true), 'flash_success');
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('A Contato não pôde ser salvo. Por favor, tente novamente.', true), 'flash_error');
			}
		}
	}

	function view($id = null) {
		$this->pageTitle = 'Ver Contatos';
		if (!$id) {
			$this->Session->setFlash(__('Contatos inválido.', true), 'flash_warning');
			$this->redirect(array('action'=>'index'));
		}
		$this->data['Contact']['view'] = 1;
		$this->Contact->save($this->data);
		$this->set('contact', $this->User->read(null, $id));
	}	
	
	function delete($id = null) {
		$this->pageTitle = 'Apagar Contatos';
		if (!$id) {
			$this->Session->setFlash(__('ID do Contato inválido', true), 'flash_warning');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Contact->del($id)) {
			$this->Session->setFlash(__('A Contato foi apagado', true), 'flash_success');
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>