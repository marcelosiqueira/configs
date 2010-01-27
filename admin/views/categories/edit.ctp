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
	  <h1 class="content_edit"><?php __( 'Editar Categoria' );?></h1>
	</div>
	<!-- CONTENT TITLE RIGHT BOX -->
	<div class="grid_6" id="eventbox"></div>
	<div class="clear"> </div>
	<!--    TEXT CONTENT OR ANY OTHER CONTENT START     -->
	<div class="grid_15" id="textcontent">
     
		<?php
			if($session->check('Message.flash')) {
				$session->flash();
			}
			echo $form->create( 'Category' );
			
			echo $form->input( 'id' );
			echo $form->input( 'name', array(
					'div' => 'input',
					'label' => array( 'text' => 'Nome: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
			if ($form->isFieldError('name')){
				echo __('<p class="info" id="error"><span class="info_inner">Entre com o Nome do Produto</span></p>', false);
			}			
			
			echo $form->input( 'description', array( 
					'div' => 'textarea',
					'id' => 'wysiwyg',
					'label' => array( 'text' => 'Descrição resumida: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
			if ($form->isFieldError('description')){
				echo __('<p class="info" id="error"><span class="info_inner">Entre com a Descrição Resumida do Produto</span></p>', false);
			}			
			
			echo $form->label('Ativo:');
			echo $form->checkbox('Category.active');
			echo __('Sim');
						
			echo $form->input( 'tags', array( 
					'div' => 'input',		
					'label' => array( 'text' => 'Tags: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
		?>
		
		<a href="javascript:document.forms['CategoryEditForm'].submit();" class="button"><span>Salvar</span></a>
		<?php echo $html->link( __( '<span>Listar Categorias</span>', true ), array( 'action'=>'index' ), array( 'class'=>'button', 'title'=>'Listar Categorias' ),null,false ); ?>
		
		<div class="clear"> </div>
	</div>
</div>   
