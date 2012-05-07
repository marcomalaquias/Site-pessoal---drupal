<?php 



function marcomalaquias_preprocess_node(&$vars) {
	$vars['base_path'] = base_path();
	$vars['path_to_theme'] = path_to_theme();
	$node = $vars['node'];

	if( $node->type == 'page') {
		$url = getUrlDrupal();
		$arrUrl = split('/', $url);
		$vars['template_files'][] = 'node-page-' . str_replace('/', '_', $url);
	}

	#var_dump($vars['template_files']);
}


function marcomalaquias_preprocess_page(&$vars) {
	$vars['path_to_theme'] = path_to_theme();

	unset($vars['css']['all']['module']['modules/system/defaults.css']);
	unset($vars['css']['all']['module']['modules/system/system.css']);

	$vars['styles'] = drupal_get_css($vars['css']);
	
#var_dump($vars['css']);

	$js = drupal_add_js(NULL, NULL, 'header'); //get header js files in an array

	unset($js["core"]["misc/jquery.js"]);
	unset($js["module"]["sites/all/libraries/jquery.ui/ui/minified/ui.core.min.js"]);
	unset($js["module"]["sites/all/libraries/jquery.ui/ui/minified/effects.core.min.js"]);
	unset($js["module"]["sites/all/libraries/jquery.ui/ui/minified/effects.drop.min.js"]);
	unset($js["core"]["sites/all/modules/contrib/wysiwyg/wysiwyg.init.js"]);
	unset($js["module"]["sites/all/libraries/ckeditor/ckeditor.js"]);
	unset($js["module"]["sites/all/modules/contrib/wysiwyg/editors/js/ckeditor-3.0.js"]);
	unset($js["module"]["sites/all/modules/contrib/wysiwyg/editors/js/none.js"]);
	$vars['scripts'] = drupal_get_js('header', $js);
}


/**
 * Para facilitar a listagem de resultados da variavel $fields
 * @param Fields $fields
 * @param boolean $value (opcional) exibe ou valores
 * @author William Ochetski Hellas
 */
function testfor($fields, $values = false)
{
	if($fields != NULL && count($fields) > 0)
		foreach($fields as $k => $v)
			echo $k.($values?" => ".(isset($v->content)?$v->content:$v):'')."<br />".PHP_EOL;
	else
		return false;
}