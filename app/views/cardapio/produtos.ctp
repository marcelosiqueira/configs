<div class="cardapio_interativo">
	<h2 class="titulo_quemsomos">Cardapio interativo:</h2>
    
    <div class="colun_right">
        <ul class="produtos">
			<?php foreach ($produtos as $produto): ?>
				<li>
					<div class="img_produto">
						<a href="<?php echo $html->url("/cardapio/produto_detalhe/").$produto['Product']['id']."/".$produto['Product']['handle']; ?>" title="<?php echo $produto['Product']['name']; ?>">
							<?php foreach ($produto['Image'] as $image): ?>
							<img src="<?php echo $html->url('/uploads/images/').'large_'.$image['filename']; ?>" alt="<?php echo $produto['Product']['name']; ?>" />
							<?php endforeach;?>
						</a>
					</div>
					<a href="<?php echo $html->url("/cardapio/produto_detalhe/").$produto['Product']['id']."/".$produto['Product']['handle']; ?>" title="<?php echo $produto['Product']['name']; ?>">
					<?php echo $produto['Product']['name']; ?>
					</a>
				</li>
			 <?php endforeach; ?>
        </ul>
    </div>

    <?php  echo $this->renderElement("menuCardapio"); ?>
    
    
 </div>