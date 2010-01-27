<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title_for_layout; ?> | Webadmin</title>
	<?php echo $html->meta('favicon.ico', 'favicon.ico', array('type' => 'icon')); ?>
	<?php echo $html->css(
						array(
							'960',
							'reset',
							'text',
							'login'
						)
				); ?>
</head>

<body>
<div class="container_16">
  <div class="grid_6 prefix_5 suffix_5">
   	  <h1>Login</h1>
    	<div id="login">
			<?php echo $content_for_layout; ?>   
			<br clear="all" />
    	</div>
        <div id="forgot">
        	<a href="#" class="forgotlink"><span>Lembrar sua login ou senha?</span></a>
        </div>
  </div>
</div>
<br clear="all" />
</body>
</html>
