<?php /*
	Template Name: Donate
*/ 
 ?>
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
<main class="container donateContainer">
	<section id="makeDonation" class="makeDonation">
		<div class="content">
			<div class="wrapper">
				<h2><span class="underline">Make a Donation</span></h2>
				<h3><a href="" class="button">Help us tell their story</a></h3>
				<p><?php the_field('donation_text'); ?></p>
				<a href="#" class="arrow"><i class="fa fa-arrow-circle-o-down fa-3x"></i></a>
			</div>
		</div>
	</section>
	<section id="donationsPhoto" class="donationsPhoto" style="background-image: url('<?php the_field('donate_parallax_photo'); ?>'); ">
		
	</section>
	<section id="contribute" class="contribute">
		<div class="wrapper">
			<section class="container contributeContainer">
				<h2><span class="underline">Who can contribute?</span></h2>
				<section class="contributeInnerContainer">
					<div class="typesOfContributersTitle">
						<p>Donations to the project can be made within the following categories:</p>
					</div>
					<div class="typesOfContributors">
						<article class="contributer contributerFriend">
							<div class="contributerTop">
								<p class="contributerTitle"><?php the_field('friend_title'); ?></p>
							</div>
							<div class="contributerBottom">
								<p class="contributerContent"><?php the_field('friend_sub_fields'); ?></p>
							</div>
						</article>
						<article class="contributer contributerGuarantor">
							<div class="contributerTop">
								<p class="contributerTitle"><?php the_field('guarantor_title'); ?></p>
							</div>
							<div class="contributerBottom">
								<p class="contributerContent"><?php the_field('guarantor_sub_fields'); ?></p>
							</div>
						</article>
						<article class="contributer contributerGuardian">
							<div class="contributerTop">
								<p class="contributerTitle"><?php the_field('guardian_title'); ?></p>
							</div>
							<div class="contributerBottom">
								<p class="contributerContent"><?php the_field('guardian_sub_fields'); ?></p>
							</div>
						</article>
						<article class="contributer contributerBenefactor">
							<div class="contributerTop">
								<p class="contributerTitle"><?php the_field('benefactor_title'); ?></p>
							</div>
							<div class="contributerBottom">
								<p class="contributerContent"><?php the_field('benefactor_sub_fields'); ?></p>
							</div>
						</article>
					</div>
				</section>
				<h3><a href="" class="button">Contribute now</a></h3>
			</section>
		</div>
	</section>
	<section id="supportersPhoto" class="supportersPhoto" style="background-image: url('<?php the_field('supporters_parallax_photo'); ?>'); ">
		
	</section>
	<section id="supporters" class="supporters">
		<div class="wrapper">
			<h2><span class="underline">Our Supporters</span></h2>
			<section class="container supportersContainer">
					<div class="supportersTitle">
						<p>Our Supporters and Donors</p>
					</div>
					<div class="supportersList">
						<?php while( has_sub_field('supporters') ): ?>
						   	<p><?php the_sub_field('supporters_name'); ?></p>
						<?php endwhile; ?>
						<p>Some Dude</p>
						<p>Some Dude</p>
						<p>Some Dude</p>
						<p>Some Dufousede</p>
						<p>Some Dude</p>
						<p>Albieme Dude</p>
						<p>Some Dude</p>
						<p>Some Dude</p>
						<p>Some Dumode</p>
						<p>Some Dude</p>
						<p>Some Dudeette</p>
						<p>Some Dude</p>
						<p>Some Dude</p>
						<p>Some Dude</p>
						<p>Some Dude</p>
						<p>Larry Recrtor</p>
						<p>Larry Recrtor</p>
						<p>Larry Recrtor</p>
						<p>Larry Recrtor</p>
						<p>Larry Recrtor</p>
						<p>Some Dude</p>
						<p>Some Dude</p>
						<p>Some Dude</p>
						<p>Some Dufousede</p>
						<p>Some Dude</p>
						<p>Albieme Dude</p>
						<p>Some Dude</p>
						<p>Some Dude</p>
						<p>Some Dumode</p>
						<p>Some Dude</p>
						<p>Some Dudeette</p>
						<p>Some Dude</p>
						<p>Some Dude</p>
						<p>Some Dude</p>
						<p>Some Dufousede</p>
						<p>Some Dude</p>
						<p>Albieme Dude</p>
						<p>Some Dude</p>
						<p>Some Dude</p>
						<p>Some Dumode</p>
						<p>Some Dude</p>
						<p>Some Dudeette</p>
						<p>Some Dude</p>
						<p>Some Dude</p>
						<p>Some Dude</p>
						<p>Some Dude</p>
						<p>Larry Recrtor</p>
						<p>Larry Recrtor</p>
						<p>Larry Recrtor</p>
						<p>Larry Recrtor</p>
						<p>Larry Recrtor</p>
						<p>Some Dude</p>
						<p>Some Dude</p>
						<p>Larry Recrtor</p>
						<p>Larry Recrtor</p>
						<p>Larry Recrtor</p>
						<p>Some Dude</p>
						<p>Some Dude</p>
						<p>Some Dude</p>
						<p>Larry Recrtor</p>
						<p>Larry Recrtor</p>
						<p>Larry Recrtor</p>
						<p>Larry Recrtor</p>
						<p>Some Dude</p>
						<p>Some Dude</p>
						<p>Some Dude</p>
						<p>Some Dufousede</p>
						<p>Some Dude</p>
						<p>Albieme Dude</p>
						<p>Some Dude</p>
						<p>Some Dude</p>
						<p>Some Dumode</p>
						<p>Some Dude</p>
						<p>Some Dudeette</p>
						<p>Some Dude</p>
						<p>Some Dude</p>
						<p>Some Dude</p>
						<p>Some Dude</p>
						<p>Larry Recrtor</p>
						<p>Larry Recrtor</p>
						<p>Larry Recrtor</p>

					</div>
			</section>
			<h3><a href="" class="button">Become a supporter</a></h3>
		</div>
	</section>
</main>
<?php get_footer(); ?>