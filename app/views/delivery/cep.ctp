

<div class=" novo_endereco">
<div class="broadcamp"><div><a href="<?php echo $html->url("/") ; ?>">Home</a> > <a href="<?php echo $html->url("/delivery/") ; ?>">Delivery Online</a> > CEP</div></div>
  
    <div class="colun_left">
       <div class="categorias"><h3 class="display">Delivery Online</h3></div>
       
       <h2 class="titulo_1pedido">Este é o seu primeiro pedido</h2>
		<p class="paragraph_1pedido">Coloque o seu CEP ao lado para podermos encaminhar o seu pedido para a toca do Açai mais próxima de você.</p>
        <p class="paragraph_1pedido">Após o preenchimento do seu CEP você terá aceso aos nossos deliciosos pratos fresquinhos a sua espera!</p>
        <p class="paragraph_1pedido"><img src="<?php echo $html->url("/img/") ; ?>seta_cep.jpg" class="seta_cep" alt="coloque o cep no formulário" /></p>
       
    </div>
   
    <div class="colun_right">
        
    	 <div class="digite_cep">
           <h3 class="display">Digite o seu Cep</h3>
         <form action="<?php echo $html->url("/delivery/produtos"); ?>">
         <fieldset>
         <ol>
         	<li><label>CEP:</label><input class="textfield" type="text" /></li>
        	<li><input class="button" type="submit" title="clique aqui para fazer login" value="Ok" /></li>
         </ol>
         </fieldset>
         </form>
        </div>        
        
    </div>    

 </div>
 <img src="<?php echo $html->url("/img/") ; ?>experimente-saladas-sucos.jpg" class="destaque_1pedido" alt="experimente saladas" />
 