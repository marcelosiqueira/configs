

<div class="delivery_online novo_endereco">
<div class="broadcamp"><div><a href="<?php echo $html->url("/") ; ?>">Home</a> > <a href="<?php echo $html->url("/delivery/") ; ?>">Delivery Online</a></div></div>    
       <div class="categorias"></div>

   
    <div class="todo_meio">

    	<h3>A entrega será em um <span>novo</span> endereço ?</h3>
        
        <ul class="sim_nao">
        	<li>
                <a href="<?php echo $html->url("/delivery/cadastro_novo_endereco") ; ?>" rel="directory" title="Sim"><img src="<?php echo $html->url("/img/") ; ?>delivery_sim.jpg" alt="sim" /></a>
                <p>Sim, pretendo usar o meu cadastro, porém pretendo mandar a entrega para outro endereço diferente do que o que tenho no meu cadastro.</p></li>
            <li>
               <a href="<?php echo $html->url("/delivery/finalizar") ; ?>" rel="directory" title="Não"><img src="<?php echo $html->url("/img/") ; ?>delivery_nao.jpg" alt="não" /></a>
                <p>Não, vou usar o mesmo endereço que tenho no meu cadastro sem fazer nenhuma alteraçâo.</p>
            </li>
        </ul>
        
    </div>
    
    
 </div>