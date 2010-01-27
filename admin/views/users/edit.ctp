<script type="text/javascript" src="<?php echo $html->url('/js/wysiwyg/jquery.wysiwyg.js') ?>"></script>	
<script type="text/javascript">
$(document).ready(function() {
	$('#wysiwyg').wysiwyg();
});
</script> 

<div class="grid_16" id="content">
	<!-- CONTENT TITLE -->
	<div class="grid_9">
	  <h1 class="content_edit"><?php __( 'Editar Usuário' );?></h1>
	</div>
	<!-- CONTENT TITLE RIGHT BOX -->
	<div class="grid_6" id="eventbox"><!-- <a href="#" class="inline_tip">Here would come a small tip of using this admin</a> --></div>
	<div class="clear"> </div>
	<!--    TEXT CONTENT OR ANY OTHER CONTENT START     -->
	<div class="grid_15" id="textcontent">
	
	<?php 
	
					if($session->check('Message.flash')) {
						$session->flash();
					}
	
					echo $form->create( 'User' );
	
					echo $form->input( 'id' );	
					
					echo $form->input( 'name', array(
								'div' => 'input',
								'label' => array( 'text' => 'Nome: '),
								'error' => false,
								'class' => 'largeInput wide'
							) 
					);
					if ($form->isFieldError('name')){
						echo __('<p class="info" id="error"><span class="info_inner">Entre com o nome do Usuário</span></p>', false);
					}
					
					echo $form->input( 'username', array( 
								'div' => 'input',		
								'label' => array( 'text' => 'Login: ' ), 
								'error' => false,				
								'class' => 'largeInput wide' 
							) 
					);
					if ($form->isFieldError('username')){
						echo __('<p class="info" id="error"><span class="info_inner">Entre com o login do Usuário</span></p>', false);
					}
									
					echo $form->input( 'password', array( 
								'div' => 'input',		
								'label' => array( 'text' => 'Senha: ' ),
								'error' => false,
								'value'	=> false,		 
								'class' => 'largeInput wide' 
							) 
					);
					if ($form->isFieldError('password')){
						echo __('<p class="info" id="error"><span class="info_inner">Senhas deve ter minimo 6 caracteres</span></p>', false);
					}
									
					echo $form->input( 'npassword', array( 
								'div' => 'input',		
								'label' => array( 'text' => 'Redigite a Senha:' ),
								'error' => false,
								'class' => 'largeInput wide', 'type' => 'password'
							) 
					);
					if ($form->isFieldError('npassword')){
						echo __('<p class="info" id="error"><span class="info_inner">Senhas difetente</span></p>', false);
					}
									
					echo $form->input( 'email', array( 
								'div' => 'input',		
								'label' => array( 'text' => 'E-mail: ' ),
								'error' => false,
								'class' => 'largeInput wide' 
							) 
					);
					if ($form->isFieldError('email')){
						echo __('<p class="info" id="error"><span class="info_inner">Entre com o E-mail do Usuário</span></p>', false);
					}
					
					echo $form->input( 'type', array( 
								'div' => 'input',
								'label' => array( 'text' => 'Tipo: ' ), 
								'class' => 'largeInput',
								'error' => false,
								'empty' => 'Escolha o Tipo de Usuário',					
								'options' => array(			
									'1'=>'Administrador Geral',
									'2'=>'Franquiado - Administrador',
									'3'=>'Franquiado - Usuário' 
								)
							)
					);
					if ($form->isFieldError('type')){
						echo __('<p class="info" id="error"><span class="info_inner">Informe o tipo de Usuário</span></p>', false);
					}

					echo $form->input( 'franchise_id', array( 
							'div' => 'input',
							'label' => array( 'text' => 'Franquia: ' ),
					 		'error' => false,
							'class' => 'largeInput wide', 
							'empty' => 'Escolha as Franquias desse Usuário',
							'options' => $franchises
						)
					);
					if ($form->isFieldError('franchise_id')){
						echo __('<p class="info" id="error"><span class="info_inner">Entre com as Franquia desse Usuário</span></p>', false);
					}	
					
		?>
	
	<a href="javascript:document.forms['UserEditForm'].submit();" class="button"><span>Salvar</span></a>
	<?php echo $html->link( __( '<span>Listar Usuário</span>', true ), array( 'action'=>'index' ), array( 'class'=>'button', 'title'=>'Listar Usuário' ),null,false ); ?>
	<?php echo $html->link( __( '<span>Apagar</span>', true), array( 'action'=>'delete', $form->value( 'User.id' ) ), array( 'class'=>'button', 'title'=>'Listar Usuário' ), sprintf( __( 'Tem certeza de que deseja apagar # %s?', true ), $form->value( 'User.id' ) ),false ); ?>
	
	<div class="clear"></div>
	</div>
</div>