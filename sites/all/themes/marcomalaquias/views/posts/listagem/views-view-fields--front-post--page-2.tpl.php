<article class="post">
	<h3><?php echo $fields['title']->content; ?></h3>
	<div class="categorias">
		Categorias: 
		<?php echo $fields['tid']->content; ?>	
	</div>
	<?php echo $fields['field_post_imagem_destaque_fid_1']->content; ?>
	<div class="chamada"><?php echo $fields['field_post_chamada_value']->content; ?></div>
	<div class="tags">
		Tags: 
		<?php echo $fields['tid_1']->content; ?>	
	</div>	
	<a href="<?php echo $fields['path_1']->content; ?>" class="leiamais">Leia Mais...</a>
</article>