<div class="delivery_online">
<div class="broadcamp"><div><a href="<?php echo $html->url("/"); ?>">Home</a> > <a href="<?php echo $html->url("/delivery/cep"); ?>">Delivery Online</a> > <a href="<?php echo $html->url("/delivery/cep/") ; ?>">CEP</a> > <a href="<?php echo $html->url("/delivery/produtos/") ; ?>">Produtos</a></div></div>    
    <div class="colun_right">
        <h2 class="titulo_colun_right">Veja seus produtos</h2>
		<img src="<?php echo $html->url("/img/") ; ?>produtos_bandeja.jpg" alt="Você não possui produtos na sua bandeja" />

    </div>

  <?php echo $this->renderElement("menuProdutos"); ?>
    
    
 </div>