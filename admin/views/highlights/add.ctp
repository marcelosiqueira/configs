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
	  <h1 class="content_edit"><?php __( 'Criar Publicidade' );?></h1>
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
		
			echo $form->create( 'Highlight', array('type' => 'file') );				
				
			echo $form->input( 'name', array(
					'div' => 'input',
					'label' => array( 'text' => 'Titulo da Publicidade ou Nome da Empresa: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
			if ($form->isFieldError('name')){
				echo __('<p class="info" id="error"><span class="info_inner">Entre com o Nome do Destaque</span></p>', false);
			}

			echo $form->input( 'body', array( 
					'div' => 'textarea',
					'id' => 'wysiwyg',
					'label' => array( 'text' => 'Descrição da Publicidade: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
			if ($form->isFieldError('body')){
				echo __('<p class="info" id="error"><span class="info_inner">Entre com a Descrição do Destaque</span></p>', false);
			}

			echo $form->input( 'link', array( 
					'div' => 'input',		
					'label' => array( 'text' => 'Endereço da Web (link): ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
						
			echo $form->input( 'type', array( 
					'div' => 'input',
					'label' => array( 'text' => 'Area ou Bloco em que a Publicidade aparecerá: ' ), 
					'error' => false,			
					'class' => 'largeInput', 
					'options' => array(
						''=>'Escolha a area da Publicidade',	
						'1'=>'Pagina Inicial - Slide Show 843x230',
						'2'=>'Pagina Inicial - Imagens destaque 269x227',
						'3'=>'Cardápio inerativo - Slide Show 577x229',
						'4'=>'Cardápio inerativo - Imagens destaque 285x238'
					)
				)
			);
			if ($form->isFieldError('type')){
				echo __('<p class="info" id="error"><span class="info_inner">Informe Area ou Bloco em que a Publicidade aparecerá</span></p>', false);
			}
			
			echo $form->input( 'file', array( 
					'div' => 'input',		
					'label' => array( 'text' => 'Imagem: ' ),
					'type' => 'file', 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
			
			echo $form->input( 'datestart', array( 
					'div' => 'textarea',
					'label' => array( 'text' => 'Inicia em: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
			if ($form->isFieldError('datestart')){
				echo __('<p class="info" id="error"><span class="info_inner">Data e Hora em que as exibições irá começar a Publicidade</span></p>', false);
			}
			
			echo $form->input( 'dateend', array( 
					'div' => 'textarea',
					'label' => array( 'text' => 'Finaliza em: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
			if ($form->isFieldError('datestart')){
				echo __('<p class="info" id="error"><span class="info_inner">Data e Hora em que as exibições irá terminar a Publicidade</span></p>', false);
			}
		?>
	
		<a href="javascript:document.forms['HighlightAddForm'].submit();" class="button"><span>Salvar</span></a>
		<?php echo $html->link( __( '<span>Listar Publicidades</span>', true ), array( 'action'=>'index' ), array( 'class'=>'button', 'title'=>'Listar Publicidades' ), null, false ); ?>
	 
		<div class="clear"> </div>
	</div>
</div>