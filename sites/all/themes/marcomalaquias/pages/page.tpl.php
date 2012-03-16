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
		<?php echo $content; ?>	


		<section id="dicas">
			<h2>Dicas</h2>

			<div class="eixo">
				<div class="colecao">
					<article data-identifier="1">
						<p><a href="dicas.html#indentifier=1">Compre máquinas e equipamentos certificados com o selo Procel</a></p>
					</article>
					<article data-identifier="2">
						<p><a href="dicas.html#indentifier=2">Troque o papel branco por reciclado</a></p>
					</article>
					<article data-identifier="3">
						<p><a href="dicas.html#indentifier=3">Faça coleta seletiva de resíduos recicláveis</a></p>
					</article>
					<article data-identifier="4">
						<p><a href="dicas.html#indentifier=4">Faça manutenção nas áreas de energia, água e climatização</a></p>
					</article>
					<article data-identifier="5">
						<p><a href="dicas.html#indentifier=5">Troque as lâmpadas incandescentes por fluorescentes</a></p>
					</article>
					<article data-identifier="6">
						<p><a href="dicas.html#indentifier=5">Troque as lâmpadas incandescentes por fluorescentes</a></p>
					</article>					
				</div>
				
				<div class="colecao">
					<article data-identifier="1">
						<p><a href="dicas.html#indentifier=1">Compre máquinas e equipamentos certificados com o selo Procel</a></p>
					</article>
					<article data-identifier="2">
						<p><a href="dicas.html#indentifier=2">Troque o papel branco por reciclado</a></p>
					</article>
					<article data-identifier="3">
						<p><a href="dicas.html#indentifier=3">Faça coleta seletiva de resíduos recicláveis</a></p>
					</article>
					<article data-identifier="4">
						<p><a href="dicas.html#indentifier=4">Faça manutenção nas áreas de energia, água e climatização</a></p>
					</article>
					<article data-identifier="5">
						<p><a href="dicas.html#indentifier=5">Troque as lâmpadas incandescentes por fluorescentes</a></p>
					</article>
				</div>
			</div>

			<a href="dicas.html" class="saiba-mais">Todas as dicas</a>
		</section>
		
	</div><!--end wrapper-->

	<div id="footer">
    	<div class="container">
      		<ul class="links jt">
		        <li class="title">Jobandtalent</li>
		        <li><a href="/pages/contact_us">Contact</a></li>
		        <li><a href="http://premium.jobandtalent.com/">Premium Profiles</a></li>
		        <li><a href="/pages/about_us">About us</a></li>
		        <li><a href="http://blog.jobandtalent.com/" target="_blank">Blogs</a></li>
		        <li><a href="/pages/terms_and_privacy">Terms / Privacy</a></li>
		        <li><a href="/pages/faq">FAQ's</a></li>
      		</ul>

			<ul class="links languages">
		      	<li class="title">Languages</li>
		        <li><a href="/locale?locale=en" data-method="put" rel="nofollow">English</a></li>
				<li><a href="/locale?locale=es" data-method="put" rel="nofollow">Español</a></li>
		        <li><a href="/locale?locale=ca" data-method="put" rel="nofollow">Català</a></li>
			</ul>

			<ul class="social_share">
		    	<li class="fb">
					<iframe frameborder="no" scrolling="no" src="//www.facebook.com/plugins/like.php?href=http://jobandtalent.com/&amp;send=false&amp;layout=button_count&amp;width=95&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;fontheight=21&amp;amp;appId=313920124347" style="border:none; overflow:hidden; width:95px; height:21px;"></iframe>
		        </li>
				<li class="tw">
					<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://jobandtalent.com/" data-via="jobandtalent">Tweet</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</li>
			</ul>
		</div>
	</div>
	
	<!-- Scripts -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<?php echo $scripts ?>
	
	<script type="text/javascript">
		// Inicia o ciclo de fotos das Dicas
		if ( $("#dicas").size() ) {
			var paginacao = '\
				<nav class="paginacao">\
					<div>&nbsp;</div>\
					<button type="button" class="anterior">anterior</button>\
					<button type="button" class="proximo">proximo</button>\
				</nav>';

			$("#dicas").prepend(paginacao);			
		
			$("#dicas .eixo").cycle({
				fx: "scrollHorz",
				speed: 800,
				timeout: 0,
				prev: '#dicas nav button.anterior',
				next: '#dicas nav button.proximo',
				activePagerClass: "ativo",
				pager: "#dicas nav.paginacao div"
			});
		}	
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