	<footer>
	<a href="#" class="go-top icon-arrow-up"></a>

	<div class="alert-right">
		<a href="#"><div class="alert-close icon-cancel"></div></a>
		<p>Buy Leigh a beer?</p>
		<button>Yum</button>
		Like this website? Get it:
		<button>Download</button>
	</div>
	<div id="footer-container">
	<p>Leigh Johnson // Nuwen 2014</p>
	</div>
	</footer>
	</main> <!-- cd-main-content -->

	<nav id="cd-lateral-nav">
		<ul class="cd-navigation cd-single-item-wrapper nav-emphasis">
			<?php while(menu_items()): ?>
				<li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
				<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
					<?php echo menu_name(); ?>
				</a>
				</li>
			<?php endwhile; ?>
		</ul> <!-- cd-single-item-wrapper -->
		<ul class="cd-navigation">
			<li class="item-has-children">
				<a href="#0">Articles</a>
				<ul class="sub-menu">
					<?php while(categories()): ?>
							<li>
								<a href="<?php echo category_url(); ?>" title="<?php echo category_description(); ?>">
									<?php echo category_title(); ?>
								</a>
							</li>
					<?php endwhile; ?>
				</ul>
			</li> <!-- item-has-children -->

			<li class="item-has-children">
				<a href="#0">Affiliates</a>
				<ul class="sub-menu">
					<li><a href="#0">London</a></li>
					<li><a href="#0">New York</a></li>
					<li><a href="#0">Milan</a></li>
					<li><a href="#0">Paris</a></li>
				</ul>
			</li> <!-- item-has-children -->
		</ul> <!-- cd-navigation -->

		<ul class="cd-navigation cd-single-item-wrapper">
			<li><a href="#0">Login</a></li>
			<li><a href="#0">Single item</a></li>
			<li><a href="#0">Single item</a></li>
			<li><a href="#0">Single item</a></li>
		</ul> <!-- cd-single-item-wrapper -->
		<form id="search" method="post" action="<?php echo search_url(); ?>" class="search"><input type="search" id="term" name="term" placeholder="Type your search..." value="<?php echo search_term(); ?>">
      				</form>
		<div class="cd-navigation socials">
			<a class="cd-twitter cd-img-replace" href="#0">Twitter</a>
			<a class="cd-github cd-img-replace" href="#0">Git Hub</a>
			<a class="cd-facebook cd-img-replace" href="#0">Facebook</a>
			<a class="cd-google cd-img-replace" href="#0">Google Plus</a>
		</div> <!-- socials -->
	</nav>
	<script src="<?php echo theme_url('js/navigation.js'); ?>"></script>

	<script>
	$(document).ready(function() {
			// Show or hide the sticky footer buttons
			$(window).scroll(function() {
				if ($(this).scrollTop() > 150) {
					$('.go-top').fadeIn(200);
					//don't display the alert if its been dismissed
					if (!$('.alert-right').hasClass('dismissed')) {
						$('.alert-right').fadeIn(200);
					}
				} else {
					$('.alert-right').fadeOut(200);
					$('.go-top').fadeOut(200);
				}
			});

			$('.alert-close').click(function(){
				$('.alert-right').fadeOut(200);
				$('.alert-right').addClass('dismissed');	
				return false;
			});
			
			// Animate the scroll to top
			$('.go-top').click(function(event) {
				event.preventDefault();
				
				$('html, body').animate({scrollTop: 0}, 300);
			})
		});
	</script>
	</body>
</html>