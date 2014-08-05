<?php theme_include('header'); ?>
	<h1><?php echo page_title(); ?></h1>
	<div id="contact-container">
		<?php

		// die spam die
		function spamdie($field) {
			//sanitize email
			$field=filter_var($field, FILTER_SANITIZE_EMAIL);
			// validate
			if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
				return TRUE;
			}
			else { return FALSE;}
		}
		//display form only if user has not clicked submit
		if (!isset($_POST["submit"])) {
			?>
			<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
			<p class="comment-input name">
				<label for="name">
					<span class="icon-user"></span>
				</label>
				<input type="text" name="name" placeholder="Your name">
			</p>
			<p class="comment-input email">
				<label for="email">
					<span class="icon-envelope"></span>
				</label>
				<input type="text" name="email" placeholder="Your email">
			</p>
			<p class="comment-input message">
				<label for="message">
					<span class="icon-pencil"></span> <textarea name="message"></textarea><br>
			<input type="submit" name="submit" value="Submit" placeholder="Let's chat about...">
			</form>
		<?php
		} else {
			// form has been submitted
			// check input
			if (isset($_POST["name"])) {
				$checkmail = spamdie($_POST["email"]);
				if ($checkmail == FALSE) {
					echo "Invalid email address";
				}
				else {
				$name = $_POST["name"]; 
				$email = $_POST["email"];
				$message = $_POST["email"];

				$message = wordwrap($message, 70);

				mail("gleighn@gmail.com", $name, $message, $email);
				echo "Your message was sent. Thanks!";
				}
			}
		}
		?>
		</div>
<?php theme_include('footer'); ?>