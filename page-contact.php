<?php theme_include('header'); ?>
	<link href="<?php echo theme_url('css/page-contact.css'); ?>"  rel="stylesheet" media="screen">

	<h1><?php echo page_title(); ?></h1>

	<!-- Notifications -->
	<div class="notify"><?php echo Notify::read(); ?></div>

	<div id="contact-container">
	    <form method="post" action="<?php echo current_url(); ?>">
	      <p><label>Subject</label><br>
		      <input name="contact-subject" type="text" placeholder="Hi!" value="<?php echo Input::previous('contact-subject'); ?>"> 
		      </p>
	      <p><label>Your Name</label><br>
		      <input name="contact-name" type="text" placeholder="My name is&hellip;" value="<?php echo Input::previous('contact-name'); ?>"> 
	      </p>
	      <p><label>Your Email</label><br>
		      <input name="contact-email" type="email" placeholder="email@domain.com" value="<?php echo Input::previous('contact-email'); ?>"> 
	      </p>
	      <p>
		      <textarea name="contact-message" style="width:100%;height:150px;" placeholder="How may I help you?"><?php echo Input::previous('contact-message'); ?>
		      </textarea>
	      </p>
	      <p><button type="submit">Send</button></p>
    	</form>	
	</div>
<?php theme_include('footer'); ?>