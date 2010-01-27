<?php
class ConfigsController extends AppController {
	var $name = 'Configs';
	var $helpers = array('Html', 'Javascript', 'Form');
	var $uses = null;
	var $title = 'Configs';
	
	function index() {
		$this->pageTitle = 'Produtos';	
	}

	function add() {
		$this->pageTitle = 'Criar Produtos';
	}

	function edit($id = null) {
		$this->pageTitle = 'Editar Produtos';

		
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