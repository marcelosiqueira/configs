<?php
class FranchisesController extends AppController {
	var $name = 'Franchises';
	var $helpers = array("Html", "Javascript", "Form");
	var $uses = array('Franchise', 'Product', 'FranchisesProduct');	
	var $title = "Franquias";
	//Login
	var $components = array('Auth'); 	

	function index() {
		$this->pageTitle = "Franquias";
		$this->Franchise->recursive = 0;
		$this->set('franchises', $this->paginate());	
	}

	function add() {
		$this->pageTitle = 'Criar Franquias';
		$this->set("products1", 
			$this->Franchise->Product->find(
				"list", array(
					'fields' => array('Product.id', 'Product.name'),
					'order' => 'Product.name ASC'
				)
			)
		);		
		if (!empty($this->data)) {
			$this->Franchise->create();
			$this->data['Franchise']['handle'] = Inflector::slug(strtolower($this->data['Franchise']['name']), "-");
			if ($this->Franchise->save($this->data)) {
				$this->Session->setFlash(__('A Franquia foi salvo.', true), 'flash_success');
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('A Franquia não pôde ser salvo. Por favor, tente novamente.', true), 'flash_error');
			}
		}
	}

	function edit($id = null) {
		$this->pageTitle = 'Editar Franquias';
		$this->set("products1", 
			$this->Franchise->Product->find(
				"list", array(
					'conditions'  => 'Product.id NOT IN (SELECT franchises_products.product_id FROM franchises_products WHERE franchises_products.product_id=Product.id AND franchises_products.franchise_id='.$id.')', 			
					'fields' => array('Product.id', 'Product.name'),
					'order' => 'Product.name ASC'
				)
			)
		);
		$this->set("products2", 
			$this->Franchise->Product->find(
				"list", array(
					'conditions'  => 'Product.id IN (SELECT franchises_products.product_id FROM franchises_products WHERE franchises_products.product_id=Product.id AND franchises_products.franchise_id='.$id.')', 			
					'fields' => array('Product.id', 'Product.name'),
					'order' => 'Product.name ASC'
				)
			)
		);
				
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Franquia inválida', true), 'flash_warning');
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			$this->data['Franchise']['handle'] = Inflector::slug(strtolower($this->data['Franchise']['name']), "-"); 
			if ($this->Franchise->save($this->data)) {
				$this->Session->setFlash(__('A Franquia foi salvo', true), 'flash_success');
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('A Franquia não pôde ser salvo. Por favor, tente novamente.', true), 'flash_error');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Franchise->read(null, $id);
		}
	}

	function delete($id = null) {
		$this->pageTitle = 'Apagar Franquias';
		if (!$id) {
			$this->Session->setFlash(__('ID do Franquia inválido.', true), 'flash_warning');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Franchise->del($id)) {
			$this->Session->setFlash(__('O Franquia foi apagado.', true), 'flash_success');
			$this->redirect(array('action'=>'index'));
		}
	}
}
?>