<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $html->charset(); ?>
<title><?php echo $title_for_layout; ?> | Webadmin</title>
	<?php 
	//echo $html->meta( 'favicon.ico', 'favicon.ico', array('type' => 'icon') );
	echo $html->meta( 'icon' );	
	echo $html->meta( array('name' => 'robots', 'content' => 'noindex') ); 

	echo $html->css( array(
			'960',
			'reset',
			'text',
			'blue',
			'smoothness/ui'
		)
	); 
	echo $javascript->link(	array(
			'jquery-1.3.2.min',
			'blend/jquery.blend-min',
			'ui.core',
			'ui.sortable',
			'ui.dialog',
			'ui.datepicker',
			'effects',
			'flot/jquery.flot.pack'
		)
	); 
	?>
	<!--[if IE]>
		<?php echo $javascript->link('flot/excanvas.pack'); ?>
	<![endif]-->
	<!--[if IE 6]>
		<?php echo $html->css('iefix'); ?>
		<?php echo $javascript->link('pngfix'); ?>
		<script>
			DD_belatedPNG.fix('#menu ul li a span span');
		</script>        
	<![endif]-->
    <?php //echo $javascript->link('graphs'); ?>
</head>

<body>
<!-- WRAPPER START -->
<div class="container_16" id="wrapper">	
<!-- HIDDEN COLOR CHANGER -->      
  	<!--LOGO-->
	<div class="grid_8" id="logo">(e)studios aqua - Website Administration</div>
    <div class="grid_8">
<!-- USER TOOLS START -->
		<div id="user_tools"><span><a href="#" class="mail">(1)</a> Bem vindo <a href="#"><?php echo $session->read('Auth.User.name');?></a>  |  <a href="<? echo $html->url("/users/logout");?>">Logout</a></span></div>
    </div>
<!-- USER TOOLS END -->    
	<?php 
	if ($session->read('Auth.User.type')==1) { // Administrador Geral
		echo $this->element('menu.adm', array('flag' => 'value'));
	} else if ($session->read('Auth.User.type')==2) { // Franquiado - Administrador
		echo $this->element('menu.adm.fr', array('flag' => 'value'));
	}else if ($session->read('Auth.User.type')==3) { // Franquiado - Usuário
		echo $this->element('menu.usr.fr', array('flag' => 'value'));
	}
	
	if ($session->params['controller'] != 'pages') {
		echo $this->element('menu', array('flag' => 'value'));
	}
	?>
	
<!-- CONTENT START -->
	<?php echo $content_for_layout; ?>   
<!-- END CONTENT-->  
  
	<div class="clear"> </div>

	<!-- This contains the hidden content for modal box calls -->
	<div class='hidden'>
		<div id="inline_example1" title="This is a modal box" style='padding:10px; background:#fff;'>
		<p><strong>This content comes from a hidden element on this page.</strong></p>
            		
		<p><strong>Try testing yourself!</strong></p>
            <p>You can call as many dialogs you want with jQuery UI.</p>
		</div>
	</div>
</div>
<!-- WRAPPER END -->
<!-- FOOTER START -->
<div class="container_16" id="footer">
Website Administration by <a href="http://www.marcelosiqueira.com.br/">Marcelo Siqueira</a></div>
<!-- FOOTER END -->
</body>
</html>
<?php //echo $cakeDebug; ?>
