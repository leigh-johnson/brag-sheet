<!doctype html>
<html lang="en">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="generator" content="Brag Sheet" />
		
		<title><?php echo page_title(); ?> | <?php echo site_name(); ?></title>
		<link href='http://fonts.googleapis.com/css?family=Lora:400,700|Titillium+Web:400,700,400italic' rel='stylesheet' type='text/css'>
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
		<!-- Open graph meta https://gist.github.com/daviddarnes/5735237 -->
		<meta property="og:type" content="Brag Sheet">
		<meta property="og:site_name" content="<?php echo site_name(); ?>">
		<?php if(is_homepage() == true) : ?>
			<meta property="og:url" content="http://sandbox.leighjohnson.me/brag-sheet">
			<meta property="og:title" content="<?php echo site_name(); ?>">
			<meta property="og:description" content="<?php echo site_description(); ?>">
		<?php else: ?>
			<meta property="og:url" content="<?php echo "http://sandbox.leighjohnson.me/brag-sheet" . current_url(); ?>">
			<meta property="og:title" content="<?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?>">
			<meta property="og:description" content="<?php if(strlen(article_description())) : echo article_description(); else: echo site_description(); endif; ?>">
		<?php endif; ?>
		<!-- If you have any image custom fields -->
		<?php $thumbnail = article_custom_field('thumbnail');
			if ( !empty($thumbnail) ) : ?>
			<meta property="og:image" content="<?php echo "http://sandbox.leighjohnson.me/brag-sheet" . $thumbnail; ?>">
		<?php else: ?>
			<meta property="og:image" content="<?php echo "http://sandbox.leighjohnson.me/brag-sheet" . theme_url('img/logo.png'); ?>">
		<?php endif; ?>
	</head>

	<body>
	<main class="cd-main-content">
		<header>
			<a id="cd-logo" href="#0"><img src="http://placehold.it/200x50" alt="Homepage"></a>
			<nav id="cd-top-nav">
				<ul>
					<li><form id="search" method="post" action="<?php echo search_url(); ?>" class="search"><input type="search" id="term" name="term" placeholder="Type your search..." value="<?php echo search_term(); ?>">
      				</form></li>
					<li><a href="#0">Login?</a></li>
				</ul>
			</nav>
			<a id="cd-menu-trigger" href="#0"><span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span></a>
		</header>

		<!-- put your content here -->

