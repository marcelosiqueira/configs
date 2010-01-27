


<div class="delivery_online delivery_produtos">
<div class="broadcamp"><div><a href="<?php echo $html->url("/") ; ?>">Home</a> > <a href="<?php echo $html->url("/delivery/") ; ?>">Delivery Online</a> > <a href="<?php echo $html->url("/delivery/cep/") ; ?>">CEP</a> > <a href="<?php echo $html->url("/delivery/produtos/") ; ?>">Produtos</a></div></div>    

<div class="colun_right">
    <h2 class="titulo_colun_right">Veja seus produtos<img src="<?php echo $html->url("/img/") ; ?>indio.jpg" alt="indio" /></h2>
    
<p class="text_ver_produtos"><span>Para alterar itens ou quantidades:</span></p>

<p class="text_ver_produtos">Digite a nova quantidade e clique em atualizar <br />
Clique em excluir para excluir um item da bandeja</p>
    <ul class="ver_pedidos_atualizar space_lists">
          <li><div class="img_produto"><a href="#"><img src="<?php echo $html->url("/img/") ; ?>produtos_saladas.jpg" alt="Salada de Palmito" /></a></div></li>
          <li><a href="#" class="nome_produto" title="Salada de Palmito">Salada de Palmito</a></li>
          <li class="atualizar_qtd">
              <label for="quantidade_de_produtos"><input id="quantidade_de_produtos" class="textfield" type="text" />QTD.</label>
              <strong class="price">Valor: <span>R$ 15.00</span></strong>
          </li>
          <li class="botoes">
          	<a href="#" title="Atualizar"><img src="<?php echo $html->url("/img/") ; ?>bt_atualizar.jpg" alt="atualizar" /></a>
          	<a href="#" title="Excluir"><img src="<?php echo $html->url("/img/") ; ?>bt_excluir.jpg" alt="excluir" /></a>
          </li>
    </ul>
    <ul class="ver_pedidos_atualizar">
          <li><div class="img_produto"><a href="#"><img src="<?php echo $html->url("/img/") ; ?>produtos_saladas.jpg" alt="Salada de Palmito" /></a></div></li>
          <li><a href="#" class="nome_produto" title="Salada de repolho com ovos">Salada de repolho com ovoso</a></li>
          <li class="atualizar_qtd">
              <label><input class="textfield" type="text" />QTD.</label>
              <strong class="price">Valor: <span>R$ 15.00</span></strong>
          </li>
          <li class="botoes">
          	<a href="#" title="Atualizar"><img src="<?php echo $html->url("/img/") ; ?>bt_atualizar.jpg" alt="atualizar" /></a>
          	<a href="#" title="Excluir"><img src="<?php echo $html->url("/img/") ; ?>bt_excluir.jpg" alt="excluir" /></a>
          </li>
    </ul>
        <ul class="ver_pedidos_atualizar">
          <li><div class="img_produto"><a href="#"><img src="<?php echo $html->url("/img/") ; ?>produtos_saladas.jpg" alt="Salada de Palmito" /></a></div></li>
          <li><a href="#" class="nome_produto" title="Salada de repolho com ovos">Salada de repolho com ovoso</a></li>
          <li class="atualizar_qtd">
              <label><input class="textfield" type="text" />QTD.</label>
              <strong class="price">Valor: <span>R$ 15.00</span></strong>
          </li>
          <li class="botoes">
          	<a href="#" title="Atualizar"><img src="<?php echo $html->url("/img/") ; ?>bt_atualizar.jpg" alt="atualizar" /></a>
          	<a href="#" title="Excluir"><img src="<?php echo $html->url("/img/") ; ?>bt_excluir.jpg" alt="excluir" /></a>
          </li>
    </ul>

    <ul class="ver_pedidos_atualizar">
          <li><div class="img_produto"><a href="#"><img src="<?php echo $html->url("/img/") ; ?>produtos_saladas.jpg" alt="Salada de Palmito" /></a></div></li>
          <li><a href="#" class="nome_produto" title="Salada de repolho com ovos">Salada de repolho com ovoso</a></li>
          <li class="atualizar_qtd">
              <label><input class="textfield" type="text" />QTD.</label>
              <strong class="price">Valor: <span>R$ 15.00</span></strong>
          </li>
          <li class="botoes">
          	<a href="#" title="Atualizar"><img src="<?php echo $html->url("/img/") ; ?>bt_atualizar.jpg" alt="atualizar" /></a>
          	<a href="#" title="Excluir"><img src="<?php echo $html->url("/img/") ; ?>bt_excluir.jpg" alt="excluir" /></a>
          </li>
    </ul>
<div class="total_pedidos">
	<dl>
        <dt class="display">Taxa de entrega</dt>
        <dd class="first">R$ 5,00</dd>
    </dl>
	<dl>
        <dt class="display">Total de produtos</dt>
        <dd>R$ 5,00</dd>
    </dl>
	<dl>
        <dt class="display">taotal de pedido</dt>
        <dd class="last">R$ 5,00</dd>
    </dl>
</div>
    <a href="<?php echo $html->url("/delivery/cadastro") ; ?>" rel="payment" class="confirmar_pedido" title="Confirmar pedido"><img src="<?php echo $html->url("/img/") ; ?>bt_confirmar_pedido.jpg" alt="confirmar pedido" /></a>
</div>
   <?php echo $this->renderElement("menuProdutos"); ?>