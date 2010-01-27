<h2 class="titulo_quemsomos">Lojas em São Paulo</h2>
    
<div class="colun_right">
    <div class="bg_text_lojas">
   	<p class="text_lojas">Esolha o nome da loja, vejas as fotos, leia a descrição da loja conheça as formas de contato, faça seu pedido na área de delivery econheça produtos disponíveis no cadápio.</p>    
    </div>
</div>

<div class="colun_left">
	<ul class="list_lojas">
		<?php foreach ($lojas as $loja): ?>	
			<li><a href="<?php echo $html->url("/lojas/sobre/").$loja['Franchise']['id']."/".$loja['Franchise']['handle']; ?>" title="<?php echo $loja['Franchise']['name']; ?>"><?php echo $loja['Franchise']['name']; ?></a></li>
		<?php endforeach; ?>
      </ul>
</div>