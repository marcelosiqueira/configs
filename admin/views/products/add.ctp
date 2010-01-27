<?php echo $html->css('wysiwyg/jquery.wysiwyg'); ?>
<?php echo $javascript->link('wysiwyg/jquery.wysiwyg'); ?>
<?php echo $javascript->link('select'); ?>
<?php echo $javascript->link('jquery.selso'); ?>
<script type="text/javascript">
$(document).ready(function() {
	$('#wysiwyg').wysiwyg();
	$('#wysiwyg1').wysiwyg();
	$('#wysiwyg2').wysiwyg();	
});
</script> 
<div class="grid_16" id="content">
	<!-- CONTENT TITLE -->
	<div class="grid_9">
	  <h1 class="content_edit"><?php __( 'Criar Produto' );?></h1>
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
			echo $form->create( 'Product' );

			echo $form->input( 'codtoca', array(
					'div' => 'input',
					'label' => array( 'text' => 'Codigo interno: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
			if ($form->isFieldError('codtoca')){
				echo __('<p class="info" id="error"><span class="info_inner">Entre com o codigo interno do Produto</span></p>', false);
			}
			
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
			
			echo $form->input( 'body', array( 
					'div' => 'textarea',
					'id' => 'wysiwyg1',					
					'label' => array( 'text' => 'Descrição completa: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);		

			echo $form->input( 'calory', array( 
					'div' => 'textarea',
					'id' => 'wysiwyg2',					
					'label' => array( 'text' => 'Calorias: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);			
			
			echo '<div class="input">';
			echo $form->label('Ativo:');
			echo $form->checkbox('active');
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

			echo $form->input( 'sell_price', array( 
					'div' => 'input',
					'label' => array( 'text' => 'Preço de venda: ' ),
			 		'error' => false,
					'class' => 'largeInput wide'
				)
			);
			if ($form->isFieldError('sell_price')){
				echo __('<p class="info" id="error"><span class="info_inner">Entre com o Preço do Produto</span></p>', false);
			}	
						
			echo $form->input( 'category_id', array( 
					'div' => 'input',
					'label' => array( 'text' => 'Categoria: ' ),
			 		'error' => false,
					'class' => 'largeInput wide',
					'empty' => 'Escolha a Categoria desse Produto', 
					'options' => $categories
				)
			);
			if ($form->isFieldError('category_id')){
				echo __('<p class="info" id="error"><span class="info_inner">Entre com a Categoria do Produto</span></p>', false);
			}
			
			echo $form->input( 'franchise1', array( 
					'div' => 'input',
					'label' => array( 'text' => 'Franquias que vendem esse Produto: ' ),
			 		'error' => false,
					'type' => 'select',
					'multiple' => true,
					'class' => 'largeInput wide',
					'options' => $franchises
				)
			);
			echo '<input type="button" value="add_franchise" class="button_arrow_down" id="add_franchise" />';
			echo '<input type="button" value="remove_franchise" class="button_arrow_up" id="remove_franchise" />';		
			echo $form->input( 'franchise2', array( 
					'div' => 'input',
					'label' => false,
			 		'error' => false,
					'type' => 'select',
					'multiple' => true,
					'class' => 'largeInput wide'
				)
			);
		?>
		<a href="javascript:document.forms['ProductAddForm'].submit();" class="button"><span>Salvar</span></a>
		<?php echo $html->link( __( '<span>Listar Produtos</span>', true ), array( 'action'=>'index' ), array( 'class'=>'button', 'title'=>'Listar Produtos' ),null,false ); ?>
		
		<div class="clear"> </div>
	</div>
</div>   
