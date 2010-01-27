<?php
$inbox = ''; 
$send = '';
$list = '';
$create = '';
$category = '';
$image = '';
?>
<div class="grid_16">
<!-- TABS START -->
	<div id="tabs">
		<div class="container">
			<ul>
				<?php 
				if($session->params['controller'] == 'configs') { 
					if($session->params['action']=='inbox') {
						$inbox = 'current';
					} else if($session->params['action']=='sendbox') {
						$send = 'current';
					} else if($session->params['action']=='add') {
						$create = 'current';
					}
					echo "<li>" . $html->link( __('<span>Recebidor<span>', true), array( 'action'=>'inbox' ), array( 'class'=> $inbox, 'title'=>'Enviados' ), null, false ) . "</li>";
					echo "<li>" . $html->link( __('<span>Enviados<span>', true), array( 'action'=>'sendbox' ), array( 'class'=> $send, 'title'=>'recebidos' ), null, false ) . "</li>";
				}
				if($session->params['controller'] == 'contacts') { 
					if($session->params['action']=='inbox') {
						$inbox = 'current';
					} else if($session->params['action']=='sendbox') {
						$send = 'current';
					} else if($session->params['action']=='add') {
						$create = 'current';
					}
					echo "<li>" . $html->link( __( '<span>Recebidor</span>', true ), array( 'action'=>'inbox' ), array( 'class'=> $inbox, 'title'=>'Enviados' ), null, false ) . "</li>";
					echo "<li>" . $html->link( __( '<span>Enviados</span>', true ), array( 'action'=>'sendbox' ), array( 'class'=> $send, 'title'=>'recebidos' ), null, false ) . "</li>";
				} else {
					if( ( $session->params['action']=='index') && ( $session->params['controller'] != 'categories' ) && ( $session->params['controller'] != 'images_products' ) ) {
						$list = 'current';
					}
					if( ( $session->params['controller'] == 'categories' ) || ( $session->params['controller'] == 'images_products' ) || ( $session->params['controller'] == 'products' ) ) {
						echo "<li>" . $html->link( __( '<span>Listar</span>', true ), array( 'controller'=>'products', 'action'=>'index' ), array( 'class'=> $list, 'title'=>'Listar' ), null, false ) . "</li>";						
					} else {
						echo "<li>" . $html->link( __( '<span>Listar</span>', true ), array( 'action'=>'index' ), array( 'class'=> $list, 'title'=>'Listar' ), null, false ) . "</li>";
					}
				}
				if($session->params['action']=='add' || $session->params['action']=='edit') {
					$create = 'current';
				}			
				echo "<li>" . $html->link( __( '<span>Criar</span>', true ), array( 'action'=>'add' ), array( 'class'=> $create, 'title'=>'Criar' ), null, false ) . "</li>";
 
				if($session->params['controller'] == 'products' || $session->params['controller'] == 'categories' || $session->params['controller'] == 'images_products') { 
					if(($session->params['controller'] == 'categories') && ($session->params['action']=='index')) {
						$category = 'current';
					}
					echo "<li>" . $html->link( __( '<span>Categorias</span>', true ), array( 'controller'=>'categories', 'action'=>'index' ),array( 'class'=> $category, 'title'=>'Categorias' ), null, false ) . "</li>";
				}				
				
				echo "<li>" . $html->link( __( '<span>Ajuda</span>',true ), '#', array( 'class'=> 'more', 'title'=>'Ajuda' ), null, false) . "</li>";
				?>           
           </ul>
        </div>
    </div>
<!-- TABS END -->    
</div>
<!-- HIDDEN SUBMENU START -->
<div class="grid_16" id="hidden_submenu">
	Ajuda aqui!
</div>
<!-- HIDDEN SUBMENU END -->