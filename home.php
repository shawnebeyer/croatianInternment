<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
<header id="navContainer" class="navContainer fixedNavContainer">
	<div class="navLogo">
		<p>THE CROATIAN CANADIAN</p>
		<!-- <p><i class="fa fa-phone"></i> <span class="phone">647-290-8337</span></p> -->
		<p>INTERNMENT PROJECT</p>
	</div>
	<nav class="mainNav">
 		<?php wp_nav_menu( array(
       	'container' => false,
       	'theme_locations' => 'primary'
     	)); ?>
	</nav>
	<div class="navSocial">
 		<a href="#"><i class="fa fa-facebook"></i></a>
 		<a href="#"><i class="fa fa-envelope-o"></i></a>
 		<!-- <a href="#"><i class="fa fa-linkedin"></i></a> -->
	</div>
</header>
<main class="newsMain">
	<div class="wrapper">
		<h2><span class="underline">News and Media Releases</span></h2>
    	<div class="blogContent">
        	<?php get_template_part( 'loop', 'index' ); ?>
    	</div> <!--/.content -->
    	<!-- <?php get_sidebar(); ?> -->
	</div>
</main> <!-- /.main -->

<?php get_footer(); ?>