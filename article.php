<?php theme_include('header'); ?>
	<link href="<?php echo theme_url('css/posts.css'); ?>"  rel="stylesheet" media="screen">
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
			<?php echo comment_form_input_text('placeholder="Your comment", rows=5'); ?>
			</p>
			<p class="submit">
				<?php echo comment_form_button($text = 'Post Comment', $extra = ''); ?>
			</p>	
		</form>
		</div>
	
	<button id="show-comments">Show Comments</button>
		<section class="comments">
			<?php endif; ?>
			<!-- Comment List -->
			<?php if(comments_open() and has_comments()): ?>
			    <?php while(comments()): ?>
			    	<section>
			        <p><?php echo comment_text(); ?></p>
			        <h2><?php echo comment_name(); ?></h2>
          			<time datetime="<?php echo date(DATE_W3C, comment_time()); ?>"><?php echo relative_time(comment_time()); ?></time>
          			</section>
			    <?php endwhile; ?>
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