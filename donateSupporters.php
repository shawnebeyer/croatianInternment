<?php /*
	Template Name: Donate
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
<main class="container donateContainer">
	<section id="makeDonation" class="makeDonation">
		<div class="wrapper">
			<h2>Make a Donation</h2>
			<h3><a href="" class="button">Help us tell their story</a></h3>
			<p><?php the_field('donation_text'); ?></p>
		</div>
	</section>
	<section id="donationsPhoto" class="donationsPhoto" style="background-image: url('<?php the_field('donate_parallax_photo'); ?>'); ">
		
	</section>
	<section id="contribute" class="contribute">
		<div class="wrapper">
			<section class="container contributeContainer">
				<h2>Who can contribute?</h2>
				<p>Donations to the project can be made within the following categories:</p>
				<div class="typesOfContributors">
					<p><?php the_field('friend_title'); ?></p>
					<p><?php the_field('friend_sub_fields'); ?></p>
					<p><?php the_field('guarantor_title'); ?></p>
					<p><?php the_field('guarantor_sub_fields'); ?></p>
					<p><?php the_field('guardian_title'); ?></p>
					<p><?php the_field('guardian_sub_fields'); ?></p>
					<p><?php the_field('benefactor_title'); ?></p>
					<p><?php the_field('benefactor_sub_fields'); ?></p>
				</div>
			</section>
		</div>
	</section>
	<section id="supportersPhoto" class="supportersPhoto" style="background-image: url('<?php the_field('supporters_parallax_photo'); ?>'); ">
		
	</section>
	<section id="supporters" class="supporters">
		<div class="wrapper">
			<h2>Our Supporters</h2>
			<section class="container supportersContainer">
				<?php while( has_sub_field('supporters') ): ?>
				    <p><?php the_sub_field('supporters_name'); ?></p>
				<?php endwhile; ?>
			</section>
			<h3><a href="" class="button">Support</a></h3>
		</div>
	</section>
</main>
<?php get_footer(); ?>