<?php
class NoticiasController extends AppController{
	var $name = "Noticias";
	var $layout = null;
	var $uses = 'News';
	var $helpers = array("Html");
	var $title = "Notícias";
	
	function ler($id = null){
		$this->pageTitle = 'Ler Notícias';
		$this->set('news', $this->News->read(null, $id));
	}	
} 
?>