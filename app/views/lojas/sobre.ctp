<?php echo $javascript->link( array( 'loja' ) ); ?>
<h2 class="titulo_quemsomos"><?php echo $lojas['Franchise']['name']; ?>:</h2>  
    <div class="colun_right lojas_right">
	 <h2 class="titulo_colun_right">Sobre<img src="<?php echo $html->url("/img/"); ?>indio.jpg" alt="indio" /></h2>
	 <?php pr($produtosFotos);?>
      <p><?php echo $lojas['Franchise']['description']; ?></p>
      <div class="fotos_cardapio">
      	<ul>
      		<?php foreach ($produtosFotos as $produto): ?>
            <li>
            	<a href="<?php e($html->url('/cardapio/produto_detalhe/').$produto['Product']['id'].'/'.$produto['Product']['handle']);?>" title="<?php e($produto['Product']['name']);?>">
            		<img src="<?php e($html->url("/uploads/images/") . 'medium_'. $produto['Image']['filename']); ?>" alt="<?php e($produto['Product']['name']);?>" />
            	</a>
            </li>
			<?php endforeach; ?>
        </ul>
        
        <ol>
        <li class="anterior"><a href="#" title="Anterior">Anterior</a></li>
        <li class="actual">1</li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li class="proxima"><a href="#" title="Próxima">Próxima</a></li>
        </ol>
        
      </div>
     
    </div>

<div class="colun_left lojas_left">
	<div class="fotos_loja">
	    <div class="foto_g">
	    	<?php $html->image("recipes/6.jpg", array("alt" => "Brownies"))?>
	    	<img id="loja" src="<?php echo $html->url("/uploads/images/") . $lojasFotos[0]['Image']['filename'] ; ?>" alt="<?php echo $lojas['Franchise']['name']; ?>" />
	    </div>   
	    <ul class="mais_fotos_loja">
			<?php foreach ($lojasFotos as $foto): ?>
			<li>
				<a href="#" onClick="imgFranquia('<?php echo $html->url("/uploads/images/") . $foto['Image']['filename'] ; ?>');" >
					<img src="<?php echo $html->url("/uploads/images/") . "small_" . $foto['Image']['filename'] ; ?>" alt="<?php echo $lojas['Franchise']['name']; ?>" />
				</a>
			</li>
	    	<?php endforeach; ?>
	    </ul>
    </div>
      
      <div class="box contato_lojas">
      	<dl>
      	  <dt>Contato</dt>
          <dd>
              <ul>
              <li>Falar com <?php echo $lojas['Franchise']['contact']; ?></li>
              <li>Telefone: <?php echo $lojas['Franchise']['phone']; ?></li>
              <li>Celular: <?php echo $lojas['Franchise']['celphone']; ?></li>
              <li>Email: <?php echo $lojas['Franchise']['email']; ?></li>
              <li>Skype: <?php echo $lojas['Franchise']['skype']; ?></li>
              <li>
              		<?php echo $lojas['Franchise']['andress']; ?>, 
              		<?php echo $lojas['Franchise']['number']; ?>, 
              		<?php if (is_null($lojas['Franchise']['complement'])) {echo $lojas['Franchise']['complement'].",";} ?>
              		<?php echo $lojas['Franchise']['district']; ?>
              </li>
              <li><?php echo $lojas['Franchise']['city']; ?> - <?php echo $lojas['Franchise']['state']; ?></li>
              </ul>
          </dd>
        </dl>
      </div>
      <div class="box contato_lojas">      
          <?php 
			$my_locations = array();
			$my_locations[1]['address'] = $lojas['Franchise']['andress'].', '.$lojas['Franchise']['number'].', '.$lojas['Franchise']['city'].' - '.$lojas['Franchise']['state'];
			$my_locations[1]['title'] = '<b>'.$lojas['Franchise']['name'].'</b><br /s> '.$my_locations[1]['address'];
          	//echo $map->displaymap($my_locations,400,300); 
          ?>
		  <script type="text/javascript">onLoad();</script>
      </div>      
</div>