<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
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

		<!-- <div class="hr grid_12 clearfix">&nbsp;</div> -->
			
		<!-- Caption Line -->
		<!-- <h2 class="grid_12 caption clearfix">Welcome! This is <span>Aurelius</span>, a slick, professional <u>Business</u> &amp; <u>Portfolio</u> theme built to engage the user in your work.</h2> -->
		
		<div class="hr grid_12 clearfix quicknavhr">&nbsp;</div>
		<div id="quicknav" class="grid_12">
			<a class="quicknavgrid_3 quicknav alpha" href="portfolio.html">
					<h4 class="title ">Recent Work</h4>
					<p>Cras vestibulum lorem et dui mollis sed posuere leo semper. </p>
					<p style="text-align:center;"><img alt="" src="<?php echo $base_path . $path_to_theme ?>/html/images/Art_Artdesigner.lv.png" /></p>
				
			</a>
			<a class="quicknavgrid_3 quicknav" href="about.html">
					<h4 class="title ">Learn about us</h4>
					<p>Cras vestibulum lorem et dui mollis sed posuere leo semper. </p>
					<p style="text-align:center;"><img alt="" src="<?php echo $base_path . $path_to_theme ?>/html/images/info.png" /></p>
				
			</a>
			<a class="quicknavgrid_3 quicknav" href="blog.html">
					<h4 class="title ">Read our blog</h4>
					<p>Cras vestibulum lorem et dui mollis sed posuere leo semper. </p>
					<p style="text-align:center;"><img alt="" src="<?php echo $base_path . $path_to_theme ?>/html/images/Blog_Artdesigner.lv.png" /></p>
				
			</a>
			<a class="quicknavgrid_3 quicknav" href="#">
					<h4 class="title ">Follow on Twitter</h4>
					<p>Cras vestibulum lorem et dui mollis sed posuere leo semper. </p>
					<p style="text-align:center;"><img alt="" src="<?php echo $base_path . $path_to_theme ?>/html/images/hungry_bird.png" /></p>
			</a>
		</div>
		<div class="hr grid_12 clearfix">&nbsp;</div>

		<div class="hr grid_12 clearfix quicknavhr">&nbsp;</div>
		<div id="tagcloud" class="grid_12">
			<a class="quicknavgrid_3 quicknav alpha" href="portfolio.html">
					<h4 class="title ">Recent Work</h4>
					<p>Cras vestibulum lorem et dui mollis sed posuere leo semper. </p>
					<p style="text-align:center;"><img alt="" src="<?php echo $base_path . $path_to_theme ?>/html/images/Art_Artdesigner.lv.png" /></p>
				
			</a>
		</div>
		<div class="hr grid_12 clearfix">&nbsp;</div>

		<!-- Footer -->
		<p class="grid_12 footer clearfix">
			<span class="float"><b>&copy; Copyright</b> <a href="">QwibbleDesigns</a> - remove upon purchase.</span>
			<a class="float right" href="#">top</a>
		</p>
		
	</div><!--end wrapper-->

	<div id="footer" class="clearfix">
		<div class="hr grid_12">&nbsp;</div>
		<div class="grid" style="">
			<p class="grid_12 footer clearfix">				
				<a class="float right" href="#">Linkedinn</a>
				<a class="float right" href="#">Twitter</a>
				<a class="float right" href="#">Linkedinn</a>
			</p>
		</div>
		
	</div>
	
	<!-- Scripts -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<?php echo $scripts ?>

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