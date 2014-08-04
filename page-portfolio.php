<?php theme_include('header'); ?>
	<link href="<?php echo theme_url('css/page-portfolio.css'); ?>"  rel="stylesheet" media="screen">
	<script src="<?php echo theme_url('js/jquery.magnific.js'); ?>"></script>




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
		<figure class="portfolio-item green ">
			<img src="http://placehold.it/225x225"></img>
			<figcaption>
			<h2>jelly donut</h2>
			<p>Toffee tiramisu</p> <a href="#"><button href="http://placehold.it/500x500" caption="Lorem ipsum">Full</button></a></figcaption>
		</figure>
		<figure class="portfolio-item blue ">
			<img src="http://placehold.it/225x225"></img>
			<figcaption><h2>jelly donut</h2>
			
			
			
			<p>Toffee tiramisu </p><a href="#"><button  href="http://placehold.it/500x500" caption="A caption">Full</button></a></figcaption>
		</figure>
		<figure class="portfolio-item yellow ">
			<img src="http://placehold.it/225x225"></img>
			<figcaption><h2>jelly donut</h2>
			
			
			
			<p>Toffee tiramisu </p><a href="#"><button>Full</button></a></figcaption>
		</figure>
		<figure class="portfolio-item green ">
			<img src="http://placehold.it/225x225"></img>
			<figcaption><h2>jelly donut</h2>
			
			
			
			<p>Toffee tiramisu </p><a href="#"><button>Full</button></a></figcaption>
		</figure>
		<figure class="portfolio-item blue ">
			<img src="http://placehold.it/225x225"></img>
			<figcaption><h2>jelly donut</h2>
			
			
			
			<p>Toffee tiramisu </p><a href="#"><button>Full</button></a></figcaption>
		</figure>
		<figure class="portfolio-item yellow ">
			<img src="http://placehold.it/225x225"></img>
			<figcaption><h2>jelly donut</h2>
			
			
			
			<p>Toffee tiramisu </p><a href="#"><button>Full</button></a></figcaption>
		</figure>
		<figure class="portfolio-item green ">
			<img src="http://placehold.it/225x225"></img>
			<figcaption><h2>jelly donut</h2>
			
			
			
			<p>Toffee tiramisu </p><a href="#"><button>Full</button></a></figcaption>
		</figure><figure class="portfolio-item blue ">
			<img src="http://placehold.it/225x225"></img>
			<figcaption><h2>jelly donut</h2>
			
			
			
			<p>Toffee tiramisu </p><a href="#"><button>Full</button></a></figcaption>
		</figure>
		<figure class="portfolio-item yellow ">
			<img src="http://placehold.it/225x225"></img>
			<figcaption><h2>jelly donut</h2>
			
			
			
			<p>Toffee tiramisu </p><a href="#"><button>Full</button></a></figcaption>
		</figure>
		<figure class="portfolio-item green ">
			<img src="http://placehold.it/225x225"></img>
			<figcaption><h2>jelly donut</h2>
			
			
			
			<p>Toffee tiramisu </p><a href="#"><button>Full</button></a></figcaption>
		</figure>
		<figure class="portfolio-item blue ">
			<img src="http://placehold.it/225x225"></img>
			<figcaption><h2>jelly donut</h2>
			
			
			
			<p>Toffee tiramisu </p><a href="#"><button>Full</button></a></figcaption>
		</figure>
		<figure class="portfolio-item yellow ">
			<img src="http://placehold.it/225x225"></img>
			<figcaption><h2>jelly donut</h2>
			
			
			
			<p>Toffee tiramisu </p><a href="#"><button>Full</button></a></figcaption>
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
	$(document).ready(function(){
		$("#portfolio-container").magnificPopup({
			delegate: "figure button",
			type: "image",
			gallery: {
				enabled: true
			},
			image: {
				// http://stackoverflow.com/questions/21281263/custom-title-for-magnific-popup
				titleSrc: function(item) {
					return item.el.parents('figcaption').find('h2').html() + item.el.parents('figcaption').find('p').html()
				}
			}
		});
	});
	</script>
<?php theme_include('footer'); ?>