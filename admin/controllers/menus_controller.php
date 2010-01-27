<?php
class MenusController extends AppController {
	var $name = 'Menus';
	var $helpers = array( 'Html', 'Javascript', 'Form' );
	var $title = "Menus";

	function index() {
		$this->pageTitle = 'Menus';	
		$this->Menu->recursive = 0;
		$this->set( 'menus', $this->paginate() );		
	}

	function add() {
		$this->pageTitle = 'Criar Menus';			
		if ( !empty( $this->data ) ) {
			$this->Menu->create();
			//$this->data['Menu']['handle'] = Inflector::slug( strtolower( $this->data['Menu']['title'] ), "-" );
			if ( $this->Menu->save( $this->data ) ) {
				$this->Session->setFlash( __( 'O Menu foi salvo', true ), 'flash_success' );
				//Upload
				$val = $this->data['Menu']['file'];
				if ((isset($val['error']) && $val['error'] == 0) || (!empty($val['tmp_name']) && $val['tmp_name'] != 'none')) {
					$filename = date('dmYHis') . '_' . $this->Highlight->getLastInsertId() . '_' . str_replace(' ', '_', $val['name']);
					$url = CAKE_CORE_INCLUDE_PATH . '/app/webroot/uploads/menus/' . $filename;
					
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
				$this->redirect( array( 'action'=>'index' ) );
			} else {
				$this->Session->setFlash( __( 'O Menu não pôde ser salvo. Por favor, tente novamente.', true ), 'flash_error' );
			}
		}
	}

	function edit( $id = null ) {
		$this->pageTitle = 'Editar Menus';
		if ( !$id && empty( $this->data ) ) {
			$this->Session->setFlash( __( 'Notícia inválido', true ), 'flash_warning' );
			$this->redirect( array( 'action'=>'index' ) );
		}
		if ( !empty( $this->data ) ) {
			//$this->data['Menus']['handle'] = Inflector::slug( strtolower( $this->data['Menus']['title'] ), "-" );			
			if ( $this->Menu->save( $this->data ) ) {
				$this->Session->setFlash( __( 'O Menu foi salvo', true ), 'flash_success' );
				//Upload
				$val = $this->data['Menu']['file'];
				if ((isset($val['error']) && $val['error'] == 0) || (!empty($val['tmp_name']) && $val['tmp_name'] != 'none')) {
					$filename = date('dmYHis') . '_' . $this->Highlight->getLastInsertId() . '_' . str_replace(' ', '_', $val['name']);
					$url = CAKE_CORE_INCLUDE_PATH . '/app/webroot/uploads/menus/' . $filename;
					
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
				$this->redirect( array( 'action'=>'index' ) );
			} else {
				$this->Session->setFlash( __( 'O Menu não pôde ser salvo. Por favor, tente novamente.', true ), 'flash_error' );
			}
		}
		if ( empty( $this->data ) ) {
			$this->data = $this->Menu->read( null, $id );
		}
	}

	function delete( $id = null ) {
		$this->pageTitle = 'Apagar Menus';
		if ( !$id ) {
			$this->Session->setFlash( __( 'ID do Notícia inválido', true ), 'flash_warning' );
			$this->redirect( array( 'action'=>'index' ) );
		}
		if ( $this->Menu->del( $id ) ) {
			$this->Session->setFlash( __( 'O Menu foi apagado', true ), 'flash_success' );
			$this->redirect( array( 'action'=>'index' ) );
		}
	}

}
?>