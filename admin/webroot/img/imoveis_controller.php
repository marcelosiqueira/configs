<?php

class ImoveisController extends AppController {

	var $name = 'Imoveis';
	var $uses = array('Photo');
	var $components = array('SwfUpload');
	var $helpers = array('Javascript', 'Session');

	function beforeFilter() {
		if ($this->action == 'upload') {
			$this->Session->start();
		}
		parent::beforeFilter();
	}

	function upload($id = null) {
		if ($id && $this->SwfUpload->upload()) {
			$this->Photo->create();
			$this->Photo->save(array('Photo' => array('building_id' => $id, 'arquivo' => $this->SwfUpload->filename, 'descricao' => '')));

			$this->layout = 'ajax';
			Configure::write('debug', 0);
			$this->set('lastId', $this->Photo->getInsertId());
			$this->set('arquivo', $this->SwfUpload->filename);
		}
		$this->_stop(500);
	}

}

?>