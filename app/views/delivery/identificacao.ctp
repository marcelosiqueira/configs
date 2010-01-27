

<div class="delivery_online novo_endereco">
<div class="broadcamp"><div><a href="<?php echo $html->url("/"); ?>">Home</a> > <a href="<?php echo $html->url("/delivery/"); ?>">Delivery Online</a> >  <a href="#">Identificação</a> > </div></div>
  
    <div class="colun_left">
       <div class="categorias"><h3 class="display">Delivery Online</h3></div>
       <div class="indentificacao_aviso">
         <h3>Este é o seu primeiro pedido?</h3>
         <p>Se este e o seu primeiro pedido, <a href="<?php echo $html->url("/delivery/cep"); ?>">clique aqui</a> para escolher os seus produtos pela sua regiao e efetuar seu pedido de maneira rapida e facil no conforto da sua casa.</p>
       </div>
    </div>
   
    <div class="colun_right">
        
        <div class="content_form_login">
    	<h3 class="display">Ja sou cadastrado</h3>
        <p>Se voce ja efetuou outros pedidos conosco e deseja pedir novamente, coloque o seu login e senha e delicie-se com nossos produtos agora mesmo!</p>
    	 <div class="form_login">
         <form action="<?php echo $html->url("/delivery/produtos"); ?>">
         <fieldset>
         <ol>
         	<li><label>Login</label><input class="textfield" type="text" /></li>
        	<li><label>Senha</label><input class="textfield" type="password" /></li>
        	<li><input class="button" type="submit" title="clique aqui para fazer login" value="Ok" /></li>
         </ol>
         </fieldset>
         </form></div>        
        
         </div>
    </div>    

 </div>