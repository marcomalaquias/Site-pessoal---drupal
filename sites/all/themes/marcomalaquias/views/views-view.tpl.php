<?php if ($rows): ?>
	<?php print $rows;?>
<?php elseif ($empty): ?>
	<div class="view-empty">
    	<?php print $empty; ?>
	</div>
<?php endif; ?>

<?php if ($pager): ?>
	<?php print $pager; ?>
<?php endif; ?>