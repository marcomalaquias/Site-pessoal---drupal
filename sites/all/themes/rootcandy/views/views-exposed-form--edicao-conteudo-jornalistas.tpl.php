<?php
// $Id: views-exposed-form.tpl.php,v 1.4.4.1 2009/11/18 20:37:58 merlinofchaos Exp $
/**
 * @file views-exposed-form.tpl.php
 *
 * This template handles the layout of the views exposed filter form.
 *
 * Variables available:
 * - $widgets: An array of exposed form widgets. Each widget contains:
 * - $widget->label: The visible label to print. May be optional.
 * - $widget->operator: The operator for the widget. May be optional.
 * - $widget->widget: The widget itself.
 * - $button: The submit button for the form.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($q)): ?>
  <?php
    // This ensures that, if clean URLs are off, the 'q' is added first so that
    // it shows up first in the URL.
    print $q;
  ?>
<?php endif; ?>
<div class=" fieldset admin-processed"><h2 class="fieldset-title">Exibir apenas itens que</h2>
	<div class="views-exposed-form">
	  <div class="views-exposed-widgets clear-block">
	    <?php foreach($widgets as $id => $widget): ?>
	      <?php if ( $id == 'filter-uid' ) print '<div style="clear:both">&nbsp;</div>'; ?>
	      <div class="views-exposed-widget">
	        <?php if (!empty($widget->label)): ?>
	          <label for="<?php print $widget->id; ?>">
	            <?php print $widget->label; ?>
	          </label>
	        <?php endif; ?>
	        <?php if (!empty($widget->operator)): ?>
	          <div class="views-operator">
	            <?php print $widget->operator; ?>
	          </div>
	        <?php endif; ?>
	        <div class="views-widget">
			  <?php if ( $id == 'filter-type_1' ): ?>
				<div id="edit-type-1-wrapper" class="form-item">
					<select id="edit-type-1" class="form-select" name="type_1">
						<option value="All">Todos</option>
						<option value="artigos">Artigos</option>
						<option value="audios">Áudios</option>
						<option value="contatos_sala_imprensa">Contatos Sala de Imprensa</option>
						<option value="noticias">Notícias</option>
						<option value="videos">Vídeos</option>
					</select>
				</div>		  
			  
			  <?php else: ?>
				<?php
				$html = str_replace('&lt;Any&gt;', 'Todos', $widget->widget); 
				$html = str_replace('Enter a comma separated list of user names.', 'Digite o nome dos usuários separador por vírgula', $html);
				
				print $html;
				?>
			  <?php endif; ?>
	        </div>
	      </div>
	    <?php endforeach; ?>
	    <div class="views-exposed-widget">
	      <?php print str_replace('Apply', 'Buscar', $button) ?>
	    </div>
	  </div>
	</div>
</div>	