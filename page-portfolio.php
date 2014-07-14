<?php theme_include('header'); ?>

	<h1><?php echo page_title(); ?></h1>



	<!-- Source credit: https://mixitup.kunkalabs.com -->

	<!-- Data filtering & sorting-->
	<script src="<?php echo theme_url('js/jquery.mixitup.js'); ?>"></script>
	<div class="filter button" data-filter="all">Show All</div>
	<div class="filter button" data-filter=".yellow">Yellow</div>
	<div class="filter button" data-filter=".blue">Blue</div>
	<div class="filter button" data-filter=".green">Green</div>

	<?php echo page_content(); ?>

	<!-- Content -->
	<div id="portfolio-container">
		<?php echo page_custom_field('portfolio-items'); ?>
	</div>

	<!-- scrape content -->
	<script type="text/javascript">
		var array = 
	</script>

	<!-- init mixitup -->
	<script type="text/javascript">
	$(function(){
		$("#portfolio-container").mixItUp({
			load: {
				filter: "all"
			}
		});
		
	});
	</script>
<?php theme_include('footer'); ?>