<?php echo $html->css('wysiwyg/jquery.wysiwyg'); ?>
<?php echo $javascript->link('wysiwyg/jquery.wysiwyg'); ?>
<?php echo $javascript->link('select'); ?>
<?php echo $javascript->link('jquery.selso'); ?>
<script type="text/javascript">
$(document).ready(function() {
	$('#wysiwyg').wysiwyg();
});
</script>
<div class="grid_16" id="content">
	<!-- CONTENT TITLE -->
	<div class="grid_9">
	  <h1 class="content_edit"><?php __( 'Criar Franquia' );?></h1>
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
		
			echo $form->create( 'Franchise' );				
				
			echo $form->input( 'name', array(
					'div' => 'input',
					'label' => array( 'text' => 'Nome: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
			if ($form->isFieldError('name')){
				echo __('<p class="info" id="error"><span class="info_inner">Entre com o Nome da Franquia</span></p>', false);
			}
			
			echo $form->input( 'contact', array(
					'div' => 'input',
					'label' => array( 'text' => 'Contato: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
			if ($form->isFieldError('name')){
				echo __('<p class="info" id="error"><span class="info_inner">Entre com o Contato da Franquia</span></p>', false);
			}

			echo $form->input( 'description', array( 
					'div' => 'textarea',
					'id' => 'wysiwyg',
					'label' => array( 'text' => 'Sobre: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
			if ($form->isFieldError('description')){
				echo __('<p class="info" id="error"><span class="info_inner">Entre com a Descrição da Franquia</span></p>', false);
			}
						
			echo $form->input( 'phone', array( 
					'div' => 'input',		
					'label' => array( 'text' => 'Telefone: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
			if ($form->isFieldError('phone')){
				echo __('<p class="info" id="error"><span class="info_inner">Entre com o Telefone da Franquia, ex. (99) 9999-9999</span></p>', false);
			}							
			
			echo $form->input( 'celphone', array( 
					'div' => 'input',		
					'label' => array( 'text' => 'Celular: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
			if ($form->isFieldError('celphone')){
				echo __('<p class="info" id="error"><span class="info_inner">Entre com o Celular da Franquia, ex. (99) 9999-9999</span></p>', false);
			}	
						
			echo $form->input( 'email', array( 
					'div' => 'input',		
					'label' => array( 'text' => 'E-mail: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
			if ($form->isFieldError('email')){
				echo __('<p class="info" id="error"><span class="info_inner">Entre com o E-mail da Franquia</span></p>', false);
			}	
						
			echo $form->input( 'skype', array( 
					'div' => 'input',		
					'label' => array( 'text' => 'Skype: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
						
			echo $form->input( 'andress', array( 
					'div' => 'input',		
					'label' => array( 'text' => 'Endereço: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);	
			if ($form->isFieldError('andress')){
				echo __('<p class="info" id="error"><span class="info_inner">Entre com o Endereço da Franquia</span></p>', false);
			}	
			
			echo $form->input( 'number', array( 
					'div' => 'input',		
					'label' => array( 'text' => 'Número: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
			if ($form->isFieldError('phone')){
				echo __('<p class="info" id="error"><span class="info_inner">Entre com o Número da Franquia</span></p>', false);
			}	

			echo $form->input( 'complement', array( 
					'div' => 'input',		
					'label' => array( 'text' => 'Complemento: ' ), 
								'error' => false,
					'class' => 'largeInput wide' 
				) 
			);			
			
			echo $form->input( 'district', array( 
					'div' => 'input',		
					'label' => array( 'text' => 'Bairro: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
			if ($form->isFieldError('district')){
				echo __('<p class="info" id="error"><span class="info_inner">Entre com o Bairro da Franquia</span></p>', false);
			}	
						
			echo $form->input( 'city', array( 
					'div' => 'input',		
					'label' => array( 'text' => 'Cidade: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
			if ($form->isFieldError('city')){
				echo __('<p class="info" id="error"><span class="info_inner">Entre com a Cidade da Franquia</span></p>', false);
			}	
						
			echo $form->input( 'state', array( 
					'div' => 'input',
					'label' => array( 'text' => 'Estado: ' ), 
					'error' => false,			
					'class' => 'largeInput', 
					'options' => array(
						''=>'Escolha o Estado',	
						'AC'=>'Acre',
						'AL'=>'Alagoas',
						'AP'=>'Amapá',
						'AM'=>'Amazonas',
						'BA'=>'Bahia',
						'CE'=>'Ceará',
						'DF'=>'Distrito Federal',
						'ES'=>'Espírito Santo',
						'GO'=>'Goiás',
						'MA'=>'Maranhão',
						'MT'=>'Mato Grosso',
						'MS'=>'Mato Grosso do Sul',
						'MG'=>'Minas Gerais',
						'PA'=>'Pará',
						'PB'=>'Paraíba',
						'PR'=>'Paraná',
						'PE'=>'Pernambuco',
						'PI'=>'Piauí',
						'RJ'=>'Rio de Janeiro',
						'RN'=>'Rio Grande do Norte',
						'RS'=>'Rio Grande do Sul',
						'RO'=>'Rondônia',
						'SC'=>'Santa Catarina',
						'RR'=>'Roraima',
						'SP'=>'São Paulo',
						'SE'=>'Sergipe',
						'TO'=>'Tocantins'
					)
				)
			);
			if ($form->isFieldError('state')){
				echo __('<p class="info" id="error"><span class="info_inner">Informe o Estado da Franquia</span></p>', false);
			}
			
			echo $form->input( 'postcodstart', array( 
					'div' => 'input',		
					'label' => array( 'text' => 'CEP inicial de entrega: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
			if ($form->isFieldError('postcodstart')){
				echo __('<p class="info" id="error"><span class="info_inner">Entre com o CEP inicial de entrega da Franquia, ex. 99999-999</span></p>', false);
			}

			echo $form->input( 'postcodend', array( 
					'div' => 'input',		
					'label' => array( 'text' => 'CEP final de entrega: ' ), 
					'error' => false,			
					'class' => 'largeInput wide' 
				) 
			);
			if ($form->isFieldError('postcodend')){
				echo __('<p class="info" id="error"><span class="info_inner">Entre com o CEP final de entrega da Franquia, ex. 99999-999</span></p>', false);
			}	

			echo $form->input( 'product1', array( 
					'div' => 'input',
					'label' => array( 'text' => 'Produtos que essa Franquia vende: ' ),
			 		'error' => false,
					'type' => 'select',
					'multiple' => true,
					'class' => 'largeInput wide',
					'options' => $products1
				)
			);
			echo '<input type="button" value="add_product" class="button_arrow_down" id="add_product" />';
			echo '<input type="button" value="remove_product" class="button_arrow_up" id="remove_product" />';			
			echo $form->input( 'product2', array( 
					'div' => 'input',
					'label' => false,
			 		'error' => false,
					'type' => 'select',
					'multiple' => true,
					'class' => 'largeInput wide'	
				)
			);
		?>
		<a href="javascript:document.forms['FranchiseAddForm'].submit();" class="button"><span>Salvar</span></a>
		<?php echo $html->link( __( '<span>Listar Franquias</span>', true ), array( 'action'=>'index' ), array( 'class'=>'button', 'title'=>'Listar Franquias' ),null,false ); ?>
	 
		<div class="clear"> </div>
	</div>
</div>  
