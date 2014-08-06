<?php theme_include('header'); ?>
	<link href="<?php echo theme_url('css/page-about.css'); ?>"  rel="stylesheet" media="screen">

	<!-- Source credit: http://tympanus.net/codrops/2013/07/18/on-scroll-effect-layout/ -->
	<div id="so-scroller" class="so-scroller">
				<section class="so-section">
					<article class="so-side so-side-left">
						<h2>About You</h2>
						<p>Does your bio quickly betray your expertise? Is your work accessible on the landing page? Don't bounce browers before they've seen what you can do.</p>
					</article>
					<figure class="so-side so-side-right">
						<img src="http://placehold.it/720x480" alt="img01">
					</figure>
				</section>
				<section class="so-section">
					<figure class="so-side so-side-left">
						<img src="http://placehold.it/720x480" alt="img01">
					</figure>
					<article class="so-side so-side-right">
						<h2>Show off beautiful samples</h2>
						<p>Once an item enters the viewport, the element scrolls in gently. Responsive too - resize this page. Credit to <a href="http://tympanus.net/codrops/2013/07/18/on-scroll-effect-layout/">Mary Lou</a> for supplied styles.</p>
					</article>
				</section>
				<section class="so-section">
					<article class="so-side so-side-left">
						<h2>A brief aside</h2>
						<p>“Class is a legal fiction,” says Sartre. Therefore, the premise of objectivism implies that narrativity is used to reinforce capitalism.</p>
					</article>
					<figure class="so-side so-side-right">
						<img src="http://placehold.it/720x480" alt="img01">
					</figure>
				</section>
				<section class="so-section">
					<figure class="so-side so-side-left">
						<img src="http://placehold.it/720x480" alt="img01">
					</figure>
					<article class="so-side so-side-right">
						<h2>A brief aside</h2>
						<p>The characteristic theme of the works of Eco is not, in fact, structuralism, but prestructuralism. However, Derrida uses the term ‘objectivism’ to denote a self-falsifying whole.</p>
					</article>
				</section>
				<section class="so-section">
					<article class="so-side so-side-left">
						<h2>A brief aside</h2>
						<p> The closing/opening distinction prevalent in Gibson’s All Tomorrow’s Parties emerges again in Virtual Light. Therefore, the subject is contextualised into a neocapitalist materialism that includes sexuality as a reality.</p>
					</article>
					<figure class="so-side so-side-right">
						<img src="http://placehold.it/720x480" alt="img01">
					</figure>
				</section>
				<section class="so-section">
					<figure class="so-side so-side-left">
						<img src="http://placehold.it/720x480" alt="img01">
					</figure>
					<article class="so-side so-side-right">
						<h2>A brief aside</h2>
						<p>Lacan suggests the use of semiotic nationalism to challenge capitalism. Thus, Lyotard uses the term ‘constructivist postcapitalist theory’ to denote the difference between class and culture.</p>
					</article>
				</section>
	</div>
<script src="<?php echo theme_url('js/classie.min.js'); ?>"></script>
<script src="<?php echo theme_url('js/scroller.min.js'); ?>"></script>
<script>
	new Scroller( document.getElementById( 'so-scroller' ) );
</script>
<?php theme_include('footer'); ?>