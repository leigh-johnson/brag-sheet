<?php theme_include('header'); ?>
	<h1><?php echo page_title(); ?></h1>



	<!-- Source credit: https://mixitup.kunkalabs.com -->

	<!-- Data filtering & sorting-->

	<?php echo page_content(); ?>

	<!-- Content -->
	<!-- Filtering & Sorting https://mixitup.kunkalabs.com/learn/tutorial/get-started/#build-your-controls -->
	<div id="filter-container">
			<!-- Filters --> 
			<button class="filter" data-filter="all">Show All</button>
			<button class="filter yellow" data-filter=".yellow">Yellow</button>
			<button class="filter blue" data-filter=".blue">Blue</button>
			<button class="filter green" data-filter=".green">Green</button>
	</div>
	<div id="portfolio-container">
		<!-- portfolio-items-->
		<!-- REQUIRED class="portfolio-item" -->
		<figure class="portfolio-item green placeholder-275">
			<img src="http://placehold.it/225x225"></img>
			<figcaption>Toffee tiramisu jelly donut wafer</figcaption>
		</figure>
		<figure class="portfolio-item blue placeholder-275">
			<img src="http://placehold.it/225x225"></img>
			<figcaption>Toffee tiramisu jelly donut wafer</figcaption>
		</figure>
		<figure class="portfolio-item yellow placeholder-275">
			<img src="http://placehold.it/225x225"></img>
			<figcaption>Toffee tiramisu jelly donut wafer</figcaption>
		</figure>
		<figure class="portfolio-item green placeholder-275">
			<img src="http://placehold.it/225x225"></img>
			<figcaption>Toffee tiramisu jelly donut wafer</figcaption>
		</figure>
		<figure class="portfolio-item blue placeholder-275">
			<img src="http://placehold.it/225x225"></img>
			<figcaption>Toffee tiramisu jelly donut wafer</figcaption>
		</figure>
		<figure class="portfolio-item yellow placeholder-275">
			<img src="http://placehold.it/225x225"></img>
			<figcaption>Toffee tiramisu jelly donut wafer</figcaption>
		</figure>
		<figure class="portfolio-item green placeholder-275">
			<img src="http://placehold.it/225x225"></img>
			<figcaption>Toffee tiramisu jelly donut wafer</figcaption>
		</figure><figure class="portfolio-item blue placeholder-275">
			<img src="http://placehold.it/225x225"></img>
			<figcaption>Toffee tiramisu jelly donut wafer</figcaption>
		</figure>
		<figure class="portfolio-item yellow placeholder-275">
			<img src="http://placehold.it/225x225"></img>
			<figcaption>Toffee tiramisu jelly donut wafer</figcaption>
		</figure>
		<figure class="portfolio-item green placeholder-275">
			<img src="http://placehold.it/225x225"></img>
			<figcaption>Toffee tiramisu jelly donut wafer</figcaption>
		</figure>
		<figure class="portfolio-item blue placeholder-275">
			<img src="http://placehold.it/225x225"></img>
			<figcaption>Toffee tiramisu jelly donut wafer</figcaption>
		</figure>
		<figure class="portfolio-item yellow placeholder-275">
			<img src="http://placehold.it/225x225"></img>
			<figcaption>Toffee tiramisu jelly donut wafer</figcaption>
		</figure>

	</div>


	<!-- init mixitup -->
	<script src="<?php echo theme_url('js/jquery.mixitup.js'); ?>"></script>
	<script type="text/javascript">
	$(function(){
		$("#portfolio-container").mixItUp({
			load: {
				filter: "all"
			},
			selectors: {
				target: ".portfolio-item"
			}
		});
		
	});
	</script>
<?php theme_include('footer'); ?>