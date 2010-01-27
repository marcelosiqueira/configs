<?php
class CardapioController extends AppController{
	var $name = "Cardapio";
	var $layout = "client";
	var $uses = array('Product', 'Category', 'Highlights', 'Image');
	var $helpers = array("Html", "Javascript", "Form");
	var $title = "Cardápio";
	
	function index(){
		$this->set('categorias', $this->Category->findAll());
		
		//Slideshow
		$this->set('slideshow', $this->Highlights->find( 'all', array( 'conditions' => array( 'type' => '3' ) ) ) );

		//Destaques
		$this->set('destaque', $this->Highlights->find( 'all', array( 'conditions' => array( 'type' => '4' ), 'limit' => 4 ) ) );			
	}
	
	function produtos($id = null){
		$this->set('categorias', $this->Category->findAll());
		if (!is_null($id)) {
			$this->Product->bindModel( array( 
				'hasAndBelongsToMany' => array(
					'Image' => array( 'className' => 'Image',
						'joinTable' => 'images_products',
						'foreignKey' => 'product_id',
						'associationForeignKey' => 'image_id',
            			'fields' => 'filename, dir', 
            			'limit' => '1' 
					) )
				)
			);
			$this->set( 'produtos', $this->Product->find( 'all', array( 
					'conditions'=>array( 'Product.category_id' => $id, 'Product.active' => '1' ),
			 		'fields'=>array( 'Product.id', 'Product.handle' ,'Product.name') ) )
			);
			
			$this->set( compact( 'produtos' ) );			
		}
	}
	
	function produto_detalhe($id = null){
		$this->set( 'categorias', $this->Category->findAll() );
		if ( !is_null($id) ) {
			$this->Product->bindModel( array( 
				'hasAndBelongsToMany' => array(
					'Franchise' => array( 'className' => 'Franchise',
						'joinTable' => 'franchises_products',
						'foreignKey' => 'product_id',
						'associationForeignKey' => 'franchise_id',
            			'fields' => 'id, name, handle '
					) )
				)
			);
			$this->set( 'produtos', 
				$this->Product->find( 'first', array( 
					'conditions' => array( 'id' => $id ) ) 
				)
			);

			$this->set( 'produtoFoto', 
				$this->Image->find(
					'first', array(
						'conditions'  => 'Image.id IN ( SELECT images_products.image_id FROM images_products WHERE images_products.product_id='.$id.' )', 			
						'fields' => array( 'Image.filename' ),
						'limit' => '1'
					)
				)
			);
			
			$this->set( 'produtosFotos', 
				$this->Image->find(
					'all', array(
						'conditions'  => 'Image.id IN ( SELECT images_products.image_id FROM images_products WHERE images_products.product_id='.$id.' )', 			
						'fields' => array( 'Image.dir', 'Image.filename' ),
						'order' => 'Image.filename ASC'
					)
				)
			);
			
			$this->set( compact( 'produtos', 'produtoFoto', 'produtosFotos' ) );
		}
		$this->set( compact( 'categorias' ) );
	}
	
	function novo_endereco(){
		$this->set('categorias', $this->Category->findAll());
	}
	
	
}
?>