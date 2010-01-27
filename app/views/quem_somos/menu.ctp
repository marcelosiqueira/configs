	<h2 class="titulo_quemsomos">Conheça melhor sobre:</h2>

    <div class="colun_right">
		<h2 class="titulo_colun_right"><?php echo $historico[0]['Menu']['title']; ?><img src="<?php echo $html->url("/img/") ; ?>indio.jpg" alt="indio" /></h2>
		<?php echo $historico[0]['Menu']['body']; ?>
    </div>

	<div class="colun_left">
    	<h3 class="display">Leia também</h3>
      <ul class="leia_tbm">
		<?php foreach ($menus as $menu): ?>	
			<li><a href="<?php echo $html->url("/quem_somos/menu/").$menu['Menu']['id']; ?>" title="<?php echo $menu['Menu']['title']; ?>"><?php echo $menu['Menu']['title']; ?></a></li>
		<?php endforeach; ?>      
      </ul>
      
      <div class="box">
      	<dl>
      	  <dt>O que é?</dt>
          <dd>Leia um pouco mais sobre nós em nosso histórico, o nosso início, a nossa tragetória e muito mais. Saiba todos os passos da nossa história.</dd>
        </dl>
      </div>
      
    </div>