<div class="imagecontainer">
	<img src="<?php $html->url('/img/uploads/' . $arquivo); ?>" />
</div>
<div id="C<?php echo $lastId; ?>Comentario"></div>
<div>
	<a href="javascript:void(0)" onclick="editar('C<?php echo $lastId; ?>Comentario')"><?php __('Descrição'); ?></a>
	<a href="javascript:void(0)" onclick="excluir(this)"><?php __('Excluir'); ?></a>
</div>