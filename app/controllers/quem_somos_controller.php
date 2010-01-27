<?php
class QuemSomosController extends AppController{
	var $name = "QuemSomos";
	var $layout = "client";
	var $uses = array( 'Menu' );
	var $helpers = array("Html", "Javascript", "Form");
	var $title = "Quem Somos";
	
	function index(){
		$this->set('historico', $this->Menu->findAllById('1') );		
		$this->set('menus', $this->Menu->findAllByLocate('2') );
	}
	
	function menu($id = null){
		$this->set('historico', $this->Menu->findAllById($id) );		
		$this->set('menus', $this->Menu->findAllByLocate('2') );
	}
} 




?>