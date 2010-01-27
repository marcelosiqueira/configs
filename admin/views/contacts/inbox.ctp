<div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    	<h1 class="dashboard">Contatos Recebidos</h1>
    </div>
    <div class="clear"></div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets">
    <!-- FIRST SORTABLE COLUMN START -->
      <div class="column" id="left"></div>
      <div class="clear"></div>
      
		<?php 
		if($session->check('Message.flash')) {
			$session->flash();
		}		
		?>
      
		<!-- FIRST SORTABLE COLUMN END -->    
    	<div class="portlet">
        <div class="portlet-header fixed"><img src="images/icons/user.gif" width="16" height="16" alt="Contatos" /><?php __( 'Contatos Recebidos' );?></div>
		<div class="portlet-content nopadding">
        <form action="" method="post">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="30" scope="col"><input type="checkbox" name="allbox" id="allbox" onclick="checkAll()" /></th>
                <th width="100" scope="col"><?php echo $paginator->sort( 'De' );?></th>
                <th width="100" scope="col"><?php echo $paginator->sort( 'E-mail' );?></th>
                <th width="100" scope="col"><?php echo $paginator->sort( 'Assunto' );?></th>                
                <th width="200" scope="col"><?php echo $paginator->sort( 'Mensagem' );?></th>                
                <th width="100" scope="col"><?php echo $paginator->sort( 'Criado' );?></th>
                <th width="20" scope="col"><?php __( 'Ação' );?></th>
              </tr>
            </thead>
            <tbody>
			<?php
			$i = 0;
			foreach ($contacts as $contact):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
			?>
              <tr<?php echo $class;?>>
                <td width="30"><label>
                    <input type="checkbox" name="checkbox<?php echo $contact['Contact']['id']; ?>" id="checkbox" />
                </label></td>
                <td><?php echo $contact['Contact']['name']; ?></td>
                <td><?php echo $contact['Contact']['email']; ?></td>
                <td><?php echo $contact['Contact']['subject']; ?></td>
                <td><?php echo $contact['Contact']['body']; ?></td>
                <td><?php echo date( "d/m/Y H:m", strtotime( $contact['Contact']['created'] ) ); ?></td>
                <td width="20">
					<?php echo $html->link( null, array( 'action'=>'view', $contact['Contact']['id'] ), array( 'class'=>'approve_icon', 'title'=>'Ver' ) ); ?>
					<?php echo $html->link( null, array( 'action'=>'delete', $contact['Contact']['id'] ), array( 'class'=>'delete_icon', 'title'=>'Apagar' ), sprintf( __( 'Tem certeza de que deseja apagar # %s?', true), $contact['Contact']['id'] ) ); ?>
                </td>
              </tr>
              <?php endforeach; ?>
              <tr>
                <td colspan="5">&nbsp;
                	<a href="#" class="delete_inline">Delete all</a>
                </td>
                <td colspan="5" align="right">
				<!--  PAGINATION START  -->
                    <div class="pagination">
						<?php echo $paginator->prev(__( '<< Anterior', true ), array('class'=>'previous'), null, array( 'class'=>'previous-off' ) );?>
					 	<?php echo $paginator->numbers();?>
						<?php echo $paginator->next(__( 'Proximo >>', true ), array('class'=>'next'), null, array( 'class'=>'next-off' ) );?>	                    
                    </div>  
                <!--  PAGINATION END  -->       
                </td>
              </tr>
              <tr class="footer">  
              	<td colspan="10">            
				<?php 
				echo $paginator->counter( array(
					'format' => __( 'Pagina %page% de %pages%, Mostrando %current% registros de uma total de %count%, a partir de registo %start%, que termina em %end%.', true )
				) );
				?>
                </td>
              </tr>
              
            </tbody>
          </table>
        </form>
		</div>
		</div>
		<!--  END #PORTLETS -->  

		<div class="actions">
			<?php echo $html->link( __( '<span>Novo Contato</span>', true ), array( 'action'=>'add' ), array( 'class'=>'button', 'title'=>'Novao Contato' ),null,false ); ?>
		</div>
	</div>
</div>
