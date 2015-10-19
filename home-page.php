<?php /*
	Template Name: Home
*/ 
 ?>
<?php get_header(); ?>
<main class="container homeContainer">
	<section id="homeMain" class="homeMain">
		<header class="homeHeader" style="background-image: url('<?php the_field('logo'); ?>'); background-color: #0A0F1F">
		</header>
		<div class="homeMainContent" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php the_field('background_picture'); ?>'); ">
			<div class="wrapper">
				<article class="homeQuote">
					<p class="quote"><?php the_field('quote'); ?></p>
				</article>
			</div>
		</div>
	</section>
	<header id="navContainer" class="navContainer">
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
		<div class="headerLine">
			
		</div>
	</header>
	<section id="pioneers" class="pioneers">
		<div class="content">
			<div class="wrapper">
				<h2><span class="underline">An Injustice to our Pioneers</span></h2>
				<article class="pioneersText">
					<p><?php the_field('pioneers_main_text'); ?></p>
				</article>
				<h3><span class="underline">How could this have happened?</span></h3>
				<article class="pioneerUncover">
					<p><?php the_field('pioneers_uncover'); ?></p>
				</article>
				<a href="#"><i class="fa fa-arrow-circle-o-down fa-3x"></i></a>
			</div>
		</div>
	</section>
	<section id="pioneerPhoto" class="pioneerPhoto" style="background-image: url('<?php the_field('parallax_picture'); ?>'); ">	
	</section>
	<section id="important" class="important">
		<div class="wrapper">
			<h2><span class="underline">Why is this Project Important?</span></h2>
			<article class="importantText">
				<p><?php the_field('why_is_this_project_important'); ?></p>
			</article>
			<h3><a href="" class="button">Help us tell their story</a></h3>
		</div>
	</section>
</main>

<?php get_footer(); ?>