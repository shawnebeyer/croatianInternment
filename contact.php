<?php /*
	Template Name: Contact
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
 <main class="container contactContainer">
 	<section class="contactPhoto">
 		<?php $contactPicture = get_field('contact_picture'); ?>
 		<img class="contactPicture" src="<?php echo $contactPicture['sizes']['large'] ?>">
 	</section>
 	<section class="contactTitle">
 		<div class="wrapper">
 			<h2>Contact us.</h2>
 		</div>
 	</section>
 	<section class="contactContent">
 		<div class="wrapper">
 			<p><?php the_field('contact_title'); ?></p>
 			<p><?php the_field('contact_text'); ?></p>
 		</div>
 	</section>
 	<h3><a href="" class="button">Support</a></h3>
 </main>

 <?php get_footer(); ?>