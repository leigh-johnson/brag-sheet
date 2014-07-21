<?php theme_include('header'); ?>
	<link href="<?php echo theme_url('css/posts.css'); ?>"  rel="stylesheet" media="screen">

		<div id="posts-container">
		<ul><!-- Categories Roll -->
			    	<h3>View by category</h3>
			    	<li><a href="<?php echo full_url(); ?>">All</a></li>
       				<?php while(categories()): ?>
					<li><a href="<?php echo category_url(); ?>" title="<?php echo category_description(); ?>">
									<?php echo category_title(); ?>
					</a>
					</li>
					<?php endwhile; ?>
      	</ul>
		<section class="content">
			<?php if(has_posts()) : while(posts()) : ?>
				<article>
					<figure><img src="<?php echo article_custom_field('thumbnail');?>"></img></figure> 
					<h1>
			        <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
			        </h1>
			        <h3 class="article-time">Estimated read time: <?php echo reading_time(article_html()); ?> </h3>

					<p><?php echo article_description(); ?></p>
			         <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time>
				</article>
			<?php endwhile; endif; ?>
		</section>
		
		<section class="pagination">
			<?php if(has_pagination()) : ?>
			    <nav class="pagination">
			        <?php echo posts_prev(); ?>
			        <?php echo posts_next(); ?>
			    </nav>
			<?php endif; ?>
		</section>
		</div>

<?php theme_include('footer'); ?>