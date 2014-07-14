<?php theme_include('header'); ?>
	
	<!-- Source credit: http://tympanus.net/codrops/2013/07/18/on-scroll-effect-layout/ -->
	<div id="so-scroller" class="so-scroller">
				<section class="so-section">
					<article class="so-side so-side-left">
						<h2>Lemon drops</h2>
						<p>Fruitcake toffee jujubes. Topping biscuit sesame snaps jelly caramels jujubes tiramisu fruitcake. Marzipan tart lemon drops chocolate sesame snaps jelly beans.</p>
					</article>
					<figure class="so-side so-side-right">
						<img src="<?php echo theme_url('img/1.png'); ?>" alt="img01">
					</figure>
				</section>
				<section class="so-section">
					<figure class="so-side so-side-left">
						<img src="<?php echo theme_url('img/2.png'); ?>" alt="img01">
					</figure>
					<article class="so-side so-side-right">
						<h2>Plum caramels</h2>
						<p>Lollipop powder danish sugar plum caramels liquorice sweet cookie. Gummi bears caramels gummi bears candy canes cheesecake sweet roll icing dragée. Gummies jelly-o tart. Cheesecake unerdwear.com candy canes apple pie halvah chocolate tiramisu.</p>
					</article>
				</section>
				<section class="so-section">
					<article class="so-side so-side-left">
						<h2>Marzipan gingerbread</h2>
						<p>Soufflé bonbon jelly cotton candy liquorice dessert jelly bear claw candy canes. Pudding halvah bonbon marzipan powder. Marzipan gingerbread sweet jelly.</p>
					</article>
					<figure class="so-side so-side-right">
						<img src="<?php echo theme_url('img/3.png'); ?>" alt="img01">
					</figure>
				</section>
				<section class="so-section">
					<figure class="so-side so-side-left">
						<img src="<?php echo theme_url('img/4.png'); ?>" alt="img01">
					</figure>
					<article class="so-side so-side-right">
						<h2>Carrot cake</h2>
						<p>Sesame snaps sweet wafer danish. Chupa chups carrot cake icing donut halvah bonbon. Chocolate cake candy marshmallow pudding dessert marzipan jujubes sugar plum.</p>
					</article>
				</section>
				<section class="so-section">
					<article class="so-side so-side-left">
						<h2>Pudding lollipop</h2>
						<p>Chupa chups pudding lollipop gummi bears gummies cupcake pie. Cookie cotton candy caramels. Oat cake dessert applicake. Sweet roll tiramisu sweet roll sweet roll.</p>
					</article>
					<figure class="so-side so-side-right">
						<img src="<?php echo theme_url('img/5.png'); ?>" alt="img01">
					</figure>
				</section>
				<section class="so-section">
					<figure class="so-side so-side-left">
						<img src="<?php echo theme_url('img/6.png'); ?>" alt="img01">
					</figure>
					<article class="so-side so-side-right">
						<h2>Soufflé bonbon</h2>
						<p>Cake cotton candy lollipop. Cake croissant cheesecake candy sugar plum icing apple pie wafer. Pie sugar plum tiramisu tiramisu pie fruitcake candy icing. Candy icing gummies gummies cheesecake brownie lemon drops chocolate gingerbread.</p>
					</article>
				</section>
	</div>
<script src="<?php echo theme_url('js/classie.js'); ?>"></script>
<script src="<?php echo theme_url('js/Scroller.js'); ?>"></script>
<script>
	new Scroller( document.getElementById( 'so-scroller' ) );
</script>
<?php theme_include('footer'); ?>