<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<title><?php echo $head_title ?></title>
	<?php echo $head ?>
	
	<!-- Stylesheets -->
	<?php echo $styles ?>

	<style>
	.fluid_container {
		margin: 0 auto;
		max-width: 1000px;
		width: 100%;
	}
	</style>
</head>
<body>

	<div id="header2">
		<div class="container">
			<a href="/" class="title" title="Marco Malaquias">Marco Malaquias</a>
			<div class="links">
				<a href="#">Blog</a>
				<a href="#">Dicas</a>
				<a href="#">Projetos</a>
				<a href="#">Contato</a>
			</div>
		</div>
	</div>




	<div id="wrapper">
		<div id="content">
			<?php echo $content; ?>
			<section id="tag-cloud">
				<h2>Tag Cloud</h2>			
				<div class="tags">xyz</div>				
			</section>
		</div>
	</div>

	<div id="footer">
    	<div class="container">
      		<ul class="links jt">
		        <li class="title">Páginas</li>
		        <li><a href="<?php echo $base_path; ?>blog">Blog</a></li>
		        <li><a href="<?php echo $base_path; ?>dicas">Dicas</a></li>
			<li><a href="<?php echo $base_path; ?>projetos">Projetos</a></li>
			<li><a href="<?php echo $base_path; ?>contato">Contato</a></li>
      		</ul>

			<ul class="links languages ">
		      	<li class="title">Redes</li>
		    	<!--<li class="fb">
					<iframe frameborder="no" scrolling="no" src="//www.facebook.com/plugins/like.php?href=http://www.marcomalaquias.com.br&amp;send=false&amp;layout=button_count&amp;width=95&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;fontheight=21&amp;amp;appId=313920124347" style="border:none; overflow:hidden; width:95px; height:21px;"></iframe>
		        </li>
				<li class="tw">
					<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.marcomalaquias.com.br" data-via="marcomalaquias">Tweet</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</li>-->
			</ul>
			
			<div id="box-twitter">
				<div class="feed">
					<a target="_blank" href="http://twitter.com/zipcloudhelp" id="twitter-arrow"><img alt="Tweet!" src="<? echo base_path() . path_to_theme() ?>/html/images/ico/twitter-arrow.png"></a>
					<p>@Terry_Mitchell ....will reflect the new file path</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Scripts -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<?php #echo $scripts ?>

	<?php if ( $is_front ): ?>
	    <script type='text/javascript' src='<?php echo $base_path . $path_to_theme ?>/html/js/camera/jquery.mobile.customized.min.js'></script>
	    <script type='text/javascript' src='<?php echo $base_path . $path_to_theme ?>/html/js/camera/jquery.easing.1.3.js'></script> 
	    <script type='text/javascript' src='<?php echo $base_path . $path_to_theme ?>/html/js/camera/camera.js'></script> 
	    
	    <script type='text/javascript'>
			jQuery(function(){			
				jQuery('#camera_wrap_3').camera({
					height: '500px',
					loader: 'bar',
					pagination: false,
					thumbnails: true,
					imagePath: '<?php echo $base_path . $path_to_theme ?>/html/images/camera/',
					time: 10000,
					fx: 'scrollHorz'
				});
	
			});
		</script>
	<?php endif; ?>
</body>
</html>
