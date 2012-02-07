<div id="featured" class="clearfix grid_12">
	<ul> 
		<?php foreach($rows as $row): ?>
			<?php print $row; ?>
		<?php endforeach; ?>
	</ul> 
</div>

<?php 
drupal_add_js("
		$(document).ready(function() { //Start up our Featured Project Carosuel
			var interval;

			$('#featured ul').roundabout({
				easing: 'easeOutInCirc',
				duration: 1000
			}).hover(
				function() { clearInterval(interval); },
				function() { interval = startAutoPlay(); }
			);

			function startAutoPlay() {
				return setInterval(function() {
					$('#featured ul').roundabout_animateToNextChild();
				}, 5000);
			}

			interval = startAutoPlay();
		});
	", 'inline');	