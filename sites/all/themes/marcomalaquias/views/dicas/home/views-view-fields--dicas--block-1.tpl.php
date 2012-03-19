<?php 
$classe = "";
if ( $id % 6 == 1 ) $classe .= ' primeiro-coluna ';
if ( $id > 6 ) $classe .= ' multipla-linha ';

?>
<article data-identifier="<?php echo $id; ?>" class="<?php echo $classe; ?>">
	<p><?php echo $fields['title']->content; ?></p>
</article>