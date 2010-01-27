<div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    	<h1 class="dashboard">Menus</h1>
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
        <div class="portlet-header fixed"><img src="images/icons/user.gif" width="16" height="16" alt="Produtos" /><?php __( 'Products' );?></div>
		<div class="portlet-content nopadding">
        <form action="" method="post">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="34" scope="col"><input type="checkbox" name="allbox" id="allbox" onclick="checkAll()" /></th>
                <th width="136" scope="col"><?php echo $paginator->sort( 'Título' );?></th>
                <th width="109" scope="col"><?php echo $paginator->sort( 'Local' );?></th>
                <th width="102" scope="col"><?php echo $paginator->sort( 'Ativo' );?></th>                
                <th width="171" scope="col"><?php echo $paginator->sort( 'Criado' );?></th>
                <th width="123" scope="col"><?php echo $paginator->sort( 'Modificado' );?></th>
                <th width="90" scope="col"><?php __( 'Ação' );?></th>
              </tr>
            </thead>
            <tbody>
			<?php
			$i = 0;
			foreach ($menus as $menu):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
			?>
              <tr<?php echo $class;?>>
                <td width="34"><label>
                    <input type="checkbox" name="checkbox<?php echo $menu['Menu']['id']; ?>" id="checkbox" />
                </label></td>
                <td><?php echo $menu['Menu']['title']; ?></td>
                <td><?php
				switch ($menu['Menu']['locate']) {
					case "1":
						echo 'Como ser um franquead';
					break;
					case "2":
						echo 'Quem somos';
					break;
				}					
				?></td>
                <td><?php if ($menu['Menu']['active']==0) {echo 'Não';} else {echo 'Sim';} ?></td>                
                <td><?php echo date( "d/m/Y H:m", strtotime( $menu['Menu']['created'] ) ); ?></td>
                <td><?php echo date( "d/m/Y H:m", strtotime( $menu['Menu']['modified'] ) ); ?></td>
                <td width="90">
					<?php echo $html->link( null, array( 'action'=>'edit', $menu['Menu']['id'] ), array( 'class'=>'edit_icon', 'title'=>'Editar' ) ); ?>
					<?php echo $html->link( null, array( 'action'=>'delete', $menu['Menu']['id'] ), array( 'class'=>'delete_icon', 'title'=>'Apagar' ), sprintf( __( 'Tem certeza de que deseja apagar # %s?', true), $menu['Menu']['id'] ) ); ?>                
                </td>
              </tr>
              <?php endforeach; ?>
              <tr>
                <td colspan="5">&nbsp;
                	<a href="#" class="edit_inline">Edit all</a><a href="#" class="delete_inline">Delete all</a>
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
			<?php echo $html->link( __( '<span>Nova Notícia</span>', true ), array( 'action'=>'add' ), array( 'class'=>'button', 'title'=>'Nova Notícia' ),null,false ); ?>
		</div>
	</div>
</div>
