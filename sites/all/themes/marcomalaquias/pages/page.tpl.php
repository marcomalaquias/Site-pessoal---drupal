<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<title><?php echo $head_title ?></title>
	<?php echo $head ?>
		
	<!-- Stylesheets -->
	<?php echo $styles ?>
</head>
<body>
	<div id="header" class="clearfix">
		<div class="grid">
			<!-- Text Logo -->
			<h1 id="logo" class="grid_4"><a href="<?php echo base_path(); ?>">Marco Malaquias</a></h1>
			
			<!-- Navigation Menu -->
			<ul id="navigation" class="grid_8">
				<li><a href="contact.html"><span class="meta">Get in touch</span><br />Contact Us</a></li>
				<li><a href="blog.html"><span class="meta">Latest news</span><br />Blog</a></li>
				<li><a href="portfolio.html"><span class="meta">Our latest work</span><br />Portfolio</a></li>
					
				<li><a href="about.html"><span class="meta">Who are we?</span><br />About</a></li>
				<li><a href="index.html" class="current"><span class="meta">Homepage</span><br />Home</a></li>
			</ul>
			<div class="clear"></div>
		</div>
		<div class="hr grid_12">&nbsp;</div>
	</div>

	<div id="wrapper" class="container_12 clearfix">
		<!--
		<div id="destaques-principais" class="clearfix grid_12">
			<ul> 
				<li>
					<a href="/equipe/mmalaquias/marcomalaquias.com.br/site/post/como-definir-pagina-inicial-no-drupal">
					<h2>Como definir a página inicial no drupal</h2>
					<img  class="imagefield imagefield-field_post_imagem_destaque" width="600" height="300" title="Como definir a página principal do Drupal" alt="Home" src="http://192.168.20.10/equipe/mmalaquias/marcomalaquias.com.br/site/sites/default/files/post/Sem%20t%C3%ADtulo2.png?1328628148" />	</a>
				</li>
				<li>
					<a href="/equipe/mmalaquias/marcomalaquias.com.br/site/post/criando-transacoes-ado">
					<h2>criando transações ADO</h2>
					<img  class="imagefield imagefield-field_post_imagem_destaque" width="600" height="300" alt="" src="http://192.168.20.10/equipe/mmalaquias/marcomalaquias.com.br/site/sites/default/files/post/microsoft-windows-glass-logo%5B1%5D.jpg?1328628117" />	</a>
				</li>
				<li>
					<a href="/equipe/mmalaquias/marcomalaquias.com.br/site/post/acessar-outros-arquivos-jar-partir-de-um-jar">
					<h2>Acessar outros arquivos jar a partir de um jar</h2>
					<img  class="imagefield imagefield-field_post_imagem_destaque" width="600" height="300" alt="" src="http://192.168.20.10/equipe/mmalaquias/marcomalaquias.com.br/site/sites/default/files/post/146503_Papel-de-Parede-Java_1280x800%5B1%5D.jpg?1328628057" />	</a>
				</li>
				<li>
					<a href="/equipe/mmalaquias/marcomalaquias.com.br/site/post/alguns-links-de-como-capturar-imagem-de-uma-webcam">
					<h2>alguns links de como capturar imagem de uma webcam</h2>
					<img  class="imagefield imagefield-field_post_imagem_destaque" width="600" height="300" alt="" src="http://192.168.20.10/equipe/mmalaquias/marcomalaquias.com.br/site/sites/default/files/post/4332_Ampliada%5B1%5D.jpg?1328628336" />	</a>
				</li>
				<li>
					<a href="/equipe/mmalaquias/marcomalaquias.com.br/site/post/codigo-para-captura-de-tela-com-java">
					<h2>Código para captura de tela com java</h2>
					<img  class="imagefield imagefield-field_post_imagem_destaque" width="600" height="300" alt="" src="http://192.168.20.10/equipe/mmalaquias/marcomalaquias.com.br/site/sites/default/files/post/416_W1946S-BF-1%5B1%5D.jpg?1328628542" />	</a>
				</li>
			</ul> 
		</div>	
		
<div id="featured_orbit"> 
     <img src="http://192.168.20.10/equipe/mmalaquias/marcomalaquias.com.br/site/sites/default/files/post/416_W1946S-BF-1%5B1%5D.jpg?" alt="Overflow: Hidden No More" />
     <img src="http://192.168.20.10/equipe/mmalaquias/marcomalaquias.com.br/site/sites/default/files/post/416_W1946S-BF-1%5B1%5D.jpg?"  alt="HTML Captions" />
     <img src="http://192.168.20.10/equipe/mmalaquias/marcomalaquias.com.br/site/sites/default/files/post/416_W1946S-BF-1%5B1%5D.jpg?" alt="and more features" />
</div>		
-->
	
		<?php echo $content; ?>
		
		
		
		<section id="tag-cloud">
			<h2>Tag Cloud</h2>
		
			<div class="tags">
			xyz					
			</div>
			
		</section>
	</div>

	<div id="footer">
    	<div class="container">
      		<ul class="links jt">
		        <li class="title">Jobandtalent</li>
		        <li><a href="/pages/contact_us">Contact</a></li>
		        <li><a href="http://premium.jobandtalent.com/">Premium Profiles</a></li>
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
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
	<?php echo $scripts ?>
	
	<script type="text/javascript" src="<?php echo base_path() . path_to_theme() ?>/html/js/jquery.orbit.min.js"></script>
	<script type="text/javascript">
  		$('#featured_orbit').orbit();	
  	</script>
	
	<!--[if IE 6]>
	<script src="js/DD_belatedPNG_0.0.8a-min.js"></script>
	<script>
	  /* EXAMPLE */
	  DD_belatedPNG.fix('.button');
	  
	  /* string argument can be any CSS selector */
	  /* .png_bg example is unnecessary */
	  /* change it to what suits you! */
	</script>
	<![endif]-->	

</body>
</html>