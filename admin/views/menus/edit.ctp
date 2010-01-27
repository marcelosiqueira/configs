<?php echo $html->css('wysiwyg/jquery.wysiwyg'); ?>
<?php echo $javascript->link('wysiwyg/jquery.wysiwyg'); ?>
<script type="text/javascript">
$(document).ready(function() {
	$('#wysiwyg').wysiwyg();
});
</script> 
<div class="grid_16" id="content">
	<!-- CONTENT TITLE -->
	<div class="grid_9">
	  <h1 class="content_edit"><?php __( 'Criar Menus' );?></h1>
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
			echo $form->create( 'Menu', array('type' => 'file') );

			echo $form->input( 'id' );
			echo $form->input( 'title', array(
					'div' => 'input',
					'label' => array( 'text' => 'Título do Menu: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
			if ($form->isFieldError('title')){
				echo __('<p class="info" id="error"><span class="info_inner">Entre com o Título do Menu</span></p>', false);
			}		
			
			echo $form->input( 'body', array( 
					'div' => 'textarea',
					'id' => 'wysiwyg',					
					'label' => array( 'text' => 'Texto que irá aparece ao abri o Menu: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
			if ($form->isFieldError('body')){
				echo __('<p class="info" id="error"><span class="info_inner">Entre com o Texto que irá aparece ao abri o Menu</span></p>', false);
			}			

			echo $form->input( 'locate', array( 
					'div' => 'input',
					'label' => array( 'text' => 'Area ou Local em que o Menu aparecerá: ' ), 
					'error' => false,			
					'class' => 'largeInput', 
					'options' => array(
						''=>'Escolha o local do Menu',	
						'1'=>'Como ser um franqueado',
						'2'=>'Quem somos'
					)
				)
			);
			if ($form->isFieldError('locate')){
				echo __('<p class="info" id="error"><span class="info_inner">Informe Area ou Local em que o Menu aparecerá</span></p>', false);
			}
			
			echo '<div class="input">';
			echo $form->label('Ativo:');
			echo $form->checkbox('Menu.active');
			echo '</div>';			

			echo $form->input( 'file', array( 
					'div' => 'input',		
					'label' => array( 'text' => 'Imagem para o Texto: ' ),
					'type' => 'file', 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
			
		?>
		
		<a href="javascript:document.forms['MenuEditForm'].submit();" class="button"><span>Salvar</span></a>
		<?php echo $html->link( __( '<span>Listar Menus</span>', true ), array( 'action'=>'index' ), array( 'class'=>'button', 'title'=>'Listar Menus' ), null, false ); ?>
		
		<div class="clear"> </div>
	</div>
</div>