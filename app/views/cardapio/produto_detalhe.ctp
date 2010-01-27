<div class="cardapio_interativo">
	<h2 class="titulo_quemsomos">Cardapio interativo:</h2>
    <div class="colun_right">
    	<div class="destaq_prod">
        	<div class="img_destaq">
				<img id="produto" src="<?php echo $html->url("/uploads/images/") . $produtoFoto['Image']['filename'] ; ?>" alt="<?php echo $produtos['Product']['name']; ?>" />
			</div>
        	<div class="numero_prod"><span><?php echo $produtos['Product']['codtoca'];?></span></div>
            <p><?php echo $produtos['Product']['description'];?></p>
            <div class="fotos_prod">
            	<h4 class="display">Fotos</h4>
                <ul class="content_fotos_prod">
					<?php foreach ($produtosFotos as $foto): ?>
						<li>
							<a href="#" onClick="imgProduto('<?php echo $html->url("/uploads/images/") . $foto['Image']['filename'] ; ?>');" >
								<img src="<?php echo $html->url("/uploads/images/") . "small_" . $foto['Image']['filename'] ; ?>" alt="<?php echo $produtos['Product']['name']; ?>" />
							</a>
						</li>
	    			<?php endforeach; ?>
                </ul>
            </div>
        </div>
	
    <h2 class="titulo_descricao green"><span>Descrição</span></h2>
    <p><?php echo $produtos['Product']['body'];?></p>
   
    <h2 class="titulo_descricao marinho"><span>Lojas disponíveis</span></h2>
    <div class="content_lists">
		<?php foreach ($produtos['Franchise'] as $franquia): ?>
    	<ul class="list_lojas">
          <li>
          	<!-- <a href="<?php echo $html->url("/lojas/sobre/").$franquia['id']."/".$franquia['handle']; ?>" title="<?php echo $franquia['name'];?>"> -->
          	<?php echo $franquia['name'];?>
          </li>
        </ul>
	    <?php endforeach; ?>        
     </div>
        
    <h2 class="titulo_descricao pink"><span>Calorias</span></h2>
        <ul class="list_caloria">
        <li><?php echo $produtos['Product']['calory'];?></li>
       </ul> 

    <h2 class="titulo_descricao roxo"><span>Produtos Similares</span></h2>
		<ol class="list_similares">
        <li><a href="#" rel="thumbnail"><img src="<?php echo $html->url("/img/") ; ?>mini_produto.jpg" alt="smimilares" /></a></li>
        <li><a href="#" rel="thumbnail"><img src="<?php echo $html->url("/img/") ; ?>mini_produto.jpg" alt="smimilares" /></a></li>
        <li><a href="#" rel="thumbnail"><img src="<?php echo $html->url("/img/") ; ?>mini_produto.jpg" alt="smimilares" /></a></li>
        <li><a href="#" rel="thumbnail"><img src="<?php echo $html->url("/img/") ; ?>mini_produto.jpg" alt="smimilares" /></a></li>
        <li><a href="#" rel="thumbnail"><img src="<?php echo $html->url("/img/") ; ?>mini_produto.jpg" alt="smimilares" /></a></li>
        <li><a href="#" rel="thumbnail"><img src="<?php echo $html->url("/img/") ; ?>mini_produto.jpg" alt="smimilares" /></a></li>
        </ol>
    </div>
   <?php echo $this->renderElement("menuCardapio");?>
 </div>
          