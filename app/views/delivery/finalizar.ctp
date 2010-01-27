<div class="delivery_online novo_endereco">
<div class="broadcamp"><div><a href="<?php echo $html->url("/"); ?>">Home</a> > <a href="<?php echo $html->url("/delivery/"); ?>">Delivery Online</a> > <a href="#">Finalizar Pedido</a></div></div>
  
    <div class="colun_left">
       <div class="categorias"><h3 class="display">Categorias</h3></div>
       <div class="categorias_aviso">
         <p>Campos com <span class="asterisco">(*)</span> tem preenchimento obrigatorio</p>
       </div>
    </div>
   
    <div class="colun_right">
    <h2 class="titulo_colun_right">Dados do pedido<img src="<?php echo $html->url("/img/") ; ?>indio.jpg" alt="indio" /></h2>
    <p>Preencha os seus dados abaixo para entregarmos o seu pedido. O email e senha seraoo pedidos apenas nesta etapa. Nonononono nononon nononon nononon nononononon n.</p>
        <div class="form_cadastro">
        <form action="<?php echo $html->url("/delivery/produtos/") ; ?>">
        <fieldset id="form_final">
        <legend class="display">Cadastro de dados do pedido</legend>
        <ol>
            <li>
            	<label for="protocolo">Seu número de<br /> protocolo:</label>
            	<input id="protocolo" class="textfield" type="text" />
            </li>
            <li>
            	<label for="observacao"><a href="" class="tooltip">Observacão:<br /><span class="obs">Coloque alguma <br />observa&ccedil;&atilde;o que voc&ecirc; acha<br /> relevante para o seu pedido</span></a></label>
                <textarea id="observacao"></textarea>
             </li>
             <li>
                <label>Formas de pagamento<span class="asterisco">*</span>:</label>
                
                <ul class="radios">
                <li><label for="visa" class="radio"><input id="visa" name="forma_pagamento" type="radio" />Visa</label></li>
                <li><label for="mastercard" class="radio"><input id="mastercard" name="forma_pagamento" type="radio" />Mastercard</label></li>
                <li><label for="cheque" class="radio"><input id="cheque" name="forma_pagamento" type="radio" />Cheque</label></li>
                <li><label for="dinheiro" class="radio"><input id="dinheiro" name="forma_pagamento" type="radio" />Dinheiro</label></li>
                </ul>
                
            </li>
            <li>
                <label for="troco">Troco para: R$:</label>
                <input id="troco" class="textfield" type="text" />
            </li>
            <li><input class="button" type="submit" value="enviar" /></li>
        </ol>
        </fieldset>
        </form>
        </div>
    </div>    

 </div>
