<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php e($news['News']['title']); ?> - Toca do Açai</title>

<!--meta tags-->
<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
<meta http-equiv="content-language" content="pt-br" />

<meta name="description" content="Descrição aqui" />
<meta name="keywords" content="Palavras chave aqui" />

<meta name="reply-to" content="contato@andreamaral.net" />

<meta name="robots" content="index,follow"/>
<meta name="googlebot" content="index,follow" />
<meta name="rating" content="general" />
<meta name="revisit-after" content="7 days" />

<meta name="copyright" content="Andr&eacute; Amaral" />
<link href="http://www.andreamaral.net/home" rel="home" />
<!--meta tags-->
<!--[if lte IE 6]>

    <script src="js/DD_belatedPNG_0.0.7a.js" type="text/javascript"></script><script type="text/javascript">
    DD_belatedPNG.fix('h1, a, h2, h3, .icon_twitter');
    </script>
    
<![endif]-->
<?php echo $html->css('toca_do_acai'); ?>

</head>
<body>
 <div class="wrap">
	<div class="cardapio_interativo">
		<h2 class="titulo_quemsomos"><?php echo $news['News']['title']; ?></h2>
		<h5><?php echo  date( "d/m/Y H:m", strtotime( $news['News']['date'] ) ); ?></h5> 
		<p><?php echo $news['News']['body']; ?></p>
	</div>
 </div>
 </body>
</html>