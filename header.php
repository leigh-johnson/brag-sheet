<!doctype html>
<html lang="en">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="generator" content="Brag Sheet" />
		
		<title><?php echo page_title(); ?> | <?php echo site_name(); ?></title>
		
		<link href="<?php echo theme_url('css/screen.css'); ?>"  rel="stylesheet" media="screen" type="text/css" />
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.ico'); ?>" type="image/x-icon" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<!-- Add per-post CSS -->
		<?php if(article_css()): ?>
			<style><?php echo article_css(); ?></style>
		<?php endif; ?>
		
		<!-- Add per-post JS -->
		<?php if(article_js()): ?>
			<script><?php echo article_js(); ?></script>
		<?php endif; ?>

	</head>

	<body>
		<header>
			<div id="toggle"> <!-- animated bar container-->
				<div id="bar1"></div>
				<div id="bar2"></div>
				<div id="bar3"></div>
			</div>
			
			<a class="logo" href="<?php echo base_url(); ?>" title="<?php site_description(); ?>">
				<h1><?php echo site_name(); ?></h1>
				<img src="http://placehold.it/350x150"></img>
				</a>
			

			<!-- drawer -->
			<div id="menu">
				<!-- Search Menu -->
				<form id="search" method="post" action="<?php echo search_url(); ?>" class="search"><input type="search" id="term" name="term" placeholder="Type your search..." value="<?php echo search_term(); ?>">
	      		</form>
				<?php if(has_menu_items()) : ?>
			    <ul role="main"><!-- Pages Roll -->
			        <?php while(menu_items()) : ?>
			            <li><a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a></li>
			        <?php endwhile; ?>
			    </ul>
			    
			<?php endif; ?>
			
			</div>
			<!-- end drawer -->
		</header>
		<script type="text/javascript">
		$("#toggle").click(function() {
  		$(this).toggleClass("on");
  		$("#menu").slideToggle();
		});</script>

