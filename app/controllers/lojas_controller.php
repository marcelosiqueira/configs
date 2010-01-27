<?php
class LojasController extends AppController{
	var $name = "Lojas";
	var $layout = "client";
	var $uses = array( 'Franchise', 'Product', 'Image' );
	var $helpers = array( 'Html', 'Javascript', 'Map' );
	var $title = "Lojas";
	
	function index(){
	
	}
	
	function lojas_especificas( $id = null ){
		$this->set('lojas', $this->Franchise->findAllByState( $id ) );
	}

	function sobre( $id = null ) {
		if (!$id) {
			$this->Session->setFlash( __( 'Loja inválida', true ) );
			$this->redirect( array( 'action'=>'index' ) );
		}
		$this->set( 'lojas', $this->Franchise->read( null, $id ) );
		
		$this->set( 'lojasFotos', 
			$this->Image->find(
				'all', array(
					'conditions'  => 'Image.id IN ( SELECT franchises_images.image_id FROM franchises_images WHERE franchises_images.franchise_id='.$id.' )', 			
					'fields' => array( 'Image.dir', 'Image.filename' ),
					'order' => 'Image.filename ASC'
				)
			)
		);

		$this->set( 'produtosFotos', 
			$this->Image->find(
				'all', array(
					'conditions'  => 'Image.id IN ( 
						SELECT  images_products.image_id FROM images_products WHERE images_products.product_id IN (
							SELECT  franchises_products.product_id FROM franchises_products WHERE  franchises_products.franchise_id = '.$id.' 
						)
					)', 			
					'joins' => array(
						array(
							'table' => 'products', 
							'type' => 'INNER',
							'alias' => 'Product',
							'conditions' => 'Product.id IN (
								SELECT  images_products.product_id FROM images_products WHERE images_products.product_id IN (
									SELECT  franchises_products.product_id FROM franchises_products WHERE  franchises_products.franchise_id = '.$id.' 
								)							
							)'
						)
					),
					'fields' => array( 'Image.filename', 'Product.id', 'Product.name', 'Product.handle' )
				)
			)
		);          		
		
		$this->set( compact( 'lojas', 'lojasFotos', 'produtosFotos' ) );
	}
	
} 
?>