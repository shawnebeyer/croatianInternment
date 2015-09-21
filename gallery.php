<?php /*
	Template Name: Gallery
*/ 
 ?>
  <?php get_header(); ?>
 <header id="navContainer" class="navContainer fixedNavContainer">
 	<div class="navLogo">
  		<p><i class="fa fa-phone"></i> 416 555 1212</p>
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

 <?php get_footer(); ?>