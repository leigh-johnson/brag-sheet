<!doctype html>
<html lang="en">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="generator" content="Brag Sheet" />
		
		<title><?php echo page_title(); ?> | <?php echo site_name(); ?></title>
		<link href='http://fonts.googleapis.com/css?family=Glegoo|Titillium+Web:400,700,400italic' rel='stylesheet' type='text/css'>
		<link href="<?php echo theme_url('css/screen.css'); ?>"  rel="stylesheet" media="screen">
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.ico'); ?>">
 		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 		<script src="<?php echo theme_url('js/jquery.cookie.js'); ?>"></script>		 				
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
		<meta property="og:site_name" content="<?php echo article_title(); ?> - <?php echo site_name(); ?>">
		<?php  if(current_url() == "/" || current_url() == "posts") : ?>
			<meta property="og:url" content="http://sandbox.leighjohnson.me/brag-sheet">
			<meta property="og:title" content="<?php echo site_name(); ?>">
			<meta property="og:description" content="<?php echo site_description(); ?>">
		<?php else: ?>
			<meta property="og:url" content="<?php echo "http://sandbox.leighjohnson.me/brag-sheet" . current_url(); ?>">
			<meta property="og:title" content="<?php echo article_title(); ?> - <?php echo site_name(); ?>">
			<meta property="og:description" content="<?php echo article_description(); ?>">
		<?php endif; ?>
		<!-- article thumbnail for social shares, otherwise logo -->
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
			<a id="cd-logo" href="<?php echo full_url(); ?>"><h1><?php echo site_name();?></h1>
			<nav id="cd-top-nav">
				<!-- there is room for a top nav roll -->
				<!-- ul -> li -->
			</nav>
			<a id="cd-menu-trigger" href="#0"><span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span></a>
		</header>

		<!-- put your content here -->

