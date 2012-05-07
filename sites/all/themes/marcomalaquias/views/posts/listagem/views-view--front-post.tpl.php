<?php if ($exposed): ?>
	<div class="exposed">
      	<?php print $exposed; ?>
    </div>
<?php endif; ?>

<?php if ($rows): ?>
	<?php print $rows; ?>
<?php elseif ($empty): ?>
	<div class="view-empty">
		<?php print $empty; ?>
	</div>
<?php endif; ?>

<?php if ($pager): ?>
	<nav class="paginacao">
		<?php print $pager; ?>
	</nav>
<?php endif; ?>
