<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php e($title_for_layout); ?> - Toca do Açai</title>

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
<?php 
	echo $javascript->link( array( 'jquery-1.3.2.min', 'jquery.fancybox-1.2.6', 's3Slider' ) ); 
	echo $html->css( array( 'toca_do_acai', 'jquery.fancybox-1.2.6', 'slidehome' ) );
	echo $scripts_for_layout;
?>


</head>

<body>
 <div class="wrap">
<!-- Inicio de header -->
	<div class="content_header">
		<div class="header">
        	<h2 class="logo"><a href="<?php echo $html->url("/"); ?>" title="Ir para página principal" rel="home">Toca do Açai <span lang="en">Energetic Food</span></a></h2>
			
            <div class="delivery">
            	<form action="#">
                	<fieldset>
                    <legend>Confira nosso <span lang="en">delivery online</span></legend>
                     <label for="mail_dlivery">E-mail</label>
                      <input class="textfield" id="mail_dlivery" onfocus="javascript:if(this.value=='seu@e-mail')this.value='';" value="seu@e-mail" type="text" />
                     <label for="senha_dlivery">Senha</label>
                      <input class="textfield" id="senha_dlivery" onfocus="javascript:if(this.value=='******')this.value='';" value="******" type="password" />
                     <input class="button" value="ok" type="submit" />
                     <p>Se é o seu primeiro pedido, <a href="<?php echo $html->url("/delivery/cep/") ; ?>" title="faça seu primeiro pedido">clique aqui</a></p>
                    </fieldset>
                </form>
            </div>

            <div class="nav">
            	<ul>
                	<li class="link_home" lang="en"><a href="<?php echo $html->url("/"); ?>" rel="category" title="">home</a></li>
                	<li class="link_deliver" lang="en"><a href="<?php echo $html->url("/delivery/"); ?>" rel="category" title="">Delivery Online</a></li>
                	<li class="link_cardapio"><a href="<?php echo $html->url("/cardapio/"); ?>" rel="category" title="">Cardápio interativo</a></li>
                    <li class="link_lojas"><a href="<?php echo $html->url("/lojas/"); ?>" rel="category" title="">Lojas</a></li>
                	<li class="link_franq"><a href="<?php echo $html->url("/franqueado/"); ?>" rel="category" title="">Como ser um franqueado</a></li>
                	<li class="link_somos"><a href="<?php echo $html->url("/quem_somos/"); ?>" rel="category" title="">Quem somos</a></li>
                    <li class="link_contato"><a href="<?php echo $html->url("/contato/"); ?>" rel="category" title="">Contato</a></li>
                </ul>
            </div>
                 
        </div>
	</div>
<!-- FIM de header -->
<div class="content_general">
<div class="content">

	<?php echo $content_for_layout;?>
 
 </div>
</div>

<div class="footer">
	<strong>Toca do açai. Todos direitos reservados. Web by: (e)Studio AQUA</strong>
</div>

</div>
 </body>
</html>