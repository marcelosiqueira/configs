<?php
class PagesController extends AppController{
	var $name = "Pages";
	var $layout = "client";
	var $uses = array('News', 'Highlights');
	var $helpers = array("Html", "Javascript", "Form", "Text");
	var $title = "Home";
	var $components = array('Twitter');	
	
	function home(){
		$this->pageTitle = "Home";	
		
		//Slideshow
		$this->set('slideshow', $this->Highlights->find('all', array('conditions' => array('type' => '1'))));

		//Destaques
		$this->set('destaque', $this->Highlights->find('all', array('conditions' => array('type' => '2'), 'limit' => 3)));		
		
		//Twitter
		$this->Twitter->username = 'amarildoricci';
        $this->Twitter->password = '265862';
		$feed = $this->Twitter->statuses_user_timeline();
		//$feed = $this->Twitter->statuses_friends_timeline();
		
		//Notícias
		$this->set('feed', $feed);
		$this->set('news', $this->News->findAll());
		
		
	}
	
	function lojas(){
		$this->pageTitle = "Lojas";	
		
	}
	
	
	function contato(){
		$this->pageTitle = "Contato";	
		
		
	}

	
} 




?>