<?php theme_include('header'); ?>

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
		</form>
		</div>
<?php theme_include('footer'); ?>