  <div class="categorias">
        <h3 class="display">Categorias</h3>
          <ul>
			 <?php foreach ($categorias as $categoria): ?>	
				<li><a href="<?php echo $html->url("/cardapio/produtos/").$categoria['Category']['id']."/".$categoria['Category']['handle']; ?>" title="<?php echo $categoria['Category']['name']; ?>" rel="tag"><?php echo $categoria['Category']['name']; ?></a></li>
			 <?php endforeach; ?>
          </ul>
          
          <div class="delivery_exibicao">
          	<h3 class="titulo_delivery_exibicao">Faça seu pedido</h3>
          	<p class="delivery_texto">faça agora mesmo o seu pedido online!<a href="<?php echo $html->url("/delivery/") ; ?>">Clique aqui</a></p>
          </div>
          
          
          <div class="tags_relacionadas">
           <h3 class="display">Tags relacionadas</h3>
          	<ul class="tags">
          	<li><a href="#" class="tag_3" rel="tag" title="">Cenoura</a></li>
            <li><a href="#" class="tag_2" rel="tag" title="">açucar</a></li>
          	<li><a href="#" class="tag_5" rel="tag" title="">Frango</a></li>
            <li><a href="#" class="tag_1" rel="tag" title="">espinafre</a></li>
          	<li><a href="#" class="tag_3" rel="tag" title="">palmito</a></li>
          	<li><a href="#" class="tag_4" rel="tag" title="">tomate</a></li>
            <li><a href="#" class="tag_3" rel="tag" title="">abóbora</a></li>
          	</ul>
          
          </div>  
          
          
          
</div>