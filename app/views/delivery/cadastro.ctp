<div class="delivery_online novo_endereco">
<div class="broadcamp"><div><a href="<?php echo $html->url("/") ; ?>">Home</a> > <a href="<?php echo $html->url("/delivery/") ; ?>">Delivery Online</a> > <a href="#">CEP</a> > <a href="<?php echo $html->url("/delivery/produtos") ; ?>">Produtos</a> > <a href="#">Dado</a></div></div>
  
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
        <form action="<?php echo $html->url("/delivery/novo_endereco") ; ?>">
        <fieldset>
        <legend class="display">Cadastro de dados do pedido</legend>
        <ol>
            <li>
            	<label for="cadastro_nome">Nome completo<span class="asterisco">*</span>:</label>
            	<input id="cadastro_nome" class="textfield" type="text" /></li>
            <li>
                <label for="cadastro_mail">Email:</label>
                <input id="cadastro_mail" class="textfield" type="text" /></li>
            <li>
            	<label for="cadastro_niver">Data de aniversário<br /><span class="obs">(dia e mês)</span>:</label>
            	<input id="cadastro_niver" class="textfield" type="text" /></li>
            <li>
                <label for="cadastro_telFixo">Telefone fixo<span class="asterisco">*</span>:</label>
                <input id="cadastro_telFixo" class="textfield" type="text" /></li>
            <li>
                <label for="cadastro_ramal">Ramal?:</label>
                <input id="cadastro_ramal" class="textfield" type="text" /></li>
            <li>
                <label for="cadastro_cel">Celular::</label>
                <input id="cadastro_cel" class="textfield" type="text" /></li>
            <li>
                <label for="cadastro_end">Endereço<span class="asterisco">*</span>:</label>
                <input id="cadastro_end" class="textfield" type="text" /></li>
            <li>
                <label for="cadastro_complemento">Complemento:</label>
                <input id="cadastro_complemento" class="textfield" type="text" /></li>
            <li>
                <label for="cadastro_numero">Número<span class="asterisco">*</span>:</label>
                <input id="cadastro_numero" class="textfield" type="text" /></li>
            <li>
                <label for="cadastro_senha">Senha<span class="asterisco">*</span><br /><span class="obs">(para próximos pedidos)</span>:</label>
                <input id="cadastro_senha" class="textfield" type="text" /></li>
            <li><input class="button" type="submit" value="enviar" /></li>
        </ol>
        </fieldset>
        </form>
        </div>
    </div>    

 </div>