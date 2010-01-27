<?php echo $javascript->link( 'home' );?> 
<!-- Inicio do Slideshow -->
	<div id="slider">
		<ul id="sliderContent"> 
			<?php foreach ($slideshow as $slideshows): ?>			
			<li class="sliderImage">
				<a href="<?php echo $destaque[0]['Highlights']['link'];?>" title="<?php echo $destaque[0]['Highlights']['name'];?>">
					<img src="<?php echo $html->url("/uploads/highlights/").$slideshows['Highlights']['picture']?>" />
					<span class="bottom"><?php echo $slideshows['Highlights']['body']?></span>
				</a>
			</li>
			<?php endforeach; ?>
			<div class="clear sliderImage"></div>
		</ul>
	</div>
<!-- Fim do Slideshow -->

<!-- Inicio dos Destaques -->
	<div class="destaques">
    	<div class="box">
        	<h1 class="titulo1"><span><?php echo $destaque[0]['Highlights']['name'];?></span></h1>
        	<a href="<?php echo $destaque[0]['Highlights']['link'];?>" title="<?php echo $destaque[0]['Highlights']['name'];?>">
            	<img src="<?php echo $html->url("/uploads/highlights/");  ?><?php echo $destaque[0]['Highlights']['picture'];?>" alt="<?php echo $destaque[0]['Highlights']['name'];?>" />
            </a>
        </div>
        <div class="box box_meio">
        	<h1 class="titulo2"><span><?php echo $destaque[1]['Highlights']['name'];?></span></h1>
        	<a href="<?php echo $destaque[1]['Highlights']['link'];?>" title="<?php echo $destaque[1]['Highlights']['name'];?>">
            	<img src="<?php echo $html->url("/uploads/highlights/");  ?><?php echo $destaque[1]['Highlights']['picture'];?>" alt="<?php echo $destaque[1]['Highlights']['name'];?>" />
            </a>
        </div>
        <div class="box">
        	<h1 class="titulo3"><span><?php echo $destaque[2]['Highlights']['name'];?></span></h1>
        	<a href="<?php echo $destaque[2]['Highlights']['link'];?>" title="<?php echo $destaque[2]['Highlights']['name'];?>">
            	<img src="<?php echo $html->url("/uploads/highlights/");  ?><?php echo $destaque[2]['Highlights']['picture'];?>" alt="<?php echo $destaque[2]['Highlights']['name'];?>" />
            </a>
        </div>
    </div>
<!-- Fim dos Destaques -->
    
<!-- Inicio de toca news -->
    <div class="news">
    	<h2 class="titulo_news">Toca news</h2>
		<div class="news_box">
			<?php foreach ($news as $newsitem): ?>
			<a class="group iframe" href="<?php echo $html->url("/noticias/ler/".$newsitem['News']['id']); ?>">
            <dl>
                <dt><abbr class="date"><?php echo  date( "d/m/Y H:m", strtotime( $newsitem['News']['date'] ) ); ?></abbr> - <?php echo $newsitem['News']['title']; ?></dt>
                <dd><?php echo $text->truncate($newsitem['News']['body'], 180, '...', true, true); ?></dd>
            </dl>
            </a>
			<?php endforeach; ?>
		</div>
    </div>
<!-- Fim de toca news -->
    <div class="twitter">
    	<h2 class="titulo_twitter">Twitter<img src="<?php echo $html->url("/img/");  ?>icon_twitter.png" class="icon_twitter" /></h2>
        	<ul>
			    <?php //foreach($feed['Statuses']['Status'] as $status) { ?>
			    <li class="status_update">
			    <!-- <img src="<?php //echo $status['User']['profile_image_url']; ?>"> -->
			    <p><?php //echo $status['text']; ?></p>
			    </li>
			    <?php //} ?>      
       		</ul>
    </div>