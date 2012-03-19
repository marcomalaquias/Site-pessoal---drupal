<section id="dicas">
	<h2>Dicas</h2>

	<div class="eixo">
		<div class="colecao">
			<?php foreach($rows as $row): ?>
				<?php print $row; ?>
			<?php endforeach; ?>				
	</div>
	<a href="<?php echo base_path() ?>dicas" class="saiba-mais">Todas as dicas</a>
</section>