<?php echo $javascript->link( 'cardapio' );?> 
<div class="cardapio_interativo">
	<h2 class="titulo_quemsomos">Cardapio interativo:</h2>
    
    <div class="colun_right">
	<!-- Inicio do Slideshow -->
		<div id="slider1">
			<ul id="slider1Content"> 
				<?php foreach ($slideshow as $slideshows): ?>			
				<li class="slider1Image">
					<img src="<?php echo $html->url("/uploads/highlights/").$slideshows['Highlights']['picture']?>" alt="<?php echo $slideshows['Highlights']['name']?>" />
					<span class="bottom"><?php echo $slideshows['Highlights']['body']?></span>
				</li>
				<?php endforeach; ?>
				<div class="clear slider1Image"></div>
			</ul>
		</div>
	<!-- Fim do Slideshow -->
        <h2 class="titulo_conheca_delicias">Conheça nossas delicias</h2>
        <ul class="nossas_delicias">
        	<li><a href="<?php echo $destaque[0]['Highlights']['link'];?>" title="<?php echo $destaque[0]['Highlights']['name'];?>"><img src="<?php echo $html->url("/uploads/highlights/");?><?php echo $destaque[0]['Highlights']['picture'];?>" alt="<?php echo $destaque[0]['Highlights']['name'];?>" /></a></li>
			<li><a href="<?php echo $destaque[1]['Highlights']['link'];?>" title="<?php echo $destaque[1]['Highlights']['name'];?>"><img src="<?php echo $html->url("/uploads/highlights/");?><?php echo $destaque[1]['Highlights']['picture'];?>" alt="<?php echo $destaque[1]['Highlights']['name'];?>" /></a></li>
			<li><a href="<?php echo $destaque[2]['Highlights']['link'];?>" title="<?php echo $destaque[2]['Highlights']['name'];?>"><img src="<?php echo $html->url("/uploads/highlights/");?><?php echo $destaque[2]['Highlights']['picture'];?>" alt="<?php echo $destaque[2]['Highlights']['name'];?>" /></a></li>
			<li><a href="<?php echo $destaque[3]['Highlights']['link'];?>" title="<?php echo $destaque[3]['Highlights']['name'];?>"><img src="<?php echo $html->url("/uploads/highlights/");?><?php echo $destaque[3]['Highlights']['picture'];?>" alt="<?php echo $destaque[3]['Highlights']['name'];?>" /></a></li>
        </ul>
    </div>

  
    <?php echo $this->renderElement("menuCardapio"); ?>
    
 </div>