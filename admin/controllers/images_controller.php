<?php
class ImagesController extends AppController {
	var $name = 'Images';
	var $helpers = array('Html', 'Javascript', 'Session');
	var $title = 'Imagens de Produtos';
	var $components = array('SwfUpload', 'Upload');

	function index() {
		$this->pageTitle = 'Imagens de Produtos';	
		$this->Image->recursive = 0;
		$this->set('images', $this->paginate());		
	}

	function add() {
		if ( !empty( $this->params['named'] ) ) {
			$val1 = array_keys( $this->params['named'] );
			$val2 = array_values( $this->params['named'] );
			$this->set( 'table', $val1[0] );
			$this->set( 'id', $val2[0] );
		} else {
			$this->set( 'item', 'S' );
		}
	}
	
	function view() {
		if ( !empty( $this->params['named'] ) ) {
			$val1 = array_keys( $this->params['named'] );
			$val2 = array_values( $this->params['named'] );
			$this->set( 'table', $val1[0] );
			$this->set( 'id', $val2[0] );
		}
		
	}	

    function beforeFilter() {
        if ( $this->action == 'upload' ) {
	        if( isset( $_POST[Configure::read('Session.cookie')] ) ) {
				$this->Session->id( $_POST[Configure::read( 'Session.cookie' )] );
			}
            $this->Session->start();
        }
        parent::beforeFilter();
    }

	function upload() {
		if ( !empty( $this->params['named'] ) ) {
			$val1 = array_keys( $this->params['named'] );
			if ( $val1[0] == 'product' ) {$val1[1] = 'images_products';} elseif ( $val1[0] == 'franchise' ) {$val1[1] = 'franchises_images';} 
			$val2 = array_values( $this->params['named'] );
		}

		if ( $val1[0] == 'product' ) {
			$photo = explode( ";", $this->uploadImg( $this->params['form']['Filedata'], 343 ) );
			$this->uploadImg( $this->params['form']['Filedata'], 110, 'large_'. $photo['2'] );
			$this->uploadImg( $this->params['form']['Filedata'], 74,  'medium_' . $photo['2'] );
			$this->uploadImg( $this->params['form']['Filedata'], 37,  'small_' . $photo['2'], 'S' );
		} elseif ( $val1[0] == 'franchise' ) {
			$photo = explode( ";", $this->uploadImg( $this->params['form']['Filedata'], 370 ) );
			$this->uploadImg( $this->params['form']['Filedata'], 46, 'small_' . $photo['2'], 'S' );
		} 			
		
		
		if ( $this->params['form']['Filedata']['name'] ) {
			$this->Image->create();
        	$this->data['Image']['filename'] = $photo['0'];
        	$this->data['Image']['dir'] 	 = 'uploads/images/';
        	$this->data['Image']['mimetype'] = $photo['1'];
        	$this->data['Image']['filesize'] = $this->params['form']['Filedata']['size'];  
        	if ( $this->Image->save( $this->data ) ) {
	        		
				$this->set( 'lastId', $this->Image->getInsertId() );
				$this->set( 'arquivo', $this->params['form']['Filedata']['name'] );
				$this->Image->img_add( $val1[1], $val1[0], $this->Image->getInsertId(), $val2[0] );
        	}
		}
		$this->_stop(500);
	}
	
	private function uploadImg( $image, $w, $imgName='', $clean='' ){
		$this->Upload->upload( $image );
		if ( $imgName == '' ) { $imgName = date( 'dmY_Hms' ); }
		$imgDir = ROOT . '/app/webroot/uploads/images/';
		$this->Upload->file_new_name_body   = $imgName;
		$this->Upload->image_resize         = true;
		$this->Upload->image_x              = $w;
		$this->Upload->image_ratio_y        = true;
		$this->Upload->allowed = array( 'image/jpeg', 'image/jpg', 'image/gif', 'image/png' );
		$this->Upload->process( $imgDir );
		if ( $this->Upload->processed ) {
			if ( $clean !='' ) {
				$this->Upload->clean();
			}
		} else {
			$this->erro = $this->Upload->error;
		}
		return $imgName.".".$this->Upload->file_src_name_ext.";".$this->Upload->file_src_mime.";".$imgName;
	}
		
	function delete($id = null) {
		if ( !empty($this->params['named'] ) ) {
			$val1 = array_keys($this->params['named']);
			if ( $val1[0] == 'product' ) {$val1[1] = 'images_products';} elseif ( $val1[0] == 'franchise' ) {$val1[1] = 'franchises_images';} 
			$val2 = array_values( $this->params['named'] );
		}		
		$this->pageTitle = 'Apagar Imagem';
		if ( !$id ) {
			$this->Session->setFlash( __( 'ID da Imagem inválido', true ), 'flash_error' );
			$this->redirect ( array( 'action'=>'index' ) );
		}
		if ( $this->Image->del( $val2[0] ) ) {
			$this->Image->img_add( $val1[0], $val1[1], $val2[0] );
			$this->Session->setFlash( __( 'A Imagem apagado', true ), 'flash_success' );
			$this->redirect( array( 'action'=>'index' ) );
		}
	}

}
?>