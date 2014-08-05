<?php theme_include('header'); ?>


<h1>404 </h1>
<h1>The page you requested doesn't exist</h2>
<h1>Search my blog posts for help:</h2>
<form id="search" method="post" action="<?php echo search_url(); ?>" class="search"><input type="search" id="term" name="term" placeholder="Type your search..." value="<?php echo search_term(); ?>">
      				</form>
<?php theme_include('footer'); ?>