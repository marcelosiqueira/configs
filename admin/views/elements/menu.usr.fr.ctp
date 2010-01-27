	<div class="grid_16" id="header">
		<!-- MENU START -->	
		<div id="menu">
			<ul class="group" id="menu_group_main">
				<li class="item first" id="one"><a href="<? echo $html->url("/") ?>" class="main<?php echo ($session->params['controller'] == 'pages') ? ' current' : ''; ?>"><span class="outer"><span class="inner dashboard">Dashboard</span></span></a></li>
		        <li class="item middle" id="two"><a href="<? echo $html->url("/franchises") ?>" class="main<?php echo ($session->params['controller'] == 'franchises') ? ' current' : ''; ?>"><span class="outer"><span class="inner content">Franquias</span></span></a></li>
		        <li class="item middle" id="three"><a href="<? echo $html->url("/products") ?>" class="main<?php echo ($session->params['controller'] == 'products') ? ' current' : ''; ?>"><span class="outer"><span class="inner reports png">Produtos</span></span></a></li>
				<li class="item middle" id="four"><a href="<? echo $html->url("/news") ?>" class="main<?php echo ($session->params['controller'] == 'news') ? ' current' : ''; ?>" class="main"><span class="outer"><span class="inner newsletter">Notícias</span></span></a></li>		        
		        <li class="item middle" id="five"><a href="<? echo $html->url("/users") ?>" class="main<?php echo ($session->params['controller'] == 'users') ? ' current' : ''; ?>"><span class="outer"><span class="inner users">Usuários</span></span></a></li>
				<li class="item middle" id="six"><a href="#" class="main"><span class="outer"><span class="inner media_library">Media Library</span></span></a></li>        
				<li class="item middle" id="seven"><a href="<? echo $html->url("/contacts") ?>" class="main<?php echo ($session->params['controller'] == 'contacts') ? ' current' : ''; ?>" class="main"><span class="outer"><span class="inner contact">Contatos</span></span></a></li>
				<li class="item last" id="eight"><a href="#" class="main"><span class="outer"><span class="inner settings">Settings</span></span></a></li>
		    </ul>
		</div>
		<!-- MENU END -->
	</div>