<!doctype html>
<html lang="en">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="generator" content="Brag Sheet" />
		
		<title><?php echo page_title(); ?> | <?php echo site_name(); ?></title>
		
		<link href="<?php echo theme_url('css/screen.css'); ?>"  rel="stylesheet" media="screen">
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.ico'); ?>">
 		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>		
 		<script src="<?php echo theme_url('js/modernizr.custom.js'); ?>"></script>
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
	<main class="cd-main-content">
		<header>
			<a id="cd-logo" href="#0"><img src="http://placehold.it/200x50" alt="Homepage"></a>
			<nav id="cd-top-nav">
				<ul>
					<li><a href="#0">Link!</a></li>
					<li><a href="#0">Login?</a></li>
				</ul>
			</nav>
			<a id="cd-menu-trigger" href="#0"><span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span></a>
		</header>

		<!-- put your content here -->

