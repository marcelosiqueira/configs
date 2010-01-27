<?php
class FranchisesProductsController extends AppController {
	var $name = 'FranchisesProductas';
	var $helpers = array("Html", "Javascript", "Form");
	var $title = "Produtos";
	var $uses = array('FranchisesProduct','Product', 'Franchise');

	function index() {
		$this->pageTitle = "FranchisesProducts";	
		$this->FranchisesProduct->recursive = 0;
		$this->set('franchisesproducts', $this->paginate());
		$this->set('list', 'current');
		$this->set('create', '');
	}

	function add() {
		$this->pageTitle = 'Criar Produtos';
		$this->set('list', '');
		$this->set('create', 'current');
		$this->set("groups", 
			$this->FranchisesProduct->Product->find(
				"list", array(
					'fields' => array('Product.id', 'Product.name'), 
					'order' => 'Product.name ASC'
				)
			)
		);
		$this->set("franchises", 
			$this->FranchisesProduct->Franchise->find(
				"list", array(
					'fields' => array('Franchise.id', 'Franchise.name'), 
					'order' => 'Franchise.name ASC'
				)
			)
		);			
		if (!empty($this->data)) {
			$this->Product->create();
			if ($this->FranchisesProduct->save($this->data)) {
				$this->Session->setFlash(__('O Produto foi salvo.', true), 'flash_success');
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('O Produto não pôde ser salvo. Por favor, tente novamente.', true), 'flash_error');
			}
		}
	}

	function edit($id = null) {
		print_r($this->data);		
		$this->pageTitle = 'Editar Produtos';
		$this->set('list', '');
		$this->set('create', 'current');		
		$this->set("groups", 
			$this->FranchisesProduct->Product->find(
				"list", array(
					'fields' => array('Product.id', 'Product.name'), 
					'order' => 'Product.name ASC'
				)
			)
		);
		$this->set("franchises", 
			$this->FranchisesProduct->Franchise->find(
				"list", array(
					'fields' => array('Franchise.id', 'Franchise.name'), 
					'order' => 'Franchise.name ASC'
				)
			)
		);		
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Produto inválido.', true), 'flash_error');
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->FranchisesProduct->save($this->data)) {
				$this->Session->setFlash(__('O Produto foi salvo.', true), 'flash_success');
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('O Produto não pôde ser salvo. Por favor, tente novamente.', true), 'flash_error');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->FranchisesProduct->read(null, $id);
		}
	}

	function delete($id = null) {
		$this->pageTitle = 'Apagar Produtos';
		if (!$id) {
			$this->Session->setFlash(__('ID do Produto inválido.', true), 'flash_error');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->FranchisesProduct->del($id)) {
			$this->Session->setFlash(__('O Produto foi apagado.', true), 'flash_success');
			$this->redirect(array('action'=>'index'));
		}
	}
}
?>