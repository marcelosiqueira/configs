<?php
class ProductsController extends AppController {
	var $name = 'Products';
	var $helpers = array('Html', 'Javascript', 'Form');
	var $uses = array('Product', 'Category', 'Franchise', 'FranchisesProduct');
	var $title = 'Produtos';
	
	function index() {
		$this->pageTitle = 'Produtos';	
		$this->Product->recursive = 0;
		$this->set('products', $this->paginate());
	}

	function add() {
		$this->pageTitle = 'Criar Produtos';
		$this->set("categories", 
			$this->Product->Category->find(
				"list", array(
					'fields' => array('Category.id', 'Category.name'), 
					'order' => 'Category.name ASC'
				)
			)
		);
		$this->set("franchises", 
			$this->Product->Franchise->find(
				"list", array(
					'fields' => array('Franchise.id', 'Franchise.name'), 
					'order' => 'Franchise.name ASC'
				)
			)
		);
		$this->set(compact('categories', 'franchises'));
				
		if (!empty($this->data)) {
			$this->Product->create();
			$this->data['Product']['handle'] = Inflector::slug(strtolower($this->data['Product']['name']), '-');
			if ($this->Product->save($this->data)) {
				$this->Session->setFlash(__('O Produto foi salvo.', true), 'flash_success');
				if (!empty($this->data['Product']['franchise1'])) { 
					foreach ($this->data['Product']['franchise1'] as $franq1):
						$this->Product->fp_del($franq, $this->Product->id);
					endforeach;
				}
				if (!empty($this->data['Product']['franchise2'])) { 
					foreach ($this->data['Product']['franchise2'] as $franq2):
						$this->Product->fp_add($franq2, $this->Product->id, $this->data['Product']['sell_price']);
					endforeach;
				}
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('O Produto não pôde ser salvo. Por favor, tente novamente.', true), 'flash_error');
			}
		}
	}

	function edit($id = null) {
		$this->pageTitle = 'Editar Produtos';
		$this->set("categories", 
			$this->Product->Category->find(
				"list", array(
					'fields' => array('Category.id', 'Category.name'),
					'order' => 'Category.name ASC'
				)
			)
		);

		$this->set("franchises1", 
			$this->Product->Franchise->find(
				"list", array(
					'conditions'  => 'Franchise.id NOT IN (SELECT franchises_products.franchise_id FROM franchises_products WHERE franchises_products.franchise_id=Franchise.id AND franchises_products.product_id='.$id.')', 			
					'fields' => array('Franchise.id', 'Franchise.name'),
					'order' => 'Franchise.name ASC'
				)
			)
		);
		$this->set("franchises2", 
			$this->Product->Franchise->find(
				"list", array(
					'conditions'  => 'Franchise.id IN (SELECT franchises_products.franchise_id FROM franchises_products WHERE franchises_products.franchise_id=Franchise.id AND franchises_products.product_id='.$id.')',
					'fields' => array('Franchise.id', 'Franchise.name'),
					'order' => 'Franchise.name ASC'
				)
			)
		);
		$this->set(compact('categories', 'franchises1', "franchises2"));
		
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Produto inválido.', true), 'flash_error');
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			$this->data['Product']['handle'] = Inflector::slug(strtolower($this->data['Product']['name']), '-');
			
			if ($this->Product->save($this->data)) {
				$this->Session->setFlash(__('O Produto foi salvo.', true), 'flash_success');
				if (!empty($this->data['Product']['franchise1'])) { 
					foreach ($this->data['Product']['franchise1'] as $franq1):
						$this->Product->fp_del($franq, $id);
					endforeach;
				}				
				if (!empty($this->data['Product']['franchise2'])) { 
					foreach ($this->data['Product']['franchise2'] as $franq2):
						$this->Product->fp_add($franq2, $id, $this->data['Product']['sell_price']);
					endforeach;
				}
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('O Produto não pôde ser salvo. Por favor, tente novamente.', true), 'flash_error');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Product->read(null, $id);
		}
	}

	function delete($id = null) {
		$this->pageTitle = 'Apagar Produtos';
		if (!$id) {
			$this->Session->setFlash(__('ID do Produto inválido.', true), 'flash_error');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Product->del($id)) {
			$this->Session->setFlash(__('O Produto foi apagado.', true), 'flash_success');
			$this->redirect(array('action'=>'index'));
		}
	}
}
?>