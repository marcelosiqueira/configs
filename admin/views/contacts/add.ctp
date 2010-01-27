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
	  <h1 class="content_edit"><?php __( 'Criar Contato' );?></h1>
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
			echo $form->create( 'Contact' );
						
			echo $form->input( 'franchise_id_to', array( 
					'div' => 'input',
					'label' => array( 'text' => 'Para a Franquia: ' ),
			 		'error' => false,
					'class' => 'largeInput wide', 
					'empty' => 'Escolha as Franquias para essa Mensagem',
					'options' => $franchises 
				)
			);
			if ($form->isFieldError('franchise_id_to')){
				echo __('<p class="info" id="error"><span class="info_inner">Entre com a Franquia que receberá essa Mensagem</span></p>', false);
			}
			
			echo $form->input( 'subject', array( 
					'div' => 'input',		
					'label' => array( 'text' => 'Assunto: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
			if ($form->isFieldError('subject')){
				echo __('<p class="info" id="error"><span class="info_inner">Entre com o seu Assunto</span></p>', false);
			}

			echo $form->input( 'body', array( 
					'div' => 'textarea',
					'id' => 'wysiwyg',
					'label' => array( 'text' => 'Mensagem: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
			if ($form->isFieldError('body')){
				echo __('<p class="info" id="error"><span class="info_inner">Entre com a sua Mensagem</span></p>', false);
			}			
			
		?>
		
		<a href="javascript:document.forms['ContactAddForm'].submit();" class="button"><span>Salvar</span></a>
		<?php echo $html->link( __( '<span>Listar Contatos</span>', true ), array( 'action'=>'index' ), array( 'class'=>'button', 'title'=>'Listar Contatos' ),null,false ); ?>
		
		<div class="clear"> </div>
	</div>
</div>