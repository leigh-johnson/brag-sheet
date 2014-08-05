<?php theme_include('header'); ?>
	<link href="<?php echo theme_url('css/posts.css'); ?>"  rel="stylesheet" media="screen">
	<link href="<?php echo theme_url('css/article.css'); ?>"  rel="stylesheet" media="screen">

	<div id="article-container">
		<section class="content">
			<article>
		    	<h1><?php echo article_title(); ?></h1>
          		<time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time>
			  	<h3 class="read-time">Estimated read time: <?php echo reading_time(article_html()); ?> </h3>
			  	<img src="<?php echo article_custom_field('thumbnail');?>"></img>
			    <?php echo article_markdown(); ?>
			    <?php echo article_custom_field('attribution'); ?>
			</article>
		</section>
	<!-- Comment Form -->
	<?php if(comments_open()): ?>
		<div class="form-container">
		<form id="comment" method="post" action="<?php echo comment_form_url(); ?>#comment">
			<?php echo comment_form_notifications(); ?><!-- Error notifications -->
			<p class="name comment-input"><label for="name"><span class="icon-user"></span></label>
			<?php echo comment_form_input_name('placeholder="Your Name" rows=1'); ?>
			</p>
			<p class="email comment-input"><label for="email"><span class="icon-envelope"></span></label>
			<?php echo comment_form_input_email('placeholder="Your Email" rows=1', $extra = ''); ?>
			</p>
			<p class="textarea comment-input"><label for="text"><span class="icon-pencil"></span></label>
			<?php echo comment_form_input_text('placeholder="Your comment"'); ?>
			</p>
			<p class="submit">
				<?php echo comment_form_button($text = 'Submit', $extra = ''); ?>
			</p>
			<button id="show-comments" href="#comments">Comments (<?php echo count_comments(); ?>)</button>
		</form>
		</div>
	
		<section id="comments">
			<?php endif; ?>
			<!-- Comment List -->
			<?php if(comments_open() and has_comments()): ?>
			    <?php while(comments()): ?>
			    	<article>
			        <p><?php echo comment_text(); ?></p>
			        <h2><?php echo comment_name(); ?></h2>
          			<time datetime="<?php echo date(DATE_W3C, comment_time()); ?>"><?php echo relative_time(comment_time()); ?></time>
          			</article>
			    <?php endwhile; ?>
			<?php endif; ?>
			
			
		</section>
	</div>

	// toggle comments & smoothly scroll
	<script>
	$(document).ready(function(e){
		$("#show-comments").click(function(event){
			$("#comments").slideToggle("slow");
			event.preventDefault();
			$("body, html").animate({ 
            scrollTop: $( $(this).attr('href') ).offset().top 
        }, 600);
		});	
	});
	</script>
<?php theme_include('footer'); ?>