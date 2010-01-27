<?php
class HighlightsController extends AppController {
	var $name = 'Highlights';
	var $helpers = array("Html", "Javascript", "Form");
	var $title = "Destaques";

	function index() {
		$this->pageTitle = "Destaques";	
		$this->Highlight->recursive = 0;
		$this->set('highlights', $this->paginate());		
	}

	function add() {
		$this->pageTitle = 'Criar Destaques';
		if (!empty($this->data)) {
			$this->Highlight->create();
			$this->data['Highlight']['handle'] = Inflector::slug(strtolower($this->data['Highlight']['name']), "-");
			if ($this->Highlight->save($this->data)) {
				$this->Session->setFlash(__('O Destaque foi salvo', true), 'flash_success');
				//Upload
				$val = $this->data['Highlight']['file'];
				if ((isset($val['error']) && $val['error'] == 0) || (!empty($val['tmp_name']) && $val['tmp_name'] != 'none')) {
					$filename = date('dmYHis') . '_' . $this->Highlight->getLastInsertId() . '_' . str_replace(' ', '_', $val['name']);
					$url = CAKE_CORE_INCLUDE_PATH . '/app/webroot/uploads/highlight/' . $filename;
					
					if (move_uploaded_file($val['tmp_name'], $url)) {
						$this->Session->setFlash(__('Arquivo enviado com sucesso!', true), 'flash_success');
						//Update sql picture
						$this->Highlight->saveField('picture', $filename);
					} else {
						$this->Session->setFlash(__('Erro com a pasta, tente novamente!', true), 'flash_success');
					}
				} else {
					$this->Session->setFlash(__('Erro ao enviar o arquivo, tente novamente!', true), 'flash_success');
				}				
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('O Destaque não pôde ser salvo. Por favor, tente novamente.', true), 'flash_error');
			}
		}
	}

	function edit($id = null) {
		$this->pageTitle = 'Editar Destaques';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Destaque inválido', true), 'flash_warning');
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			$this->data['Highlight']['handle'] = Inflector::slug(strtolower($this->data['Highlight']['name']), "-");

			if ($this->Highlight->save($this->data)) {
				//Upload
				$val = $this->data['Highlight']['file'];
				if ((isset($val['error']) && $val['error'] == 0) || (!empty($val['tmp_name']) && $val['tmp_name'] != 'none')) {
					$filename = date('dmYHis') . '_' . $id . '_' . str_replace(' ', '_', $val['name']);
					$url = CAKE_CORE_INCLUDE_PATH . '/app/webroot/uploads/highlight/' . $filename;
					
					if (move_uploaded_file($val['tmp_name'], $url)) {
						$this->Session->setFlash(__('Arquivo enviado com sucesso!', true), 'flash_success');
						//Update sql picture
						$this->Highlight->saveField('picture', $filename);
												
					} else {
						$this->Session->setFlash(__('Erro com a pasta, tente novamente!', true), 'flash_success');
					}
				} else {
					$this->Session->setFlash(__('Erro ao enviar o arquivo, tente novamente!', true), 'flash_success');
				}			
				$this->Session->setFlash(__('O Destaque foi salvo', true), 'flash_success');
				//$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('O Destaque não pôde ser salvo. Por favor, tente novamente.', true), 'flash_error');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Highlight->read(null, $id);
		}
	}

	function delete($id = null) {
		$this->pageTitle = 'Apagar Destaque';
		if (!$id) {
			$this->Session->setFlash(__('ID do Destaque inválido', true), 'flash_error');
			$this->redirect(array('action'=>'index'));
		}

		$val = array_shift($this->Highlight->find($id));
		if (!empty($val['picture'])) {
		  @unlink( CAKE_CORE_INCLUDE_PATH . '/app/webroot/uploads/highlight/' . $val['picture'] );	
		}
		
		if ($this->Highlight->del($id)) {
			$this->Session->setFlash(__('O Destaque foi apagado', true), 'flash_success');
			$this->redirect(array('action'=>'index'));
		}
	}	
}
?>