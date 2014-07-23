<?php theme_include('header'); ?>
	<link href="<?php echo theme_url('css/article.css'); ?>"  rel="stylesheet" media="screen">

	<div id="article-container">
		<section class="content">
			<article>
		    	<h1><?php echo article_title(); ?></h1>
          		<time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time>
			  	<h3 class="article-time">Estimated read time: <?php echo reading_time(article_html()); ?> </h3>

			    <?php echo article_markdown(); ?>
			    <?php echo article_custom_field('attribution'); ?>
			</article>
		</section>
	
	<button id="show-comments">Show Comments</button>
		<section class="comments">
			<!-- Comment List -->
			<?php if(comments_open() and has_comments()): ?>
			    <?php while(comments()): ?>
			        <?php echo comment_text(); ?>
			        <?php echo comment_name(); ?>
			        <?php echo comment_date(); ?>
			    <?php endwhile; ?>
			<?php endif; ?>
			
			<!-- Comment Form -->
			<?php if(comments_open()): ?>
				<form id="comment" method="post" action="<?php echo comment_form_url(); ?>#comment">
					<?php echo comment_form_notifications(); ?><!-- Error notifications -->
					<?php echo comment_form_input_name('placeholder="Your Name"'); ?>
					<?php echo comment_form_input_email('placeholder="Your Email"', $extra = ''); ?>
					<?php echo comment_form_input_text('placeholder="Your comment"'); ?>
					<?php echo comment_form_button($text = 'Post Comment', $extra = ''); ?>
				</form>
			<?php endif; ?>
		</section>
	</div>

	<script>
	$(document).ready(function(){
		$("#show-comments").click(function(){
			$(".comments").slideToggle();
		});	
	});
	</script>
<?php theme_include('footer'); ?>