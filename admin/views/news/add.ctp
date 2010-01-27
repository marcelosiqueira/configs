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
	  <h1 class="content_edit"><?php __( 'Criar Notícias' );?></h1>
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
			echo $form->create( 'News' );
						
			echo $form->input( 'title', array(
					'div' => 'input',
					'label' => array( 'text' => 'Título: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
			if ($form->isFieldError('title')){
				echo __('<p class="info" id="error"><span class="info_inner">Entre com o Título da Notícias</span></p>', false);
			}		
			
			echo $form->input( 'body', array( 
					'div' => 'textarea',
					'id' => 'wysiwyg',					
					'label' => array( 'text' => 'Descrição completa: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
			if ($form->isFieldError('body')){
				echo __('<p class="info" id="error"><span class="info_inner">Entre com a Descrição Completa da Notícia</span></p>', false);
			}			

			echo '<div class="input">';
			echo $form->label('Ativo:');
			echo $form->checkbox('News.active');
			echo '</div>';			
						
			echo $form->input( 'tags', array( 
					'div' => 'input',		
					'label' => array( 'text' => 'Tags: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
			echo $form->input( 'youtube', array( 
					'div' => 'input',		
					'label' => array( 'text' => 'Video no Youtube: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
			
		?>
		
		<a href="javascript:document.forms['NewsAddForm'].submit();" class="button"><span>Salvar</span></a>
		<?php echo $html->link( __( '<span>Listar Notícias</span>', true ), array( 'action'=>'index' ), array( 'class'=>'button', 'title'=>'Listar Notícias' ),null,false ); ?>
		
		<div class="clear"> </div>
	</div>
</div>   
