<?php
class NewsController extends AppController {
	var $name = 'News';
	var $helpers = array( 'Html', 'Javascript', 'Form' );
	var $title = "Notícias";

	function index() {
		$this->pageTitle = 'Notícias';	
		$this->News->recursive = 0;
		$this->set( 'news', $this->paginate() );		
	}

	function add() {
		$this->pageTitle = 'Criar Notícias';			
		if ( !empty( $this->data ) ) {
			$this->News->create();
			$this->data['News']['handle'] = Inflector::slug( strtolower( $this->data['News']['title'] ), "-" );
			if ( $this->News->save( $this->data ) ) {
				$this->Session->setFlash( __( 'A Notícia foi salvo', true ), 'flash_success' );
				$this->redirect( array( 'action'=>'index' ) );
			} else {
				$this->Session->setFlash( __( 'A Notícia não pôde ser salvo. Por favor, tente novamente.', true ), 'flash_error' );
			}
		}
	}

	function edit( $id = null ) {
		$this->pageTitle = 'Editar Notícias';
		if ( !$id && empty( $this->data ) ) {
			$this->Session->setFlash( __( 'Notícia inválido', true ), 'flash_warning' );
			$this->redirect( array( 'action'=>'index' ) );
		}
		if ( !empty( $this->data ) ) {
			$this->data['News']['handle'] = Inflector::slug( strtolower( $this->data['News']['title'] ), "-" );			
			if ( $this->News->save( $this->data ) ) {
				$this->Session->setFlash( __( 'O Notícia foi salvo', true ), 'flash_success' );
				$this->redirect( array( 'action'=>'index' ) );
			} else {
				$this->Session->setFlash( __( 'O Notícia não pôde ser salvo. Por favor, tente novamente.', true ), 'flash_error' );
			}
		}
		if ( empty( $this->data ) ) {
			$this->data = $this->News->read( null, $id );
		}
	}

	function delete( $id = null ) {
		$this->pageTitle = 'Apagar Notícias';
		if ( !$id ) {
			$this->Session->setFlash( __( 'ID do Notícia inválido', true ), 'flash_warning' );
			$this->redirect( array( 'action'=>'index' ) );
		}
		if ( $this->News->del( $id ) ) {
			$this->Session->setFlash( __( 'A Notícia foi apagado', true ), 'flash_success' );
			$this->redirect( array( 'action'=>'index' ) );
		}
	}

}
?>