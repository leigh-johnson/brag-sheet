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
 		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 		<script src="<?php echo theme_url('js/jquery.cookie.min.js'); ?>"></script>
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
			<!-- Google Analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-48978225-5', 'auto');

		  ga('require', 'linkid', 'linkid.js');
		  ga('require', 'displayfeatures');
		  ga('send', 'pageview');
		</script>

	</head>

	<body>
	<main class="cd-main-content">
		<header>
			<a id="cd-logo" href="<?php echo full_url(); ?>">
				<span class="icon-layout"></span>
				<div class="top"><h1><?php echo site_name();?></h1></div>		    
			</a>
			<div class="bottom"><h1><? echo site_description();?></h1></div>

			<nav id="cd-top-nav">
				<!-- there is room for a top nav roll -->
				<!-- ul -> li -->
			</nav>
			<a id="cd-menu-trigger" href="#0"><span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span></a>
		</header>

		<!-- put your content here -->

