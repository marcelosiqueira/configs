<?php
class CategoriesController extends AppController {
	var $name = 'Categories';
	var $helpers = array("Html", "Javascript", "Form");
	var $title = "Categorias de Produtos";

	function index() {
		$this->pageTitle = "Categorias de Produtos";	
		$this->Category->recursive = 0;
		$this->set('categories', $this->paginate());		
	}

	function add() {
		$this->pageTitle = 'Criar Categorias de Produtos';
		if (!empty($this->data)) {
			$this->Category->create();
			$this->data['Category']['handle'] = Inflector::slug(strtolower($this->data['Category']['name']), "-");
			if ($this->Category->save($this->data)) {
				$this->Session->setFlash(__('A Categoria do Produto foi salvo', true), 'flash_success');
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('A Categoria do Produto não pôde ser salvo. Por favor, tente novamente.', true), 'flash_error');
			}
		}
	}

	function edit($id = null) {
		$this->pageTitle = 'Editar Categorias de Produtos';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Categoria de Produtos inválido', true), 'flash_warning');
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			$this->data['Category']['handle'] = Inflector::slug(strtolower($this->data['Category']['name']), "-");
			if ($this->Category->save($this->data)) {
				$this->Session->setFlash(__('A Categoria de Produtos foi salvo', true), 'flash_success');
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('A Categoria de Produtos não pôde ser salvo. Por favor, tente novamente.', true), 'flash_error');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Category->read(null, $id);
		}
	}

	function delete($id = null) {
		$this->pageTitle = 'Apagar Categorias de Produtos';
		if (!$id) {
			$this->Session->setFlash(__('ID da Categoria de Produtos inválido', true), 'flash_error');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Category->del($id)) {
			$this->Session->setFlash(__('A Categoria de Produtos foi apagado', true), 'flash_success');
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>