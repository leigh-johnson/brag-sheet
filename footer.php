	<footer>
	Test

	</footer>
	</main> <!-- cd-main-content -->

	<nav id="cd-lateral-nav">
		<ul class="cd-navigation">
			<li class="item-has-children">
				<a href="#0">Pages</a>
				<ul class="sub-menu">
					<?php while(menu_items()): ?>
					<li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
					<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
						<?php echo menu_name(); ?>
					</a>
					</li>
					<?php endwhile; ?>
				</ul>
			</li> <!-- item-has-children -->

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
				<a href="#0">Stockists</a>
				<ul class="sub-menu">
					<li><a href="#0">London</a></li>
					<li><a href="#0">New York</a></li>
					<li><a href="#0">Milan</a></li>
					<li><a href="#0">Paris</a></li>
				</ul>
			</li> <!-- item-has-children -->
		</ul> <!-- cd-navigation -->

		<ul class="cd-navigation cd-single-item-wrapper">
			<li><a href="#0">Tour</a></li>
			<li><a href="#0">Login</a></li>
			<li><a href="#0">Register</a></li>
			<li><a href="#0">Pricing</a></li>
			<li><a href="#0">Support</a></li>
		</ul> <!-- cd-single-item-wrapper -->

		<ul class="cd-navigation cd-single-item-wrapper">
			<li><a class="current" href="#0">Journal</a></li>
			<li><a href="#0">FAQ</a></li>
			<li><a href="#0">Terms &amp; Conditions</a></li>
			<li><a href="#0">Careers</a></li>
			<li><a href="#0">Students</a></li>
		</ul> <!-- cd-single-item-wrapper -->

		<div class="cd-navigation socials">
			<a class="cd-twitter cd-img-replace" href="#0">Twitter</a>
			<a class="cd-github cd-img-replace" href="#0">Git Hub</a>
			<a class="cd-facebook cd-img-replace" href="#0">Facebook</a>
			<a class="cd-google cd-img-replace" href="#0">Google Plus</a>
		</div> <!-- socials -->
	</nav>
	<script src="<?php echo theme_url('js/navigation.js'); ?>"></script>
	</body>
</html>